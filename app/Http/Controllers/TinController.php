<?php

namespace App\Http\Controllers;
use App\Models\Tin;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $listQuanTriVien=QuanTriVien::all();
       // return view('quan-tri-vien.danh-sach',['listQuanTriVien'=>$listQuanTriVien]);
        //dd($listQuanTriVien);

    }
    
    public function laytin(){
        $listTin = DB::table('tins')->where('trang_thai', '1')->get();
       
        return view('home',['title'=>'trang chủ'],['listTin'=>$listTin]);
    }
    public function lay1($id){

        $lay1=DB::table('tins')
                    ->where('id',$id)
                    ->get();
        foreach ($lay1 as $Tin)


        $userlay1=User::find($Tin->user_id);
                    return view('thong-tin-tin',['title'=>'thong tin'],['lay1'=>$lay1,'userlay1'=>$userlay1]);
        
    }
    
   
    public function getSearch(Request $request)
    {
        $listTin = Tin::where('tieu_de','like','%'.$request->search.'%')->get();
        return view('home1',['title'=>'trang chủ'],['listTin'=>$listTin]);

    }
    public function XoaBaiininfo($id)
    {
        $XoaBaiininfo= Tin::find($id);
        if(empty($XoaBaiininfo)){
            return "Không bài viết id: {$id}";
        }
        $XoaBaiininfo->delete();
        return redirect()->route('info');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('them-moi-tin',['title'=>'dang-tin']);
    }
    public function ShowSuaTin($id)
    {
        $thongtinTin = Tin::find($id);
        return view('sua-tin',['title'=>'sua-thong-tin'],['thongtinTin'=>$thongtinTin]);
    }
    public function CapNhatThongTin(Request $request, $id)
    {
        $thongtinTin = Tin::find($id);
        $thongtinTin->loai_tin=$request->loai_tin;
        $thongtinTin->tieu_de=$request->tieu_de;
        $check= $request->hasFile('file') ? true: false;
        if ($check == true)
        {
            $file = $request->file('file');
            $destination_Path = public_path('image/timdo');
            $file_Name=$file->getClientOriginalName();
            $file->move($destination_Path,$file_Name);
        }
       else
       {
          $file_Name= $thongtinTin->file;
       }
        $thongtinTin->file=$file_Name;
        $thongtinTin->thoi_gian=$request->thoi_gian;
        $thongtinTin->tinh_thanh_pho=$request->tinh_thanh_pho;
        $thongtinTin->lien_lac=$request->lien_lac;
        $thongtinTin->noi_dung=$request->noi_dung;
        $thongtinTin->save();
        return  redirect()->route('info');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       // $quanTriVien = new QuanTriVien;
       // $quanTriVien->ten_dang_nhap ='Admin';
       // $quanTriVien->mat_khau='123456';
       // $quanTriVien->ho_ten='Nguyen Van A';
        //$quanTriVien->save();
        if ($request->isMethod('post'))
        {
            $validator = Validator::make($request->all(),
            [
                'tieu_de'=> 'required',
                'thoi_gian'=>'required|date',
                'lien_lac'=>'required|min:6|max:100',
                'file'=> 'image|mimes:jpg,jpeg,png,gif',
                
                
            ],
                [
                    'tieu_de.required' =>'Tiêu đề không được để trống',
                    'thoi_gian.required' =>'Phải có thời gian',
                    'lien_lac.required' => 'Phải điền thông tin liên lạc'
                ]
                // [
                //     'username.required'=>' Tai khoan phai chua 6 den 20 ky tu',
                //     'email.required'=> ' Ban phai nhap email',
                //     'password.required'=> ' Mat khau phai chua 6 den 20 ky tu',
                //     'avatar.image'=> ' Tep avatar phai la hinh anh',
                //     'avatar.mimes'=> ' Tep avatar phai co duoi .jpg,jpeg,png,gif',
                //     'confirmpassword.same' =>' Xac nhan mat khau phai trung voi mat khau',
                //     'name.alpha'=> ' Ten phai dung ky tu chu cai va khong co khoang trang'
                // ]
    );
            if ($validator->fails())
            {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
          $check= $request->hasFile('file') ? true: false;
            if ($check == true)
            {
                $file = $request->file('file');
                $destination_Path = public_path('image/timdo');
                $file_Name=$file->getClientOriginalName();
                $file->move($destination_Path,$file_Name);
            }
            else
            {
                $file_Name='none.jpg';
            }

                $aidi = Auth::user()->id;
                $newTin= new Tin();
                $newTin->loai_tin=$request->loai_tin;
                $newTin->tieu_de=$request->tieu_de;
                $newTin->tinh_thanh_pho=$request->tinh_thanh_pho;
                $newTin->thoi_gian=$request->thoi_gian;
                $newTin->file=$file_Name;
                $newTin->lien_lac=$request->lien_lac; 
                $newTin->noi_dung=$request->noi_dung;
                $newTin->user_id=$aidi;
                $newTin->save();
                return redirect()->route('home')->with('message','Dang tin thanh cong');
            
           
        } 
        
    
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
