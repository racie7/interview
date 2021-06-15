<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        // Get the auth user
        $user = $request->user();
        // Create a new exam entry
        try {
            $exam = Question::query()->create([

            ]);

        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Sorry something went wrong. Please try again.')
                ->withInput($request->all());
        }

        return redirect()->back()->with('success', 'Exam has been recorded successfully.');
    }
}

