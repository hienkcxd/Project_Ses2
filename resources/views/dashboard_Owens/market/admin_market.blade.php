@extends('Layout.Owens')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @if(Session::get('thongbao'))
        <div class="alert alert-info">
            {{ Session::get('thongbao') }}
        </div>
    @endif
    @include('dashboard_Owens.market.distAndWard_table')
    @include('dashboard_Owens.market.market_table')
@endsection
@section('title', 'Owens_market')
