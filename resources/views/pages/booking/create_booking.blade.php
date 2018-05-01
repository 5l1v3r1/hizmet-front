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

                <form method="POST" action="/ilan-olustur" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <section>
                    <h2>İlan Oluştur</h2>

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="booking_title" class="col-form-label required"> İlan başlığı</label>
                                <input name="booking_title" type="text" class="form-control" id="booking_title" placeholder="İlan Başlığı" />
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-8-->

                    </div>
                </section>
                <!--end basic information-->
                <section>
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Kategoriler</h2>
                            <div class="form-group">
                                <label for="submit-category" class="col-form-label">Kategori</label>
                                <select class="change-tab" data-change-tab-target="category-tabs" name="submit_category" id="submit-category" data-placeholder="Select Category">
                                    <option value="" />Kategori Seçiniz
                                    <option value="ev" />Ev temizliği
                                    <option value="ofis" />Ofis Temizliği
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <h2>Temizlik</h2>
                            <div class="form-slides" id="category-tabs">
                                <div class="form-slide default">
                                    <h3>Lütfen Kategori Seçiniz</h3>
                                </div>
                                <div class="form-slide" id="ev">
                                    <h3>Ev Temizliği</h3>
                                    <figure class="category-icon">
                                        <img src="./css/img/hizmetler/ev-temizligi-p.png" alt="" />
                                    </figure>
                                    <!--end category-icon-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="room_number" class="col-form-label">Oda Sayısı</label>
                                                <select name="et_room_number" id="room_number" data-placeholder="Seçiniz">
                                                    <option value="" />Seçiniz
                                                    <option value="1" />1+0 yada 1+1
                                                    <option value="2" />2+1
                                                    <option value="3" />3+1
                                                    <option value="4" />4+1
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <!--end col-md-4-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="metrekare" class="col-form-label">Metre kare</label>
                                                <input name="et_metrekare" type="text" class="form-control" id="metrekare" />
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
                                                <input name="et_tarih" type="date" class="form-control" id="tarih"/>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="start_time" class="col-form-label">Başlangıç Saati</label>
                                                <input name="et_start_time" type="time" class="form-control" id="start_time" />
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="finish_time" class="col-form-label">Bitiş Saati</label>
                                                <input name="et_finish_time" type="time" class="form-control" id="finish_time" />
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                    <div class="form-group">
                                        <label for="detail" class="col-form-label">Diğer Detaylar</label>
                                        <textarea name="et_detail" id="detail" class="form-control" rows="4"></textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end computers.form-slide-->

                                <div class="form-slide" id="ofis">
                                    <h3>Real Estate</h3>
                                    <figure class="category-icon">
                                        <img src="./css/img/hizmetler/ofis-temizligi-p.png" alt="" />
                                    </figure>
                                    <!--end category-icon-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="room_number" class="col-form-label">Oda Sayısı</label>
                                                <select name="ot_room_number" id="room_number" data-placeholder="Seçiniz">
                                                    <option value="" />Seçiniz
                                                    <option value="1" />1+0 yada 1+1
                                                    <option value="2" />2+1
                                                    <option value="3" />3+1
                                                    <option value="4" />4+1
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <!--end col-md-4-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="metrekare" class="col-form-label">Metre kare</label>
                                                <input name="ot_metrekare" type="text" class="form-control" id="metrekare" />
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
                                                <input name="ot_tarih" type="date" class="form-control" id="tarih"/>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="start_time" class="col-form-label">Başlangıç Saati</label>
                                                <input name="ot_start_time" type="time" class="form-control" id="start_time" />
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="finish_time" class="col-form-label">Bitiş Saati</label>
                                                <input name="ot_finish_time" type="time" class="form-control" id="finish_time" />
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                    <div class="form-group">
                                        <label for="detail" class="col-form-label">Diğer Detaylar</label>
                                        <textarea name="ot_detail" id="detail" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <!--end real_estate.form-slide-->


                            </div>
                            <!--end form-slides-->
                        </div>
                        <!--end col-md-8-->
                    </div>
                    <!--end row-->
                </section>


                <section>
                    <h2>Location</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city" class="col-form-label">İl</label>
                                <select name="city" id="city" data-placeholder="Select City">
                                    <option value="" />Seçiniz
                                    <option value="İstanbul" />İstanbul
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="street" class="col-form-label">İlçe</label>
                                <select data-placeholder="Select City" id="ilce" name="ilce">
                                    <option value="adalar">Avcılar</option>
                                    <option value="arnavutköy">Arnavutköy</option>
                                    <option value="ataşehir">Ataşehir</option>
                                    <option value="bağcılar">Bağcılar</option>
                                    <option value="bahçelievler">Bahçelievler</option>
                                    <option value="bakırköy">Bakırköy</option>
                                    <option value="başakşehir">Başakşehir</option>
                                    <option value="bayrampaşa">Bayrampaşa</option>
                                    <option value="beşiktaş">Beşiktaş</option>
                                    <option value="beykoz">Beykoz</option>
                                    <option value="beylikdüzü">Beylikdüzü</option>
                                    <option value="beyoğlu">Beyoğlu</option>
                                    <option value="büyükçekmece">Büyükçekmece</option>
                                    <option value="catalca">Çatalca</option>
                                    <option value="çekmeköy">Çekmeköy</option>
                                    <option value="esenler">Esenler</option>
                                    <option value="esenyurt">Esenyurt</option>
                                    <option value="fatih">Fatih</option>
                                    <option value="gaziosmanpaşa">Gaziosmanpaşa</option>
                                    <option value="güngören">Güngören</option>
                                    <option value="kadıköy">Kadıköy</option>
                                    <option value="kâğıthane">Kâğıthane</option>
                                    <option value="kartal">Kartal</option>
                                    <option value="küçükçekmece">Küçükçekmece</option>
                                    <option value="maltepe">Maltepe</option>
                                    <option value="pendik">Pendik</option>
                                    <option value="sancaktepe">Sancaktepe</option>
                                    <option value="sarıyer">Sarıyer</option>
                                    <option value="silivri">Silivri</option>
                                    <option value="sultanbeyli">Sultanbeyli</option>
                                    <option value="sultangazi">Sultangazi</option>
                                    <option value="şile">Şile</option>
                                    <option value="şişli">Şişli</option>
                                    <option value="tuzla">Tuzla</option>
                                    <option value="ümraniye">Ümraniye</option>
                                    <option value="üsküdar">Üsküdar</option>
                                    <option value="zeytinburnu">Zeytinburnu</option>
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                    <div class="form-group">
                        <label for="adres" class="col-form-label">Adres</label>
                        <input name="adres" type="text" class="form-control" id="adres" placeholder="Adres Giriniz" />
                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <!--end form-group-->

                    <div class="map height-400px" id="map-submit"></div>
                    <input name="latitude" type="text" class="form-control" id="latitude" hidden="" />
                    <input name="longitude" type="text" class="form-control" id="longitude" hidden="" />
                </section>

                <section>
                    <h2>Resim Gelerisi</h2>
                    <div class="file-upload-previews"></div>
                    <div class="file-upload">
                        <input type="file" name="files[]" title="Resim eklemek için tıklayınız" accept="gif|jpg|png" multiple  />

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