@extends('Layout.employee')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @include('dashboard_Owens.project.detail_Form')
@endsection

@section('title', 'Employee_Project_Form')
