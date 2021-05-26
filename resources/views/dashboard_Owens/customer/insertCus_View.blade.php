@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <div class='empContainer' style="margin-top: 100px">
        <div class='wrapper animated bounceInLeft'>
            <div class='contact'>
                <form method="POST" action="{{ route('create.customer') }}">
                    @csrf
                    <div class="avata">
                        <img src="{{ asset('images\AboutUs\team_pic_1.jpg') }}" alt="AVATA">
                    </div>
                    <div class="title">
                        <h2>TẠO THÔNG TIN KHÁCH HÀNG</h2>
                    </div>
                    <div class="empfirstRow">
                        <p>
                            <label>Tên</label>
                            <input type="text" name='CusName' min="0" placeholder="Tên khách hàng" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>ID:</label>
                            <input type="text" name='CusID'  placeholder="ID khách hàng" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('CusID') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Công Việc:</label>
                            <input type="text" name='WorkName' min="0" placeholder="Công việc" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>

                        </p>
                        <p>
                            <label>Đơn Giá - (Triệu):</label>
                            <input type="text" name='Price' min="0" placeholder="Giá Thành" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="emp2ndRow">

                        <p>
                            <label>Địa Chỉ:</label>
                            <input type="text" name='Address' min="0" placeholder="Địa Chỉ" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Số Điện Thoại:</label>
                            <input type="text" name='CusPhone' placeholder="Số điện thoại" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('CusPhone') {{ $message }} @enderror</span>
                        </p>

                    </div>
                    <h4 style="color: white; text-decoration-line:underline">NGƯỜI PHỤ TRÁCH:</h4>
                    <div class="emp2ndRow">
                        <p>
                            <label>ID Nhân Viên:</label>
                            <input type="text" name='EmpID' min="0"  placeholder="ID nhân viên" value="{{ old('EmployeeID') }}">
                            <span class="text-danger">@error('EmpID') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tên Nhân Viên:</label>
                            <input type="text" name='EmpName' readonly>
                            <span class="text-danger">@error('EmpName') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <label>Số Điện Thoại:</label>
                            <input type="text" name='EmpPhone' min="0" readonly>
                            <span class="text-danger">@error('EmpPhone') {{ $message }} @enderror</span>
                        </p>

                    </div>

                    <div class="thirdRow">
                        <p class='full'>
                            <button class="btn btn-warning">Submit</button>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Owens_CreateCustomer')
