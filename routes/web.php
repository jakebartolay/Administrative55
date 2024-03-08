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

Route::get('/', [AdminController::class, 'login'])->name('/');

Route::get('/login', [AdminController::class, 'LoginAdmin'])->name('login');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('index');

Route::get('/document', [AdminController::class, 'dashboard'])->name('document');

Route::get('/contract', [AdminController::class, 'dashboard'])->name('contract');

Route::get('/create', [AdminController::class, 'dashboard'])->name('createcontract');

Route::get('/reports', [AdminController::class, 'dashboard'])->name('reports');












