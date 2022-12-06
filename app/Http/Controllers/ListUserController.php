<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateFormRequest;
use App\Models\NguoiDung;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ListUserController extends Controller
{
   public function index()
   {
    $dsNguoiDung= NguoiDung::all();
    return view('listuser', compact('dsNguoiDung'));
   }
   public function destroy($nguoi_dung_id)
   {
     $xoa= NguoiDung::where('nguoi_dung_id',$nguoi_dung_id)->get();
     if(empty($xoa)){ $xoa=NguoiDung::where('nguoi_dung_id',$nguoi_dung_id)->delete();
      return "Không có user ($nguoi_dung_id)";
     }
    
     return redirect()->route('listuser');
   }
}
