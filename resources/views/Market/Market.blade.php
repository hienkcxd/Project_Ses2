@extends('Layout.main')

@section('sub-header')
    @include('Market.SubHeader')
@endsection

@section('content')
    <div style="min-height: 600px">
        <div class="contentChart">
            <input type="radio" name="slider" checked id="home">
            <input type="radio" name="slider" id="blog">
            <input type="radio" name="slider" id="code">
            <input type="radio" name="slider" id="help">
            <input type="radio" name="slider" id="about">

            <nav>
                <ul>
                    <div class="slider"></div>
                    <li>
                        <label for="home" class="home id-color" id="test">

                            <span class="id-color"><i class="fas fa-home"></i>Home</span>
                        </label>
                    </li>
                    <li>
                        <label for="blog" class="blog id-color"><i class="fas fa-blog"></i>
                            <span class="id-color">Home</span>
                        </label>
                    </li>
                    <li>
                        <label for="code" class="code id-color"><i class="fas fa-code"></i>
                            <span class="id-color">Home</span>
                        </label>
                    </li>
                    <li>
                        <label for="help" class="help id-color"><i class="far fa-envelope"></i>
                            <span class="id-color">Home</span>
                        </label>
                    </li>
                    <li>
                        <label for="about" class="about id-color"><i class="far fa-user"></i>
                            <span class="id-color">Home</span>
                        </label>
                    </li>

                </ul>
            </nav>

            <div class="selectContent">
                <div class="content content-1">
                    content 1
                </div>

                <div class="content content-2">
                    content 2
                </div>

                <div class="content content-3">
                    content 3
                </div>

                <div class="content content-4">
                    content 4
                </div>

                <div class="content content-5">
                    content 5
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
@endsection


@section('title','Market_Contructure')
@section('idBody')class = "page-Market"@endsection
@section('header-bg')class = "header-bg"@endsection
