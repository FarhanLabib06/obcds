<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController; 
use App\Http\Controllers\Backend\StockController; 
use App\Http\Controllers\Backend\BloodrequestController;     
use App\Http\Controllers\Backend\FeedbackController;  
use App\Http\Controllers\Backend\AddstockController;   
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\RegisterController;
use App\Http\Controllers\Website\ContactusController;
use App\Http\Controllers\Website\DonorloginController;
use App\Http\Controllers\Website\RecipentloginController;
use App\Http\Controllers\Website\AdminloginController;
use App\Http\Controllers\Backend\UserController;

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
//website
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/register',[RegisterController::class,'register'])->name('register');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/whoarewe',[HomeController::class,'whoweare'])->name('whoweare');
Route::get('/contactus',[ContactusController::class,'contact'])->name('contactus');
Route::get('/donorlogin',[DonorloginController::class,'donorlogin'])->name('donorlogin');
Route::post('/user/dologin',[DonorloginController::class,'doLogin'])->name('user.do.login');
Route::get('/recipentlogin',[RecipentloginController::class,'recipentlogin'])->name('recipentlogin');
Route::get('/adminlogin',[AdminloginController::class,'adminlogin'])->name('adminlogin');
Route::post('/user/do/registration',[RegisterController::class,'doRegistration'])->name('user.do.registration');
Route::get('/user/list',[UserController::class,'userlist'])->name('user.list');
Route::get('/user/dologout',[DonorloginController::class,'logout'])->name('user.logout');
Route::post('/feedback/submit',[ContactusController::class,'feedbacksubmit'])->name('feedback.submit');





Route::group([],function (){
    
//Admin panel
Route::get('/admin',[AdminController::class,'test'])->name('test');
Route::get('/stock',[StockController::class,'stock'])->name('stock');
Route::get('/Donorlist',[AdminController::class, 'donorlist'])->name('donorlist');
Route::get('/bloodrequest',[BloodrequestController::class, 'bloodrequest'])->name('bloodrequest');
Route::get('/Recipentlist', [AdminController::class, 'recipentlist'])->name('recipentlist');
//feedback route
Route::get('/feedback',[FeedbackController::class,'feedback'])->name('feedback');
Route::get('/feedback/view/{id}',[FeedbackController::class,'feedbackview'])->name('admin.feedbackview');
//add stock route
Route::get('/addstock',[AddstockController::class,'addstock'])->name('addstock');
Route::post('/blood/stock',[AddstockController::class,'store'])->name('store');

   
});