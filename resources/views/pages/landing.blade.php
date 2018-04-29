<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="{{ trans('global.description') }}">
    <meta name="keywords" content="{{ trans('global.description') }}">
    <title>Hizmet Guru | Hizmet Almaya Bugün Başla</title>

    <!-- Mobile Specific Metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons ================================================== -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">

    <!-- CSS ================================================== -->
    <!-- Mainly scripts -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Custom and plugin css -->
    <link rel="stylesheet" href="/js/plugins/sweetalert/sweetalert.css" >

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!--Custom css-->
    <link rel="stylesheet" href="/css/wif_custom_style.css">
    <link href="plugins/owlcarousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />

    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="İster hizmet al, ister hizmet ver | hizmet.me" />
    <meta property="og:description" content="Hizmet.me, her bütçeye uygun hizmet alan ve hizmet veren portalı." />
    <meta property="og:image" content="https://www.hizmet.site/images/facebook-anasayfa.jpg" />
    <meta property="og:url" content="https://www.hizmet.site" />
    <meta property="og:site_name" content="" />

    <!-- Page level javascript -->


<!-- CSRF Script -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>
<body>
<div id="wrapper">



    <div id="page-wrapper" class="gray-bg">
        <!-- Header -->
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anamenu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">Hizmet <span>.Site</span></a>
                        </div>

                        <div class="collapse navbar-collapse" id="anamenu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/home">Anasayfa</a></li>
                                @if( empty(Auth::user())  )
                                    <li><a href="/register">Kayıt</a></li>
                                    <li><a href="/login" >Giriş</a></li>
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

        <section id="hero">
            <div class="container text-center">
                <h1>Hizmet <span>.guru</span></h1>

                <p>
                    İster hizmet almak isteyin, isterseniz de hizmet vermek! <br />
                    Burası tam size göre. Hadi başlayalım; alttakilerden birini seçin.
                </p>
                <div class="col-sm-4 col-sm-offset-2">
                    <a href="hizmet-al" class="btn btn-block">HİZMET ALMAK İSTİYORUM</a>
                </div>
                <div class="col-sm-4">
                    <a href="hizmet-ver" class="btn btn-block active">HİZMET VERMEK İSTİYORUM</a>
                </div>
            </div>
        </section>
        <!-- /Hero -->

        <!-- Content -->
        <section id="content" >
            <!-- Slider -->
            <div id="slider" class="container">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <h3>HİZMET'İN AMACI</h3>
                        <p>
                            Her kesimden hizmet almak isteyen kişiler ile hizmet vermek isteyen kişileri ekonomik olarak buluşturmak. Hizmet almak ve hizmet vermek isteyen kişiler için müsait saat uyumsuzluğunu ortadan kaldırmak.
                        </p>
                    </div>
                    <div class="item">
                        <h3>HİZMET’E NEDEN <br /> İHTİYAÇ VAR?</h3>
                        <p>
                            Pratik, ekonomik,esnek hizmet alma ve hizmet etme saatleri, Çalışan içinde hizmet alan içinde ihtiyacı kadar çalışma ve ihtiyacı kadar hizmet alma imkanları sunar.
                        </p>
                    </div>
                    <div class="item">
                        <h3>Hizmet.guru'NİN AMACI</h3>
                        <p>
                            Her kesimden hizmet almak isteyen kişiler ile hizmet vermek isteyen kişileri ekonomik olarak buluşturmak. Hizmet almak ve hizmet vermek isteyen kişiler için müsait saat uyumsuzluğunu ortadan kaldırmak.
                        </p>
                    </div>
                    <div class="item">
                        <h3>ONAYLI PROFİLLER</h3>
                        <p>
                            Onaylı profiller ile güvenli şekilde hizmet alabilir veya hizmet verebilirsiniz. Onaylı profillerin gerçekliği tarafımızça kontrol edilmiş kişi ve kuruluşlardır. Böylece sizlere daha rahat ve güvenli bir iletişim platformu oluşturmayı hedefledik.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Slider -->

            <!-- Nasıl Çalışır -->
            <div id="nasil-calisir" class="container">
                <div class="col-sm-12 section-baslik">
                    <h2>NASIL ÇALIŞIR</h2>
                    <p>Hizmet.me'de Süreç Nasıl İşler?</p>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div id="hizli-kayit" class="col-xs-12 col-sm-7">
                            <h3>HIZLI KAYIT</h3>
                            <p>
                                Sizlere daha hızlı ve kaliteli hizmet verebilmek için kolay ve <br /> hızlı şekilde kayıt olabileceğiniz bir sistem oluşturduk.
                            </p>
                        </div>
                        <div id="kolay-anlatim" class="col-xs-12 col-sm-7">
                            <h3>KOLAY ANLATIM</h3>
                            <p>
                                İhtiyaçlarınızı en iyi şekilde anlatın ve doğru uzmanlara <br /> ulaşın diye sektöre özel formlar hazırladık.
                            </p>
                        </div>
                        <div id="en-uygun-hizmet" class="col-xs-12 col-sm-12">
                            <h3>EN UYGUN HİZMET</h3>
                            <p>
                                Siz en iyi hizmeti en uygun fiyata alın diye ihtiyaçlarınızı alanında <br /> uzman ekiplere iletiyoruz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Nasıl Çalışır -->
        </section>
        <!-- /Content -->

        <!-- Hizmetler -->
        <section id="hizmetler">
            <div class="container">
                <div class="col-sm-12 section-baslik">
                    <h2>HİZMETLERİMİZ</h2>
                    <p>Hızlıca faydalanabileceğiniz bazı hizmetler...</p>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="hizmet-item">
                            <a href="#">
                                <img src="images/hizmetler/ev.jpg" alt="Ev Temizliği" height="200" width="300" />
                                <span>Ev Temizliği</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <div class="hizmet-item">
                            <a href="#">
                                <img src="images/hizmetler/ofis.jpg" alt="Ofis Temizliği" height="200" width="300" />
                                <span>Ofis Temizliği</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <div class="hizmet-item">
                            <a href="#">
                                <img src="images/hizmetler/ins.jpg" alt="İnşaat sonrası temizlik" height="200" width="300" />
                                <span>İnşaat Sonrası Temizlik</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <div class="hizmet-item">
                            <a href="#">
                                <img src="images/hizmetler/detayli.jpg" alt="Detaylı temizlik" height="200" width="300" />
                                <span>Detaylı Temizlik</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hizmetler -->

        <!-- Bankalar -->
        <section id="bankalar">
            <div class="container text-center">
                <img src="images/bankalar.png" class="img-responsive" alt="Hizmet.me" />
            </div>
        </section>

    <!--Footer part-->
        <div class="footer" style="margin-top: 20px;">
            <div class="pull-right">
                <strong><i>{{ trans('global.motto') }}...</i></strong>
            </div>
            <div>

            </div>
        </div> <!-- .footer -->
    </div>
</div>

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
<!-- Javascript Files ================================================== -->
<!-- Mainly scripts -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script type="text/javascript" src="/js/wif_custom.js"></script>

<!-- Custom and plugin javascript -->
<script type="text/javascript" src="/js/inspinia.js"></script>
<script type="text/javascript" src="/js/plugins/pace/pace.min.js"></script>
<script type="text/javascript" src="/js/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Toastr -->
<script src="/js/plugins/toastr/toastr.min.js"></script>

<script src="js/owlcarousel/owl.carousel.js" type="text/javascript"></script>
<!-- App JS -->
<script src="js/app.js" type="text/javascript"></script>


<!-- Document Ready javascript -->
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // add by uk to search case-insensitivity on client-side dataTable
        // This must be manually added to the desired search field
        $.extend($.expr[":"], {
            "containsI": function(elem, i, match, array) {
                return (elem.textContent || elem.innerText || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        // added by uk
        n = $('.navbar-default').height();
        p = $('#page-wrapper').height();
        if( n > p ) {
            $('#page-wrapper').css('min-height', Math.round(n) + 'px');
        }

        // added by uk
        // The select2-bootstrap.css file must be installed for this
        $.fn.select2.defaults.set( "theme", "bootstrap" );


    });
</script>
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

<script>
    function cokyakinda() {
        alert('Çok yakında!')
    }
</script>

<script>
    function cokyakinda() {
        alert('Çok yakında! Dilerseniz Hizmet Vermek İstiyorum sayfasını inceleyebilirsiniz.')
    }
</script>

</body>
</html>
