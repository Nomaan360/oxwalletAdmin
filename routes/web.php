<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

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

Route::get('/privacy_policy',  function() {
    return view('add_privacy_policy');
})->name('privacy_policy')->middleware('admin_session');
Route::post('/add_privacy_policy', [Admincontroller::class, 'add_privacy_policy'])->name('add_privacy_policy')->middleware('admin_session');

Route::get('/terms-of-service',  function() {
    return view('terms_of_service');
})->name('terms_of_service')->middleware('admin_session');
Route::post('/add_terms_of_service', [Admincontroller::class, 'add_terms_of_service'])->name('add_terms_of_service')->middleware('admin_session');

Route::get('/disclosure',  function() {
    return view('disclosure');
})->name('disclosure')->middleware('admin_session');
Route::post('/add_disclosure', [Admincontroller::class, 'add_disclosure'])->name('add_disclosure')->middleware('admin_session');

Route::get('/faq',  function() {
    return view('faq');
})->name('faq')->middleware('admin_session');
Route::post('/add_faq', [Admincontroller::class, 'add_faq'])->name('add_faq')->middleware('admin_session');
