<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFormRequest;
use App\Models\NguoiDung;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ListUserController extends Controller
{
  public function index()
  {
    $i = 0;
    $soluong = User::count();
    $dsNguoiDung = User::skip($i)->take(9)->get();
    $i+=1;
    return view('listuser', ['dsNguoiDung' => $dsNguoiDung, 'i' => $i,'soluong'=>$soluong]);
  }
  public function destroy($nguoi_dung_id)
  {

    $xoa = User::where('id', $nguoi_dung_id)->delete();



    return redirect()->route('listuser');
  }
  public function getAmount($i)
  {
    $soluong = User::count();
    $dsNguoiDung = User::skip($i)->take(9)->get();
    return view('listuser', ['dsNguoiDung' => $dsNguoiDung, 'i' => $i,'soluong'=>$soluong]);
  }
}
