@extends('layouts.master')

@section('title')
    Üye Kayıt
@endsection

@section('page_level_css')

@endsection

@section('page_head')

@endsection



@section('content')
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                        <form class="form clearfix" role="form" method="POST" action="{{ url('/uye-kayit') }}">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-form-label required">Adınız</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Adınız" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="email" class="col-form-label required">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Eposta adresiniz" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="password" class="col-form-label required">Şifre</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Şifre" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="repeat_password" class="col-form-label required">Şifrenizi tekrar giriniz</label>
                            <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Şifre" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="d-flex justify-content-between align-items-baseline">
                            <label>
                                <input type="checkbox" name="newsletter" value="1" />
                                Bültene kayıt ol
                            </label>
                            <button type="submit" class="btn btn-primary">Kayıt</button>
                        </div>
                        </form>
                        <hr />
                        <p>
                            Kayıt butonuna basarak <a href="#" class="link">Kullanıcı Sözleşmesini.</a> kabul etmiş sayılırsınız.
                        </p>
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
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