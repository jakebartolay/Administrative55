<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Document;
use App\Http\Controllers\Contract;
use App\Http\Controllers\ContractController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

Route::view('index', 'index')->name('index');
Route::view('createcontract', 'createcontract')->name('createcontract');
Route::get('/contract',[Contract::class , 'contract'])->name('contract');
Route::post('/add-contract', [ContractController::class, 'store'])->name('contracts.store');
Route::get('/document',[Document::class, 'document'])->name('document');
Route::view('reports', 'reports')->name('reports');
Route::view('forget-password', 'forget-password')->name('forget-password');
Route::view('sign-up', 'sign-up')->name('sign-up');
Route::view('login', 'login')->name('login');


// Route for displaying the form to edit a document
Route::get('/documents/{id}/edit', [DocumentController::class, 'edit'])->name('edit.document');
// Route for deleting a document
Route::delete('/documents/{id}', [DocumentController::class, 'destroy'])->name('delete.document');



Route::get('/forgot-password', function () {
    
})->name('forget-password');

Route::get('/sign-up', function () {
    

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');

Route::get('/forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm')->name('forget-password');

Route::get('/sign-up', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('sign-up');

})->name('sign-up');







