<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Upload extends Controller
{
    /*
        TWO WAY TO UPLOAD :
        1- single upload => upload the file without store it in the file model
        2- linked uploadp
    */

    // file, path, new_name, delete_file, upload_type

    public static function upload($data = [])
    {
        if (in_array('new_name', $data)) {
            $new_name = $data['new_name'] === null ? time() : $data['new_name'];
        }
        if (request()->hasFile($data['file']) && $data['upload_type'] == 'single') {
            in_array($data['delete_file'], $data) && !empty($data['delete_file']) ? Storage::delete($data['delete_file']) : '';
            return request()->file($data['file'])->store($data['path']);
        }
    }
}
