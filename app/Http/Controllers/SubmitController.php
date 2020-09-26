<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function show(Request $request)
    {
        return view('submit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        return redirect()->route('submit')->with('message', 'Your submission was successful.');
    }
}
