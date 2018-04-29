@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')

    <div class="page-title">
        <div class="container">
            <h1>Şifre Değiştir</h1>
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
                                    <i class="fa fa-star"></i> Onaylanan Teklifler
                                </a>
                                <a class="nav-link icon" href="./sifre-degistir">
                                    <i class="fa fa-recycle"></i>Şifre Değiştir
                                </a>
                            @endif
                        </nav>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <form method="POST" action="/sifre-degistir" accept-charset="UTF-8" class="form-horizontal">
                            {{ csrf_field() }}
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <!--end form-group-->
                                <input type="hidden" name="client_id" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                    <label for="new_current_password" class="col-form-label required">Yeni Şifre</label>
                                    <input name="new_current_password" type="password" class="form-control" id="new_current_password" placeholder="Yeni Şifre" required="" />
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="repeat_new_current_password" class="col-form-label required">Yeni Şifreyi Tekrar yaz</label>
                                    <input name="repeat_new_current_password" type="password" class="form-control" id="repeat_new_current_password" placeholder="Yeni Şifre Tekrar" required="" />
                                </div>
                                <!--end form-group-->
                                <button type="submit" class="btn btn-primary float-right">Şifre Değiştir</button>
                            </div>
                            <!--end col-md-6-->
                        </div>
                        </form>
                    </div>
                    <!--end col-md-9-->
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