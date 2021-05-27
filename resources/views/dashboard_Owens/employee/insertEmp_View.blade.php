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
    <div class='empContainer' style="margin-top: 100px">
        <div class='wrapper animated bounceInLeft'>
            <div class='contact'>
                <form method="POST" action="{{ route('createEmp') }}">
                    @csrf
                    <div class="avata">
                        <img src="{{ asset('images\AboutUs\team_pic_1.jpg') }}" alt="">
                    </div>

                    <div class="title">
                        <h2>THÊM NHÂN VIÊN MỚI</h2>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Tên</label>
                            <input type="text" name='empName' min="0" value="{{ old('empName') }}" placeholder="Nhập tên nhân viên...">
                            <span class="text-danger">@error('empName') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>ID:</label>
                            <input type="text" name='EmployeeID' value="{{ old('EmployeeID') }}" placeholder="Nhập ID nhân viên - VD:C10">
                            <span class="text-danger">@error('EmployeeID') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="emp2ndRow">
                        <p>
                            <label>Chức Vụ</label>
                            <input type="text" name='position' min="0" value="{{ old('position') }}" placeholder="Nhập chức vụ...">
                            <span class="text-danger">@error('position') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Mô Tả:</label>
                            <input type="text" name='describe' min="0" value="{{ old('describe') }}" placeholder="Nhập mô tả...">
                            <span class="text-danger">@error('describe') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Avata:</label>
                            <input type="text" name='images' value="{{ old('email') }}" placeholder="Nhập link avata...">
                            <span class="text-danger">@error('images') {{ $message }} @enderror</span>
                        </p>

                    </div>
                    <h4 style="color: white; text-decoration-line:underline">THÔNG TIN LIÊN LẠC:</h4>
                    <div class="emp2ndRow">
                        <p>
                            <label>Email:</label>
                            <input type="text" name='email' value="{{ old('email') }}" placeholder="Nhập email nhân viên...">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <label>Số ĐT:</label>
                            <input type="text" name='phone' min="0" value="{{ old('phone') }}" placeholder="Nhập SĐT nhân viên...">
                            <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Zalo:</label>
                            <input type="text" name='zalo' value="{{ old('zalo') }}" placeholder="Nhập zalo nhân viên...">
                            <span class="text-danger">@error('zalo') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <label>Facebook:</label>
                            <input type="text" name='facebook' min="0" value="{{ old('facebook') }}" placeholder="Nhập facebook nhân viên...">
                            <span class="text-danger">@error('facebook') {{ $message }} @enderror</span>
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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </div>
@endsection

@section('title', 'Owens_CreateEmp')

