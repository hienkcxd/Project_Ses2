@extends('Layout.main')

@section('sub-header')
    @include('Market.SubHeader')
@endsection

@section('content')
    <div class="contentChart">
        @include('Market.clickContent')
        @include('Market.contentMarket')
    </div>
    <div style="clear: both;"></div>

@endsection


@section('title','Market_Contructure')
@section('idBody')class = "page-Market"@endsection
@section('header-bg')class = "header-bg"@endsection
