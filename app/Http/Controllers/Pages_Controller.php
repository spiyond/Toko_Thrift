<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages_Controller extends Controller
{
    public function login() 
        {    
        return view('login');
        }
        public function register() 
        {    
        return view('register');
        }
        public function dashboard() 
        {    
        return view('dashboard');
        }
}
