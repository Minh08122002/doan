@extends('main')
@section('content')

<style>


.col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
}
.col, .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-auto, .col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-auto, .col-md, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md-auto, .col-sm, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
*, :after, :before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    font-family: Verdana,Roboto,Arial,sans-serif;
}
body {
    margin: 0;
    font-family: Work Sans,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #fd7e14;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: "Work Sans",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}
html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
*, :after, :before {
    box-sizing: border-box;
}
*, :after, :before {
    box-sizing: border-box;
}</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.css">
 
<div class="row">
            <div class="col-sm-3">
                <div class="text-center">
                <img src="{{asset('image/'. Auth::user()->avatar)}}" class="avatar img-circle img-thumbnail" alt="avatar" >
                    <h6>{{Auth::user()->name}}</h6>
                                            <a href="{{route('suainfo',['id'=>Auth::user()->id])}}"><i class="icofont-ui-edit">Chỉnh sửa</i></a>
                        <a href="{{route('doimatkhaumoi',['id'=>Auth::user()->id])}}"><i class="icofont-ui-password">Đổi mật khẩu</i></a>
                                    </div>
                <br>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Tìm đồ</strong></span> 0
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Nhặt đồ</strong></span> 0
                    </li>



                </ul>
                <br>
                <div class="card border-0">
                    <div class="card-body">
                        Social Media
                       
                       
                    </div>
                </div>
                <br>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.js"></script>
                <div class="card border-0 mb-4">
                    <form action="{{route('logout')}}">
                    <button id="click" type="submit" class="btn btn-warning" style="color: white;width: 100%">Đăng xuất</button>
                    </form>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        $('#click').on('click',function(){
                            swal({
                            title: "Are you sure?",
                            text: "Once deleted, you will not be able to recover this imaginary file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                            })
                            .then((willDelete) => {
                            if (willDelete) {
                                swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                                });
                            } else {
                                swal("Your imaginary file is safe!");
                            }
                            });
                        })
                    </script>
             
                </div>
            </div>
            <div class="col-sm-9">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Chưa duyệt</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Đã duyệt</a>


                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div>
                        <div class="container">
                        <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Xem</th>
                                <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Trạng thái</th>
                                    
                                    <th scope="col">Thời Gian</th>
                                    <th scope="col">Xóa,Sửa</th>
                                </thead>
                                @foreach($dstinchuaduyet as $Tin) 
                                <tbody>
                                    <tr>
                                    <td><button style=" background-color: blue;border: none;  text-align: center"><a href="{{route('laytin',['id'=> $Tin->id])}}" style="color: white;text-decoration: none">Xem </a></button> 
                                    <td>{{$Tin->tieu_de}}</td>
                                    <td>{{$Tin->noi_dung}}</td>
                                    @if($Tin->trang_thai == 0)
                                    <td><button style="background-color: #ccff33; border-radius: 2px; color: black;text-decoration: none; text-align: center;border: none;">Chưa duyệt</button></td>
                                    <td>{{$Tin->thoi_gian}}</td>
                                    @endif
                                    <td><button style=" background-color: red;border: none;  text-align: center"><a href="{{route('xoabaiuser',['id'=>$Tin->id])}}" style="color: black;text-decoration: none">Xóa bài </a></button>
                                    <button style=" background-color: yellow;border: none;  text-align: center"><a href="{{route('suatin',['id'=>$Tin->id])}}" style="color: black;text-decoration: none">Sửa bài </a></button> 
                                </td>
                                    
                                    </tr>
                                </tbody>
                                @endforeach
                        </table>
            
        </div>
    </div>
</div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div>
        <div class="container">
        <div class="row">
        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Xem</th>
                                    <th scope="col">Tiêu đề</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Trạng thái</th>
                                    
                                    <th scope="col">Thời Gian</th>
                                    <th scope="col">Xóa</th>
                                </thead>
                                @foreach($dstindaduyet as $Tin) 
                                <tbody>
                                    <tr>
                                    <td><button style=" background-color: blue;border: none;  text-align: center"><a href="{{route('laytin',['id'=> $Tin->id])}}" style="color: white;text-decoration: none">Xem </a></button> 
                                    <td>{{$Tin->tieu_de}}</td>
                                    <td>{{$Tin->noi_dung}}</td>
                                    @if($Tin->trang_thai == 1)
                                    <td><button style="background-color: #ccff33; border-radius: 2px; color: black;text-decoration: none; text-align: center;border: none;">Đã duyệt</button></td>
                                    <td>{{$Tin->thoi_gian}}</td>
                                    @endif
                                    <td><button style=" background-color: red;border: none;  text-align: center"><a href="{{route('xoabaiuser',['id'=>$Tin->id])}}" style="color: black;text-decoration: none">Xóa bài </a></button>
                                   
                                </td>
                                    
                                    </tr>
                                </tbody>
                                @endforeach
                        </table>
            
        </div>
    </div>
</div>
                    </div>



                </div>
            </div>
        </div>
        @endsection