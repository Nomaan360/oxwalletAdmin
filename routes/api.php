<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/get_privacy_policy', [Apicontroller::class, 'get_privacy_policy'])->name('get_privacy_policy');
Route::get('/get_disclosure', [Apicontroller::class, 'get_disclosure'])->name('get_disclosure');
Route::get('/term_of_service', [Apicontroller::class, 'term_of_service'])->name('term_of_service');
Route::get('/faq', [Apicontroller::class, 'faq'])->name('faq');
