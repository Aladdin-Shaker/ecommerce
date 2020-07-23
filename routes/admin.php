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
        Route::delete('states/destroy/all', 'StateController@multi_delete'); // delete all user records
        Route::delete('trademarks/destroy/all', 'TrademarksController@multi_delete'); // delete all user records
        Route::delete('manufactures/destroy/all', 'ManufactureController@multi_delete'); // delete all user records
        Route::delete('shipping/destroy/all', 'ShippingController@multi_delete'); // delete all user records
        Route::delete('malls/destroy/all', 'MallController@multi_delete'); // delete all user records
        Route::delete('colors/destroy/all', 'ColorController@multi_delete'); // delete all user records
        Route::delete('sizes/destroy/all', 'SizeController@multi_delete'); // delete all user records
        Route::delete('weights/destroy/all', 'WeightController@multi_delete'); // delete all user records
        Route::delete('products/destroy/all', 'ProductController@multi_delete'); // delete all user records

        Route::resource('admin', 'AdminController');
        Route::resource('users', 'UserController');
        Route::resource('countries', 'CountryController');
        Route::resource('cities', 'CityController');
        Route::resource('states', 'StateController');
        Route::resource('departments', 'DepartmentController');
        Route::resource('trademarks', 'TrademarksController');
        Route::resource('manufactures', 'ManufactureController');
        Route::resource('shipping', 'ShippingController');
        Route::resource('malls', 'MallController');
        Route::resource('colors', 'ColorController');
        Route::resource('sizes', 'SizeController');
        Route::resource('weights', 'WeightController');
        Route::resource('products', 'ProductController')->except('show');

        // product search
        Route::post('products/search', 'ProductController@product_search');
        // upload product images
        Route::post('upload/image/{pid}', 'ProductController@upload_files'); // upload another files
        Route::post('update/image/{pid}', 'ProductController@update_main_photo'); // upload main photo
        // delete product images from Dropzone
        Route::post('delete/image', 'ProductController@delete_file'); // delete selected file
        Route::post('delete/product/image/{pid}', 'ProductController@delete_main_image'); // delete main photo
        // load size and weight according to department in the product
        Route::post('load/weight/size', 'ProductController@prepare_weight_size');
        // copy product data
        Route::post('products/copy/{pid}', 'ProductController@product_copy');


        Route::any('logout', 'AdminAuth@Logout');
        Route::get('settings', 'Settings@settings');
        Route::post('settings', 'Settings@settings_save');

        Route::get('/', function () {
            return view('admin.home');
        });
    });


    // language
    Route::get('lang/{lag}', function ($lang) {
        session()->has('lang') ? session()->forget('lang') : '';
        $lang === 'ar' ? session()->put('lang', 'ar') : session()->put('lang', 'en');
        return back();
    });
});
