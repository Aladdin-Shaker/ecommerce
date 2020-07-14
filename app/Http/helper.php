<?php

use GuzzleHttp\Psr7\Request;

if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return url('admin/' . $url);
    }
}

if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('lang')) {
    function lang()
    {
        if (session('lang')) {
            return session('lang');
        } else {
            return setting()->main_lang;
        }
    }
}

if (!function_exists('direction')) {
    function direction()
    {
        if (session()->has('lang')) {
            if (session('lang') == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }
        } else {
            return 'ltr';
        }
    }
}

if (!function_exists('datatable_lang')) {
    function datatable_lang()
    {
        return [
            "sProcessing" => trans('admin.sProcessing'),
            "sLengthMenu" => trans('admin.sLengthMenu'),
            "sZeroRecords" => trans('admin.sZeroRecords'),
            "sEmptyTable" => trans('admin.sEmptyTable'),
            "sInfo" => trans('admin.sInfo'),
            "sInfoEmpty" => trans('admin.sInfoEmpty'),
            "sInfoFiltered" =>  trans('admin.sInfoFiltered'),
            "sInfoPostFix" => trans('admin.sInfoPostFix'),
            "sSearch" => trans('admin.sSearch'),
            "sUrl" => trans('admin.sUrl'),
            "sInfoThousands" => trans('admin.sInfoThousands'),
            "sLoadingRecords" => trans('admin.sLoadingRecords'),
            "oPaginate" => [
                "sFirst" => trans('admin.sFirst'),
                "sLast" => trans('admin.sLast'),
                "sNext" => trans('admin.sNext'),
                "sPrevious" => trans('admin.sPrevious')
            ],
            "oAria" => [
                "sSortAscending" => trans('admin.sSortAscending'),
                "sSortDescending" => trans('admin.sSortDescending')
            ]
        ];
    }
}

if (!function_exists('active_menu')) {
    function active_menu($link)
    {
        if (preg_match('/' . $link . '/i', request()->segment(2))) {
            return ['menu-open', 'display:block'];  // [0, 1]
        } else {
            return ['', ''];
        }
    }
}

if (!function_exists('setting')) {
    function setting()
    {
        return \App\Model\Setting::orderBy('id', 'desc')->first(); // call the last value of setings
    }
}

if (!function_exists('up')) {
    function up()
    {
        return new \App\Http\Controllers\Upload; // call the last value of setings
    }
}

////////////////// Validation helper functions ///////////////////

if (!function_exists('v_image')) {
    function v_image($ex = null)
    {
        if ($ex === null) {
            return 'image|mimes:png,jpg,jpeg,gif';
        } else {
            return 'image|mimes:' . $ex;
        }
    }
}
