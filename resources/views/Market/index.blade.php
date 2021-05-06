@extends('Layout.layout_market')

@section('sub_infor')
    @include('Market.SubHeader')
@endsection

@section('chart_content')
        @include('Market.chart', ['districtList' => $districtList, 'wardList'=>$wardList])
@endsection


@section('title','Market_Contructure')


