<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function front_view(){

        return view('frontend');
    }
    public function profile_view(){

        return view('profile');
    }
    
}
