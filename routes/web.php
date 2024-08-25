<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Customer\DownloadGuideController;
use App\Http\Controllers\Admin\Customer\JoinAgentController;
use App\Http\Controllers\Admin\Customer\SellPropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AgentHomeController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\PropertyHomeController;
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

// ADMIN
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Property
    Route::get('/dashboard/my-property', [PropertyController::class, 'index']);
    Route::get('/dashboard/my-property/search', [PropertyController::class, 'search'])->name('my-property.search');
    Route::get('/dashboard/add-property', [PropertyController::class, 'create']);
    Route::post('/dashboard/add-property', [PropertyController::class, 'store'])->name('add-property.store');
    Route::get('/dashboard/edit-property/{id}', [PropertyController::class, 'edit'])->name('edit-property.edit');
    Route::post('/dashboard/update-property/{id}', [PropertyController::class, 'update'])->name('update-property.update');
    Route::delete('/dashboard/delete-property/{id}', [PropertyController::class, 'destroy'])->name('delete-property.destroy');

    // Agent
    Route::get('/dashboard/my-agent', [AgentController::class, 'index']);
    Route::get('/dashboard/add-agent', [AgentController::class, 'create']);
    Route::post('/dashboard/add-agent', [AgentController::class, 'store'])->name('add-agent.store');
    Route::get('/dashboard/edit-agent/{id}', [AgentController::class, 'edit'])->name('edit-agent.edit');
    Route::post('/dashboard/update-agent/{id}', [AgentController::class, 'update'])->name('update-agent.update');
    Route::delete('/dashboard/delete-agent/{id}', [AgentController::class, 'destroy'])->name('delete-agent.destroy');

    // Blog
    Route::get('/dashboard/my-blog', [BlogController::class, 'index']);
    Route::get('/dashboard/add-blog', [BlogController::class, 'create']);
    Route::post('/dashboard/add-blog', [BlogController::class, 'store'])->name('add-blog.store');
    Route::get('/dashboard/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog.edit');
    Route::post('/dashboard/update-blog/{id}', [BlogController::class, 'update'])->name('update-blog.update');
    Route::delete('/dashboard/delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete-blog.destroy');

    // Customer
    Route::get('/dashboard/sell-property', [SellPropertyController::class, 'index']);
    Route::get('/dashboard/join-agent', [JoinAgentController::class, 'index']);
    Route::get('/dashboard/download-guide', [DownloadGuideController::class, 'index']);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home
Route::get('/', [HomeControlller::class, 'index']);

// Property
Route::get('/property', [PropertyHomeController::class, 'index']);
Route::get('/property/search', [PropertyHomeController::class, 'search'])->name('property.search');
Route::get('/property/detail/{id}', [PropertyHomeController::class, 'detail'])->name('property.detail');
Route::get('/property/sell', function () {
    return view('detail.sell-property', ['title' => 'Sell']);
});
Route::get('/property/new-develop', function () {
    return view('detail.new-develop', ['title' => 'New Developments']);
});

// Agent
Route::get('/agent', [AgentHomeController::class, 'index']);
Route::get('/agent/join', function () {
    return view('detail.join-agent', ['title' => 'Agent']);
});

// Guide
Route::get('/guide', [GuideController::class, 'index']);

// Buyer's Guide
Route::get('/guide/buyers', function () {
    return view('detail.detail-buyers-guide', ['title' => 'Buyers Guide']);
});
Route::get('/guide/buyers/download', function () {
    return view('detail.buyers-guide-download', ['title' => 'Buyers Guide']);
});

// Seller Guide
Route::get('/guide/seller', function () {
    return view('detail.detail-seller-guide', ['title' => 'Seller Guide']);
});
Route::get('/guide/seller/download', function () {
    return view('detail.seller-guide-download', ['title' => 'Seller Guide']);
});

// Blog
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/blog/detail', function () {
    return view('detail.detail-blog', ['title' => 'Blog Details']);
});

// Contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
