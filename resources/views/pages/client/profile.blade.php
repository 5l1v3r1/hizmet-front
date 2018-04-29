@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>Profil Sayfam</h1>
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
                                <a class="nav-link icon" href="./islemdeki-ilanlarim">
                                    <i class="fa fa-recycle"></i>İşlemdeki İlanlarım
                                </a>
                                <a class="nav-link icon" href="./tamamlanan-ilanlarim">
                                    <i class="fa fa-recycle"></i>Tamamlanan İlanlarım
                                </a>
                                <a class="nav-link icon" href="./sifre-degistir">
                                    <i class="fa fa-recycle"></i>Şifre Değiştir
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
                                        <i class="fa fa-star"></i>Onaylanan Teklifler
                                    </a>
                                    <a class="nav-link icon" href="./tamamlanan-teklifler">
                                        <i class="fa fa-star"></i>Tammalanan Teklifler
                                    </a>
                                    <a class="nav-link icon" href="./sifre-degistir">
                                        <i class="fa fa-recycle"></i>Şifre Değiştir
                                    </a>
                                @endif


                        </nav>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <form method="POST" action="/profil-duzenle" accept-charset="UTF-8" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>Üye Bilgileri</h2>

                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label required">Ad Soyad</label>
                                                    <input name="name" type="text" class="form-control" id="name"
                                                           placeholder="Adınız" value="{{$profile_data->name}}"
                                                           required=""/>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label required">Eposta
                                                        Adresi</label>
                                                    <input name="email" type="email" class="form-control" id="email"
                                                           placeholder="Eposta Adresiniz"
                                                           value="{{$profile_data->email}}" disabled/>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location" class="col-form-label required">İl</label>
                                                    <input name="il" type="text" class="form-control" id="il"
                                                           placeholder="İl" value="{{$profile_data->province}}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location" class="col-form-label required">İlçe</label>
                                                    <input name="ilce" type="text" class="form-control" id="ilce"
                                                           placeholder="İlce" value="{{$profile_data->district}}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="location" class="col-form-label required">Adresiniz</label>
                                            <input name="adres" type="text" class="form-control" id="adres"
                                                   placeholder="Your Location" value="{{$profile_data->location}}"/>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location" class="col-form-label required">Telefon
                                                        Numarası</label>
                                                    <input name="telefon" type="text" class="form-control" id="telefon"
                                                           placeholder="Telefon numarası"
                                                           value="{{$profile_data->phone}}"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location" class="col-form-label required">Doğum
                                                        Tarihi</label>
                                                    <input name="birthday" type="text" class="form-control"
                                                           id="birthday"
                                                           placeholder="Doğum Tarihi"
                                                           value="{{$profile_data->birthday}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="about" class="col-form-label">Hakkımda Yazısı</label>
                                            <textarea name="about" id="about" class="form-control"
                                                      rows="4">{{$profile_data->about_us}}</textarea>
                                        </div>
                                        <!--end form-group-->
                                    </section>

                                    <section>
                                        <h2>Sosyal Medya</h2>
                                        <div class="form-group">
                                            <label for="twitter" class="col-form-label">Twitter</label>
                                            <input name="twitter" type="text" class="form-control" id="twitter"
                                                   value="{{$social_data->twitter}}"/>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="facebook" class="col-form-label">Facebook</label>
                                            <input name="facebook" type="text" class="form-control" id="facebook"
                                                   value="{{$social_data->facebook}}"/>
                                        </div>
                                        <!--end form-group-->
                                    </section>
                                    <input type="hidden" name="client_id" value="{{$profile_data->id}}" >
                                    <section class="clearfix">
                                        <button type="submit" class="btn btn-primary float-right">Kaydet</button>
                                    </section>
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4">
                                    <div class="profile-image">
                                        <div class="image background-image">
                                            <img src="./assets/img/author-09.jpg" alt=""/>
                                        </div>
                                        <div class="single-file-input">
                                            <input type="file" id="user_image" name="user_image"/>
                                            <div class="btn btn-framed btn-primary small">Fotoğraf Yükle</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-md-3-->
                            </div>
                        </form>
                    </div>
                </div>
                <!--end row-->
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