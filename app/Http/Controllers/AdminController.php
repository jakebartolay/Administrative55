<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function task()
    {
        return view('task');
    }

    public function LoginAdmin(Request $request)
    {
        $user = user()->id();

        return redirect()->route('index', compact('user'));


        ///SET UP LOGIN NATIN MAMA
    }
}