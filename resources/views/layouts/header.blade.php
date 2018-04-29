<header class="hero">
    <div class="hero-wrapper">
        <!--============ Secondary Navigation ===============================================================-->
        <div class="secondary-navigation">
            <div class="container">
                <ul class="left">
                    <li>
                            <span>
                                <i class="fa fa-phone"></i> +90 555 555 55 55
                            </span>
                    </li>
                </ul>
                <!--end left-->
                <ul class="right">
                    @if( empty(Auth::user())  )
                    <li>
                        <a href="/login">
                            <i class="fa fa-sign-in"></i>Giriş Yap
                        </a>
                    </li>
                    <li>
                        <a href="/register">
                            <i class="fa fa-pencil-square-o"></i>Kayıt Ol
                        </a>
                    </li>
                    @endif

                    @if( Auth::user()  )

                            <li>
                                <a class=" count-info" href="/messenger">
                                    <i class="fa fa-bell"></i> Messenger
                                </a>
                            </li>

                            <li>
                                <a class=" count-info" href="#">
                                    <i class="fa fa-bell"></i> Bildirimler
                                </a>
                            </li>
                            <li>
                                <a href="/profil">
                                    <i class="fa fa-pencil-square-o"></i>Profil
                                </a>
                            </li>
                            <li>


                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> {{ trans('global.logout') }}
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                    @endif

                </ul>
                <!--end right-->
            </div>
            <!--end container-->
        </div>
        <!--============ End Secondary Navigation ===========================================================-->
        <!--============ Main Navigation ====================================================================-->
        <div class="main-navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="/">
                        <img src="http://hizmet.site/assets/img/logo.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!--Main navigation list-->
                    @if(Auth::user())
                        @if(Auth::user()->type==1)
                            <ul class="navbar-nav">
                                <li class="nav-item active has-child">
                                    <a class="nav-link" href="/home">Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/ilanlar">İlanlar</a>


                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./iletisim">İletişim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="./ilan-olustur" class="btn btn-primary text-caps btn-rounded">İlan Oluştur</a>
                                </li>
                            </ul>
                        @endif

                        @if(Auth::user()->type==2)
                            <ul class="navbar-nav">
                                <li class="nav-item active has-child">
                                    <a class="nav-link" href="/home">Anasayfa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/ilanlar">İlanlar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./iletisim">İletişim</a>
                                </li>
                            </ul>

                        @endif
                    @endif

                    </div>
                    <!--end navbar-collapse-->
                </nav>
                <!--end navbar-->
            </div>
            <!--end container-->
        </div>
        <!--============ End Main Navigation ================================================================-->
        <!--============ Page Title =========================================================================-->
         @yield('page_head')
        <!--============ End Hero Form ======================================================================-->
        <div class="background">
            <div class="background-image">
                <img src="http://hizmet.site/assets/img/hero-background-image-02.jpg" alt="" />
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
    <!--end hero-wrapper-->
</header>