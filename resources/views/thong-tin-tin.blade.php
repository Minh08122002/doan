@extends('main')
@section('content')
@foreach ($lay1 as $Tin)
<style>
    

</style>
<div class="row">
        <div class="post-detail">
            <div class="title font-weight-bold">
                <h2>{{$Tin->tieu_de}}</h2>
                <div class="d-flex align-items-end">
                    <div class="fb-share-button fb_iframe_widget" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;href=https%3A%2F%2F0711.vn%2Fpost%2F5035&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"><span style="vertical-align: bottom; width: 77px; height: 20px;"><iframe name="fb85fe878e1a9c" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v7.0/plugins/share_button.php?app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df6fa038cf41d5c%26domain%3D0711.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252F0711.vn%252Ffeb8f465e503c8%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2F0711.vn%2Fpost%2F5035&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey" style="border: none; visibility: visible; width: 77px; height: 20px;" class=""></iframe></span></div>
                </div>
                <hr>
            </div>
            <div class="row">
                                <div class="col-lg-6">
                    <section class="splide splide--slide splide--ltr splide--draggable is-active is-initialized" aria-label="Splide Basic HTML Example" style="margin-bottom: 24px" id="splide01" aria-roledescription="carousel">
    <div class="splide__track splide__track--slide splide__track--ltr splide__track--draggable" id="splide01-track" style="padding-left: 0px; padding-right: 0px;" aria-live="polite" aria-atomic="true">
        <ul class="splide__list" id="splide01-list" role="presentation" style="transform: translateX(0px);">
                                                <li class="splide__slide is-active is-visible" id="splide01-slide01" role="tabpanel" aria-roledescription="slide" aria-label="1 of 1" style="width: calc(100%);">
                        <img src="{{asset('image/timdo/'. $Tin->file)}}" style="max-height: 400px; width: 100%; object-fit: contain; border-radius: 8px">
                    </li>
                                    </ul>
    </div>
</section>
<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        var len = $('.splide__list .splide__slide').length;
        var isArrows = parseInt(len) > 1;
        var splide = new Splide('.splide', {
            arrows: isArrows
        });
        splide.mount();
    } );
</script>
                </div>
                <div class="col-lg-6">
                    <div class="properties-content-area wow fadeInUp" data-wow-delay="200ms">
                        <div class="properties-content-info">
                        <div style="display:inline;">
                                                                            
                          <img src="image/city.png" width="24px" height="24px" alt=""> {{$Tin->tinh_thanh_pho}}  
                           </div>

                            <div id="container" style="margin: 20px 0">
                                <div style="display:inline;">
                                                                            
                            <img src="image/103717.png" width="24px" height="24px" alt=""> {{$Tin->loai_tin}}  
                            </div>
                            </div>
                            <h5>Tin : <span>{{$Tin->loai_tin}}</span></h5>
                            <div>
                               {{$Tin->noi_dung}}
                               <p> Lien Lac :
                               
                            {{$Tin->lien_lac}}</p>
                            <p></p>
                            @if(Auth::check() == false)
                            <p>Đây là tin của : {{$userlay1->name}}</p>
                            <button type="button" class="btn btn-warning mt-15 w-65"><i class="icofont-mobile-phone icofont-1x"></i>Báo cáo</button>
                                @elseif(Auth::user()->id == $Tin->user_id)
                                <p>Đây là tin của bạn</p>
                               @else
                               <p>Đây là tin của : {{$userlay1->name}}</p>
                            <button type="button" class="btn btn-warning mt-15 w-65"><i class="icofont-mobile-phone icofont-1x"></i>Báo cáo</button>
                           
                            

                            @endif
                            </div>
                            <div class="properties-info" style="margin-top: 40px;">
                                <div class="user-avatar">
    <a href="/person/1" class="user-avatar-image">
       
    </a>
    
</div>
                                <p>
                                  
                                </p>
                            </div>
                            <div class="">
                                <a href="tel:0835.145.503">
                                    <button type="button" class="btn btn-warning mt-15 w-65"><i class="icofont-mobile-phone icofont-1x"></i>{{$Tin->lien_lac}}</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection