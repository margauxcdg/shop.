<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
Route::get('/shop', [App\Http\Controllers\ProductController::class, 'index'])->name('shop');


=======
>>>>>>> 424cbd158906adc7fd738a7ee5632530864a2eb9
