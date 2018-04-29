@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>İşlemdeki teklifler</h1>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')
    <section class="content">
        <section class="block">
            <div class="container">
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
                            <div class="ribbon-featured">Başvurular</div><br>
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
                                    <a href="/satici-profil/{{$one->cid}}">Başvuran kişi {{$one->bas_ilce}}, {{$one->bas_il}}</a>
                                </h4>
                                <div class="price">{{$one->prices}} TL</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>{{$one->offer_date}}
                                    </figure>
                                    <figure>
                                        <a href="/satici-profil/{{$one->cid}}">
                                            <i class="fa fa-user"></i>{{$one->bas_name}}
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>{{$one->note}}</p>
                                </div>
                                <!--end description-->
                                @if($one->status==4)
                                    <a href="/teklif-istamamla/{{$one->bid}}" class="detail text-caps underline" style="right: 12rem;">Tamamla</a>
                                    <a href="/teklif-kotu/{{$one->bid}}" class="detail text-caps underline">Olumsuz</a>

                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
@endsection

@section('page_level_js')


@endsection

@section('page_document_ready')

@endsection