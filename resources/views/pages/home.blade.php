@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container">
            <h1 class="opacity-60 center">
                Yeteneklerine uygun ilanlar Aşağıda listelenmiştir.
            </h1>
        </div>
        <!--end container-->
    </div>
    <!--============ End Page Title =====================================================================-->
    <!--============ Hero Form ==========================================================================-->

@endsection



@section('content')
    @if(Auth::user()->type == 1)
        <meta http-equiv="refresh" content="0; url=http://hizmet.site/profil" />

    @endif


    <section class="content">


        <section class="block">
            <div class="container">
                <h2>Son İlanlar</h2>
                <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">

                    @foreach($ads_data as $one)
                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">{{$one->s_name}}</a>
                                    <a href="/ilan/{{$one->bid}}" class="title">{{$one->booking_title}}</a>
                                    <span class="tag">Yeni</span>
                                </h3>
                                <a href="/ilan/{{$one->bid}}" class="image-wrapper background-image">
                                    <?php
                                    $image = DB::table('booking')
                                        ->Join('booking_images','booking_images.booking_id','booking.id')
                                        ->where('booking.id',$one->bid)
                                        ->first();
                                    ?>
                                    @if(!empty($image->image_adress))
                                    <img src="http://hizmet.site/{{$image->image_adress}}" alt="" />
                                    @else
                                        <img src="./assets/img/image-04.jpg" alt="" />
                                    @endif
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">{{$one->ilce}} - {{$one->il}}</a>
                            </h4>
                            <div class="meta">
                                <figure>
                                    <i class="fa fa-calendar-o"></i>{{date('d-m-Y', strtotime($one->booking_date))}}
                                </figure>
                                <figure>
                                    <a href="#">
                                        <i class="fa fa-user"></i>{{$one->cname}}
                                    </a>
                                </figure>
                            </div>
                            <!--end meta-->
                            <div class="description">
                                <p>{{$one->detail}}</p>
                            </div>

                            <a href="/ilan/{{$one->bid}}" class="detail text-caps underline">Detay</a>
                        </div>
                    </div>
                    <!--end item-->
                    @endforeach

                </div>
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <!--============ End Recent Ads =========================================================================-->


        <section class="block">
            <div class="container">
                <div class="d-flex align-items-center justify-content-around">
                    <a href="#">
                        <img src="./assets/img/partner-1.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-2.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-3.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-4.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-5.png" alt="" />
                    </a>
                </div>
            </div>

    </section>

    </section>
    <!--end content-->
@endsection

@section('page_level_js')


@endsection

@section('page_document_ready')

@endsection