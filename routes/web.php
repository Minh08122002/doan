<?php

use App\Http\Controllers\ListUserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\MenuController;
use App\Http\Controllers\QuanlibaidangController;

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login/store',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function(){
Route::get('admin',[MainController::class,'index'])->name('admin');
Route::get('admin/main',[MainController::class,'index']);

#menu
Route::get('add',[MenuController::class,'create']);
Route::post('add',[MenuController::class,'store']);
Route::get('list',[MenuController::class,'index']);
Route::get('/menus/edit/{menu}',[MenuController::class,'show']);
Route::post('/menus/edit/{menu}',[MenuController::class,'update']);
Route::DELETE('/menus/destroy',[MenuController::class,'destroy']);

#qlnguoidung
Route::get('listuser',[ListUserController::class,'index'])->name('listuser');;
Route::get('/listuser/destroy/{nguoi_dung_id}',[ListUserController::class,'destroy'])->name('listuser_xoa');
#qlbaidang
Route::get('home',[QuanlibaidangController::class,'index'])->name('home');;
Route::get('/listuser/destroy/{nguoi_dung_id}',[ListUserController::class,'destroy'])->name('listuser_xoa');
});