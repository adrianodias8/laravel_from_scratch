<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::latest()->get();
        return view('assignments.index',['assignments' => $assignments]);
    }

    public function show(Assignment $assignment)
    {
        return view('assignments.show',['assignment' => $assignment]);
    }

    public function create() {
        return view('assignments.create');
    }

    public function store() {

        request()->validate([
            'body' => 'required'
        ]);

        Assignment::create([
           'body' => request('body'),
            'due_date' => request('due_date'),
        ]);

        return redirect('/assignments');

    }

    public function edit(Assignment $assignment)
    {
        return view('assignments.edit', ['assignment' => $assignment]);
    }

    public function update(Assignment $assignment) {

        request()->validate([
            'body' => 'required'
        ]);

        $assignment->complete([
            'body' => request('body'),
            'due_date' => request('due_date'),
        ],request('completed_at'));

        return redirect("/assignments/{$assignment->id}");

    }
}
