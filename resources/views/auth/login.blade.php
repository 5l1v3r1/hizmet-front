@extends('layouts.master')

@section('title')
    Giriş Yap
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
                    <div class="col-md-4">
                        <form class="form clearfix" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-form-label required">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="password" class="col-form-label required">Şifre</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Şifre" required="" />
                        </div>
                        <!--end form-group-->
                        <div class="d-flex justify-content-between align-items-baseline">
                            <label>
                                <input type="checkbox" name="remember" value="1" />
                                Beni Hatırla
                            </label>
                            <button type="submit" class="btn btn-primary">Giriş Yap</button>
                        </div>
                        </form>
                        <hr />
                        <p>
                            Giriş yapamıyormusunuz? <a href="#" class="link">Şifremi unuttum.</a>
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