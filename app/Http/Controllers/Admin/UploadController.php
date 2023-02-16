<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    // public function prepareUpload(Request $request, $field, $type = "image")
    // {
    //     Log::debug('Preparing file for upload');
    //     if ($type == "image") {
    //         $request->validate([
    //             $field  => 'required|image|mimes:png,jpg,gif,jpeg,bmp|max:2048'
    //         ]);
    //         $fileName = 'I_' . (microtime(true) * 10000) . '.' . $request->file($field)->extension();
    //         Log::debug('FileName Image : ' . $fileName);
    //     }

    //     return $fileName;
    // }

    // public function processUpload($input, $filename)
    // {
    //     Log::debug('Upload process called');
    //     try {
    //         $input->move(public_path('fileContent/'), $filename);
    //         Log::info('[UploadController] File saved to ' . public_path('fileContent/') . $filename);
    //         return 0;
    //     } catch(Exception $e) {
    //         Log::critical('[UploadController] An error has occured: ' . $e);
    //         return 1;
    //     }
    // }

}
