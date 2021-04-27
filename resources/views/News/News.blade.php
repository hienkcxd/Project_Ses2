@extends('Layout.main')

@section('sub-header')
    @include('News.SubHeader')
@endsection

@section('content')

    <style>
        .pagination li a {
            font-size: 16px;
            font-weight: bold;
            border: solid 0.5px #404040;
            color: black;
            margin: 1px;
            padding: 10px 15px 10px 15px;
        }

        .pagination > .active > span, .pagination > .active > a:hover > li:first-child > span {
            font-size: 16px;
            border: solid 0.5px #404040;
            font-weight: bold;
            color: whitesmoke;
            margin: 1px;
            padding: 10px 15px 10px 15px;
        }

        .pagination > .disabled > span{
            font-size: 16px;
            border: solid 1px #404040;
            border: solid 0.5px #404040;
            font-weight: bold;
            color: blue;
            margin: 1px;
            padding: 10px 15px 10px 15px;
        }
    </style>

        <div id="listNews">
            @include('News.ListNews')
        </div>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/News/fetch_data?page=" + page,
                    success: function (data) {
                        $('#listNews').html(data);
                    }
                });
            }
        });
    </script>

@endsection

@section('title','News_Contructure')
@section('idBody')class = "page-News"@endsection
@section('header-bg')class = "header-bg"@endsection
