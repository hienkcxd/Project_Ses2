@extends('Layout.main')

@section('sub-header')
    @include('Market.SubHeader')
@endsection

@section('content')

        @include('Market.clickContent')
        @include('Market.contentMarket')

@endsection


@section('title','Market_Contructure')
@section('idBody')class = "page-Market"@endsection
@section('header-bg')class = "header-bg"@endsection
