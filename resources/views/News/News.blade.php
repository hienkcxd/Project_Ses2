@extends('Layout.main')

@section('sub-header')
    @include('News.SubHeader')
@endsection

@section('content')
    @include('News.ListNews', ['news' => $news])
@endsection


@section('title','News_Contructure')
@section('idBody')class = "page-News"@endsection
@section('header-bg')class = "header-bg"@endsection
