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
                            <select name="EmployeeID" id="EmployeeID" class="form-control" >
                                @foreach ($empList as $item)
                                    <option value="{{ $item->EmployeeID }}">{{ $item->EmployeeID }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('EmployeeID') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Email:</label>
                            <select name="Email" id="Email" class="form-control"></select>
                            <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Loại Tài Khoản:</label>
                            <select name="Role" id="Role" class="form-control">
                                <option value="1">Nhân Viên</option>
                                <option value="2">Giám Đốc</option>
                            </select>
                            <span class="text-danger"> @error('Role'){{ $message }} @enderror </span>
                        </div>

                        <div class="form-group">
                            <label for="">Account:</label>
                            <input type="text" name="Account" class="form-control" placeholder="Enter account" value="{{ old('Account') }}">
                            <span class="text-danger">@error('Account') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" name="Password" class="form-control" placeholder="Enter Password" value="{{ old('Password') }}">
                            <span class="text-danger"> @error('Password'){{ $message }} @enderror </span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function () {
            let EmpID = $("#EmployeeID").val();
            getData(EmpID)

            function getData(EmpID) {
                url = "empDetail_" + EmpID;
                console.log(EmpID)
                $.get(url)
                    .done(function (data) {
                        console.log("data: " + data);
                        var emailData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            emailData += `<option value= "${row.email}" >${row.email}</option><br>`
                        })
                        $("#Email").empty().append(emailData);
                    });
            }

            $("#EmployeeID").change(function (e) {
                e.preventDefault();
                EmpID = $("#EmployeeID").val();
                getData(EmpID)
                $(document).ajaxComplete(function (Email) {
                    Email = $('select[name=Email] option:selected').val();
                });
            });

        });
    </script>

@endsection

@section('title', 'Owens_Register')
