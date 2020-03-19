<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function helloGet()
    {
        $name = request('name');
        return view('hello',[
            'name' => $name,
        ]);
    }

    function helloWildcard($wildcard)
    {
        return view('hello',[
            'name' => $wildcard,
        ]);
    }
}
