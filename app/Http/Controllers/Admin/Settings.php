<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Setting;

class Settings extends Controller
{
    public function settings()
    {
        return view('admin.settings', ['title' => trans('admin.settings')]);
    }

    public function settings_save()
    {
        // dd(request());
        $data = request()->except(['_token', '_method']);
        Setting::orderBy('id', 'desc')->update($data);
        session()->flash('success', trans('admin.record_updated'));
        return redirect(aurl('settings'));
    }
}
