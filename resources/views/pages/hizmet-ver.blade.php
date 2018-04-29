<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Hizmet Vermek İstiyorum | hizmet.guru</title>
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
    <meta property="og:title" content="Hizmet Vermek İstiyorum | hizmet.guru"/>
    <meta property="og:description" content="Hizmet, Hizmet Vermek isteyen kayıt sayfası."/>
    <meta property="og:image" content="https://www.hizmet.guru/images/facebook-hizmet-ver.jpg"/>
    <meta property="og:url" content="https://www.hizmet.guru/hizmet-ver"/>
    <meta property="og:site_name" content=""/>


</head>
<body>

<!-- Whatsapp -->
<div class="container-fluid text-center hidden-sm hidden-md hidden-lg whatsapp">
    <a href="whatsapp://send?phone=+905437228545&text=Merhabalar, Hizmet'te hizmet vermek için bilgi almak istiyorum.">
        Whatsapp İletişim
    </a>
</div>
<div class="clear"></div>
<!-- /Whatsapp -->

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
                    <a class="navbar-brand" href="index.html">Hizmet <span>Guru</span></a>
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
<section id="hero" class="hizmet-vermek-istiyorum">
    <div class="container text-center">
        <h1>Hizmet Vermek İstiyorum</h1>
        <p>
            İster hizmet almak isteyin, isterseniz de hizmet vermek! <br/>
            Burası tam size göre. Hadi başlayalım; alttakilerden birini seçin.
        </p>
    </div>
</section>
<!-- /Hero -->

<!-- Content -->
<section id="content" class="hizmet-ver">
    <div id="hizmet-ver-formu" class="container">
        <div class="row">
            <div class="col-md-12">

            </div>

            <form method="POST" action="/hizmet-ver-kayit" accept-charset="UTF-8" class="form-horizontal">
                {{ csrf_field() }}
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <!-- Kişisel Bilgiler -->
                        <div class="col-xs-12 col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> KİŞİSEL BİLGİLER</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="adsoyad" class="col-xs-12 col-sm-3 control-label">Ad ve
                                            Soyad</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control" id="adsoyad"
                                                   placeholder="Kimliğinizde yazdığı gibi"
                                                   style="text-transform:capitalize" name="adsoyad" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dogumtarihi" class="col-xs-12 col-sm-3 control-label">Doğum
                                            Tarihi</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control" id="dogumtarihi"
                                                   placeholder="Kimliğinizde yazdığı gibi" name="dogumtarihi"
                                                   type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Kişisel Bilgiler -->

                        <!-- İletişim Bilgileri -->
                        <div class="col-xs-12 col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-envelope fa-fw"></i> İLETİŞİM BİLGİLERİ</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="telefonnumarasi" class="col-xs-12 col-sm-3 control-label">Telefon
                                            Numarası</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control" id="telefonnumarasi"
                                                   placeholder="0(555)555-55-55" name="telefonnumarasi" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="eposta" class="col-xs-12 col-sm-3 control-label">E-Mail
                                            Adresi</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control" id="eposta" name="eposta"
                                                   placeholder="info@hizmet.guru" style="text-transform:lowercase"
                                                   name="eposta" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sehir" class="col-xs-12 col-sm-3 control-label">Yaşadığınız
                                            Şehir</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <select id="sehir" class="form-control" name="sehir">
                                                <option value="Adana">Adana</option>
                                                <option value="Adıyaman">Adıyaman</option>
                                                <option value="Afyon">Afyon</option>
                                                <option value="Ağrı">Ağrı</option>
                                                <option value="Amasya">Amasya</option>
                                                <option value="Ankara">Ankara</option>
                                                <option value="Antalya">Antalya</option>
                                                <option value="Artvin">Artvin</option>
                                                <option value="Aydın">Aydın</option>
                                                <option value="Balıkesir">Balıkesir</option>
                                                <option value="Bilecik">Bilecik</option>
                                                <option value="Bingöl">Bingöl</option>
                                                <option value="Bitlis">Bitlis</option>
                                                <option value="Bolu">Bolu</option>
                                                <option value="Burdur">Burdur</option>
                                                <option value="Bursa">Bursa</option>
                                                <option value="Çanakkale">Çanakkale</option>
                                                <option value="Çankırı">Çankırı</option>
                                                <option value="Çorum">Çorum</option>
                                                <option value="Denizli">Denizli</option>
                                                <option value="Diyarbakır">Diyarbakır</option>
                                                <option value="Edirne">Edirne</option>
                                                <option value="Elazığ">Elazığ</option>
                                                <option value="Erzincan">Erzincan</option>
                                                <option value="Erzurum">Erzurum</option>
                                                <option value="Eskişehir">Eskişehir</option>
                                                <option value="Gaziantep">Gaziantep</option>
                                                <option value="Giresun">Giresun</option>
                                                <option value="Gümüşhane">Gümüşhane</option>
                                                <option value="Hakkari">Hakkari</option>
                                                <option value="Hatay">Hatay</option>
                                                <option value="Isparta">Isparta</option>
                                                <option value="Mersin">Mersin</option>
                                                <option value="İstanbul (Anadolu Yakası)">İstanbul (Anadolu Yakası)
                                                </option>
                                                <option value="İstanbul (Avrupa Yakası)">İstanbul (Avrupa Yakası)
                                                </option>
                                                <option value="İzmir">İzmir2</option>
                                                <option value="Kars">Kars</option>
                                                <option value="Kastamonu">Kastamonu</option>
                                                <option value="Kayseri">Kayseri</option>
                                                <option value="Kırklareli">Kırklareli</option>
                                                <option value="Kırşehir">Kırşehir</option>
                                                <option value="Kocaeli">Kocaeli</option>
                                                <option value="Konya">Konya</option>
                                                <option value="Kütahya">Kütahya</option>
                                                <option value="Malatya">Malatya</option>
                                                <option value="Manisa">Manisa</option>
                                                <option value="K.Maraş">K.Maraş</option>
                                                <option value="Mardin">Mardin</option>
                                                <option value="Muğla">Muğla</option>
                                                <option value="Muş">Muş</option>
                                                <option value="Nevşehir">Nevşehir</option>
                                                <option value="Niğde">Niğde</option>
                                                <option value="Ordu">Ordu</option>
                                                <option value="Rize">Rize</option>
                                                <option value="Sakarya">Sakarya</option>
                                                <option value="Samsun">Samsun</option>
                                                <option value="Siirt">Siirt</option>
                                                <option value="Sinop">Sinop</option>
                                                <option value="Sivas">Sivas</option>
                                                <option value="Tekirdağ">Tekirdağ</option>
                                                <option value="Tokat">Tokat</option>
                                                <option value="Trabzon">Trabzon</option>
                                                <option value="Tunceli">Tunceli</option>
                                                <option value="Şanlıurfa">Şanlıurfa</option>
                                                <option value="Uşak">Uşak</option>
                                                <option value="Van">Van</option>
                                                <option value="Yozgat">Yozgat</option>
                                                <option value="Zonguldak">Zonguldak</option>
                                                <option value="Aksaray">Aksaray</option>
                                                <option value="Bayburt">Bayburt</option>
                                                <option value="Karaman">Karaman</option>
                                                <option value="Kırıkkale">Kırıkkale</option>
                                                <option value="Batman">Batman</option>
                                                <option value="Şırnak">Şırnak</option>
                                                <option value="Bartın">Bartın</option>
                                                <option value="Ardahan">Ardahan</option>
                                                <option value="Iğdır">Iğdır</option>
                                                <option value="Yalova">Yalova</option>
                                                <option value="Karabük">Karabük</option>
                                                <option value="Kilis">Kilis</option>
                                                <option value="Osmaniye">Osmaniye</option>
                                                <option value="Düzce">Düzce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sifre" class="col-xs-12 col-sm-3 control-label">Şifre</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input class="form-control" id="sifre" placeholder=""
                                                   style="text-transform:lowercase" name="sifre" type="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /İletişim Bilgileri -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="row">
                        <!-- Hizmet Vermek İstediği Alanlar -->
                        <div class="col-xs-12 col-sm-12">
                            <div id="hizmet-sec" class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-suitcase fa-fw"></i> HİZMET VERMEK
                                        İSTEDİĞİNİZ KONULAR</h3>
                                </div>
                                <div class="panel-body">
                                    <p>Seçim yapmak için kutucuklara tıklayın.</p>


                                    <div class="checkbox ev-temizligi col-xs-4 col-sm-4">
                                        <input id="ev-temizligi" class="hidden" name="hizmetler[]" type="checkbox"
                                               value="1">
                                        <label for="ev-temizligi">EV TEMİZLİĞİ</label>
                                    </div>

                                    <div class="checkbox ofis-temizligi col-xs-4 col-sm-4">
                                        <input id="ofis-temizligi" class="hidden" name="hizmetler[]" type="checkbox"
                                               value="2">
                                        <label for="ofis-temizligi">OFİS TEMİZLİĞİ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Hizmet Vermek İstediği Alanlar -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="row text-center form-gonder">


                        <button type="submit" class="btn btn-mavi">KAYDI TAMAMLA</button>
                    </div>
                </div>
            </form>
        </div>
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

<script src="plugins/jquery-inputmask/jquery.maskedinput.js"></script>
<script>
    jQuery(function ($) {
        $("#dogumtarihi").mask("99-99-9999");
        $("#telefonnumarasi").mask("0(999)999-99-99");
    })
</script>

<script>
    function cokyakinda() {
        alert('Çok yakında! Dilerseniz Hizmet Vermek İstiyorum sayfasını inceleyebilirsiniz.')
    }
</script>

</body>

<!-- Mirrored from www.saatlikhizmet.com/hizmet-vermek-istiyorum by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2018 13:51:58 GMT -->
</html>
