<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin_login_table extends Controller
{
    function index()
    {
        return view('login', [
           'login' => \App\Models\admin_login_table::all()->toArray()
        ]) ;
    }
}
