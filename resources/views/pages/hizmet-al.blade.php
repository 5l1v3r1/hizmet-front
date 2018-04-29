<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Hizmet Guru - Sipariş Formu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CSS -->
    <link href="plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <!-- Owl Carousel CSS -->
    <link href="plugins/owlcarousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" type="image/png" href="favicon.html"/>
    <script src="../code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>

    <meta name="google-site-verification" content="YtnnGmphKFV_AVip295oHw80UvlLfaDnYhkR8U8aJg0"/>
    <meta property="og:locale" content="tr_TR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Ekonomik temizlik - Sipariş formu"/>
    <meta property="og:description" content="Ev ve ofis temizliği siparişi vermek için bilgileri doldurunuz"/>
    <meta property="og:image" content=" "/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <link rel="stylesheet" type="text/css" href="plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="../cdn.jsdelivr.net/npm/sweetalert2%406.9.1/dist/sweetalert2.min.css"
          media="all"/>
</head>
<body>


<!-- Header -->
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anamenu"
                            aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Hizmet <span>Site</span></a>
                </div>

                <div class="collapse navbar-collapse" id="anamenu">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="/home">Anasayfa</a></li>
                        @if( empty(Auth::user())  )
                            <li><a href="/register">Kayıt</a></li>
                            <li><a href="/login">Giriş</a></li>
                        @endif

                        @if(!empty(Auth::user()))
                            <li><a href="/logout">Çıkış</a></li>

                        @endif


                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- /Header -->


<!-- Page -->
<!-- Hero -->
<section id="hero" class="hizmet-al-hero">
    <div class="container text-center">
        <h1>Hizmet Guru</h1>

        <p class="mouse-icon">
            <img src="images/mouse-icon.png" alt=""/>
            <span class="mouse-scroll"></span>
        </p>
    </div>
</section>
<!-- /Hero -->

<!-- Content -->
<section id="content" class="hizmet-al">

    <script>
        function adresGetir(lat, lng) {
            $.ajax({
                url: "https://www.saatlikhizmet.com/adresgetir.php",
                type: "POST",
                timeout: 10000,
                data: {lat: lat, lng: lng},
                success: function (response) {
                    $(".adres").val(response);
                },
                error: function (x, t, m) {
                    if (t === "timeout") {
                        swal({
                            title: "Hata!",
                            text: "İsteğiniz zaman aşımına uğradı, tekrar deneyin!",
                            confirmButtonText: "Tamam",
                            type: "error"
                        });
                    } else {
                        swal({title: "Hata!", text: t, confirmButtonText: "Tamam", type: "error"});
                    }
                }
            });
        }

        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 6
            });
            infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);

                    adresGetir(position.coords.latitude, position.coords.longitude);
                    $("#latlng").val(position.coords.latitude + "," + position.coords.longitude);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2pTmel03oVMfFpPX5Py9XGLtwrQUn4hs&amp;callback=initMap">
    </script>
    <div id="hizmet-al-formu" class="container">
        <input type="hidden" name="latlng" id="latlng"/>

        <!-- Hizmet Seçimi -->
        <div class="row">
            <form class="form-horizontal">
                <div class="col-xs-12 col-sm-12">
                    <div class="row">
                        <!-- Hizmet Seçimi -->
                        <div class="col-xs-12 col-sm-12">


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-suitcase fa-fw"></i> HİZMET ALMAK
                                        İSTEDİĞİNİZ KONU</h3>
                                </div>
                                <div class="panel-body">
                                    <p class="text-center">Seçim yapmak için kutucuklara tıklayın.</p>

                                    <div class="radio ev-temizligi col-xs-6 col-sm-2">
                                        <input id="ev-temizligi" name="hizmet-secimi" type="radio"
                                               class="hidden kategori-secme" value="ev-temizligi"/>
                                        <label for="ev-temizligi">
                                            Ev Temizliği
                                        </label>
                                    </div>


                                    <div class="radio ofis-temizligi col-xs-6 col-sm-2">
                                        <input id="ofis-temizligi" name="hizmet-secimi" type="radio"
                                               class="hidden kategori-secme" value="ofis-temizligi"/>
                                        <label for="ofis-temizligi">
                                            Ofis Temizliği
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Hizmet Seçimi -->
                    </div>
                </div>
            </form>
        </div>
        <!-- /Hizmet Seçimi -->

        <!-- Çocuk Bakımı Sayfası -->
        <div class="kategori-formu ev-temizligi-form row">
            <form method="POST" action="/siparis-tamamla" accept-charset="UTF-8" class="form-horizontal">
                {{ csrf_field() }}
                @if(empty(Auth::user()))
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Kişisel Bilgileri -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> KİŞİSEL BİLGİLERİNİZ</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="name" class="col-xs-12 col-sm-4 control-label">Adınız
                                                ve soyadınız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="name"
                                                       placeholder="Kimliğinizde yazdığı gibi" required name="name"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ilce" class="col-xs-12 col-sm-4 control-label"> Temizlik Yapılacak
                                                İlçe</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <select class="form-control" id="ilce" name="ilce">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="adres" class="col-xs-12 col-sm-4 control-label">Açık
                                                adresiniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                            <textarea class="form-control adres" cols="30" rows="8" required
                                                      name="adres" id="adres"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eposta" class="col-xs-12 col-sm-4 control-label">E-posta
                                                adresiniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="eposta" placeholder="" required
                                                       name="eposta" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eposta" class="col-xs-12 col-sm-4 control-label">Kayıt Olmak İçin Şifre Giriniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="sifre"  required
                                                       name="sifre" type="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefonNumarasi" class="col-xs-12 col-sm-4 control-label">Telefon
                                                numaranız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control telefonNumarasi" id="telefonNumarasi"
                                                       placeholder="" required name="telefonNumarasi" type="tel">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Kişisel Bilgileri -->
                        </div>
                    </div>
                @else
                <input type="hidden" name="client_id" value="{{Auth::user()->id}}">

                @endif


                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <!-- Hizmet Detayları -->
                        <div class="col-xs-12 col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> HİZMET İLE İLGİLİ DETAYLAR
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="eposta" class="col-xs-12 col-sm-4 control-label">İlan Başlığı *</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <input class="form-control" id="booking_name" placeholder="Örn. 2+1 ev temizliği" required
                                                   name="booking_name" type="text">
                                        </div>
                                    </div>
                                    <input type="hidden" name="service_id" value="1">
                                    <div class="form-group">
                                        <label for="ot_oda_sayisi" class="col-xs-12 col-sm-3 control-label">Oda
                                            Sayısı</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <select id="ot_oda_sayisi" class="form-control" name="ot_oda_sayisi">
                                                <option value="0">Seçmek İstemiyorum</option>
                                                <option value="1">1+1 yada 1+0</option>
                                                <option value="2">2+1</option>
                                                <option value="3">3+1</option>
                                                <option value="4">4+1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="metrekare" class="col-xs-12 col-sm-4 control-label">Kaç Metrekare</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <input id="metrekare" name="metrekare" class="form-control" placeholder="örn: 130"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hizmet_tarihi"
                                               class="col-xs-12 col-sm-3 control-label">Tarih</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <div id="et_hizmetTarih"></div>
                                            <input id="et_hizmet_tarihi" name="et_hizmet_tarihi" type="hidden">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="aciklama"
                                               class="col-xs-12 col-sm-4 control-label">Açıklama</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <textarea id="aciklama" name="aciklama" class="form-control"
                                                      placeholder="Lütfen temizlikle ilgili detayları yazınız istediğiniz yada istemediğiniz kısımlar."
                                                      cols="30" rows="8"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Hizmet Detayları -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="row text-center form-gonder">
                        <div class="checkbox sozlesme-kabul">


                        </div>
                        <input class="btn btn-mavi" type="submit" value="KAYDI TAMAMLA">
                    </div>
                </div>
            </form>
        </div>
        <!-- /ev temizliği Sayfası -->

        <!-- Ofis Temizliği -->
        <div class="kategori-formu ofis-temizligi-form row">
            <form method="POST" action="/siparis-tamamla" accept-charset="UTF-8" class="form-horizontal">
                {{ csrf_field() }}
                @if(empty(Auth::user()))
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Kişisel Bilgileri -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> KİŞİSEL BİLGİLERİNİZ</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="name" class="col-xs-12 col-sm-4 control-label">Adınız
                                                ve soyadınız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="name"
                                                       placeholder="Kimliğinizde yazdığı gibi" required name="name"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ilce" class="col-xs-12 col-sm-4 control-label"> Temizlik Yapılacak
                                                İlçe</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <select class="form-control" id="ilce" name="ilce">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="adres" class="col-xs-12 col-sm-4 control-label">Açık
                                                adresiniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                            <textarea class="form-control adres" cols="30" rows="8" required
                                                      name="adres" id="adres"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eposta" class="col-xs-12 col-sm-4 control-label">E-posta
                                                adresiniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="eposta" placeholder="" required
                                                       name="eposta" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="eposta" class="col-xs-12 col-sm-4 control-label">Kayıt Olmak İçin Şifre Giriniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="sifre"  required
                                                       name="sifre" type="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="telefonNumarasi" class="col-xs-12 col-sm-4 control-label">Telefon
                                                numaranız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control telefonNumarasi" id="telefonNumarasi"
                                                       placeholder="" required name="telefonNumarasi" type="tel">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Kişisel Bilgileri -->
                        </div>
                    </div>
                @else
                    <input type="hidden" name="client_id" value="{{Auth::user()->id}}">

                @endif
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <!-- Hizmet Detayları -->
                        <div class="col-xs-12 col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> HİZMET İLE İLGİLİ DETAYLAR
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="ot_ilan_basligi" class="col-xs-12 col-sm-3 control-label">İlan
                                            Başlığı</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control ot_ilan_basligi" id="booking_name" required
                                                   name="booking_name" type="text">
                                        </div>
                                        <input type="hidden" name="service_id" value="2">
                                    </div>
                                    <div class="form-group">
                                        <label for="ot_oda_sayisi" class="col-xs-12 col-sm-3 control-label">Oda
                                            Sayısı</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <select id="ot_oda_sayisi" class="form-control" name="ot_oda_sayisi">

                                                <option value="0">Seçmek istemiyorum</option>
                                                <option value="1">1+1</option>
                                                <option value="2">2+1</option>
                                                <option value="3">3+1</option>
                                                <option value="4">4+1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="metrekare" class="col-xs-12 col-sm-4 control-label">Kaç Metrekare</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <input id="metrekare" name="metrekare" class="form-control" placeholder="örn: 130"
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hizmet_tarihi"
                                               class="col-xs-12 col-sm-3 control-label">Tarih</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <div id="ot_hizmetTarih"></div>
                                            <input id="ot_hizmet_tarihi" name="ot_hizmet_tarihi" type="hidden">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ot_hizmet_baslagic_saati" class="col-xs-12 col-sm-4 control-label">Başlangıç
                                            ve Bitiş saati</label>
                                        <div class="col-xs-12 col-sm-4">
                                            <select id="" class="form-control" name="ot_hizmet_baslagic_saati">
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <select id="ot_hizmet_bitis_saati" class="form-control"
                                                    name="ot_hizmet_bitis_saati">
                                                <option value="08:00">08:00</option>
                                                <option value="08:30">08:30</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:30">09:30</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:30">10:30</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:30">11:30</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:30">12:30</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:30">13:30</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:30">14:30</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:30">15:30</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:30">16:30</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:30">17:30</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:30">18:30</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:30">19:30</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:30">20:30</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:30">21:30</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:30">22:30</option>
                                                <option value="23:00">23:00</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="ot_yer" class="col-xs-12 col-sm-4 control-label">Yer</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <input id="ot_yer" name="ot_yer" class="form-control" placeholder="Yer"
                                                   type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="ot_aciklama"
                                               class="col-xs-12 col-sm-4 control-label">Açıklama</label>
                                        <div class="col-xs-12 col-sm-8">
                                            <textarea id="aciklama" name="aciklama" class="form-control" cols="30"
                                                      rows="8"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Hizmet Detayları -->
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12">
                    <div class="row text-center form-gonder">

                        <div class="checkbox sozlesme-kabul">
                            <label>
                                <input type="checkbox"> kullanıcı sözleşmesini okudum ve kabul ediyorum
                            </label>
                        </div>

                        <button type="submit" class="btn btn-mavi">KAYDI TAMAMLA</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /Ofis Temizliği -->



    </div>
</section>
<!-- /Content -->

<!-- Bankalar -->
<section id="bankalar">
    <div class="container text-center">
        <img src="images/bankalar.png" class="img-responsive" alt="Saatlik Hizmet"/>
    </div>
</section>
<!-- /Bankalar -->
<!-- /Page -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4">
                <h3>HİZMETLERİMİZ</h3>
                <ul class="footer-list">
                    <li><a href="#">Ev Temizliği</a></li>
                    <li><a href="#">Ofis Temizliği</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3">
                <h3>BİLGİ</h3>
                <ul class="footer-list">
                    <li><a href="#">Ev Temizliği</a></li>
                    <li><a href="#">Ofis Temizliği</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>BİZE KATILIN</h3>
                <p>Bizden en güncel haberleri almak için bültenimize abone olun!</p>
                <form method="POST" action="/abone-ol" accept-charset="UTF-8" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1"><i
                                        class="fa fa-envelope fa-fw"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="E-Posta Adresinizi Yazınız"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-footer btn-block">Abone Ol</button>

                </form>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- jQuery JS -->

<!-- Bootstrap JS -->
<script src="plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<!-- Owl Carousel JS -->
<script src="plugins/owlcarousel/owl.carousel.js" type="text/javascript"></script>
<!-- App JS -->
<script src="js/app.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            center: true,
            nav: true,
            dots: false,
            responsive: {
                0: {items: 1},
                600: {items: 1},
                1000: {items: 3}
            },
            navText: ["<i class='fa fa-2x fa-caret-left fa-fw'></i>", "<i class='fa fa-2x fa-caret-right fa-fw'></i>"]
        });
    });
</script>

<script src="js/moment.js" type="text/javascript"></script>
<script src="js/moment-tr.js" type="text/javascript"></script>
<script src="plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="plugins/jquery-inputmask/jquery.maskedinput.js"></script>
<script src="../cdn.jsdelivr.net/npm/sweetalert2%406.9.1/dist/sweetalert2.min.js"></script>

<script>
    $("#cocukBakimiHizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('DD-MM-YYYY');
        $('#cocukBakimiHizmetTarihi').val(formatted_date);
    });
    $("#cocukBakimiHizmetTarih").datetimepicker({
        inline: true,
        format: 'DD-MM-YYYY',
        locale: 'tr',
        minDate: moment()
    });
    $("#liseOzelDersHizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('DD-MM-YYYY');
        $('#liseOzelDersHizmetTarihi').val(formatted_date);
    });
    $("#liseOzelDersHizmetTarih").datetimepicker({
        inline: true,
        format: 'DD-MM-YYYY',
        locale: 'tr',
        minDate: moment()
    });
    $("#oyunAblasiHizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('DD-MM-YYYY');
        $('#oyunAblasiHizmetTarihi').val(formatted_date);
    });
    $("#oyunAblasiHizmetTarih").datetimepicker({
        inline: true,
        format: 'DD-MM-YYYY',
        locale: 'tr',
        minDate: moment()
    });
    $("#oyunAblasiHizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('DD-MM-YYYY');
        $('#oyunAblasiHizmetTarihi').val(formatted_date);
    });
    $("#ot_hizmetTarih").datetimepicker({
        inline: true,
        format: 'DD-MM-YYYY',
        locale: 'tr',
        minDate: moment()
    }); $("#et_hizmetTarih").datetimepicker({
        inline: true,
        format: 'DD-MM-YYYY',
        locale: 'tr',
        minDate: moment()
    });
    $("#ot_hizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('YYYY-MM-DD');
        $('#ot_hizmet_tarihi').val(formatted_date);
    });
    $("#et_hizmetTarih").on('dp.change', function (event) {
        var formatted_date = event.date.format('YYYY-MM-DD');
        $('#ot_hizmet_tarihi').val(formatted_date);
    });
    $("#cocukBakimiHizmetBaslangicSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
    $("#cocukBakimiHizmetBitisSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
    $("#liseOzelDersBaslangicSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
    $("#liseOzelDersBitisSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
    $("#oyunAblasiHizmetiBaslangicSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
    $("#oyunAblasiHizmetiBitisSaati").datetimepicker({
        format: 'H:m',
        stepping: 15,
        locale: 'tr'
    });
</script>
<script src="plugins/jquery-inputmask/jquery.maskedinput.js"></script>
<script>
    jQuery(function ($) {
        $(".telefonNumarasi, .ot_tel").mask("0(999)999-99-99");
    })
</script>

<script>
    $(document).ready(function () {
        $('#hizmetTarih').on('dp.change', function (event) {
            var formatted_date = event.date.format('DD/MM/YYYY');
            $('#hizmetTarihi').val(formatted_date);
        });

        $('.kategori-formu').hide()
        $("#ev-temizligi").click(function () {
            $('.ev-temizligi-form').show()
            $('.ofis-temizligi-form').hide()
        });

        $("#ofis-temizligi").click(function () {
            $('.ev-temizligi-form').hide()
            $('.ofis-temizligi-form').show()
        });


    });
</script>
<script>
    var basari = false;

    if (basari) {
        swal({
            title: '<i>Başarılı</i>',
            type: 'success',
            html: jQuery('#basari').html(),
            showCloseButton: true,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Teşekkürler!',
        })
    }

    var otta = false;

    if (otta) {
        swal({
            title: '<i>Başarılı</i>',
            type: 'success',
            html: jQuery('#basari').html(),
            showCloseButton: true,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Teşekkürler!',
        })
    }

</script>


<script>
    function cokyakinda() {
        alert('Çok yakında! Dilerseniz Hizmet Vermek İstiyorum sayfasını inceleyebilirsiniz.')
    }
</script>

</body>


</html>
