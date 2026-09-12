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
use App\Http\Controllers\HomeController;
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
Route::middleware(['admin'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    // Property
    Route::controller(PropertyController::class)->prefix('my-property')->group(function () {
        Route::get('/', 'index');
        Route::get('/search', 'search')->name('my-property.search');
        Route::get('/add', 'create');
        Route::post('/add', 'store')->name('add-property.store');
        Route::get('/edit/{id}', 'edit')->name('edit-property.edit');
        Route::post('/update/{id}', 'update')->name('update-property.update');
        Route::delete('/delete/{id}', 'destroy')->name('delete-property.destroy');
    });

    // Agent
    Route::controller(AgentController::class)->prefix('my-agent')->group(function () {
        Route::get('/', 'index');
        Route::get('/search', 'search')->name('my-agent.search');
        Route::get('/add', 'create');
        Route::post('/add', 'store')->name('add-agent.store');
        Route::get('/edit/{id}', 'edit')->name('edit-agent.edit');
        Route::post('/update/{id}', 'update')->name('update-agent.update');
        Route::delete('/delete/{id}', 'destroy')->name('delete-agent.destroy');
    });

    // Blog
    Route::controller(BlogController::class)->prefix('my-blog')->group(function () {
        Route::get('/', 'index');
        Route::get('/search', 'search')->name('my-blog.search');
        Route::get('/add', 'create');
        Route::post('/add', 'store')->name('add-blog.store');
        Route::get('/edit/{id}', 'edit')->name('edit-blog.edit');
        Route::post('/update/{id}', 'update')->name('update-blog.update');
        Route::delete('/delete/{id}', 'destroy')->name('delete-blog.destroy');
    });

    // Customer
    Route::get('/sell-property', [SellPropertyController::class, 'index']);
    Route::get('/buy-or-rent', [BuyRentController::class, 'index']);
    Route::get('/join-agent', [JoinAgentController::class, 'index']);
    // Route::get('/download-guide', [DownloadGuideController::class, 'index']);
});

// Authentication
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'store')->name('login.store');
    Route::post('/logout', 'logout')->name('logout');
});

// Home
Route::get('/', [HomeController::class, 'index']);

// Property
Route::prefix('property')->group(function () {
    Route::controller(PropertyHomeController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/search', 'search')->name('property.search');
        Route::get('/detail/{id}', 'detail')->name('property.detail');
        Route::post('/detail/{id}', 'sendMessage')->name('send-message-property');
    });

    Route::controller(SellPropertyController::class)->group(function () {
        Route::get('/sell', 'create');
        Route::post('/sell', 'store')->name('sell-property.store');
    });

    Route::controller(NewDevelopController::class)->group(function () {
        Route::get('/new-develop', 'index')->name('new-develop');
        Route::get('/new-develop/detail', 'detail')->name('detail-new-develop');
        Route::get('/new-develop/detail/download_flyer', 'download_flyer')->name('download-flyer');
    });
});

// Agent
Route::prefix('agent')->group(function () {
    Route::get('/', [AgentHomeController::class, 'index']);
    Route::controller(JoinAgentController::class)->group(function () {
        Route::get('/join', 'create');
        Route::post('/join', 'store')->name('join-agent.store');
    });
});

// Guide
Route::prefix('guide')->controller(GuideController::class)->group(function () {
    Route::get('/', 'index');
    // Buyers Guide
    Route::get('/buyers', 'buyers');
    Route::get('/buyers/download', 'buyersIndex');
    Route::post('/buyers/download', 'buyersDownload')->name('buyers-download');
    // Seller Guide
    Route::get('/seller', 'seller');
    Route::get('/seller/download', 'sellerIndex');
    Route::post('/seller/download', 'sellerDownload')->name('seller-download');
});

// Blog
Route::prefix('blog')->controller(BlogHomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/detail/{id}', 'show')->name('blog-detail');
});

// Contact
Route::get('/contact', function () {
    return view('guest.contact', ['title' => 'Contact']);
});

// Maintenance
Route::get('/maintenance', function () {
    return view('new.maintenance');
});

// Error
Route::get('/error', function () {
    return view('new.error');
});

