@extends('Layout.main')
@section('content')
<div id="content" >
    <div class="container">
        <div class="row" style="width: 70%; margin: auto">
            @foreach($detail as $p)
                <ul class="blog-list">
                        <li class="item {{ $p->NewsTagName }}">

                            <div class="post-content ">
                                <div class="post-image">
                                    <img src="{{ asset("$p->images") }}" alt=""/>
                                </div>
                                <div class="date-box">
                                    <div class="day" style="font-size: 20px">{{ $p->Day }}</div>
                                    <div class="month" style="font-size: 10px">{{ $p->Year }}</div>
                                </div>
                                <div class="post-text">
                                    <h3>{{ $p->NewsName }}</h3>
                                </div>
                                <a href="{{ route('news_detail', ['NewsDetailID' => $p->NewsID ]) }}" class="btn-more">Chi tiết</a>
                            </div>
                        </li>
                </ul>

            <div>
                <p style="color: black;font-size: 20px">{{ $p->contentTop }}</p>
                <img src="{{ asset("$p->image1") }}" alt="" />
                <img src="{{ asset("$p->image2") }}" alt="" />
                <img src="{{ asset("$p->image3") }}" alt="" />
                <p style="color: black;font-size: 20px">{{ $p->contentMiddle }}</p>
                <img src="{{ asset("$p->image4") }}" alt="" />
                <img src="{{ asset("$p->image5") }}" alt="" />
                <img src="{{ asset("$p->image6") }}" alt="" />
                <p style="color: black;font-size: 20px">{{ $p->contentBot }}</p>
                <img src="{{ asset("$p->image7") }}" alt="" />
                <img src="{{ asset("$p->image8") }}" alt="" />
                <img src="{{ asset("$p->image9") }}" alt="" />
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
