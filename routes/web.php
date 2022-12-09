<?php

use App\Http\Controllers\ListUserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\MenuController;
use App\Http\Controllers\QuanlibaidangController;

use \App\Http\Controllers\User\LoginUserController;

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login/store',[LoginController::class,'store']);


Route::get('admin',[MainController::class,'index'])->name('admin')->middleware(['auth']);
Route::get('admin/main',[MainController::class,'index']);

#menu
Route::get('add',[MenuController::class,'create'])->middleware(['auth']);
Route::post('add',[MenuController::class,'store']);
Route::get('list',[MenuController::class,'index']);
Route::get('/menus/edit/{menu}',[MenuController::class,'show']);
Route::post('/menus/edit/{menu}',[MenuController::class,'update']);
Route::DELETE('/menus/destroy',[MenuController::class,'destroy']);

#qlnguoidung
Route::get('listuser',[ListUserController::class,'index'])->name('listuser');
Route::get('listuser/{i}',[ListUserController::class,'getAmount'])->name('ds-listuser');
Route::get('/listuser/destroy/{nguoi_dung_id}',[ListUserController::class,'destroy'])->name('listuser_xoa');
#qlbaidang
Route::get('listpost',[QuanlibaidangController::class,'index'])->name('listpost');
Route::get('/listpost/destroy/{id}',[QuanlibaidangController::class,'destroy'])->name('listpost_xoa');


#nguoidung
Route::get('/',[LoginController::class,'create'])->name('loginuser');
Route::post('loginuser',[LoginUserController::class, 'xu_li_dang_nhap'])->name('/');