
<!DOCTYPE html>
<html lang="en">
<head>
 @include('head')
</head>
<body class="hold-transition login-page" >
<div style="background-image: url('/image/background.png');">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="template/index2.html" class="h1"><b>Tìm Đồ</b>Thất Lạc</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Đăng Nhập Để Bắt Đầu</p>
@include('alert')
      <form action="login/store" method="post">
        <div class="input-group mb-3">
          <input type="email" name ="email"  class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>

      
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

</body>
</html>