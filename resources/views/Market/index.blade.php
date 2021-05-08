@extends('Layout.layout_market')

{{--@section('sub_infor')--}}
{{--    @include('Market.SubHeader')--}}
{{--@endsection--}}

@section('chart_content')
{{--    @include('Market.SubHeader')--}}
{{--    @include('Market.chart')--}}
    @include('Market.districtPrice')

@endsection


@section('title','Market_Contructure')


