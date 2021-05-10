<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous"
    />
    <link href="{{ asset('/fonts/elegant_font/HTML_CSS/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/fonts/et-line-font/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/mark.chart.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"/>
    <title>@yield('title')</title>
    <style>

    </style>
</head>
<body id="body" >

<div class="container">

    <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
            <a href="{{ route('homepage') }}"><img src={{ asset('images/logo.png') }} alt="logo"></a>
        </div>
        <div class="navbar__right">
            <a href="{{ route('market') }}">
                <img width="30" src="{{ asset('images/market/avatar.svg') }}" alt="avata"/>
                <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
            </a>
        </div>
    </nav>

    <main>
        <div class="main__container">
            <!-- MAIN TITLE STARTS HERE -->
            <div class="main__title">
                <img src="{{ asset('images/market/hello.svg') }}" alt=""/>
                <div class="main__greeting">
                    <h1>@yield('title2')</h1>
                    <p>@yield('title3')</p>
                </div>
            </div>
            <!-- MAIN TITLE End HERE -->
            @yield('sub_infor')
            @yield('chart_content')
        </div>
    </main>

{{--    <div id="sidebar">--}}
{{--        <div class="sidebar__title">--}}
{{--            <div class="sidebar__img">--}}
{{--                <h1 style="color: white; letter-spacing: 5px; font-size: 25px">Happy House</h1>--}}
{{--            </div>--}}
{{--            <i--}}
{{--                onclick="closeSidebar()"--}}
{{--                class="fa fa-times"--}}
{{--                id="sidebarIcon"--}}
{{--                aria-hidden="true"--}}
{{--            ></i>--}}
{{--        </div>--}}

{{--        <div class="sidebar__menu">--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-home"></i>--}}
{{--                <a href="#">Thị Trường</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-search-minus" aria-hidden="true"></i>--}}
{{--                <a href="#">Compare</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link active_menu_link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 1</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 2</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 3</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 4</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 5</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 6</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 7</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 8</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 10</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Quận 12</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Bình Tân</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Bình Thạnh</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Gò Vấp</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Phú Nhuận</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Tân Bình</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__link">--}}
{{--                <i class="fa fa-user-secret" aria-hidden="true"></i>--}}
{{--                <a href="#">Tân Phú</a>--}}
{{--            </div>--}}
{{--            <div class="sidebar__logout">--}}
{{--                <i class="fa fa-power-off"></i>--}}
{{--                <a href={{ route('homepage') }}>Go Homepage</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script>
    var sidebarOpen = false;
    var sidebar = document.getElementById("sidebar");
    var sidebarCloseIcon = document.getElementById("sidebarIcon");

    function toggleSidebar() {
        if (!sidebarOpen) {
            sidebar.classList.add("sidebar_responsive");
            sidebarOpen = true;
        }
    }

    function closeSidebar() {
        if (sidebarOpen) {
            sidebar.classList.remove("sidebar_responsive");
            sidebarOpen = false;
        }
    }
</script>
</body>
</html>
