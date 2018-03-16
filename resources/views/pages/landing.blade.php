@extends('layouts.landing_master')

@section('title')
    {{ trans('system_summary.title') }}
@endsection

@section('page_level_css')

@endsection

@section('content')
    <!-- Page -->
    <!-- Hero -->
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
                    <h3>Hizmet.me'NİN AMACI</h3>
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
    <!-- /Bankalar -->
    <!-- /Page -->
@endsection

@section('page_level_js')

@endsection

@section('page_document_ready')



@endsection