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

        if (!is_numeric($width) || !is_numeric($height) || $width > 1500 || $height > 1500) {
            abort(422);
        }

        // This can be improved
        if ($request->image && (int) $request->image < 6) {
            $name = "image-{$request->image}.jpg";
        } else {
            $random = rand(1, 5);
            $name = "image-{$random}.jpg";
        }

        $path = "images/{$width}x{$height}/";

        if (!Storage::exists($path . $name)) {
            Storage::makeDirectory($path);

            Image::make(storage_path('app/images/') . $name)
                ->fit($width, $height)
                ->save(storage_path('app/') . $path . $name);
        }

        return response()->file(storage_path('app/') . $path . $name);
    }
}
