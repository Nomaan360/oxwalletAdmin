<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Merchantcontroller;
use App\Http\Controllers\invoiceController;

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



Route::get('/login', function() {
    return view('login');
})->name('login');
Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/', [Admincontroller::class, 'index'])->name('admin_dashboard')->middleware('admin_session');

Route::get('/admin_dashboard', [Admincontroller::class, 'index'])->name('admin_dashboard')->middleware('admin_session');

Route::post('/usersignup', [Admincontroller::class, 'usersignup'])->name('usersignup');
Route::post('/usersignin', [Admincontroller::class, 'usersignin'])->name('usersignin');

Route::get('/admin_logout', [Admincontroller::class, 'admin_logout'])->name('admin_logout');
