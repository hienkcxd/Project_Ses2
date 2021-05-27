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
                                <span class="details">ID:</span>
                                <input type="text" name="WorkID" placeholder="Nhập id dự án..." value="{{ old('WorkID') }}">
                                <span class="text-danger">@error('WorkID') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Tên Công Việc:</span>
                                <select name="WorkName" id="WorkName"></select>
                                <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Giá Dự Kiến - (Triệu):</span>
                                <select name="Price" id="Price"></select>
                                <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Giá Thực Tế - (Triệu):</span>
                                <input type="number" name="Price_Int" placeholder="Nhập giá thực tế...">
                                <span class="text-danger">@error('Price_Int') {{ $message }} @enderror</span>
                            </div>

                            <div class="input-box">
                                <span class="details">Địa Chỉ:</span>
                                <select name="Address" id="Address"></select>
                                <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
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
                                <select name="CusID" id="CusID" >
                                    @foreach ($cusList as $item)
                                        <option value="{{ $item->CusID }}">{{ $item->CusID }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">@error('CusID') {{ $message }} @enderror</span>
                            </div>
                            <div class="input-box">
                                <span class="details">Tên Khách Hàng:</span>
                                <select name="CusName" id="CusName"></select>
                                <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                            </div>
                            <div class="input-box">
                                <span class="details">SĐT Khách Hàng:</span>
                                <select name="CusPhone" id="CusPhone"></select>
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
                                <select name="EmpID" id="EmpID"></select>
                            </div>
                            <div class="input-box">
                                <span class="details">Tên Nhân Viên:</span>
                                <select name="EmpName" id="EmpName"></select>
                            </div>
                            <div class="input-box">
                                <span class="details">Số Điện Thoại:</span>
                                <select name="EmpPhone" id="EmpPhone"></select>
                            </div>
                            <div class="input-box">
                                <span class="details">Chức Vụ:</span>
                                <select name="position" id="position"></select>
                            </div>
                        </div>
                    </div>

                    <div class="block_3">
                        <div class="title">Tiến Độ Hoàn Thành:</div>
                        <div class="project-infor">

                            <div class="input-box">
                                <span class="details">Giấy Phép - Thiết Kế:</span>
                                <input type="text" name="registration" placeholder="Tình trạng xin phép - VD: 10%" value="{{ old('registration') }}">
                            </div>

                            <div class="input-box">
                                <span class="details">Thi Công Thô:</span>
                                <input type="text" name="construction" placeholder="Tiến độ phần thô - VD: 20%" value="{{ old('construction') }}">
                            </div>

                            <div class="input-box">
                                <span class="details">Thi Công Nội Thất:</span>
                                <input type="text" name="Architecture" placeholder="Tiến độ thi công kiến trúc - VD: 30%" value="{{ old('Architecture') }}">
                            </div>

                            <div class="input-box">
                                <span class="details">Tổng Tiến Độ:</span>
                                <input type="text" name="Progress" placeholder="Tổng tiến độ - VD: 50%" value="{{ old('Progress') }}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function () {
            let CusID = $("#CusID").val();
            getCust(CusID)

            $(document).ajaxComplete(function (CusName) {
                CusName = $('select[name=CusName] option:selected').val();
                CusPhone = $('select[name=CusPhone] option:selected').val();
                EmpID = $('select[name=EmpID] option:selected').val();
                empName = $('select[name=EmpName] option:selected').val();
                empPhone = $('select[name=EmpPhone] option:selected').val();
                position = $('select[name=position] option:selected').val();
                Price = $('select[name=Price] option:selected').val();
                Address = $('select[name=Address] option:selected').val();
            });

            function getCust(CusID) {
                url = "cusDetail_" + CusID;
                console.log(CusID)
                $.get(url)
                    .done(function (data) {
                        console.log("data: " + data);
                        var CusNameData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            CusNameData += `<option value= "${row.CusName}" >${row.CusName}</option><br>`
                        })
                        var CusPhoneData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            CusPhoneData += `<option value= "${row.CusPhone}" >${row.CusPhone}</option><br>`
                        })
                        var WorkNameData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            WorkNameData += `<option value= "${row.WorkName}" >${row.WorkName}</option><br>`
                        })
                        var AddressData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            AddressData += `<option value= "${row.Address}" >${row.Address}</option><br>`
                        })
                        var PriceData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            PriceData += `<option value= "${row.Price}" >${row.Price}</option><br>`
                        })
                        var EmpNameData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            EmpNameData += `<option value= "${row.EmpName}" >${row.EmpName}</option><br>`
                        })
                        var EmpPhoneData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            EmpPhoneData += `<option value= "${row.EmpPhone}" >${row.EmpPhone}</option><br>`
                        })
                        var EmpIDData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            EmpIDData += `<option value= "${row.EmpID}" >${row.EmpID}</option><br>`
                        })
                        $("#EmpID").empty().append(EmpIDData);
                        $("#EmpName").empty().append(EmpNameData);
                        $("#EmpPhone").empty().append(EmpPhoneData);
                        $("#CusName").empty().append(CusNameData);
                        $("#CusPhone").empty().append(CusPhoneData);
                        $("#WorkName").empty().append(WorkNameData);
                        $("#Address").empty().append(AddressData);
                        $("#Price").empty().append(PriceData);
                        let EmpID = $("#EmpID").val();
                        getData(EmpID)
                    });
            }
            function getData(EmpID) {
                url = "empDetail_" + EmpID;
                console.log(EmpID)
                $.get(url)
                    .done(function (data) {
                        console.log("data: " + data);
                        var positionData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            positionData += `<option value= "${row.position}" >${row.position}</option><br>`
                        })
                        $("#position").empty().append(positionData);
                    });
            }

            $("#CusID").change(function (e) {
                e.preventDefault();
                CusID = $("#CusID").val();
                getCust(CusID)
                $(document).ajaxComplete(function (CusName) {
                    CusName = $('select[name=CusName] option:selected').val();
                    CusPhone = $('select[name=CusPhone] option:selected').val();
                    EmpID = $('select[name=EmpID] option:selected').val();
                    empName = $('select[name=EmpName] option:selected').val();
                    empPhone = $('select[name=EmpPhone] option:selected').val();
                    position = $('select[name=position] option:selected').val();
                    Price = $('select[name=Price] option:selected').val();
                    Address = $('select[name=Address] option:selected').val();
                });
            });

        });
    </script>

@endsection

@section('title', 'Owens_CreateWork')
