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
        public function register(Request $request){

          $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
          ]);

          $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Handle user registration success (e.g., redirect, login, etc.)
       // return redirect('/')->with('success', 'Registration successful!');

      return view('register');





}
}


