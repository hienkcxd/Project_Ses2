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
                            <input type="text" name='CusName' min="0" placeholder="Tên khách hàng" value="{{ old('CusName') }}">
                            <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>ID:</label>
                            <input type="text" name='CusID'  placeholder="ID khách hàng" value="{{ old('CusID') }}">
                            <span class="text-danger">@error('CusID') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Công Việc:</label>
                            <input type="text" name='WorkName' min="0" placeholder="Công việc" value="{{ old('WorkName') }}">
                            <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>

                        </p>
                        <p>
                            <label>Đơn Giá - (Triệu):</label>
                            <input type="text" name='Price' min="0" placeholder="Giá Thành" value="{{ old('Price') }}">
                            <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="emp2ndRow">

                        <p>
                            <label>Địa Chỉ:</label>
                            <input type="text" name='Address' min="0" placeholder="Địa Chỉ" value="{{ old('Address') }}">
                            <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Số Điện Thoại:</label>
                            <input type="text" name='CusPhone' placeholder="Số điện thoại" value="{{ old('CusPhone') }}">
                            <span class="text-danger">@error('CusPhone') {{ $message }} @enderror</span>
                        </p>

                    </div>
                    <h4 style="color: white; text-decoration-line:underline">NGƯỜI PHỤ TRÁCH:</h4>
                    <div class="emp2ndRow">
                        <p>
                            <label>ID Nhân Viên:</label>
                            <select name="EmpID" id="EmpID" >
                                @foreach ($empList as $item)
                                    <option value="{{ $item->EmployeeID }}">{{ $item->EmployeeID }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">@error('EmpID') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tên Nhân Viên:</label>
                            <select name="EmpName" id="EmpName"></select>
                            <span class="text-danger">@error('EmpName') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <label>Số Điện Thoại:</label>
                            <select name="EmpPhone" id="EmpPhone"></select>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function () {
            let EmpID = $("#EmpID").val();
            getData(EmpID)
            $(document).ajaxComplete(function (empName) {
                empName = $('select[name=EmpName] option:selected').val();
                empPhone = $('select[name=EmpPhone] option:selected').val();
            });

            function getData(EmpID) {
                url = "empDetail_" + EmpID;
                console.log(EmpID)
                $.get(url)
                    .done(function (data) {
                        console.log("data: " + data);
                        var EmpNameData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            EmpNameData += `<option value= "${row.empName}" >${row.empName}</option><br>`
                        })
                        var EmpPhoneData = '';
                        $.each(JSON.parse(data), function (index, row) {
                            EmpPhoneData += `<option value= "${row.phone}" >${row.phone}</option><br>`
                        })
                        $("#EmpName").empty().append(EmpNameData);
                        $("#EmpPhone").empty().append(EmpPhoneData);
                    });
            }
            $("#EmpID").change(function (e) {
                e.preventDefault();
                EmpID = $("#EmpID").val();
                getData(EmpID)
                $(document).ajaxComplete(function (empName) {
                    empName = $('select[name=EmpName] option:selected').val();
                    empPhone = $('select[name=EmpPhone] option:selected').val();
                    console.log(empName);
                    console.log(empPhone);
                });
            });

        });
    </script>
@endsection

@section('title', 'Owens_CreateCustomer')
