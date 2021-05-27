@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <div class="containerWork">
        <div class="projectForm">
            <form method="POST" action="{{ route('createWork') }}">
                @csrf

                <div class="row">

                    <div class="block_1">
                        <div class="title">Thông Tin Công Việc:</div>
                        <div class="project-infor">
                            <div class="input-box">
                                <span class="details">Tên Công Việc:</span>
                                <input type="text" name="WorkName" placeholder="Nhập tên công việc...">
                                <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Địa Chỉ:</span>
                                <input type="text" name="Address" placeholder="Nhập địa chỉ dự án...">
                                <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Giá Dự Kiến - (Triệu):</span>
                                <input type="text" name="Price" placeholder="Nhập giá dự kiến...">
                                <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Giá Thực Tế - (Triệu):</span>
                                <input type="number" name="Price_Int" placeholder="Nhập giá thực tế...">
                                <span class="text-danger">@error('Price_Int') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Mô tả:</span>
                                <textarea name="WorkDesc" id="WorkDesc" style="resize: none;" cols="60" rows="3"></textarea>
                                <span class="text-danger">@error('WorkDesc') {{ $message }} @enderror</span>
                            </div>

                        </div>
                    </div>

                    <div class="block_2">
                        <div class="title">Thông Tin Khách Hàng:</div>
                        <div class="project-infor">
                            <div class="input-box">
                                <span class="details">Cust_ID:</span>
                                <input type="text" name="CusID" placeholder="Tạo ID khách hàng...">
                                <span class="text-danger">@error('CusID') {{ $message }} @enderror</span>
                            </div>
                            <div class="input-box">
                                <span class="details">Tên Khách Hàng:</span>
                                <input type="text" name="CusName" readonly placeholder="Nhập tên khách hàng...">
                                <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                            </div>
                            <div class="input-box">
                                <span class="details">SĐT Khách Hàng:</span>
                                <input type="text" name="CusPhone" readonly placeholder="Nhập số điện thoại...">
                                <span class="text-danger">@error('CusPhone') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="block_3">
                        <div class="title">Nhân Viên Phụ Trách:</div>
                        <div class="project-infor">
                            <div class="input-box">
                                <span class="details">Emp_ID:</span>
                                <input type="text" name="EmpID">
                            </div>
                            <div class="input-box">
                                <span class="details">Tên Nhân Viên:</span>
                                <input type="text" name="EmpName" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Số Điện Thoại:</span>
                                <input type="text" name="EmpPhone" readonly>
                            </div>
                            <div class="input-box">
                                <span class="details">Chức Vụ:</span>
                                <input type="text" name="Position" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="block_3">
                        <div class="title">Tiến Độ Hoàn Thành:</div>
                        <div class="project-infor">

                            <div class="input-box">
                                <span class="details">Giấy Phép - Thiết Kế:</span>
                                <input type="text" name="registration" placeholder="Tình trạng xin phép...">
                            </div>

                            <div class="input-box">
                                <span class="details">Thi Công Thô:</span>
                                <input type="text" name="construction" placeholder="Tiến độ phần thô...">
                            </div>

                            <div class="input-box">
                                <span class="details">Thi Công Nội Thất:</span>
                                <input type="text" name="Architecture" placeholder="Tiến độ thi công kiến trúc...">
                            </div>

                            <div class="input-box">
                                <span class="details">Tổng Tiến Độ:</span>
                                <input type="text" name="Progress" placeholder="Tổng tiến độ...">
                            </div>

                        </div>
                    </div>
                    <div class="button">
                        <button class="btn btn-warning" style="background-color: #00ACC1">Submit</button>
                    </div>
                    <div class="button">
                        <button class="btn btn-warning" style="background-color: #00ACC1" type="reset">Reset</button>
                    </div>

                </div>

            </form>
        </div>
    </div>


@endsection

@section('title', 'Owens_CreateWork')
