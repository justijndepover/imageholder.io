<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request)
    {
        $submissions = Submission::query()
            ->where('accepted', '=', false)
            ->get();

        return view('submissions', [
            'submissions' => $submissions,
        ]);
    }

    public function store(Request $request)
    {
        if ($request->has('accept')) {
            $submission = Submission::findOrFail($request->get('accept'));
            $submission->accepted = true;
            $submission->save();

            return redirect()->route('submissions')->with('message', $submission->name . '\'s submission was accepted.');
        } else {
            $submission = Submission::findOrFail($request->get('reject'));
            $submission->delete();

            return redirect()->route('submissions')->with('error', $submission->name . '\'s submission was rejected.');
        }
    }
}
