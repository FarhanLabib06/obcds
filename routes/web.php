<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController; 
use App\Http\Controllers\Backend\StockController; 
use App\Http\Controllers\Backend\BloodrequestController;     
use App\Http\Controllers\Backend\FeedbackController;  
use App\Http\Controllers\Backend\AddstockController;       
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
Route::get('/',[AdminController::class,'test'])->name('test');
Route::get('/stock',[StockController::class,'stock'])->name('stock');
Route::get('/Donorlist',[AdminController::class, 'donorlist'])->name('donorlist');
Route::get('/bloodrequest',[BloodrequestController::class, 'bloodrequest'])->name('bloodrequest');
Route::get('/Recipentlist', [AdminController::class, 'recipentlist'])->name('recipentlist');
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('feedback');
Route::get('/addstock',[AddstockController::class,'addstock'])->name('addstock');
Route::post('/blood/stock',[AddstockController::class,'store'])->name('store');