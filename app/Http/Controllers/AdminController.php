<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Correct namespace for User model
use App\Models\UploadedFile;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Visibility;
use App\Models\Contract;
use PDF;



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
        $user = user::find(auth()->id());
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
        $data = Contract::all();
        return view('contract', compact('user','data'));
    }

    public function createcontract()
    {
        $user = Auth::user();
        return view('createcontract', compact('user'));
    }

    public function contracts(Request $request)
    {
        // // Validate the form data
        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'address' => 'required|string',
        //     'phone_number' => 'required|numeric',
        //     'email_address' => 'required|email',
        //     'identification' => 'required|string',
        //     'date_of_birth' => 'required|date',
        //     'company_position' => 'required|string',
        //     'witnesses' => 'required|string',
        //     'effective_date' => 'required|date',
        //     'payment_information' => 'required|string',
        //     'jurisdiction' => 'required|string',
        //     'signature_party1' => 'required|file|mimes:png,jpg,jpeg,pdf', // Adjust the allowed file types
        //     'notary_public' => 'nullable|string',
        //     'terms_conditions' => 'required|string',
        //     'file_type' => 'required|string',
        // ]);
    
        // // Handle file upload
        // if ($request->hasFile('signature_party1')) {
        //     $file = $request->file('signature_party1');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->storeAs('signature_files', $fileName, 'public');
        //     $validatedData['signature_party1'] = $fileName;
        // }

        // // dd($request);
 
    
        // // Save the contract data to the database
        // Contract::create($validatedData);
    
        // // Redirect to a success page or show a success message
        // return redirect()->route('createcontract')->with('success', 'Contract created successfully');



            // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone_number' => 'required|numeric',
            'email_address' => 'required|email',
            'identification' => 'required|string',
            'date_of_birth' => 'required|date',
            'company_position' => 'required|string',
            'witnesses' => 'required|string',
            'effective_date' => 'required|date',
            'payment_information' => 'required|string',
            'jurisdiction' => 'required|string',
            'signature_party1' => 'required|file|mimes:png,jpg,jpeg,pdf', // Adjust the allowed file types
            'notary_public' => 'nullable|string',
            'terms_conditions' => 'required|string',
            'file_type' => 'required|string',
        ]);

    // Handle file upload
    if ($request->hasFile('signature_party1')) {
        $file = $request->file('signature_party1');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('signature_files', $fileName, 'public');
        $validatedData['signature_party1'] = $fileName;
    }

    // Save the contract data to the database
    $contract = Contract::create($validatedData);

    // Generate PDF
    $pdf = PDF::loadView('pdf.contract', ['contract' => $contract]); // Create a blade view for the PDF content
    $pdfPath = 'pdfs/' . time() . '_contract_' . $contract->id . '.pdf';
    $pdf->save(storage_path('app/public/' . $pdfPath));

    // Update the contract with the PDF path
    $contract->update(['pdf_path' => $pdfPath]);

    // Redirect to a success page or show a success message
    return redirect()->route('createcontract')->with('success', 'Contract created successfully');
    }
    
    public function pdfcontract(){
            // Validate the form data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'address' => 'required|string',
        'phone_number' => 'required|numeric',
        'email_address' => 'required|email',
        'identification' => 'required|string',
        'date_of_birth' => 'required|date',
        'company_position' => 'required|string',
        'witnesses' => 'required|string',
        'effective_date' => 'required|date',
        'payment_information' => 'required|string',
        'jurisdiction' => 'required|string',
        'signature_party1' => 'required|file|mimes:png,jpg,jpeg,pdf', // Adjust the allowed file types
        'notary_public' => 'nullable|string',
        'terms_conditions' => 'required|string',
        'file_type' => 'required|string',
    ]);

    if ($request->hasFile('signature_party1')) {
        $file = $request->file('signature_party1');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('signature_files', $fileName, 'public');
        $validatedData['signature_party1'] = $fileName;
    }

    // Save the contract data to the database
    $contract = Contract::create($validatedData);

    // Generate PDF
    $pdf = PDF::loadView('pdf.contract', ['contract' => $contract]);

    $pdfPath = storage_path('app/public/pdfs/') . $fileName;
    file_put_contents($pdfPath, $pdf->output());

    // Download the PDF
    return $pdf->download('contract.pdf');
}

}