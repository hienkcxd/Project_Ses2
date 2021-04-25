@extends('Layout.main')
@section('content')
<div id="content" >
    <div class="container">
        <div class="row" style="width: 70%; margin: auto">


                <ul class="blog-list">
                    @foreach($detail as $p)
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
                    @endforeach
                </ul>

            <div>
                <p>{{ $p->contentTop }}</p>
            </div>


        </div>
    </div>
</div>

@endsection
