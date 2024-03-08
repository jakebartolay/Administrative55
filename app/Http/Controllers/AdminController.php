<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;



class AdminController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('index', compact('user'));
    }

    //// LOGIN ADMIN

    public function login()
    {
        return view('login');
    }

    public function loginAdmin(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username_or_email' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $usernameOrEmail = $request->input('username_or_email');
        $password = $request->input('password');
    
        // Attempt to authenticate the user with email or username
        if (Auth::attempt(['username' => $usernameOrEmail, 'password' => $password]) ||
            Auth::attempt(['email' => $usernameOrEmail, 'password' => $password])
        ) {
            $user = Auth::user();
    
            // Check if the authenticated user has the role of "admin" (assuming 1 represents admin)
            if ($user && $user->roles === 1) {
                // Redirect to the intended location after successful login
                return redirect()->intended('/dashboard'); // Change '/dashboard' to your desired route
            }
    
            // If the user is not an admin, log them out
            Auth::logout();
            return back()->with('error', 'Only Admins can login here.');
        }
    
        // If authentication fails, redirect back with an error message
        return back()->with('error', 'Username/Email or password is incorrect');
    }
    
    ////


    public function task()
    {
        $user = Auth::user();
        return view('task', compact('user'));
    }
    
    public function document()
    {
        $user = Auth::user();
        return view('document', compact('user'));
    }

    public function contract()
    {
        $user = Auth::user();
        return view('contract', compact('user'));
    }

    public function createcontract()
    {
        $user = Auth::user();
        return view('createcontract', compact('user'));
    }

}