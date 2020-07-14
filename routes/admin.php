<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Config::set('auth.defines', 'admin'); // change default guard from app.config

    // admin login
    Route::get('login', 'AdminAuth@login');
    Route::post('login', 'AdminAuth@doLogin');
    Route::get('forgot/password', 'AdminAuth@forgot_password');
    Route::post('forgot/password', 'AdminAuth@forgot_password_post');
    Route::get('reset/password/{token}', 'AdminAuth@reset_password');
    Route::post('reset/password/{token}', 'AdminAuth@reset_password_final');

    // authunticated admin
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::delete('admin/destroy/all', 'AdminController@multi_delete'); // delete all admin records
        Route::delete('users/destroy/all', 'UserController@multi_delete'); // delete all user records
        Route::delete('countries/destroy/all', 'CountryController@multi_delete'); // delete all user records
        Route::delete('cities/destroy/all', 'CityController@multi_delete'); // delete all user records

        Route::resource('admin', 'AdminController');
        Route::resource('users', 'UserController');
        Route::resource('countries', 'CountryController');
        Route::resource('cities', 'CityController');

        Route::get('/', function () {
            return view('admin.home');
        });
        Route::any('logout', 'AdminAuth@Logout');
        Route::get('settings', 'Settings@settings');
        Route::post('settings', 'Settings@settings_save');
    });


    // language
    Route::get('lang/{lag}', function ($lang) {
        session()->has('lang') ? session()->forget('lang') : '';
        $lang === 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return back();
    });
});
