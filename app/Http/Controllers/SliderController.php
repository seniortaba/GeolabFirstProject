<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    function index()
    {
        return view('/slider', 'SliderController@index');
    }
}
