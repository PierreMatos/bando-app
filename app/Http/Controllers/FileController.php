<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function file($cat, $filename)
    {
    //   TODO count de downloads
        return response()->download(storage_path('app/assets/'.$cat.'/'.$filename),null,[],null);

        return Storage::disk('private')->get($filename);


      
    }
}
