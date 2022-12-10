@extends('main')
@section('content')
<div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  
                    <div class="post">
                    @foreach($dsTin as $Tin)
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('image/'. $Tin->file)}}" alt="">
                        <span class="username">
                          <a href="#">{{ $Tin->user_name }}</a>
                          <a class="btn btn-danger btn-sm float-right " href="{{route('listpost_xoa',['id'=>$Tin->id])}}"
                onclick="removeRow(' . $Tin->id . ')">
                    <i class="fas fa-trash"></i>
                </a>
    
                        </span>
                        <span class="description">{{ $Tin->thoi_gian }}</span>
                      </div>
                      <div><b>{{ $Tin->tieu_de }}</b></div>
                      <div>Số Điện Thoại:{{ $Tin->lien_lac }}</div>
                      <p>
                      {{ $Tin->noi_dung }}
                      </p>
                      <div class="col-sm-6">
                          <img class="img-fluid" src="{{ $Tin->file }}" alt="Photo">
                        </div>
                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                        <a href="#" class="link-black text-sm">
                            <i class="fas fa-exclamation-triangle"></i> Report (5)
                          </a>
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    @endforeach
                    </div>
            

                    
                    
                  </div>
                  
                </div>
           
              </div>
    @endsection