<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ResetAdminPassword;
use Carbon\Carbon;
use App\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminAuth extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin()
    {
        $rememberme = request('rememberme') == 1 ? true : false;
        if (admin()->attempt(['email' => request('email'), 'password' => request('password')], $rememberme)) {
            return redirect('admin');
        } else {
            session()->flash('error', trans('admin.incorrect_information_login'));
            return redirect('admin/login');
        }
    }

    public function Logout()
    {
        admin()->logout();
        return redirect('admin/login');
    }

    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

    public function forgot_password_post()
    {
        $admin = Admin::where('email', request('email'))->first();
        // dd($admin);
        if (!empty($admin)) {
            $token = app('auth.password.broker')->createToken($admin);
            DB::table('password_resets')->insert([
                'email' => $admin->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
            // Mail::to($admin->email)->send(new ResetAdminPassword(['data' => $admin, 'token' => $token]));
            session()->flash('success', trans('admin.the_link_reset_sent'));
            return new ResetAdminPassword(['data' => $admin, 'token' => $token]);
        }
        return back();
    }

    public function reset_password($token)
    {
        $checkToken = DB::table('password_resets')
            ->where('token', $token)
            ->where('created_at', '>',  Carbon::now()->subHours(3))->first();
        if (!empty($checkToken)) {
            return view('admin.reset_password', ['data' => $checkToken]);
        } else {
            return redirect(aurl('forgot/password'));
        }
    }

    public function reset_password_final($token)
    {
        $this->validate(request(), [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ], [], ['password' => 'Password', 'password_confirmation' => 'Password Confiration']);

        $checkToken = DB::table('password_resets')
            ->where('token', $token)
            ->where('created_at', '>',  Carbon::now()->subHours(3))->first();
        if (!empty($checkToken)) {
            $admin = Admin::where('email', $checkToken->email)->update([
                'email' => $checkToken->email,
                'password' => bcrypt(request('password'))
            ]);
            DB::table('password_resets')->where('email', request('email'))->delete();
            $this->doLogin();
            return redirect(aurl());
        } else {
            return redirect(aurl('forgot/password'));
        }
    }
}
