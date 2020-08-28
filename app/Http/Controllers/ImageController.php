<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function __invoke($width, $height = null)
    {
        if (!$height) {
            $height = $width;
        }

        $image = collect(Storage::allFiles('/images'))->random();
        $cropped = Image::make(storage_path('app/') . $image)->fit($width, $height);
        // dd($cropped);

        return $cropped->response('jpeg');
    }
}
