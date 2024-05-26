<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produkcontroller;

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

Route::get('form-tagihan',[Produkcontroller::class, 'form_tagihan'])->name('form-tagihan');
Route::get('form-actionTagihan',[Produkcontroller::class, 'form_actionTagihan'])->name('form-actionTagihan');

