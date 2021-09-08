<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('base');
    }
    public function registrationform(){
        return view('register');
    }
    
    public function loginForm(){
        return view('login');
    }
}
