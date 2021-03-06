<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\PostController;
use App\Http\Controllers\Backend\AdminController; 
use App\Http\Controllers\Backend\BloodcController;
use App\Http\Controllers\Backend\StockController; 
use App\Http\Controllers\Website\RequestController;
use App\Http\Controllers\Website\RegisterController;
use App\Http\Controllers\Website\ContactusController;
use App\Http\Controllers\Website\SellbloodController;
use App\Http\Controllers\Backend\AdminloginController;
use App\Http\Controllers\Backend\FeedbackController;  
use App\Http\Controllers\Website\DonorloginController;
use App\Http\Controllers\Backend\AddstockController;   
use App\Http\Controllers\Backend\NewcategoryController;
use App\Http\Controllers\Website\UserprofileController;
use App\Http\Controllers\Backend\BloodsellviewController;
use App\Http\Controllers\Website\BloodcategoryController;
use App\Http\Controllers\Website\RecipentloginController;
use App\Http\Controllers\website\SellsbloodtableController;
use App\Http\Controllers\Backend\BloodrequestController;     
use App\Http\Controllers\Backend\RegistrationapprovalController;

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
    Route::get('/donorlogin',[DonorloginController::class,'donorlogin'])->name('donorlogin');
    Route::post('/user/dologin',[DonorloginController::class,'doLogin'])->name('user.do.login');
    Route::get('/register',[RegisterController::class,'register'])->name('register');
    Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
    Route::get('/whoarewe',[HomeController::class,'whoweare'])->name('whoweare');

Route::group(['prefix'=>'user'],function (){
        
        Route::get('/recipentlogin',[RecipentloginController::class,'recipentlogin'])->name('recipentlogin');

        Route::post('/user/do/registration',[RegisterController::class,'doRegistration'])->name('user.do.registration');
        Route::get('/user/list',[UserController::class,'userlist'])->name('user.list');
        Route::get('/user/dologout',[DonorloginController::class,'logout'])->name('user.logout');
    Route::group(['middleware'=>['auth','user']],function(){
        Route::post('/feedback/submit',[ContactusController::class,'feedbacksubmit'])->name('feedback.submit');
        Route::get('/contactus',[ContactusController::class,'contact'])->name('contactus');
        //blood category
        Route::get('/blood/category',[BloodcategoryController::class,'bloodcategory'])->name('blood.category');
        Route::get('blood/category/list/{id}',[BloodcategoryCOntroller::class,'viewlist'])->name('blood.list');
        Route::get('blood/request/{id}',[RequestController::class,'request'])->name('blood.request');
        Route::post('blood/request/post',[RequestController::class,'dorequest'])->name('blood.dorequest');
        // post
        Route::get('/post/create',[PostController::class,'postcreate'])->name('post.page');
        Route::post('/post/done',[PostController::class,'dopost'])->name('post.done');
        Route::get('/post/view',[PostController::class,'viewpost'])->name('post.view');
        //comment
        Route::get('/comment/view/{id}',[PostController::class,'comment'])->name('comment.view');
        Route::post('/comment/post/{id}',[PostController::class,'docomment'])->name('comment.do');
        //profile
        Route::get('/profile/view',[UserprofileController::class,'profile'])->name('profile.view');
        Route::get('/profile/update/view/{id}',[UserprofileController::class,'profileup'])->name('update.profile.view');
        Route::put('/profile/update/done/{id}',[UserprofileController::class,'profileupdate'])->name('do.update.profile');
        //sellblood
        Route::get('/sell/blood/view',[SellbloodController::class,'sellblood'])->name('view.sell.blood');
        Route::post('/sell/blood/submit',[SellbloodController::class,'submitsell'])->name('submit.sell');
        Route::get('/sell/blood/table',[SellsbloodtableController::class,'sellstable'])->name('sell.table');
    });
    

});



//Admin panel
Route::group(['prefix'=>'admin'],function (){
    
    Route::get('/adminlogin',[AdminloginController::class,'login'])->name('admin.login');
    Route::post('/admin/dologin',[AdminloginController::class,'dologin'])->name('admin.do.login');
    Route::group(['middleware'=>['auth','admin']],function (){
        Route::get('/', function () {
            return view('admin.master');
        });
        
        Route::get('/admin/logout',[AdminloginController::class,'logout'])->name('admin.logout');
        Route::get('/admin',[AdminController::class,'test'])->name('test');
        Route::get('/stock',[StockController::class,'stock'])->name('stock');
        Route::get('/Donorlist',[AdminController::class, 'donorlist'])->name('donorlist');
        Route::get('/bloodrequest',[BloodrequestController::class, 'bloodrequest'])->name('bloodrequest');
        Route::get('/bloodrequest/delete/{id}',[BloodrequestController::class,'requestdelete'])->name('request.delete');
        Route::get('/Recipentlist', [AdminController::class, 'recipentlist'])->name('recipentlist');
        Route::get('/User/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');
        Route::get('/user/registration/approve',[RegistrationapprovalController::class,'approve'])->name('registration.approve');
        //feedback route
        Route::get('/feedback',[FeedbackController::class,'feedback'])->name('feedback');
        Route::get('/feedback/view/{id}',[FeedbackController::class,'feedbackview'])->name('admin.feedbackview');
        Route::get('/feedback/delete/{id}',[FeedbackCOntroller::class,'feedbackdelete'])->name('feedback.delete');
        //add stock route
        Route::get('/addstock',[AddstockController::class,'addstock'])->name('addstock');
        Route::post('/blood/stock',[AddstockController::class,'store'])->name('store');
        Route::get('/stock/delete/{id}',[StockController::class,'stockdelete'])->name('stock.delete');
        Route::get('/stock/update/view/{id}',[StockController::class,'updateview'])->name('stock.update.view');
        Route::put('/stock/update/{id}',[StockController::class,'stockupdate'])->name('stock.update');
        //bloodcategory
        Route::get('/blood/category',[BloodcController::class,'bloodcat'])->name('blood.cat');
        Route::get('new/blood/category',[NewcategoryController::class,'newcategory'])->name('new.blood.cat');
        Route::post('blood/submit',[NewcategoryController::class,'newstore'])->name('create.new');
        Route::get('blood/cat/view',[BloodcController::class,'category'])->name('view.table');
        //approval and delete
        Route::get('/user/approval/{id}',[UserController::class,'approve'])->name('user.approve');
        Route::get('user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');
        //Bloodsell
        Route::get('/blood/sell/view',[BloodsellviewController::class,'bloodsellview'])->name('blood.sale');
        Route::get('/blood/sell/approved/{id}',[BloodsellviewController::class,'approve'])->name('blood.sale.approve'); 
        Route::get('/blood/sell/delete/{id}',[BloodsellviewController::class,'delete'])->name('blood.sale.delete');       
        

   
});
});
