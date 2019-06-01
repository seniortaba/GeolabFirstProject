<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function addBanner extends(Request $request){
        return('admin.banners.add_banners');
    }
}
