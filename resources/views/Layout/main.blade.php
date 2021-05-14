<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Minimal Bootstrap Theme">
    <meta name="keywords" content="onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.js') }}"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->

    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jpreloader.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/plugin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/Login.css') }}" rel="stylesheet">
    <link href="{{ asset('/demo/demo.css') }}" rel="stylesheet">


    <!-- custom background -->
    <link href="{{ asset('/css/bg.css') }}" rel="stylesheet">

    <!-- color scheme -->
    <link href="{{ asset('/css/color.css') }}" type="text/css" id="colors" rel="stylesheet">

    <!-- load fonts -->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/elegant_font/HTML_CSS/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/et-line-font/style.css') }}" type="text/css" rel="stylesheet">

    <!-- revolution slider -->
    <link href="{{ asset('/rs-plugin/css/settings.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/rev-settings.css') }}" type="text/css" rel="stylesheet">

</head>
<body @yield('idBody') style="background-color: white">

<div id="wrapper">

    <!-- header begin -->
    <header @yield('header-bg')>
        <div class="container">
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
                            <li><a href="{{ route('aboutus') }}">Giới Thiệu</a></li>
                            <li><a href="{{ route('pro') }}">Dự Án</a></li>
                            <li><a href="{{ route('Service') }}">Dịch VỤ</a>
                                <ul>
                                    <li><a href="#">Nhà Phố</a></li>
                                    <li><a href="#">Decor Căn Hộ</a></li>
                                    <li><a href="#">Nhà Tân Cổ</a></li>
                                    <li><a href="#">Biệt Thự</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('news') }}">Tin Tức</a></li>
                            <li><a href="{{ route('market') }}">Thị Trường</a></li>
                            <li><a href="{{ route('login') }}">Admin</a></li>
                        </ul>
                    </nav>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
    </header>
    <!-- header close -->

    <!-- sub header begin -->
@yield('sub-header')
<!-- sub header close -->

    <!-- content begin -->
    <div>
        @yield('markContent')
    </div>
    <div id="content" class="no-bottom no-top">
        @yield('content')
    </div>
    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src= {{ asset('images/logo.png') }} class="logo-small" alt=""><br>
                    Chúng tôi là công ty TƯ VẤN - THIẾT KẾ - XÂY DỰNG HAPPY HOUSE, với đội ngũ nhân viên tận tâm và
                    nhiều kinh nghiệm, chúng tôi sẽ mang đến cho bạn trải nghiệm tuyệt vời nhất, những sản phẩm chất
                    lượng nhất.
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
                            <span>590 CÁCH MẠNG THÁNG 8, QUẬN 3</span>
                            <span><strong>Phone:</strong>0981815414</span>
                            <span><strong>Email:</strong><a href="mailto:hien03kc@gmail.com">hien03kc@gmail.com</a></span>
                            <span><strong>Web:</strong><a href="{{ route('homepage') }}">http://Happy_House.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container">
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


<!-- style switcher
================================================== -->
<script src="{{ asset('/js/switcher.html') }}"></script>

<div id="switcher">
    <span class="custom-close"></span>
    <span class="custom-show"></span>

    <span class="sw-title">Header Style</span>
    <select name="switcher" id="de-header">
        <option value="opt-1" selected>Solid</option>
        <option value="opt-2">Transparent</option>
    </select>

    <div class="clearfix"></div>

    <span class="sw-title">Menu Style</span>
    <select name="switcher" id="de-menu">
        <option value="opt-1" selected>Dotted Separator</option>
        <option value="opt-2">Line Separator</option>
        <option value="opt-3">Circle Separator</option>
        <option value="opt-4">Square Separator</option>
        <option value="opt-5">Plus Separator</option>
        <option value="opt-6">Strip Separator</option>
        <option value="opt-0">No Separator</option>
    </select>

    <div class="clearfix"></div>

    <span class="sw-title">Color :</span>
    <ul id="de-color">
        <li class="bg1"></li>
        <li class="bg2"></li>
        <li class="bg3"></li>
        <li class="bg4"></li>
        <li class="bg5"></li>
        <li class="bg6"></li>
        <li class="bg7"></li>
        <li class="bg8"></li>
        <li class="bg9"></li>
        <li class="bg10"></li>
    </ul>
</div>

<!-- Javascript Files
================================================== -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jpreLoader.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('/js/easing.js') }}"></script>
<script src="{{ asset('/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('/js/jquery.scrollto.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.js') }}"></script>
<script src="{{ asset('/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('/js/classie.js') }}"></script>
<script src="{{ asset('/js/video.resize.js') }}"></script>
<script src="{{ asset('/js/validation.js') }}"></script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/js/enquire.min.js') }}"></script>
<script src="{{ asset('/js/enquire.min.js') }}"></script>
<script src="{{ asset('/js/designesia.js') }}"></script>
<script src="{{ asset('/demo/demo.js') }}"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{ asset('/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

</body>
</html>
