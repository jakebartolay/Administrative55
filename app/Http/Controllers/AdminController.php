<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\Http;
use App\Models\UploadedFile; // Make sure to import the UploadedFile model
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Visibility;



class AdminController extends Controller
{
    public function dashboard()
    {
        // $user = Auth::user();
        // return view('index', compact('user'));

            // Check if a user is authenticated
 
        // User is authenticated
        // $user = Auth::user();
        // return view('index', compact('user'));

            // Check if a user is authenticated
            $doc = UploadedFile::count();
            $user = Auth::user();
            // dd($doc, $user); // This will dump the values and halt execution for debugging.
            return view('index', compact('user', 'doc'));
    
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

        // ...
        // Validate the incoming request data
        // dd($request->all());
        // $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string',
        // ]);

        // // Retrieve email and password from the request
        // $email = $request->input('email');
        // $password = $request->input('password');

        // // Call the API for user authentication
        // $response = Http::post('https://rbac.rkiveadmin.com/api/userAcc/', [
        //     'email' => $email,
        //     'password' => $password,
        // ]);

        // // Dump the HTTP status code for debugging
        // // dd($response->status());

        // // Decode the JSON response
        // $responseData = json_decode($response->getBody(), true);

        // // Dump the API response for debugging
        // dd($responseData);

        // // Check if the API call was successful
        // if ($response->successful()) {
        //     // Check if the user has the admin role (you may need to adjust this based on your API response structure)
        //     if ($responseData['user_id'] === '00006') {
        //         // Manually log in the user
        //         Auth::loginUsingId($responseData['user_id']);
        
        //         // Redirect to the intended location after successful login
        //         return redirect()->intended('/dashboard'); // Change '/dashboard' to your desired route
        //     } else {
        //         // If the user doesn't have the admin role, return an error
        //         return back()->with('error', 'Only Admins can login here.');
        //     }
        // }

        // // If the API call fails, redirect back with an error message
        // return back()->with('error', 'Username/Email or password is incorrect');

            // Validate the incoming request data
        // dd($request->all());
        //     $request->validate([
        //         'email' => 'required|string',
        //         'password' => 'required|string',
        //     ]);

        //     // Retrieve email and password from the request
        //     $email = $request->input('email');
        //     $password = $request->input('password');

        //     // Call the API for user authentication
        //     $response = Http::post('https://rbac.rkiveadmin.com/api/userAcc/', [
        //         'email' => $email,
        //         'password' => $password,
        //     ]);

        //     // Dump the HTTP status code for debugging
        //     // dd($response->status());

        //     // Decode the JSON response
        // $responseData = json_decode($response->getBody(), true);

        // // Check if the API call was successful
        // if ($response->successful()) {
        //     // Check if the user has the admin role (you may need to adjust this based on your API response structure)
        //     foreach ($responseData['user'] as $user) {
        //         if ($user['user_id'] === '00006') {
        //             // Manually log in the user
        //             Auth::loginUsingId($user['id']); // Assuming 'id' is the correct identifier

        //             // Redirect to the intended location after successful login
        //             return redirect()->intended('/dashboard'); // Change '/dashboard' to your desired route
        //         }
        //     }

        //     // If the user doesn't have the admin role, return an error
        //     return back()->with('error', 'Only Admins can login here.');
        // }

        // // If the API call fails, redirect back with an error message
        // return back()->with('error', 'Username/Email or password is incorrect');

        //     $request->validate([
        //         'email' => 'required|string',
        //         'password' => 'required|string',
        //     ]);

        //     // Retrieve email and password from the request
        //     $email = $request->input('email');
        //     $password = $request->input('password');

        //     // Call the API for user authentication
        //     $response = Http::post('https://rbac.rkiveadmin.com/api/userAcc/', [
        //         'email' => $email,
        //         'password' => $password,
        //     ]);

        // // Decode the JSON response
        // $responseData = json_decode($response->getBody(), true);

        // // Check if the API call was successful
        // if ($response->successful() && isset($responseData['user'])) {
        //     // Loop through users to find the one with the admin role
        //     foreach ($responseData['user'] as $user) {
        //         if ($user['user_id'] === '00006') {
        //             // Manually log in the user
        //             Auth::loginUsingId($user['id']); // Use 'id' instead of 'user_id'

        //             // Get the authenticated user
        //             $authenticatedUser = Auth::user();

        //             // Redirect to the intended location after successful login
        //             return redirect()->intended('/dashboard'); // Change '/dashboard' to your desired route
        //         }
        //     }

        //     // If the user doesn't have the admin role, return an error
        //     return back()->with('error', 'Only Admins can login here.');
        // }

        // // If the API call fails, redirect back with an error message
        // return back()->with('error', 'Username/Email or password is incorrect');




    }

    public function logoutAdmin(Request $request)
    {
        if(Auth::check()) {
            $user = Auth::user();

            // Clear the session and logout
            $request->session()->flush();
            Auth::logout();
    
            return redirect('/');
        }
    
        return redirect('/'); // If the user is not logged in, redirect to login page
    }
    
    ////

    public function task()
    {
        $user = Auth::user();
        return view('task', compact('user'));
    }

    /// DOCUMENT MANAGEMENT
    public function document()
    {
        $user = Auth::user();
    
        // Assuming you have a model named UploadedFile to fetch data from the database
        $uploadedFiles = UploadedFile::where('user_id', auth()->id())->get();
    
        return view('document', compact('user', 'uploadedFiles'));
    }
    


    public function upload(Request $request)
    {

        
        // ...
        
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        
        // Store the file using the Storage facade with public visibility
        Storage::putFileAs('uploads', $file, $fileName, Visibility::PUBLIC);
        
        // Save information about the file to the database
        $uploadedFile = new UploadedFile;
        $uploadedFile->user_id = auth()->id();
        $uploadedFile->name = $fileName;
        $uploadedFile->extension = $file->getClientOriginalExtension();
        $uploadedFile->size = $file->getSize();
        $uploadedFile->last_open = now();
        $uploadedFile->save();
        
        // Redirect back with success message
        return back()->with('success', 'File uploaded successfully.');
        
        
        
    }
    
    

    ///


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