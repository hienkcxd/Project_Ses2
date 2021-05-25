@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
   @include('dashboard_Owens.work.detail_Form')
@endsection

@section('title', 'Owens_DetailWork')
