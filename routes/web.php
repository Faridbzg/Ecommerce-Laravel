<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProductListController;
use App\Http\Controllers\User\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//User Routes

Route::get('/',[UserController::class,'index']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
    //Checkout Routes
    Route::prefix('checkout')->controller(CheckoutController::class)->group(function(){
        Route::post('order','store')->name('checkout.store');
        Route::get('success','success')->name('checkout.success');
        Route::get('cancel','cancel')->name('checkout.cancel');
    });

//End UserRoutes


//Admin Routes

Route::group(['prefix'=>'admin','middleware'=>'redirectAdmin'],function(){
    Route::get('login',[AdminAuthController::class,'showLoginForm'])->name('admin.login');
    Route::post('login',[AdminAuthController::class,'login'])->name('admin.login.post');
    Route::post('logout',[AdminAuthController::class,'logout'])->name('admin.logout');
});


Route::middleware(['auth','admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');



    //product Routes
    //products routes 
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product.index');
    Route::post('/products/store',[ProductController::class,'store'])->name('admin.product.store');
    Route::put('/products/update/{id}',[ProductController::class,'update'])->name('admin.product.update');
    Route::delete('/products/image/{id}',[ProductController::class,'deleteImage'])->name('admin.product.image.delete');
    Route::delete('/products/destory/{id}',[ProductController::class,'destory'])->name('admin.product.destory');

});


Route::prefix('cart')->controller(CartController::class)->group(function(){
    Route::get('view','view')->name('cart.view');
    Route::post('store/{product}','store')->name('cart.store');
    Route::patch('update/{product}','update')->name('cart.update');
    Route::delete('delete/{product}','delete')->name('cart.delete');
});
// Routes for product list routes
    Route::prefix('products')->controller(ProductListController::class)->group(function(){
        Route::get('/','index')->name('products.index');
    });


//End
require __DIR__.'/auth.php';