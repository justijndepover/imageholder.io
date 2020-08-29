<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('all');
    }
}
