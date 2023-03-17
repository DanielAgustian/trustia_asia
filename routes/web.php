<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/home', [PageController::class, 'homepage'])->name('homepage');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/our-partner', [PageController::class, 'ourPartner'])->name('ourPartner');
Route::get('/our-product', [PageController::class, 'ourProduct'])->name('ourProduct');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs');

Route::get('/product/detail/{slug}', [PageController::class, 'productDetail'])->name('productDetail');