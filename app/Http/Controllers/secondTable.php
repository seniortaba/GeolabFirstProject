<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondTable extends Controller
{
    function index()
    {
        return view('gverdi', [
            'second' => \App\Models\secondTable::all()->toArray()
        ]);
    }
}
