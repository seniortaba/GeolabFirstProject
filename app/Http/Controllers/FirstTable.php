<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstTable extends Controller
{
    function index()
    {
        return view('welcome', [
            'myFirstData' => \App\Models\FirstTable::all()->toArray()
        ]);
    }
}
