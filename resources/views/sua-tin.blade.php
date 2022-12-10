
<!DOCTYPE html>
<html lang="en">
<head>
 @include('head')
 @if (session('message'))
 <span class ="aler alert-danger">
<strong> {{session('message')}}</strong>
 </span>
 @endif

</head>
<style>
body {
  background-image: url('image/asdd.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="template/index2.html" class="h1"><b>Tìm Đồ Thất Lạc</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sửa Tin</p>
@include('alert')

<form action="{{ route('acceptformsuatin',['id'=>$thongtinTin->id])}}" method="post" enctype="multipart/form-data"> 
<select name="loai_tin" value="Tìm Đồ" >
        <option name ="loai_tin" value="tìm đồ">Tìm đồ</option>
        <option name ="loai_tin" value="tìm thú cưng">Tìm thú cưng</option>
        <option name ="loai_tin" value="nhặt đồ">Nhặt đồ</option>
        </select>
        <br>
        <br>
         
        <div class="input-group mb-3">
          <input type="text" name ="tieu_de"  class="form-control" placeholder="Tiêu đề" value="{{$thongtinTin->tieu_de}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" name="thoi_gian" class="form-control" placeholder="Thời gian" value="{{$thongtinTin->thoi_gian}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="tinh_thanh_pho" class="form-control" placeholder="Tỉnh, thành phố" value="{{$thongtinTin->tinh_thanh_pho}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="text" name="lien_lac" class="form-control" placeholder="Liên lạc" value="{{$thongtinTin->lien_lac}}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        
        
        <div class="input-group mb-3">
          <textarea type="text" name="noi_dung" class="form-control" placeholder="Mô tả" rows="7" >{{$thongtinTin->noi_dung}}</textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-info"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" name="file" class="form-control" placeholder="avatar">
        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-image"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <label >
              
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sửa</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>

    
      <!-- /.social-auth-links -->

     
      <!-- <p class="mb-0">
        <a href="{{ route('login')}}" class="text-center">Đăng nhập</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
@include('footer')
</body>
</html>
