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

// admin dashboard
Route::get('/login', function () {
    return view('admin.auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', ['title' => 'Dashboard']);
});

Route::get('/my-property', function () {
    return view('admin.my-property', ['title' => 'My Property']);
});

Route::get('/add-property', function () {
    return view('admin.add-property', ['title' => 'Add Property']);
});

Route::get('/add-agent', function () {
    return view('admin.add-agent', ['title' => 'Add Agent']);
});

Route::get('/edit-property', function () {
    return view('admin.edit-property', ['title' => 'Edit Property']);
});

Route::get('/my-agent', function () {
    return view('admin.my-agent', ['title' => 'My Agent']);
});

Route::get('/edit-agent', function () {
    return view('admin.edit-agent', ['title' => 'Edit Agent']);
});

Route::get('/add-blog', function () {
    return view('admin.add-blog', ['title' => 'Add Blog']);
});

Route::get('/my-blog', function () {
    return view('admin.my-blog', ['title' => 'My Blog']);
});

Route::get('/edit-blog', function () {
    return view('admin.edit-blog', ['title' => 'Edit Blog']);
});

Route::get('/sell-property', function () {
    return view('admin.customer.sell-property', ['title' => 'Edit Agent']);
});

Route::get('/join-agent-admin', function () {
    return view('admin.customer.join-agent', ['title' => 'Join Agent']);
});

Route::get('/download-guide', function () {
    return view('admin.customer.download-guide', ['title' => 'Download Guide']);
});





// main web
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
    return view('detail.detail-property', ['title' => 'Property Detail']);
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

Route::get('/join-agent', function () {
    return view('detail.join-agent', ['title' => 'Agent']);
});

Route::get('/sell', function () {
    return view('detail.sell-property', ['title' => 'Sell']);
});
