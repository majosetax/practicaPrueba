<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');

Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');

Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');

Route::get('/customer/{customer}',[CustomerController::class,'show'])->name('customer.show');

Route::put('/customer/{customer}',[CustomerController::class,'update'])->name('customer.update');

Route::delete('/customer/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');

Route::get('/customer/{customer}/edit',[CustomerController::class,'edit'])->name('customer.edit');

//lawyer


Route::get('/lawyer',[LawyerController::class,'index'])->name('lawyer.index');

Route::get('/lawyer/create',[LawyerController::class,'create'])->name('lawyer.create');

Route::post('/lawyer/store',[LawyerController::class,'store'])->name('lawyer.store');

Route::get('/lawyer/{lawyer}',[LawyerController::class,'show'])->name('lawyer.show');

Route::put('/lawyer/{lawyer}',[LawyerController::class,'update'])->name('lawyer.update');

Route::get('/lawyer/{lawyer}/edit',[LawyerController::class,'edit'])->name('lawyer.edit');

Route::delete('/lawyer/{lawyer}',[LawyerController::class,'destroy'])->name('lawyer.destroy');

//post

Route::get('/post',[PostController::class,'index'])->name('post.index');

Route::get('/post/create',[PostController::class,'create'])->name('post.create');

Route::post('/post/store',[PostController::class,'store'])->name('post.store');

Route::get('/post/{post}',[PostController::class,'show'])->name('post.show');

Route::put('/post/{post}',[PostController::class,'update'])->name('post.update');

Route::get('/post/{post}/edit',[PostController::class,'edit'])->name('post.edit');

Route::delete('/post/{post}',[PostController::class,'destroy'])->name('post.destroy');



