@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container">
            <h1>{{$profile_data->name}}</h1>
        </div>
        <!--end container-->
    </div>
@endsection


@section('content')
    <?php
    $comment_data = json_decode($comment_data);
    ?>
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-12">
                        <section class="my-0">
                            <div class="author big">
                                <div class="author-image">
                                    <div class="background-image">
                                        <img src="{{url('/assets/img/author-09.jpg')}}" alt="" />
                                    </div>
                                </div>
                                <!--end author-image-->
                                <div class="author-description">
                                    <div class="section-title">
                                        <h2>{{$profile_data->name}}</h2>
                                        <h4 class="location">
                                            <a href="#">{{$profile_data->district}}, {{$profile_data->province}}</a>
                                        </h4>
                                        <figure>
                                            <div class="float-left">

                                                <div class="rating" data-rating="{{$rate}}"></div>
                                            </div>
                                            <div class="text-align-right social">
                                                <a href="#">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-twitter-square"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </figure>
                                    </div>
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Telefon</figure>
                                                <aside>+{{$profile_data->phone}}</aside>
                                            </li>
                                            <li>
                                                <figure>Mail</figure>
                                                <aside>{{$profile_data->email}}</aside>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end addition-info-->
                                    <p>
                                        {{$profile_data->about_us}}
                                    </p>
                                </div>
                                <!--end author-description-->
                            </div>
                            <!--end author-->
                        </section>

                        <hr />


                        <section>
                            <h2>Yorum Yazın</h2>
                            <form method="POST" action="/client-yorum-yaz" accept-charset="UTF-8" class="form-horizontal">
                                {{ csrf_field() }}
                            <div class="row" id="yorum">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="subject" class="col-form-label">Başlık</label>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Yorumunuzun başlığı" />
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="rating" class="col-form-label">Puan</label>
                                        <select name="rating" id="rating" data-placeholder="Select Rating">
                                            <option value="" />Puan seçiniz
                                            <option value="1" data-option-stars="1" />Kötü
                                            <option value="2" data-option-stars="2" />Fena Değil
                                            <option value="3" data-option-stars="3" />Orta
                                            <option value="4" data-option-stars="4" />İyi
                                            <option value="5" data-option-stars="5" />Çok iyi
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="review" class="col-form-label">Yorumunuz</label>
                                        <textarea name="review" id="review" class="form-control" rows="4" placeholder="İşveren ile ilgili yorumunuzu buraya yazabilirsiniz. İş veren yorumunuzu görmeyecek."></textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-12-->
                            </div>
                                <input type="hidden" name="client_id" value="{{$profile_data->id}}">
                                <button type="submit" class="btn btn-primary">Yorum yap</button>
                            <!--end row-->
                            </form>
                            <!--end form-->
                        </section>
                        <section>
                            <h2>Yorumlar</h2>
                            <div class="comments">
                                @foreach($comment_data as $one)
                                <div class="comment">
                                    <div class="author">
                                        <a href="#" class="author-image">
                                            <div class="background-image">
                                                <img src="../../assets/img/author-09.jpg" alt="" />
                                            </div>
                                        </a>
                                        <div class="author-description">
                                            <h3>{{$one->head}}!</h3>
                                            <div class="meta">
                                                <span class="rating" data-rating="{{$one->point}}"></span>
                                                <span>{{$one->last_update}}</span>
                                                <h5><a href="#">{{$one->name}}</a></h5>
                                            </div>

                                            <!--end meta-->
                                            <p>
                                                {{$one->comment}}
                                            </p>
                                        </div>

                                        <!--end author-description-->
                                    </div>
                                    <!--end author-->
                                </div>
                                <!--end comment-->
                                @endforeach

                            </div>
                            <!--end comment-->

                        </section>
                    </div>
                    <!--end col-md-9-->

                </div>
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