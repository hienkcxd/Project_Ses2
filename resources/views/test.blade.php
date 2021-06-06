@extends('Layout.layout_market')


@section('content')
    @foreach($view as $v)
        {!!($v->content)!!}
    @endforeach
@endsection

@section('title','Market_Contructure')
