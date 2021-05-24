@extends('Layout.Owens')

@section('content')
    <div class='regisContainer'>
        <div class="row" style="margin: 0 auto; padding: 0">
            <div class="col">
                <h4 style="margin-top: 25px; text-align: center">Register | Employee</h4>
                <hr>
                <form action="{{ route('auth.save') }}" method="post">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Employee ID:</label>
                        <input type="text" name="EmployeeID" class="form-control" placeholder="Enter employee id" value="{{ old('EmployeeID') }}">
                        <span class="text-danger">@error('EmployeeID') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Account:</label>
                        <input type="text" name="Account" class="form-control" placeholder="Enter account" value="{{ old('Account') }}">
                        <span class="text-danger">@error('Account') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" name="Email" class="form-control" placeholder="Enter Email" value="{{ old('Email') }}">
                        <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" name="Password" class="form-control" placeholder="Enter Password" value="{{ old('Password') }}">
                        <span class="text-danger"> @error('Password'){{ $message }} @enderror </span>
                    </div>
                    <div class="form-group">
                        <label for="">Loại Tài Khoản:</label>
                        <input type="text" name="Role" class="form-control" placeholder="Enter authentication" value="{{ old('Role') }}">
                        <span class="text-danger"> @error('Role'){{ $message }} @enderror </span>
                    </div>

                    <div class="form-group" style="text-align: center; margin-top: 25px">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                        <br>
                        <a href="#">Get Back</a>
                    </div>

                </form>
            </div>
        </div>


    </div>

@endsection

@section('title', 'Owens_Register')
