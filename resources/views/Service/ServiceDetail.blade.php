@extends('Layout.main')

@section('sub-header')
    @include('Service.SubHeader')
@endsection

@section('content')
    @include('Service.MainDetail')
@endsection



@section('title','Service_Detail_Contructure')

@section('idBody')class = "page-services"@endsection
@section('header-bg')class = "header-bg"@endsection
