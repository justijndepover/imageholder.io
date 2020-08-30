<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function __invoke(Request $request, $width, $height = null)
    {
        $height = $height ?? $width;

        // This can be improved
        if ($request->image && (int) $request->image < 6) {
            $image = "images/image-{$request->image}.jpg";
        } else {
            $image = collect(Storage::allFiles('/images'))->random();
        }

        $cropped = Image::make(storage_path('app/') . $image)->fit($width, $height);
        $extension = ($request->extension && in_array($request->extension, ['png', 'jpeg', 'jpg'])) ? $request->extension : 'jpeg';

        return $cropped->response($extension);
    }
}
