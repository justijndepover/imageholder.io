<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Storage;

class SubmitController extends Controller
{
    public function show(Request $request)
    {
        return view('submit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $submission = new Submission($data);

        $file = request()->file('image');
        $filename = $file->getClientOriginalName();
        $file->move(Storage::disk('public')->path('submissions'), $filename);

        $submission->image = $filename;
        $submission->save();

        return redirect()->route('submit')->with('message', 'Your submission was successful.');
    }
}
