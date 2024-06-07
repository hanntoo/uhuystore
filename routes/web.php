<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\DashboardController@Index');

Auth::routes(['register' => false]);

route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');

route::resource('products', 'App\Http\Controllers\ProductController');

route::resource('transactions', 'App\Http\Controllers\TransactionController');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
