@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>Favoriler</h1>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')
    <?php

    ?>

    <section class="content">
        <section class="block">
            <div class="container">
                <!--============ Section Title===================================================================-->
                <div class="section-title clearfix">

                    <div class="float-right d-xs-none thumbnail-toggle">
                        <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="masonry" data-parent-class="authors">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#" class="change-class" data-change-from-class="masonry" data-change-to-class="list" data-parent-class="authors">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>
                </div>
                <!--============ Items ==========================================================================-->
                <div class="authors masonry items grid-xl-4-items grid-lg-4-items grid-md-4-items">

                    @foreach( $favorite_data as $one)
                    <div class="item author">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="http://hizmet.site/satici-profil/{{$one->seller_id}}" class="title">{{$one->name}}</a>
                                </h3>
                                <a href="http://hizmet.site/satici-profil/{{$one->seller_id}}" class="image-wrapper background-image">

                                    @if(!empty($one->logo))
                                        <img src="http://hizmet.site/{{$one->logo}}" alt="" />
                                    @else
                                        <img src="http://hizmet.site/assets/img/author-02.jpg" alt="" />
                                    @endif
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">{{$one->district}}, {{$one->province}}</a>
                            </h4>

                            <!--end meta-->
                            <div class="description">
                                <p>{{$one->about_us}}</p>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Email</figure>
                                        <aside>{{$one->email}}</aside>
                                    </li>
                                    <li>
                                        <figure>Telefon</figure>
                                        <aside>{{$one->phone}}</aside>
                                    </li>
                                </ul>
                            </div>
                            <!--end addition-info-->
                            <a href="http://hizmet.site/satici-profil/{{$one->seller_id}}" class="detail text-caps underline">Detay</a>
                        </div>
                    </div>
                    <!--end item-->
                    @endforeach

                </div>
                <!--============ End Items ======================================================================-->

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