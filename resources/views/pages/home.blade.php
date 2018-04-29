@extends('layouts.master')

@section('title')
    Home
@endsection

@section('page_level_css')

@endsection

@section('page_head')
    <div class="page-title">
        <div class="container">
            <h1 class="opacity-60 center">
                Yeteneklerine uygun ilanlar Aşağıda listelenmiştir.
            </h1>
        </div>
        <!--end container-->
    </div>
    <!--============ End Page Title =====================================================================-->
    <!--============ Hero Form ==========================================================================-->
    <form class="hero-form form" />
    <div class="container">
        <!--Main Form-->
        <div class="main-search-form">
            <div class="form-row">
                <div class="col-md-9 col-sm-9">
                    <div class="form-group">
                        <label for="what" class="col-form-label">Özel birşeyler mi arıyorsun?</label>
                        <input name="keyword" type="text" class="form-control" id="what" placeholder="örneğin inşaat sonrası temizlik" />
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <button type="submit" class="btn btn-primary width-100">Ara</button>
                </div>
                <!--end col-md-3-->
            </div>
            <!--end form-row-->
        </div>
        <!--end main-search-form-->
        <!--Alternative Form-->
        <div class="alternative-search-form">
            <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>Daha fazla seçenek</a>
            <div class="collapse" id="collapseAlternativeSearchForm">
                <div class="wrapper">
                    <div class="form-row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                            <label>
                                <input type="checkbox" name="new" />
                                Yeni
                            </label>
                            <label>
                                <input type="checkbox" name="used" />
                                Used
                            </label>
                            <label>
                                <input type="checkbox" name="with_photo" />
                                Fotoğraflı ilan
                            </label>
                            <label>
                                <input type="checkbox" name="featured" />
                                Featured
                            </label>
                        </div>
                        <!--end col-xl-6-->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="En Az" />
                                        <span class="input-group-addon small">TL</span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="En Fazla" />
                                        <span class="input-group-addon small">TL</span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select name="distance" id="distance" class="small" data-placeholder="Mesafe" data-disable-search="true">
                                            <option value="" />Mesafe
                                            <option value="1" />1km
                                            <option value="2" />5km
                                            <option value="3" />10km
                                            <option value="4" />50km
                                            <option value="5" />100km
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end col-xl-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end wrapper-->
            </div>
            <!--end collapse-->
        </div>
        <!--end alternative-search-form-->
    </div>
    <!--end container-->
    </form>
@endsection



@section('content')
    @if(Auth::user()->type == 1)
        <meta http-equiv="refresh" content="0; url=http://hizmet.site/profil" />

    @endif


    <section class="content">

       {{-- <!--============ Featured Ads ===========================================================================-->
        <section class="block">
            <div class="container">
                <h2>Öne Çıkan İlanlar</h2>
                <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Home & Decor</a>
                                    <a href="./single-listing-1.html" class="title">Furniture for sale</a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="./single-listing-1.html" class="image-wrapper background-image">
                                    <img src="./assets/img/image-01.jpg" alt="" />
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Manhattan, NY</a>
                            </h4>
                            <div class="price">$80</div>
                            <div class="meta">
                                <figure>
                                    <i class="fa fa-calendar-o"></i>02.05.2017
                                </figure>
                                <figure>
                                    <a href="#">
                                        <i class="fa fa-user"></i>Jane Doe
                                    </a>
                                </figure>
                            </div>
                            <!--end meta-->
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                            </div>
                            <!--end description-->
                            <a href="./single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Education</a>
                                    <a href="./single-listing-1.html" class="title">Creative Course</a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="./single-listing-1.html" class="image-wrapper background-image">
                                    <img src="./assets/img/image-02.jpg" alt="" />
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Nashville, TN</a>
                            </h4>
                            <div class="price">$125</div>
                            <div class="meta">
                                <figure>
                                    <i class="fa fa-calendar-o"></i>28.04.2017
                                </figure>
                                <figure>
                                    <a href="#">
                                        <i class="fa fa-user"></i>Peter Browner
                                    </a>
                                </figure>
                            </div>
                            <!--end meta-->
                            <div class="description">
                                <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Start Date</figure>
                                        <aside>25.06.2017 09:00</aside>
                                    </li>
                                    <li>
                                        <figure>Length</figure>
                                        <aside>2 months</aside>
                                    </li>
                                    <li>
                                        <figure>Bedrooms</figure>
                                        <aside>3</aside>
                                    </li>
                                </ul>
                            </div>
                            <!--end addition-info-->
                            <a href="./single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Adventure</a>
                                    <a href="./single-listing-1.html" class="title">Into The Wild</a>
                                    <span class="tag">Ad</span>
                                </h3>
                                <a href="./single-listing-1.html" class="image-wrapper background-image">
                                    <img src="./assets/img/image-03.jpg" alt="" />
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Seattle, WA</a>
                            </h4>
                            <div class="price">$1,560</div>
                            <div class="meta">
                                <figure>
                                    <i class="fa fa-calendar-o"></i>21.04.2017
                                </figure>
                                <figure>
                                    <a href="#">
                                        <i class="fa fa-user"></i>Peak Agency
                                    </a>
                                </figure>
                            </div>
                            <!--end meta-->
                            <div class="description">
                                <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                            </div>
                            <!--end description-->
                            <a href="./single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                </div>
            </div>
            <div class="background" data-background-color="#fff"></div>
            <!--end background-->
        </section>
        <!--============ End Featured Ads =======================================================================-->
        <!--============ Features Steps =========================================================================-->
        <section class="block has-dark-background">
            <div class="container">
                <div class="block">
                    <h2>Selling With Us Is Easy</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="./assets/icons/feature-user.png" alt="" />
                                    <span>1</span>
                                </figure>
                                <h3>Create an Account</h3>
                                <p>Etiam molestie viverra dui vitae mattis. Ut velit est</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="./assets/icons/feature-upload.png" alt="" />
                                    <span>2</span>
                                </figure>
                                <h3>Submit Your Ad</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="./assets/icons/feature-like.png" alt="" />
                                    <span>3</span>
                                </figure>
                                <h3>Make a Deal</h3>
                                <p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                        <div class="col-md-3">
                            <div class="feature-box">
                                <figure>
                                    <img src="./assets/icons/feature-wallet.png" alt="" />
                                    <span>4</span>
                                </figure>
                                <h3>Enjoy the Money!</h3>
                                <p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p>
                            </div>
                            <!--end feature-box-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end block-->
            </div>
            <!--end container-->
            <div class="background" data-background-color="#2b2b2b"></div>
            <!--end background-->
        </section>
        <!--end block-->
        <!--============ End Features Steps =====================================================================-->
        <!--============ Recent Ads =============================================================================-->--}}

        <section class="block">
            <div class="container">
                <h2>Son İlanlar</h2>
                <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">

                    @foreach($ads_data as $one)
                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">{{$one->s_name}}</a>
                                    <a href="/ilan/{{$one->bid}}" class="title">{{$one->booking_title}}</a>
                                    <span class="tag">Yeni</span>
                                </h3>
                                <a href="/ilan/{{$one->bid}}" class="image-wrapper background-image">
                                    <img src="./assets/img/image-04.jpg" alt="" />
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">{{$one->ilce}} - {{$one->il}}</a>
                            </h4>
                            <div class="meta">
                                <figure>
                                    <i class="fa fa-calendar-o"></i>{{date('d-m-Y', strtotime($one->booking_date))}}
                                </figure>
                                <figure>
                                    <a href="#">
                                        <i class="fa fa-user"></i>{{$one->cname}}
                                    </a>
                                </figure>
                            </div>
                            <!--end meta-->
                            <div class="description">
                                <p>{{$one->detail}}</p>
                            </div>

                            <a href="/ilan/{{$one->bid}}" class="detail text-caps underline">Detay</a>
                        </div>
                    </div>
                    <!--end item-->
                    @endforeach

                </div>
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <!--============ End Recent Ads =========================================================================-->


        <section class="block">
            <div class="container">
                <div class="d-flex align-items-center justify-content-around">
                    <a href="#">
                        <img src="./assets/img/partner-1.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-2.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-3.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-4.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="./assets/img/partner-5.png" alt="" />
                    </a>
                </div>
            </div>

    </section>

    </section>
    <!--end content-->
@endsection

@section('page_level_js')


@endsection

@section('page_document_ready')

@endsection