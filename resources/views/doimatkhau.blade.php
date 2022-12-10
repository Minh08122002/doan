
@extends('main')
@section('content')
@if (session('message'))
 <span class ="aler alert-danger">
<strong> {{session('message')}}</strong>
 </span>
 @endif

<div class="container">
        <nav aria-label="breadcrumb" class="mt-10">
   
</nav>
        <div class="row carousel-holder">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Đổi mật khẩu </h4></div>
                       
                    <div class="card-body" style="margin-top: 25px;">
                            <form action="{{route('acceptdoimatkhau',['id'=>Auth::user()->id])}}" method="POST" >
                           
                            
                            <div>
                                <label>Mật khẩu</label>
                                <input type="password"  class="form-control" placeholder="Mật khẩu" name="password" value="" required="">
                            </div>
                            <br>
                            <div>
                                <label>Mật khẩu mới</label>
                                <input type="password" class="form-control" placeholder="Mật khẩu mới" name="passwordnew"  required="">
                            </div>
                            <br>
                            
                            <div>
                                <label>Xác nhận</label>
                                <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="passwordcheck"  required="">
                            </div>
                            <br>
                            
                          
                            <div class="text-center">
                                <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;">Sửa
                                </button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
    @endsection