@extends('Layout.employee')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @include('form.create_news_form')

@endsection
@section('title', 'Employee_CreateProject')

