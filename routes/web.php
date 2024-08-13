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
    return view('home', ['title' => 'Home']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
Route::get('/property', function () {
    return view('property', ['title' => 'Property']);
});
Route::get('/agent', function () {
    return view('detail.detail-agent', ['title' => 'Agent']);
});
Route::get('/property-details', function () {
    return view('detail.detail-property', ['title' => 'Detail Property']);
});
Route::get('/guide', function () {
    return view('guide', ['title' => 'Guide']);
});
