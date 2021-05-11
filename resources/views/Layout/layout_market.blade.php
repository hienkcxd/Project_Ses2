<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Archi - Responsive Interior Design Template</title>
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
    <!-- load fonts -->
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/elegant_font/HTML_CSS/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/et-line-font/style.css') }}" type="text/css" rel="stylesheet">

</head>

<body id="homepage">

<!-- header begin -->
<header>
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
<div class="blank" style="height: 80px"></div>

<div>@yield('content')</div>


<!-- content begin -->
<div id="content" class="no-bottom no-top">

    <!-- footer begin -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src={{ asset('images/logo.png') }} class="logo-small" alt=""><br>
                    We are team based on Brookylin. Our expertise on Interior Design. Sed ut perspiciatis unde omnis
                    iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </div>

                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3>Latest News</h3>
                        <ul>
                            <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                            <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                            <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                            <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                            <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <div class="widget widget-address">
                        <address>
                            <span>100 Mainstreet Center, Sydney</span>
                            <span><strong>Phone:</strong>(208) 333 9296</span>
                            <span><strong>Fax:</strong>(208) 333 9298</span>
                            <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                            <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyright 2015 - Archi by Designesia
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
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
