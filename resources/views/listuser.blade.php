@extends('main')
@section('content')

<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
          @foreach($dsNguoiDung as $User)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
              
                <div class="card-header text-muted border-bottom-0">
                <td><b>Id: </b> {{ $User->id }}</td>
                
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><td> Username:{{ $User->username }}</td></b></h2>
                      <p class="text-muted text-sm"><b>Password: </b> <td> {{ $User->password }}</td> </p>
                      <td><b>Tên: </b> {{ $User->name }}</td>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                      <li class="small"><span class="fa-li"><i class="fab fa-monero"></i></span> <td> <b>Email: </b>{{ $User->email }}</td></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><b>Địa chỉ: </b>  <td> {{ $User->dia_chi}}</td></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center"> <img src="{{asset('image/'. $User->avatar)}}" alt="" style="height: 25%">
                      <!--<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">-->
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                  
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Xem bài đăng
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{route('listuser_xoa',['nguoi_dung_id'=>$User->id])}}"
                onclick="removeRow(' . $User->id . ')">
                    <i class="fas fa-trash"></i>
                </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
             
              @for($temp = 0;$temp<$soluong/9;$temp++)
              <li class="page-item"><a class="page-link" href="{{ route('ds-listuser',['i'=>$temp*$dsNguoiDung->count()]) }}">{{$temp+1}}</a></li>
              @endfor
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
      
    </section>

@endsection

                
                
               
                
              
               
                