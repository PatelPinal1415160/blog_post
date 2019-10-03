<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreFileController extends Controller
{
    public function storeFile($file, $destination_dir)
    {

        $file_name = uniqid() . '_' . $destination_dir . '_' . time() . '.' . $file->getClientOriginalExtension();
        \Storage::putFileAs('public/' . $destination_dir, $file, $file_name);

        return $file_name;

    }
}