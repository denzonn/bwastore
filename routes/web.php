<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//User Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name(
    'home'
);
Route::get('/categories', [
    App\Http\Controllers\CategoryController::class,
    'index',
])->name('categories');
Route::get('/details/{id}', [
    App\Http\Controllers\DetailController::class,
    'index',
])->name('detail');
Route::get('/cart', [
    App\Http\Controllers\CartController::class,
    'index',
])->name('cart');
Route::get('/success', [
    App\Http\Controllers\CartController::class,
    'success',
])->name('success');

//Register Routes
Route::get('/register/success', [
    App\Http\Controllers\Auth\RegisterController::class,
    'success',
])->name('register-success');

//Dashboard
Route::get('/dashboard', [
    App\Http\Controllers\DashboardController::class,
    'index',
])->name('dashboard');
Route::get('/dashboard/products', [
    App\Http\Controllers\DashboardProductController::class,
    'index',
])->name('dashboard-product');
Route::get('/dashboard/products/create', [
    App\Http\Controllers\DashboardProductController::class,
    'create',
])->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', [
    App\Http\Controllers\DashboardProductController::class,
    'details',
])->name('dashboard-product-details');

Route::get('/dashboard/transactions', [
    App\Http\Controllers\TransactionController::class,
    'index',
])->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', [
    App\Http\Controllers\TransactionController::class,
    'details',
])->name('dashboard-transaction-details');
Route::get('/dashboard/settings', [
    App\Http\Controllers\DashboardSettingController::class,
    'store',
])->name('dashboard-setting-store');
Route::get('/dashboard/account', [
    App\Http\Controllers\DashboardSettingController::class,
    'account',
])->name('dashboard-setting-account');

//Admin
Route::prefix('admin')
    // ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name(
            'admin-dashboard'
        );
        Route::resource('category', CategoryController::class);
        Route::resource('user', UserController::class);
    });

Auth::routes();
