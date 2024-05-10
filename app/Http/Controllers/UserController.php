<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Foundation\Validation\ValidatesRequests;






class UserController extends Controller
{
    //
   // use ValidatesRequests;

    public function Reset(){

      return view('Reset');
    }
    public function index(){

          return view('index');
        }
        public function register(){


      return view('register');





}
public function dashboard(){


    return view('dashboard');





}
public function user(){


    return view('user');





}
}


