@extends('Layout.main')

@section('sub-header')
    @include('Service-Detail.SubHeader')
@endsection

@section('content')
    @include('Service.MainDetail')
@endsection


@section('title','Service-Detail_Contructure')
@section('idBody')class = "page-services"@endsection
@section('header-bg')class = "header-bg"@endsection
