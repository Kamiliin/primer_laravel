<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
   public function index ()
    {
        return view('auth.register');
    }

    public function store ()
    {
        dd('Post...');
    }
}
