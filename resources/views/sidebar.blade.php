 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.js"></script>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tìm Đồ Thất Lạc</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if (Auth::check())
          <img src="{{asset('image/'. Auth::user()->avatar)}}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('image/noname.jpg')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          @if (Auth::check())

          <a href="{{route('info')}}" class="d-block">{{Auth::user()->username}}</a>
          @else
          <a href ="{{ route('login')}}" class="d-block">#######</a>
          @endif
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <form action="{{route('homeSearch')}}" >
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" name='search' style="float:left">
        <button type ='submit' style="float:right; visibility: hidden;"></button>
          
          
        </form>
          
       

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              @if(Auth::check() && Auth::user()->trang_thai ==1)
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              
              <li class="nav-item">
                <a href="list" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lí Danh Mục</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Danh Mục</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
               Người Dùng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="listuser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lí Người Dùng</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Bài Đăng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="listpost" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lí Bài Đăng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Duyệt Bài Đăng</p>
                </a>
              </li>
            @elseif(Auth::check() && Auth::user()->trang_thai ==0 ) 
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trang Chủ</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{route('form-them-moi-tin')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Bài Đăng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lí Bài Đăng Cá Nhân</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logout')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng xuất</p>
                  
                </a>
              </li>
              @elseif(Auth::check()==false)
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
               Danh Mục
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('login')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Đăng nhập</p>
                </a>
              </li>
              @endif
              
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>