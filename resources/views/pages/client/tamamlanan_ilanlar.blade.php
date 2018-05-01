@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>İlanlarım</h1>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav flex-column side-nav">

                            @if(Auth::user()->type==1)
                                <a class="nav-link icon " href="./profil">
                                    <i class="fa fa-user"></i>Profilim
                                </a>
                                <a class="nav-link icon " href="./ilanlarim">
                                    <i class="fa fa-heart"></i>İlanlarım
                                </a>
                                <a class="nav-link icon" href="./teklifler">
                                    <i class="fa fa-star"></i>Teklifler
                                </a>
                                <a class="nav-link icon" href="./islemdeki-ilanlarim">
                                    <i class="fa fa-recycle"></i>İşlemdeki İlanlarım
                                </a>
                                <a class="nav-link icon active" href="./tamamlanan-ilanlarim">
                                    <i class="fa fa-recycle"></i>Tamamlanan İlanlarım
                                </a>
                                <a class="nav-link icon" href="./sifre-degistir">
                                    <i class="fa fa-recycle"></i>Şifre Değiştir
                                </a>
                                <a class="nav-link icon" href="./favorilerim">
                                    <i class="fa fa-recycle"></i>Favorilerim
                                </a>

                                <hr>
                                <a class="nav-link icon" href="./talep-olustur">
                                    <i class="fa fa-recycle"></i>Destek Talebi Oluştur
                                </a> <a class="nav-link icon" href="./taleplerim">
                                    <i class="fa fa-recycle"></i>Destek Taleplerim
                                </a>
                            @endif
                            @if(Auth::user()->type==2)
                                <a class="nav-link icon active" href="./profil">
                                    <i class="fa fa-user"></i>Profilim
                                </a>
                                <a class="nav-link icon" href="./verilen-teklifler">
                                    <i class="fa fa-heart"></i>Verilen Teklifler
                                </a>
                                <a class="nav-link icon" href="./onaylanan-teklifler">
                                    <i class="fa fa-star"></i> Onaylanan Teklifler
                                </a>
                                    <a class="nav-link icon active" href="./tamamlanan-teklifler">
                                        <i class="fa fa-star"></i>Tammalanan Teklifler
                                    </a>
                                <a class="nav-link icon" href="./sifre-degistir">
                                    <i class="fa fa-recycle"></i>Şifre Değiştir
                                </a>
                                    <hr>
                                    <a class="nav-link icon" href="./talep-olustur">
                                        <i class="fa fa-recycle"></i>Destek Talebi Oluştur
                                    </a> <a class="nav-link icon" href="./taleplerim">
                                        <i class="fa fa-recycle"></i>Destek Taleplerim
                                    </a>
                            @endif
                        </nav>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <!--============ Section Title===================================================================-->
                        <div class="section-title clearfix">
                            <div class="float-left float-xs-none">
                                <label class="mr-3"></label>


                            </div>
                            <div class="float-right d-xs-none thumbnail-toggle">
                                <a href="#" class="change-class" data-change-from-class="list"
                                   data-change-to-class="grid" data-parent-class="items">
                                    <i class="fa fa-th"></i>
                                </a>
                                <a href="#" class="change-class active" data-change-from-class="grid"
                                   data-change-to-class="list" data-parent-class="items">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </div>
                        </div>
                        <!--============ Items ==========================================================================-->

                        <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                            @foreach($ads_data as $one)
                                <div class="item">
                                    <div class="ribbon-featured">Yeni</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">{{$one->service_id}}</a>
                                                <a href="./ilan/{{$one->id}}" class="title">{{$one->booking_title}}</a>

                                            </h3>
                                            <a href="./ilan/{{$one->id}}" class="image-wrapper background-image">
                                                <?php
                                                $image = DB::table('booking')
                                                    ->Join('booking_images','booking_images.booking_id','booking.id')
                                                    ->where('booking.id',$one->id)
                                                    ->first();
                                                ?>
                                                @if(!empty($image->image_adress))
                                                    <img src="http://hizmet.site/{{$image->image_adress}}" alt="" />
                                                @else
                                                    <img src="./assets/img/image-01.jpg" alt="" />
                                                @endif
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">{{$one->district."-".$one->province}}</a>
                                        </h4>
                                        <div class="price">{{$one->m2}} M2</div>
                                        <div class="admin-controls">
                                            <a href="/ilan-duzenle/{{$one->booking_id}}">
                                                <i class="fa fa-pencil"></i>Düzenle
                                            </a>
                                            <a href="/ilan-gizle/{{$one->booking_id}}/{{$one->visibled}}" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>
                                                @if($one->visibled ==0) Gizle @else Göster @endif
                                            </a>
                                            <a href="/ilan-sil/{{$one->booking_id}}" class="ad-remove">
                                                <i class="fa fa-trash"></i>Sil
                                            </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>{{$one->detail}}</p>
                                        </div>
                                        <!--end description-->
                                        <a href="./ilan/{{$one->id}}" class="detail text-caps underline">İlanı Göster</a>
                                    </div>
                                </div>
                                <!--end item-->
                            @endforeach

                        </div>
                        <!--end items-->
                    </div>
                    <!--end col-md-9-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
    <!--end content-->
@endsection

@section('page_level_js')


@endsection

@section('page_document_ready')

@endsection