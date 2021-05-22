<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/title_logo.jpg') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('/css/admin_css/bootstrap/dist/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css//css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/css/form.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/css/detail_News_form.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/css/detail_employee_form.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/admin_css/css/detail_project_form.css') }} ">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!------ datatable CDN---------->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script language="JavaScript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" ></script>
    <script language="JavaScript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" ></script>
    <link rel="stylesheet" charset="utf8" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" charset="utf8" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css">
    <link rel="stylesheet" charset="utf8" href="https://cdn.datatables.net/1.10.24/css/dataTables.uikit.min.css">

</head>

<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="" alt="">H</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('index.admin_owens') }}"> <i class="menu-icon fa fa-dashboard"></i>Quản Lý</a>
                </li>

                {{--                Bắt đầu phần dự án--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Dự Án</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens_project') }}"> <i class="menu-icon fa fa-product-hunt" style="color: #FAB702"></i>Danh Sách</a>
                </li>
                {{--                Kết thúc phần dự án--}}

                {{--                Bắt đầu phần Tin Tức--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Tin Tức</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens.news') }}"> <i class="menu-icon fa fa-newspaper-o" style="color: #FAB702"></i>Danh Sách</a>
                </li>
                {{--                Kết thúc phần Tin Tức--}}

                {{--                Bắt đầu phần Khách Hàng--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Khách Hàng</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens.customer') }}"> <i class="menu-icon fa fa-users" style="color: #FAB702"></i>Danh Sách</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens.black_lists') }}"> <i class="menu-icon fa fa-exclamation-triangle" style="color: #FAB702"></i>Black List</a>
                </li>
                {{--                Kết thúc phần Khách Hàng--}}

                {{--                Bắt đầu phần Công Việc--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Công Việc</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens.work') }}"> <i class="menu-icon fa fa-clipboard" style="color: #FAB702; margin-top: 0px"></i>Danh Sách</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#"> <i class="menu-icon fa fa-bar-chart" style="color: #FAB702; margin-top: 0px"></i>Tiến Độ</a>
                </li>
                {{--                Kết thúc phần công việc--}}

                {{--                Bắt đầu phần Thị Trường--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Thị Trường</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('admin_market') }}"> <i class="menu-icon fa fa-line-chart" style="color: #FAB702"></i>Dữ Liệu</a>
                </li>
                {{--                Kết thúc phần công việc--}}

                {{--                Bắt đầu phần Nhân Viên--}}
                <h3 class="menu-title" style="color: #FAB702; margin-top: 0px">Nhân Viên</h3>
                <li class="menu-item-has-children dropdown">
                    <a href="{{ route('owens_Emp') }}"> <i class="menu-icon fa fa-address-card" style="color: #FAB702"></i>Danh Sách</a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#"> <i class="menu-icon fa fa-user-secret" style="color: #FAB702"></i>Tài Khoản</a>
                </li>
                {{--                Kết thúc phần công việc--}}
            </ul>
        </div>
    </nav>
</aside>


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <div class="header-left">

                    {{--                    Search Icon--}}
                    <button class="search-trigger" ><i class="fa fa-search-plus"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    {{-- Bell icon--}}
                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">1</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>

                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>

                        </div>
                    </div>

                    {{-- Messeage icon --}}
                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">1</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>

                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src=""></span>
                                <span class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('/css/admin_css/images/admin.jpg') }}" alt="a">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Tài Khoản</a>

                        <a class="nav-link" href="#"><i class="fa fa-comment-o"></i> Thông Báo <span
                                class="count">1</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="dashContainer">
        @yield('content')
    </div>
</div>
<script src="{{ asset('/js/admin_js/jquery/dist/jquery.min.js') }} "></script>
<script src="{{ asset('/js/admin_js/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('/js/admin_js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/admin_js/main.js') }}"></script>

<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>


</body>
</html>
