<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\Customer\DownloadGuideController;
use App\Http\Controllers\Admin\Customer\JoinAgentController;
use App\Http\Controllers\Admin\Customer\SellPropertyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PropertyController;
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

// DASHBOARD ADMIN
Route::get('/login', function () {
    return view('admin.auth.login');
});
Route::get('/dashboard', [DashboardController::class, 'index']);

// Property
Route::get('/dashboard/my-property', [PropertyController::class, 'index']);
Route::get('/dashboard/add-property', [PropertyController::class, 'create']);
Route::post('/dashboard/add-property', [PropertyController::class, 'store'])->name('add-property.store');
Route::get('/dashboard/edit-property/{id}', [PropertyController::class, 'edit'])->name('edit-property.edit');
Route::post('/dashboard/update-property/{id}', [PropertyController::class, 'update'])->name('update-property.update');

// Agent
Route::get('/dashboard/my-agent', [AgentController::class, 'index']);
Route::get('/dashboard/add-agent', [AgentController::class, 'create']);
Route::post('/dashboard/add-agent', [AgentController::class, 'store'])->name('add-agent.store');
Route::get('/dashboard/edit-agent/{id}', [AgentController::class, 'edit'])->name('edit-agent.edit');
Route::post('/dashboard/update-agent/{id}', [AgentController::class, 'update'])->name('update-agent.update');

// Blog
Route::get('/dashboard/my-blog', [BlogController::class, 'index']);
Route::get('/dashboard/add-blog', [BlogController::class, 'create']);
Route::get('/edit-blog', function () {
    return view('admin.blog.edit-blog', ['title' => 'Edit Blog']);
});

// Customer
Route::get('/dashboard/sell-property', [SellPropertyController::class, 'index']);
Route::get('/dashboard/join-agent', [JoinAgentController::class, 'index']);
Route::get('/dashboard/download-guide', [DownloadGuideController::class, 'index']);


// WEBSITE UTAMA
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
