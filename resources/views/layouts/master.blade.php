<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Osman Aras" />
    <meta name="description" content="{{ trans('global.description') }}">
    <meta name="keywords" content="{{ trans('global.description') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title') | Hizmet Guru</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="http://hizmet.site/assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="http://hizmet.site/assets/fonts/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="http://hizmet.site/assets/css/selectize.css" type="text/css" />
    <link rel="stylesheet" href="http://hizmet.site/assets/css/style.css" />
    <link rel="stylesheet" href="http://hizmet.site/assets/css/user.css" />
    @yield('page_level_css')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div class="page home-page">



            @include('layouts.header')

            @yield('content')

            <!--Footer part-->
                <footer class="footer">
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="#" class="brand">
                                        <img src="http://hizmet.site/asset/img/logo.png" alt="" />
                                    </a>
                                    <p>
                                        Hizmet Guru Hizmet ayagınıza geldi.
                                    </p>
                                </div>
                                <!--end col-md-5-->
                                <div class="col-md-3">
                                    <h2>Hızlı Menü</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <nav>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">Anasayfa</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">İlanlar</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Hizmet verenler</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <nav>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">Panelim</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Üye Ol</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Giriş Yap</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-4">
                                    <h2>İletişim</h2>
                                    <address>
                                        <figure>
                                            Piri Reis Mh. 1993. SK. Semerkand evleri A Blok no:27 dr:30 Esenyurt / İstanbul
                                        </figure>
                                        <br />
                                        <strong>Email:</strong> <a href="#">info@hizmet.site</a>
                                        <br />
                                        <strong>Skype: </strong> Hizmet.guru
                                        <br />
                                        <br />
                                        <a href="/İletişim" class="btn btn-primary text-caps btn-framed">İletişim</a>
                                    </address>
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                        </div>
                        <div class="background">
                            <div class="background-image original-size">
                                <img src="http://hizmet.site/assets/img/footer-background-icons.jpg" alt="" />
                            </div>
                            <!--end background-image-->
                        </div>
                        <!--end background-->
                    </div>

                    <!--end footer-->
                </footer>


    </div>

    <script src="http://hizmet.site/assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://hizmet.site/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js_e02c3937.js"></script>
    <!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
    <script src="http://hizmet.site/assets/js/selectize.min.js"></script>
    <script src="http://hizmet.site/assets/js/masonry.pkgd.min.js"></script>
    <script src="http://hizmet.site/assets/js/icheck.min.js"></script>
    <script src="http://hizmet.site/assets/js/jquery.validate.min.js"></script>
    <script src="http://hizmet.site/assets/js/custom.js"></script>

    <!-- Page level javascript -->
    @yield('page_level_js')

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

            @yield('page_document_ready')
        });
    </script>
</body>
</html>