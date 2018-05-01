@extends('layouts.master')

@section('title')
    Üye Kayıt
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container">
            <h1>Talep Oluştur</h1>
        </div>
        <!--end container-->
    </div>
@endsection



@section('content')
    <?php
    $support_category = DB::table('support_category')
        ->orderBy('id')
        ->get();
    ?>

    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                        <form class="form clearfix" role="form" method="POST" action="{{ url('/sendsupport') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="category" class="col-form-label required">Kategori</label>
                                <select name="category" id="category" data-placeholder="Select" tabindex="-1" class="selectized" style="display: none;" required>
                                    <option> seçiniz</option>
                                    @foreach($support_category as $one_list)
                                        <option value="{{ $one_list->id }}">{{ $one_list->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="col-form-label required">Konu</label>
                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Konu" required />
                            </div>
                            <!--end form-group-->

                            <!--end form-group-->
                            <div class="form-group">
                                <label for="repeat_password" class="col-form-label required">Mesajınız</label>
                                <textarea id="content" name="content" class="form-control" palaceholder="Mesajınızı buraya yazınız" required></textarea>
                            </div>
                            <!--end form-group-->

                                <button type="submit" class="btn btn-primary">Gönder</button>

                        </form>

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