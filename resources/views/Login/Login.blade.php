@extends('Layout.main')

@section('sub-header')
    @include('Login.SubHeader')
@endsection

@section('content')
    @include('Login.FormLogin')
@endsection


@section('title','Login_Contructure')
@section('idBody')class = "page-login"@endsection
@section('header-bg')class = "header-bg"@endsection
