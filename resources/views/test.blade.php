@extends('Layout.layout_market')


@section('content')
    <div id="content" style="padding: 30px 0 30px 0">
        <div class="container">
            <div class="row" style="width: 70%; margin: auto">
                @foreach($view as $v)
                    {!!($v->content)!!}
                @endforeach

            </div>
        </div>
    </div>

@endsection

@section('title','Market_Contructure')
