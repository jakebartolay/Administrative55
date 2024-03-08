<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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

// Route::get('/dashboard', [AdminController::class, 'dashboard']);

/// FOR LOGIN

Route::get('/', [AdminController::class, 'login'])->name('/');

Route::post('/login', [AdminController::class, 'loginAdmin'])->name('login');

Route::get('/logout', [AdminController::class, 'logoutAdmin'])->name('logout');

///


Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('index');

Route::get('/task', [AdminController::class, 'task'])->name('task');

Route::get('/document', [AdminController::class, 'document'])->name('document');

Route::get('/contract', [AdminController::class, 'contract'])->name('contract');

Route::get('/create', [AdminController::class, 'createcontract'])->name('createcontract');
