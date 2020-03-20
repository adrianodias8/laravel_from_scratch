<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\Tag;
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
        return view('assignments.create',[
            'tags' => Tag::all()
        ]);
    }

    public function store() {
        request()->validate([
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);

        $assignment = new Assignment([
           'body' => request('body'),
           'due_date' => request('due_date'),
        ]);
        // Fake user.
        $assignment->user_id = mt_rand(1,20);
        $assignment->save();

        $assignment->tags()->attach(request('tags'));

        return redirect(route('assignments.index'));

    }

    public function edit(Assignment $assignment)
    {
        return view('assignments.edit', [
            'assignment' => $assignment,
            'tags' => Tag::all()
        ]);
    }

    public function update(Assignment $assignment) {

        request()->validate([
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);

        $assignment->complete([
            'body' => request('body'),
            'due_date' => request('due_date'),
        ], (bool)request('completed_at'));

        $assignment->tags()->attach(request('tags'));

        return redirect(route('assignments.show', $assignment));

    }
}
