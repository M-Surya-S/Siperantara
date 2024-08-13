<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/property', function () {
    return view('property');
});
Route::get('/agent', function () {
    return view('detail.detail-agent');
});
Route::get('/property-details', function () {
    return view('detail.detail-property');
});
Route::get('/guide', function () {
    return view('guide');
});
