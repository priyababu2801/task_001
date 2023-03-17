<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\SuperAdminController;

use App\Http\Controllers\StripeController;

use App\Http\Controllers\PlanController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('product',[ProductController::class,'product']);
Route::post('saveProduct',[ProductController::class,'saveProduct'])->name('save.product');


Route::get('auth/login',[SuperAdminController::class,'login'])->name('auth.login');

Route::post('auth/save',[SuperAdminController::class,'save'])->name('auth.save');
Route::post('auth/check',[SuperAdminController::class,'check'])->name('auth.check');
Route::get('auth/logout',[SuperAdminController::class,'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']],function(){


  Route::get('productView',[ProductController::class,'productView']);

  Route::get('singleProduct/{id}',[ProductController::class,'singleProduct']);

   Route::get('plans', [PlanController::class, 'index']);
    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlanController::class, 'subscription'])->name("subscription.create");
    Route::get('stripe', [StripeController::class, 'stripe']);
   Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

});





