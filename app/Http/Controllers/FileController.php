<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function file($path)
    {
      

        $contents = Storage::get('rp.JPG');
        Storage::setVisibility('/uploads/pao.PNG', 'private');

        // $visibility = Storage::getVisibility('/uploads/acacio.jpg');

        // $visibility = Storage::get('/uploads/acacio.PNG');

        // $storagePath = storage_path('app/images/users/' . $user_id . '/' . $slug);
        return  Storage::get($path);
        // return Storage::get('path/to/phpunit.xml');
    }
}
