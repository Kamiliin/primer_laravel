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

    public function store (Request $request)
    {
        //dd($request);

        //validar
        $this->validate($request,[
            'name'=>'required|max:30',
            'username'=>'required|unique:user|min:3|max:20',
            'email'=>'required|unique:user|email|max:30',
            'password'=>'required|confirmed|min:6',
           
        ]);


        dd('creando usuario');


    }
}
