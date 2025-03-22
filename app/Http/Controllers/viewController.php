<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function homepageView(){
        return view('homepage');
    }
}
