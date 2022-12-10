
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
                        <h4>Thông tin tài khoản</h4></div>
                        @include('alert')
                    <div class="card-body" style="margin-top: 25px;">
                            <form action="{{route('suathongtin',['id'=>Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="ivEZ7MkJ5kwx4H0ta3j2U4rzQ08rjcwDuSszKx6h">                            <div>
                                <label>Họ Tên:</label>
                                <input type="text" class="form-control" placeholder="Họ tên" name="name" value="{{Auth::user()->name}}" required="">
                            </div>
                            <br>
                            <div>
                                <label>Tên tài khoản:</label>
                                <input type="text" readonly="" class="form-control" placeholder="Username" name="username" value="">
                            </div>
                            <br>
                            <div>
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{Auth::user()->email}}" required="">
                            </div>
                            <br>
                            <div>
                                <label>Avatar: </label>
                                <input type="file" class="form-control " name="avatar" placeholder="Nếu muốn giữ nguyên avt hãy để trống">
                            </div>
                            <br>

                            <div>
                                <label>Địa chỉ:</label>
                                <textarea class="form-control"  name="dia_chi" id="demo" cols="30" rows="2" required="">{{Auth::user()->dia_chi}}</textarea>
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