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

    public function Reset()
    {

        return view('Reset');
    }
    public function indexForm()
    {
        return view('index');
    }

    public function index(Request $request)
    {
        $email = $request->input('name');
        $password = $request->input('password');

        // if (empty($email) || empty($password)) {
        //     $errorMessage = 'Please fill in both email and password fields.';
        //     return redirect('/indexForm')->with('error', $errorMessage);
        // }

        // // Basic email format check (limited effectiveness)
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $errorMessage = 'Invalid email format.';
        //     return redirect('/indexForm')->with('error', $errorMessage);
        // }

        return redirect('/dashboard')->with('success', "login succesfully");
        // if(Auth::attempt($email)){
        // }
    }



    public function showRegistrationForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        return redirect('/indexForm')->with('success', 'Registration successful! Please log in.');
    }
    public function dashboard()
    {


        return view('dashboard');
    }
    public function user()
    {


        return view('user');
    }
}
