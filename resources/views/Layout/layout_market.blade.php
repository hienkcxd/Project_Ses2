<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('images/title_logo.jpg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Minimal Bootstrap Theme">
    <meta name="keywords" content="onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jpreloader.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mark.chart.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-style-2.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- load fonts -->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/elegant_font/HTML_CSS/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/et-line-font/style.css') }}" type="text/css" rel="stylesheet">

    <!-- revolution slider -->
    <link href="{{ asset('/rs-plugin/css/settings.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/rev-settings.css') }}" type="text/css" rel="stylesheet">

</head>

<body id="homepage">

<!-- header begin -->
<header>
    <div class="container" style="width: 90%">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <h1 id="logo">
                    <a href="{{ route('homepage') }}">
                        <img class="logo" src={{ asset('images/logo.png') }} alt="">
                    </a>
                </h1>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav>
                    <ul id="mainmenu">
                        <li><a href="{{ route('aboutus') }}">Gi???i Thi???u</a></li>
                        <li><a href="{{ route('pro') }}">D??? ??n</a></li>
                        <li><a href="{{ route('Service') }}">D???ch V???</a>
                            <ul>
                                <li><a href="{{ route('Service_nhapho') }}">Nh?? Ph???</a></li>
                                <li><a href="{{ route('Service_canho') }}">Decor C??n H???</a></li>
                                <li><a href="{{ route('Service_NTC') }}">Nh?? T??n C???</a></li>
                                <li><a href="{{ route('Service_BT') }}">Bi???t Th???</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('news') }}">Tin T???c</a></li>
                        <li><a href="{{ route('market') }}">Th??? Tr?????ng</a></li>
                        <li><a href="{{ route('login') }}">Admin</a></li>
                    </ul>
                </nav>

            </div>
            <!-- mainmenu close -->

        </div>
    </div>

</header>
<!-- header close -->
<div class="blank" style="height: 80px"></div>

<div>@yield('content')</div>


<!-- content begin -->
<div id="content" class="no-bottom no-top">

    <!-- footer begin -->
    <footer>
        <div class="container" style="width: 90%">
            <div class="row">
                <div class="col-md-4">
                    <img src={{ asset('images/logo.png') }} class="logo-small" alt=""><br>
                    Ch??ng t??i l?? c??ng ty T?? V???N - THI???T K??? - X??Y D???NG HAPPY HOUSE, v???i ?????i ng?? nh??n vi??n t???n t??m v??
                    nhi???u kinh nghi???m, ch??ng t??i s??? mang ?????n cho b???n tr???i nghi???m tuy???t v???i nh???t, nh???ng s???n ph???m ch???t
                    l?????ng nh???t.
                </div>

                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3>Latest Project</h3>
                        <ul>
                            <?php $name = \Illuminate\Support\Facades\DB::table('project_lists')->get()?>
                            @for ($i = 0; $i < 4; $i++)
                                <li><a class="simple-ajax-popup-align-top" href="{{ route('project_detail', ['ProDetailID' => $name[$i]->ProjectID ]) }}">{{ $name[$i]->ProjectName }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <div class="widget widget-address">
                        <address>
                            <span>590 C??CH M???NG TH??NG 8, QU???N 3</span>
                            <span><strong>Phone:</strong>0981815414</span>
                            <span><strong>Email:</strong><a href="mailto:hien03kc@gmail.com">hien03kc@gmail.com</a></span>
                            <span><strong>Web:</strong><a href="{{ route('homepage') }}">http://Happy_House.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container" style="width: 90%">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Contruction Company 2010 - Happy House
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-phone fa-lg"></i></a>
                            <a href="mailto:hien03kc@gmail.com"><i class="fa fa-google-plus fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- footer close -->
</div>
</div>

<!-- Javascript Files
================================================== -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jpreLoader.js') }}"></script>
<script src="{{ asset('/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.js') }}"></script>
<script src="{{ asset('/js/validation.js') }}"></script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/enquire.min.js') }}"></script>
<script src="{{ asset('/js/designesia.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

</body>
</html>
