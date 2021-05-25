@extends('Layout.employee')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @include('dashboard_Employee.customer.detail_form')
@endsection

@section('title', 'Employee_Dashboard_CustomerDetail')
