<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TinController;
use Illuminate\Contracts\Container\BindingResolutionException;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\QuanlibaidangController;
use App\Models\Tin;

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


Route::get('them-moi',[UserController::class, 'create'])->name('form-them-moi-tai-khoan');

Route::post('them-moi',[UserController::class,'store'])->name('them-moi-tai-khoan');

Route::get('tai-khoan',[UserController::class, 'index'])-> name('danh-sach-tai-khoan');

Route::get('dang-nhap',[LoginController::class,'create'])->name('login');

Route::post('login',[LoginController::class, 'xu_li_dang_nhap'])->name('dang-nhap');

Route::get('logout',[LoginController::class, 'logout'] )->name('logout');

Route::get('them-moi-tin',[TinController::class, 'create'])->name('form-them-moi-tin');

Route::post('them-moi-tin',[TinController::class,'store'])->name('them-moi-tin');

Route::get('home',[TinController::class, 'laytin'])-> name('home');

Route::get('/',[TinController::class,'laytin']);

Route::get('info',[UserController::class, 'infomation'])-> name('info');

Route::get('sua-info{id}',[UserController::class, 'ShowSuaThongTin'])-> name('suainfo');

Route::post('sua-info{id}',[UserController::class,'CapNhatThongTinUS'])->name('suathongtin');

Route::get('thong-tin-tin{id}',[TinController::class, 'lay1'])-> name('laytin');

Route::get('info/{id}',[TinController::class,'XoaBaiininfo'])->name('xoabaiuser');

Route::get('sua-tin{id}',[TinController::class, 'ShowSuaTin'])-> name('suatin');

Route::post('sua-tin{id}',[TinController::class,'CapNhatThongTin'])->name('acceptformsuatin');

Route::get('doimatkhau/{id}',[UserController::class, 'ShowSuaMatKhau'])->name('doimatkhaumoi');

Route::post('doimatkhau/{id}',[UserController::class,'CapNhatMatKhau'])->name('acceptdoimatkhau');

Route::get('home1',[TinController::class, 'getSearch'])-> name('homeSearch');

Route::get('admin',[LoginController::class,'trangadm'])->name('admin');

//menu
Route::get('add',[MenuController::class,'create'])->middleware(['auth']);
Route::post('add',[MenuController::class,'store']);
Route::get('list',[MenuController::class,'index']);
Route::get('/menus/edit/{menu}',[MenuController::class,'show']);
Route::post('/menus/edit/{menu}',[MenuController::class,'update']);
Route::DELETE('/menus/destroy',[MenuController::class,'destroy']);
//qlndung
#qlnguoidung
Route::get('listuser',[ListUserController::class,'index'])->name('listuser');
Route::get('listuser/{i}',[ListUserController::class,'getAmount'])->name('ds-listuser');
Route::get('/listuser/destroy/{nguoi_dung_id}',[ListUserController::class,'destroy'])->name('listuser_xoa');

#qlbaidang
Route::get('listpost',[QuanlibaidangController::class,'index'])->name('listpost');
Route::get('/listpost/destroy/{id}',[QuanlibaidangController::class,'destroy'])->name('listpost_xoa');