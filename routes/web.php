<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Customer\BuyRentController;
use App\Http\Controllers\Admin\Customer\DownloadGuideController;
use App\Http\Controllers\Admin\Customer\JoinAgentController;
use App\Http\Controllers\Admin\Customer\SellPropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AgentHomeController;
use App\Http\Controllers\BlogHomeController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeControlller;
use App\Http\Controllers\NewDevelopController;
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
    Route::get('/dashboard/my-agent/search', [AgentController::class, 'search'])->name('my-agent.search');
    Route::get('/dashboard/add-agent', [AgentController::class, 'create']);
    Route::post('/dashboard/add-agent', [AgentController::class, 'store'])->name('add-agent.store');
    Route::get('/dashboard/edit-agent/{id}', [AgentController::class, 'edit'])->name('edit-agent.edit');
    Route::post('/dashboard/update-agent/{id}', [AgentController::class, 'update'])->name('update-agent.update');
    Route::delete('/dashboard/delete-agent/{id}', [AgentController::class, 'destroy'])->name('delete-agent.destroy');

    // Blog
    Route::get('/dashboard/my-blog', [BlogController::class, 'index']);
    Route::get('/dashboard/my-blog/search', [BlogController::class, 'search'])->name('my-blog.search');
    Route::get('/dashboard/add-blog', [BlogController::class, 'create']);
    Route::post('/dashboard/add-blog', [BlogController::class, 'store'])->name('add-blog.store');
    Route::get('/dashboard/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit-blog.edit');
    Route::post('/dashboard/update-blog/{id}', [BlogController::class, 'update'])->name('update-blog.update');
    Route::delete('/dashboard/delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete-blog.destroy');

    // Customer
    Route::get('/dashboard/sell-property', [SellPropertyController::class, 'index']);
    Route::get('/dashboard/buy-or-rent', [BuyRentController::class, 'index']);
    Route::get('/dashboard/join-agent', [JoinAgentController::class, 'index']);
    // Route::get('/dashboard/download-guide', [DownloadGuideController::class, 'index']);
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
Route::post('/property/detail/{id}', [PropertyHomeController::class, 'sendMessage'])->name('send-message-property');
Route::get('/property/sell', [SellPropertyController::class, 'create']);
Route::post('/property/sell', [SellPropertyController::class, 'store'])->name('sell-property.store');
Route::get('/property/new-develop', [NewDevelopController::class, 'index'])->name('new-develop');
Route::get('/property/new-develop/detail', [NewDevelopController::class, 'detail'])->name('detail-new-develop');
Route::get('/property/new-develop/detail/download_flyer', [NewDevelopController::class, 'download_flyer'])->name('download-flyer');

// Agent
Route::get('/agent', [AgentHomeController::class, 'index']);
Route::get('/agent/join', [JoinAgentController::class, 'create']);
Route::post('/agent/join', [JoinAgentController::class, 'store'])->name('join-agent.store');

// Guide
Route::get('/guide', [GuideController::class, 'index']);
// Buyers Guide
Route::get('/guide/buyers', [GuideController::class, 'buyers']);
Route::get('/guide/buyers/download', [GuideController::class, 'buyersIndex']);
Route::post('/guide/buyers/download', [GuideController::class, 'buyersDownload'])->name('buyers-download');
// Seller Guide
Route::get('/guide/seller', [GuideController::class, 'seller']);
Route::get('/guide/seller/download', [GuideController::class, 'sellerIndex']);
Route::post('/guide/seller/download', [GuideController::class, 'sellerDownload'])->name('seller-download');

// Blog
Route::get('/blog', [BlogHomeController::class, 'index']);
Route::get('/blog/detail/{id}', [BlogHomeController::class, 'show'])->name('blog-detail');

// Contact
Route::get('/contact', function () {
    return view('guest.contact', ['title' => 'Contact']);
});

// Maintenance
Route::get('/maintenance', function () {
    return view('new.maintenance');
});

// Maintenance
Route::get('/error', function () {
    return view('new.error');
});

