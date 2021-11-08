<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController; 
use App\Http\Controllers\Backend\StockController;               
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

// Route::get('/', function () {
//     return view('admin.master');
// });
Route::get('/',[AdminController::class,'test']);
Route::get('/stock',[StockController::class,'stock'])->name('stock');
Route::get('/Donorlist',[AdminController::class, 'donorlist'])->name('donorlist');
