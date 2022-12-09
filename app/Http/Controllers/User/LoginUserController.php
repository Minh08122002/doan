<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\NguoiDung;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class LoginUserController extends Controller
{
    public Function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

     public function create()
    {
        //
        return view('loginuser',['title'=>'/']);
    }
//     public function store(Request $request)
//     {
//         $this->validate($request,[
//             'username'=> 'required',
            
//             'password'=>'required'
            
//         ]);
//     if (Auth::attempt([
//         'username'=>$request->input('username'),
        
//         'password'=>$request->input('password'),

// ], $request->input('remember')))
//     {
// //return 
// return view('');
//     }
//     Session::flash('error','Email hoặc Password không chính xác');
//     return redirect()->back();
//         //dd($request);
//        // $quanTriVien = new QuanTriVien;
//        // $quanTriVien->ten_dang_nhap ='Admin';
//        // $quanTriVien->password='123456';
//        // $quanTriVien->ho_ten='Nguyen Van A';
//         //$quanTriVien->save();
        
        
        
//         //
//     }
    public function xu_li_dang_nhap(Request $request){

        $request->validate(
            [
                'username' => 'required',
                'password'=> 'required'
            ]
            );
        $remember = $request->has('remember') ? true : false;
        
        if (Auth::attempt(['username'=> $request->username,'password'=>$request->password], $remember))
        {

            return redirect()->route('home')->with('message','Dang nhap thanh cong');   
        }
        else 
        {
            return redirect()->back()->with('message',' Dang nhap that bai');
        }

    

// Chứng thực thành công + ghi nhớ }

    //     if (Auth::attempt(['username'=>$request->username, 'password'=>$request->password], $remember))
    //     {
    //         return $request->username;
    //     }
        
    //     Session::flash('error','Email hoặc Password không chính xác');
    // return redirect()->back();
    
//return redirect()->back()->with('message', ' sai tai khoan or mat khau roi b ');

        }

       



    //     $taikhoan = DB::table('nguoi_dung')->where('username',$request->username)
    //                             ->where('password',$request->password)->first();
    //     if(!$taikhoan)
    //     {
    //         //dang nhap thanh cong
    //         echo 'cut';

    //     }
    //     else{
    //         //sai tai khoan hoac mat khau
    //         echo 'ok em';
    //     }
    }


