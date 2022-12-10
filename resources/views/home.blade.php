@extends('main')
@section('content')

<style>
 .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
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
}


</style>
@include('sweetalert::alert')
<div class = "row">
@foreach($listTin as $Tin)  

<div class="col-md-4" >
<a href="{{route('laytin',['id'=> $Tin->id])}}" >
                                        <div onclick="document.location = '/post/5006'" style="cursor: pointer; background-color: white; border-radius: 8px">
                        <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                            <div class="property-thumb" style="height: 250px !important;">
                                <img src="{{asset('image/timdo/'. $Tin->file)}}" alt="" style="height: 150%">
                                      
                                    </div>
                                                            </div>
                            <div class="d-flex flex-column" style="padding: 20px">
                                <h6 style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: Ellipsis;
                                    max-height: 44px;
                                    margin: 5px 0px 10px;
                                ">{{$Tin->tieu_de}}  </h6>
                                <div class="d-flex justify-content-between">
                                    <div>
                                    <img src="image/city.png" width="14" height="14">
                                        <span style="font-size: 12px">{{$Tin->tinh_thanh_pho}}</span>
                                    </div>
                                    @if ($Tin->loai_tin=='tìm thú cưng')
                                    <div>
                                        <img src="image/103717.png" width="14" height="14">
                                        <span style="font-size: 12px">{{$Tin->loai_tin}}</span>
                                    </div>
                                    @elseif ($Tin->loai_tin=='tìm đồ'||$Tin->loai_tin=='nhặt đồ')
                                    <div>
                                        <img src="image/lost.png" width="14" height="14">
                                        <span style="font-size: 12px">{{$Tin->loai_tin}}</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        
                    </div>
                    </a>
            </div>
          
            @endforeach 
           </div>
@endsection
