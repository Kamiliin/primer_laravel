<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;



class PostController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    
    public function index(User $user){

        return view('dashboard', [
            'user'=> $user

        ]);

        //dd(auth() -> user());
    }


}
