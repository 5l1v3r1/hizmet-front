@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>Teklifler</h1>
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
                                <a class="nav-link icon active" href="./profil">
                                    <i class="fa fa-user"></i>Profilim
                                </a>
                                <a class="nav-link icon" href="./ilanlarim">
                                    <i class="fa fa-heart"></i>İlanlarım
                                </a>
                                <a class="nav-link icon" href="./teklifler">
                                    <i class="fa fa-star"></i>Teklifler
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
                            @if(Auth::user()->type==2)
                                <a class="nav-link icon " href="./profil">
                                    <i class="fa fa-user"></i>Profilim
                                </a>
                                <a class="nav-link icon" href="./verilen-teklifler">
                                    <i class="fa fa-heart"></i>Verilen Teklifler
                                </a>
                                <a class="nav-link icon active" href="./onaylanan-teklifler">
                                    <i class="fa fa-star"></i>Onaylanan Teklifler
                                </a>
                                    <a class="nav-link icon" href="./tamamlanan-teklifler">
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
                                <label class="mr-3"> </label>


                            </div>
                            <div class="float-right d-xs-none thumbnail-toggle">
                                <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                    <i class="fa fa-th"></i>
                                </a>
                                <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </div>
                        </div>
                        <!--============ Items ==========================================================================-->
                        @foreach($offer_data as $one)
                            <div class="items list grid-xl-4-items grid-lg-3-items grid-md-2-items">
                                <div class="item">
                                    <div class="ribbon-featured">Onaylandı</div><br>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">{{$one->sname}}</a>
                                                <a href="/ilan/{{$one->id}}" class="title">{{$one->booking_title}}</a>
                                                <span class="tag">yeni</span>
                                            </h3>
                                            <a href="/ilan/{{$one->id}}" class="image-wrapper background-image">
                                                <img src="./assets/img/image-01.jpg" alt="" />
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Başvuran kişi {{$one->bas_ilce}}, {{$one->bas_il}}</a>
                                        </h4>
                                        <div class="price">{{$one->prices}} TL</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>{{$one->offer_date}}
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>{{$one->bas_name}}
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>{{$one->note}}</p>
                                        </div>
                                        <!--end description-->
                                        <a href="/teklif-tamamla/{{$one->bid}}" class="detail text-caps underline" style="right: 8rem;">Tamamla</a>
                                    </div>
                                </div>
                            </div>
                    @endforeach


                    <!--end item-->

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