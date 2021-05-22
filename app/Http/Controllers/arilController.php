<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class arilController extends Controller
{
    
    public function home(){
        return view("home0221");
    }
    public function artikel(){
        return view("artikel0221");
    }
    public function contactus(){
        return view("contactus0221");
    }
}
    