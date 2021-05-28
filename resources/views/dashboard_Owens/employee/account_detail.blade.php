@extends('Layout.Owens')

@section('content')
    <div class='regisContainer'>
        <div class="row" style="margin: 0 auto; padding: 0">
            <div class="col">
                <h4 style="margin-top: 25px; text-align: center">Change Account</h4>
                <hr>
                <form action="{{ route('updAccount') }}" method="post">
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
                        <input type="text" name="EmployeeID" class="form-control" placeholder="Enter account" value="{{ $accDetail->EmployeeID }}" readonly>
                        <span class="text-danger">@error('EmployeeID') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="text" name="Email" class="form-control" placeholder="Enter account" value="{{ $accDetail->Email }}" readonly>
                        <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Loại Tài Khoản:</label>
                        <select name="Role" id="Role" class="form-control">
                            <option value="{{ $accDetail->Role }}">{{ $accDetail->Role == 1 ? '--Nhân Viên--':'--Giám Đốc--' }}</option>
                            <option value="1">Nhân Viên</option>
                            <option value="2">Giám Đốc</option>
                        </select>
                        <span class="text-danger"> @error('Role'){{ $message }} @enderror </span>
                    </div>

                    <div class="form-group">
                        <label for="">Account:</label>
                        <input type="text" name="Account" class="form-control" placeholder="Enter account" value="{{ $accDetail->Account }}" readonly>
                        <span class="text-danger">@error('Account') {{ $message }} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="">Old Password:</label>
                        <input type="password" name="Password" class="form-control" placeholder="Enter Password" value="{{ old('Password') }}">
                        <span class="text-danger"> @error('Password'){{ $message }} @enderror </span>
                    </div>

                    <div class="form-group">
                        <label for="">New Password:</label>
                        <input type="password" name="New_Password" class="form-control" placeholder="Enter Password" value="{{ old('New_Password') }}">
                        <span class="text-danger"> @error('New_Password'){{ $message }} @enderror </span>
                    </div>

                    <div class="form-group" style="text-align: center; margin-top: 25px">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                        <br>
                        <a href="{{ route('accLists') }}">Get Back</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection

@section('title', 'Owens_AccountDetail')
