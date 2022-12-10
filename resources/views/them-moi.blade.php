
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- @include('head')
 @if (session('message'))
 <span class ="aler alert-danger">
<strong> {{session('message')}}</strong>
 </span>
 @endif -->
 <style>
body {
  background-image: url('image/asdd.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="template/index2.html" class="h1"><b>Tìm Đồ Thất Lạc</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Đăng ký</p>
@include('alert')
<form action="{{ route('them-moi-tai-khoan')}}" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="text" name ="username"  class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="password" name="confirmpassword" class="form-control" placeholder="ConfirmPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="FullName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" name="avatar" class="form-control" placeholder="avatar">
        
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
            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>

      
      <p class="mb-0">
        <a href="{{ route('login')}}" class="text-center">Đăng nhập</a>
      </p>
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
