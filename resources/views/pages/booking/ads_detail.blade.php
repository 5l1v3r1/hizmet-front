@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container clearfix">
            <div class="float-left float-xs-none">
                <h1>{{$ads_data->booking_title}}
                    <span class="tag">Tek sefer</span>
                </h1>
                <h4 class="location">
                    <a href="#">{{$ads_data->district}}, {{$ads_data->province}}</a>
                </h4>
            </div>
            <div class="float-right float-xs-none price">
                <div class="number"></div>
                <div class="id opacity-50">
                    <strong>ID: </strong>{{$ads_data->id}}
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')
    <?php
    $offer=DB::table('booking_offers')
        ->where('booking_id', $ads_data->id)
        ->where('assigned_id', Auth::user()->id)
        ->first();
    ?>
    <section class="content">
        <section class="block">

            <!--end Gallery Carousel-->
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <!--============ Listing Detail =============================================================-->
                    <div class="col-md-8">
                        <!--Description-->
                        <section>
                            <h2>Açıklama</h2>
                            <p>
                                {{$ads_data->detail}}
                            </p>
                        </section>
                        <!--end Description-->
                        <!--Details-->
                        <section>
                            <h2>Detaylar</h2>
                            <dl class="columns-2">
                                <dt>Eklenme Tarihi</dt>
                                <dd>{{date('d-m-Y', strtotime($ads_data->booking_date))}}</dd>
                                <dt>Tip</dt>
                                <dd>Tek sefer</dd>
                                <dt>Durum</dt>
                                <dd>@if($ads_data->status!=0)Uygun  @else uygun değil @endif</dd>
                                <dt>Boyut</dt>
                                <dd>{{$ads_data->m2}} M2</dd>
                                <dt>Oda</dt>
                                <dd>{{$ads_data->room_number}}+1</dd>
                            </dl>
                        </section>
                        <!--end Details-->
                        <!--Location-->
                        <section>
                            <h2>Konum</h2>
                            <p>
                                {{$ads_data->location}} - {{$ads_data->district}} - {{$ads_data->province}}
                            </p>
                        </section>
                        <!--end Location-->
                        <!--Features-->


                        <hr />


                    </div>
                    <!--============ End Listing Detail =========================================================-->

                    <!--============ Sidebar ====================================================================-->
                    <div class="col-md-4">
                        <aside class="sidebar">
                            <!--Author-->
                            <section>
                                <h2>İş Veren</h2>
                                <div class="box">
                                    <div class="author">
                                        <div class="author-image">
                                            <div class="background-image">
                                                <img src="../assets/img/author-01.jpg" alt="" />
                                            </div>
                                        </div>
                                        <!--end author-image-->
                                        <div class="author-description">
                                            <a href="../musteri-profil/{{$ads_data->client_id}}" class="text-uppercase"><h3>{{$ads_data->cname}}</h3> </a>
                                            <div class="rating" data-rating="{{$rate}}"></div>
                                            <a href="../musteri-profil/{{$ads_data->client_id}}" class="text-uppercase">Önceki siparişleri
                                            </a>
                                        </div>
                                        <!--end author-description-->
                                    </div>
                                    <hr />
                                    @if( empty($offer))
                                    @if(Auth::user()->type==2)
                                    <!--============teklif =========================================================-->
                                    <form method="POST" action="/teklif-ver" accept-charset="UTF-8" class="form-horizontal">
                                        {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="price" class="col-form-label">Fiyat</label>
                                        <input name="price" type="number" class="form-control" id="price" placeholder="xxx TL" />
                                    </div>
                                    <!--end form-group-->
                                        <input type="hidden" name="booking_id" value="{{$ads_data->id}}">
                                        <input type="hidden" name="client_id" value="{{$ads_data->client_id}}">
                                    <div class="form-group">
                                        <label for="message" class="col-form-label">Mesaj</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Teklifinizle ilgili detayları buraya yazınız."></textarea>
                                    </div>
                                    <!--end form-group-->
                                    <button type="submit" class="btn btn-primary">Teklif Ver</button>
                                    </form>
                                    @endif
                                    @endif
                                    @if( !empty($offer))
                                    <hr />
                                    <!--============teklif =========================================================-->
                                        <button type="submit" class="btn btn-primary">Teklif Verildi</button>

                                    <hr />



                                    <dl>
                                        <dt>Telefon</dt>
                                        <dd>{{$ads_data->phone}}</dd>
                                        <dt>Email</dt>
                                        <dd>{{$ads_data->email}}</dd>
                                    </dl>
                                    <!--end author-->
                                        <form method="POST" action="/mesaj-gonder" accept-charset="UTF-8" class="form-horizontal">
                                            {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name" class="col-form-label">İsim</label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="İsminiz" value="{{Auth::user()->name}}" disabled="" />
                                    </div>
                                    <!--end form-group-->

                                    <div class="form-group">
                                        <label for="message" class="col-form-label">Mesaj</label>
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder=" Hizmet verene mesajınız."></textarea>
                                    </div>
                                            <input type="hidden" name="client_id" value="{{$ads_data->client_id}}">
                                    <!--end form-group-->
                                    <button type="submit" class="btn btn-primary">Gönder</button>
                                    </form>
                                    @endif
                                </div>
                                <!--end box-->
                            </section>
                            <!--End Author-->
                        </aside>
                    </div>
                    <!--============ End Sidebar ================================================================-->
                </div>
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
@endsection

@section('page_level_js')


    <script>
        var latitude = 51.511971;
        var longitude = -0.137597;
        var markerImage = "../assets/img/map-marker.png";
        var mapTheme = "light";
        var mapElement = "map-small";
        simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
    </script>
@endsection

@section('page_document_ready')

@endsection