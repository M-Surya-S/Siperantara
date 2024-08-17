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
Route::get('/buyers-guide', function () {
    return view('detail.detail-buyers-guide', ['title' => 'Buyers Guide']);
});
Route::get('/seller-guide', function () {
    return view('detail.detail-seller-guide', ['title' => 'Seller Guide']);
});
Route::get('/guide', function () {
    return view('guide', ['title' => 'Guide']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/blog-details', function () {
    return view('detail.detail-blog', ['title' => 'Blog Details']);
});
Route::get('/buyers-guide-download', function () {
    return view('detail.buyers-guide-download', ['title' => 'Buyers Guide']);
});
Route::get('/seller-guide-download', function () {
    return view('detail.seller-guide-download', ['title' => 'Seller Guide']);
});

