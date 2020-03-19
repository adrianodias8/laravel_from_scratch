<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index(){
        return view('assignments.index',['assignments' => Assignment::all()]);
    }

    public function show($id)
    {
        return view('assignments.show',['assignment' =>  Assignment::find($id)]);
    }
}
