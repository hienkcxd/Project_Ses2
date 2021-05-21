@extends('Layout.Owens')

@section('content')
    <h2>{{ session('thongbao') }}</h2>
    @include('dashboard_Owens.market.distAndWard_table')
    @include('dashboard_Owens.market.market_table')
@endsection
@section('title', 'Owens_market')
