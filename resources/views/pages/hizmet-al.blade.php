@extends('layouts.landing_master')

@section('title')
    {{ trans('system_summary.title') }}
@endsection

@section('page_level_css')

@endsection

@section('content')

    <!-- Content -->
    <section id="content" class="hizmet-al">

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
                <form method="POST" action="/siparis-tamamla" accept-charset="UTF-8" class="form-horizontal"><input
                            name="_token" type="hidden" value="VLyGUCIbzRc12OHXxInkjoXOoUmPp5gfSWqer6Bo">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Kişisel Bilgileri -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> KİŞİSEL BİLGİLERİNİZ
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="ebeveynAdiveSoyadi" class="col-xs-12 col-sm-4 control-label">Adınız
                                                ve soyadınız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="ebeveynAdiveSoyadi"
                                                       placeholder="Kimliğinizde yazdığı gibi" required
                                                       name="ebeveynAdiveSoyadi" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ilce" class="col-xs-12 col-sm-4 control-label"> Temizlik
                                                Yapılacak İlçe</label>
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
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Hizmet Detayları -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> HİZMET İLE İLGİLİ
                                            DETAYLAR</h3>
                                    </div>
                                    <div class="panel-body">

                                        <div class="form-group">
                                            <label for="ot_oda_sayisi" class="col-xs-12 col-sm-3 control-label">Oda
                                                Sayısı</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <select id="ot_oda_sayisi" class="form-control" name="ot_oda_sayisi">
                                                    <option value="1+1">1+1 yada 1+0</option>
                                                    <option value="2+1">2+1</option>
                                                    <option value="3+1">3+1</option>
                                                    <option value="4+1">4+1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ot_hizmet_tarihi"
                                                   class="col-xs-12 col-sm-3 control-label">Tarih</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div id="ot_hizmetTarih"></div>
                                                <input id="ot_hizmet_tarihi" name="ot_hizmet_tarihi" type="hidden">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="ot_aciklama"
                                                   class="col-xs-12 col-sm-4 control-label">Açıklama</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <textarea id="ot_aciklama" name="ot_aciklama" class="form-control"
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
                <form method="POST" action="/ofis-temizligi-hizmeti-almak-istiyorum" accept-charset="UTF-8"
                      class="form-horizontal"><input name="_token" type="hidden"
                                                     value="VLyGUCIbzRc12OHXxInkjoXOoUmPp5gfSWqer6Bo">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Kişisel Bilgileri -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> KİŞİSEL BİLGİLERİ</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="ot_ad_soyad" class="col-xs-12 col-sm-4 control-label">Adınız ve
                                                soyadınız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input class="form-control" id="ot_ad_soyad"
                                                       placeholder="Kimliğinizde yazdığı gibi" name="ot_ad_soyad"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ot_ilce" class="col-xs-12 col-sm-4 control-label">Oturduğunuz il&ccedil;e</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <select class="form-control" id="ot_ilce" name="ot_ilce">
                                                    <option value="adalar">Adalar</option>
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
                                            <label for="ot_acik_adres" class="col-xs-12 col-sm-4 control-label">A&ccedil;ık
                                                adresiniz</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <textarea id="ot_acik_adres" name="ot_acik_adres" class="form-control"
                                                          cols="30" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ot_eposta" class="col-xs-12 col-sm-4 control-label">E-posta
                                                adresi</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input name="ot_eposta" class="form-control" id="ot_eposta"
                                                       placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ot_tel" class="col-xs-12 col-sm-4 control-label">Telefon
                                                numaranız</label>
                                            <div class="col-xs-12 col-sm-8">
                                                <input id="ot_tel" name="ot_tel" class="form-control ot_tel"
                                                       placeholder="" type="text">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /Kişisel Bilgileri -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <!-- Hizmet Detayları -->
                            <div class="col-xs-12 col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-user fa-fw"></i> HİZMET İLE İLGİLİ
                                            DETAYLAR</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="ot_ilan_basligi" class="col-xs-12 col-sm-3 control-label">İlan
                                                Başlığı</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <input class="form-control ot_ilan_basligi" id="ot_ilan_basligi"
                                                       required name="ot_ilan_basligi" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ot_oda_sayisi" class="col-xs-12 col-sm-3 control-label">Oda
                                                Sayısı</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <select id="ot_oda_sayisi" class="form-control" name="ot_oda_sayisi">
                                                    <option value="1+1">1+1</option>
                                                    <option value="2+1">2+1</option>
                                                    <option value="3+1">3+1</option>
                                                    <option value="4+1">4+1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ot_hizmet_tarihi"
                                                   class="col-xs-12 col-sm-3 control-label">Tarih</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <div id="ot_hizmetTarih"></div>
                                                <input id="ot_hizmet_tarihi" name="ot_hizmet_tarihi" type="hidden">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="ot_hizmet_baslagic_saati"
                                                   class="col-xs-12 col-sm-4 control-label">Başlangıç ve Bitiş
                                                saati</label>
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
                                            <label for="ot_hizmet_butce_min" class="col-xs-12 col-sm-4 control-label">Bütçe</label>
                                            <div class="col-xs-12 col-sm-4">
                                                <input id="ot_hizmet_butce_min" name="ot_hizmet_butce_min"
                                                       class="form-control" placeholder="En az" type="number">
                                            </div>
                                            <div class="col-xs-12 col-sm-4">
                                                <input id="ot_hizmet_butce_max" name="ot_hizmet_butce_max"
                                                       class="form-control" placeholder="En çok" type="number">
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
                                                <textarea id="ot_aciklama" name="ot_aciklama" class="form-control"
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
@endsection

@section('page_level_js')
    <script src="js/moment.js" type="text/javascript"></script>
    <script src="js/moment-tr.js" type="text/javascript"></script>
    <script src="plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="plugins/jquery-inputmask/jquery.maskedinput.js"></script>
    <script src="../cdn.jsdelivr.net/npm/sweetalert2%406.9.1/dist/sweetalert2.min.js"></script>

    <script>

    </script>
    <script src="plugins/jquery-inputmask/jquery.maskedinput.js"></script>


    <script>
        $(document).ready(function(){
            $('#hizmetTarih').on('dp.change', function(event){
                var formatted_date = event.date.format('DD/MM/YYYY');
                $('#hizmetTarihi').val(formatted_date);
            });

            $('.kategori-formu').hide()
            $("#ev-temizligi").click(function(){
                $('.ev-temizligi-form').show()
                $('.ofis-temizligi-form').hide()
            });

            $("#ofis-temizligi").click(function(){
                $('.cocuk-bakimi-form').hide()
                $('.ofis-temizligi-form').show()
            });
            $("#ev-temizligi").click(function(){
                $('.cocuk-bakimi-form').hide()

                $('.ofis-temizligi-form').hide()
            });



        });
    </script>


@endsection

@section('page_document_ready')





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



@endsection