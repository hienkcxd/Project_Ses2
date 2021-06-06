@extends('Layout.main')
@section('sub-header')
    @include('News.SubHeader')
@endsection

@section('content')
    <div id="content" style="padding: 30px 0 30px 0">
        <div class="container">
            <div class="row" style="width: 70%; margin: auto">
                @foreach($detail as $p)
                    {!!($p->content)!!}
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('header-bg')class = "header-bg"@endsection
