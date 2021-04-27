@extends('Layout.main')
@section('sub-header')
    @include('News.SubHeader')
@endsection

@section('content')
    <div id="content" style="padding: 30px 0 30px 0">
        <div class="container">
            <div class="row" style="width: 70%; margin: auto">
                @foreach($detail as $p)

                    {{--                    // title news--}}
                    <ul class="blog-list">
                        <li class="item {{ $p->NewsTagName }}">

                            <div class="post-content ">
                                <div class="post-image">
                                    <img src="{{ asset("$p->images") }}" alt=""/>
                                </div>
                                <div class="date-box">
                                    <div class="day" style="font-size: 20px">{{ $p->Day }}</div>
                                    <div class="month"
                                         style="font-size: 15px; letter-spacing: 5px; padding-left: 7px">{{ $p->Year }}</div>
                                </div>
                                <div class="post-text">
                                    <h3 style="font-weight: bold">{{ $p->NewsName }}</h3>
                                </div>
                                <a href="{{ route('news_detail', ['NewsDetailID' => $p->NewsID ]) }}" class="btn-more">Chi tiết</a>
                            </div>
                        </li>
                    </ul>

                    <div style="margin-top: 50px; text-align: center; width: 100%">
                        <span
                            style="font-size: 35px">&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;</span>
                    </div>

                    {{--                    //content news--}}
                    <div style="margin-top: 20px;">
                        <p style="color: black;font-size: 15px; margin-top: 30px; margin-bottom: 15px">{{ $p->contentTop }}</p>
                        <img src="{{ asset("$p->image1") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image2") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image3") }}" alt="" width="100%"/>
                        <p style="color: black;font-size: 15px; margin-top: 30px; margin-bottom: 15px">{{ $p->contentMiddle }}</p>
                        <img src="{{ asset("$p->image4") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image5") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image6") }}" alt="" width="100%"/>
                        <p style="color: black;font-size: 15px; margin-top: 30px; margin-bottom: 15px">{{ $p->contentBot }}</p>
                        <img src="{{ asset("$p->image7") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image8") }}" alt="" width="100%"/>
                        <img src="{{ asset("$p->image9") }}" alt="" width="100%"/>
                        <p style="text-align: right;
                        font-size: 13px;
                        font-weight: bold;
                        font-style: italic;margin-bottom: 0px;color: black">
                            {{ $p->Day }}/{{ $p->Year }}
                        </p>
                        <p style="text-align: right;font-size: 20px;margin: 0px; color: black">Hoàng Duy</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
@section('header-bg')class = "header-bg"@endsection
