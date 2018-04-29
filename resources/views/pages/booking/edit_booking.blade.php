@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>İlan Oluştur</h1>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')

    <section class="content">
        <section class="block">
            <div class="container">

                <form method="POST" action="/ilan-duzenle/{{$booking_data->id}}" accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <section>
                        <h2>İlan Oluştur</h2>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="booking_title" class="col-form-label required"> İlan başlığı</label>
                                    <input name="booking_title" type="text" class="form-control" id="booking_title" placeholder="İlan Başlığı" value="{{$booking_data->booking_title}}"/>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-8-->

                        </div>
                    </section>
                    <!--end basic information-->

                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="room_number" class="col-form-label">Oda Sayısı</label>
                                    <input name="room_number" type="text" class="form-control" id="room_number" value="{{$booking_data->room_number}}" />
                                </div>
                                <!--end form-group-->
                            </div>

                            <!--end col-md-4-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="metrekare" class="col-form-label">Metre kare</label>
                                    <input name="metrekare" type="text" class="form-control" id="metrekare" value="{{$booking_data->m2}}" />
                                    <span class="input-group-addon">M2</span>
                                </div>
                                <!--end form-group-->
                            </div>

                        </div>
                        <!--end row-->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tarih" class="col-form-label">Tarih</label>
                                    <input name="tarih" type="text" class="form-control" id="tarih" value="{{date('d/m/Y', strtotime($booking_data->booking_date))}}"/>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="start_time" class="col-form-label">Başlangıç Saati</label>
                                    <input name="start_time" type="text" class="form-control" id="start_time" value="{{$booking_data->service_start}}" />
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="finish_time" class="col-form-label">Bitiş Saati</label>
                                    <input name="finish_time" type="text" class="form-control" id="finish_time" value="{{$booking_data->service_finish}}"/>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                        <div class="form-group">
                            <label for="detail" class="col-form-label">Diğer Detaylar</label>
                            <textarea name="detail" id="detail" class="form-control" rows="4">{{$booking_data->detail}}</textarea>
                        </div>
                        <!--end form-group-->
                    </section>


                    <section>
                        <h2>Konum</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city" class="col-form-label">İl</label>
                                    <input name="city" type="text" class="form-control" id="city" value="{{$booking_data->province}}"/>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ilce" class="col-form-label">İlçe</label>
                                    <input name="ilce" type="text" class="form-control" id="ilce" value="{{$booking_data->district}}"/>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-6-->
                        </div>
                        <!--end row-->
                        <div class="form-group">
                            <label for="adres" class="col-form-label">Adres</label>
                            <input name="adres" type="text" class="form-control" id="adres" placeholder="Adres Giriniz" value="{{$booking_data->location}}" />
                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <!--end form-group-->

                        <div class="map height-400px" id="map-submit"></div>
                        <input name="latitude" type="text" class="form-control" id="latitude" hidden="" />
                        <input name="longitude" type="text" class="form-control" id="longitude" hidden="" />
                    </section>

                    <section>
                        <h2>Gallery</h2>
                        <div class="file-upload-previews"></div>
                        <div class="file-upload">
                            <input type="file" name="files[]" class="file-upload-input with-preview" multiple="" title="Click to add files" maxlength="10" accept="gif|jpg|png" />
                            <span><i class="fa fa-plus-circle"></i>Resim Yüklemek İçin Tıklayınız</span>
                        </div>
                    </section>

                    <section class="clearfix">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary large icon float-right">Kaydet<i class="fa fa-chevron-right"></i></button>
                        </div>
                    </section>
                </form>
                <!--end form-submit-->
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