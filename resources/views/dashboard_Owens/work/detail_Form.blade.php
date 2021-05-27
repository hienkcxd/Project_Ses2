<div class="containerWork">
    <div class="projectForm">
        <form method="POST" action="{{ route('admin.update_work', ['WorkID'=>$workList->WorkID]) }}">
            @csrf
            <div class="row">
                <div class="block_1">
                    <div class="title">Thông Tin Công Việc:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Tên Công Việc:</span>
                            <input type="text" name="WorkName" value="{{ $workList->WorkName }}">
                            <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">Địa Chỉ:</span>
                            <input type="text" name="Address" value="{{ $workList->Address }}">
                            <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">Giá Dự Kiến - (Triệu):</span>
                            <input type="text" name="Price" value="{{ $customer->Price }}">
                            <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">Thực Tế - (Triệu):</span>
                            <input type="number" name="Price_Int" value="{{ $workDetail->Price_Int }}">
                            <span class="text-danger">@error('Price_Int') {{ $message }} @enderror</span>
                        </div>

                        <div class="input-box">
                            <span class="details">Mô tả:</span>
                            <textarea name="WorkDesc" id="WorkDesc" style="resize: none;" cols="60" rows="3">{{ $workList->WorkDesc }}</textarea>
                            <span class="text-danger">@error('WorkDesc') {{ $message }} @enderror</span>
                        </div>

                    </div>
                </div>

                <div class="block_2">
                    <div class="title">Thông Tin Khách Hàng:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Cust_ID:</span>
                            <input type="text" name="CusID" value="{{ $customer->CusID }}" readonly>
                            <span class="text-danger">@error('CusID') {{ $message }} @enderror</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Tên Khách Hàng:</span>
                            <input type="text" name="CusName" value="{{ $customer->CusName }}">
                            <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                        </div>
                        <div class="input-box">
                            <span class="details">SĐT Khách Hàng:</span>
                            <input type="text" name="CusPhone" value="{{ $customer->CusPhone}}">
                            <span class="text-danger">@error('CusPhone') {{ $message }} @enderror</span>
                        </div>
                        <div class="input-box">
                            <span class="details">Số Dự Án:</span>
                            <input type="text" value="{{ $count }}" readonly>
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
                            <select name="EmpID" id="EmpID" >
                                <option value="{{ $customer->EmpID }}">---{{ $customer->EmpID }}---</option>
                                @foreach ($empList as $item)
                                    <option value="{{ $item->EmployeeID }}">{{ $item->EmployeeID }}</option>
                                @endforeach
                            </select>
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

                <div class="block_4">
                    <div class="title">Tiến Độ Hoàn Thành:</div>
                    <div class="project-infor">

                        <div class="input-box">
                            <span class="details">Giấy Phép - Thiết Kế:</span>
                            <input type="text" name="registration" value="{{ $workDetail->registration }}">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" id="registration"
                                     role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ $workDetail->registration }}">
                                    {{ $workDetail->registration == 'x' ? '':('Completed: '.$workDetail->registration) }}
                                </div>
                            </div>
                        </div>

                        <div class="input-box">
                            <span class="details">Thi Công Thô:</span>
                            <input type="text" name="construction" value="{{ $workDetail->construction }}">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" id="construction"
                                     role="progressbar" aria-valuemax="100" style="width: {{ $workDetail->construction }};">
                                    {{ ($workDetail->construction == 'x') ? '': ('Completed: '.$workDetail->construction) }}
                                </div>
                            </div>
                        </div>

                        <div class="input-box">
                            <span class="details">Thi Công Nội Thất:</span>
                            <input type="text" name="Architecture" value="{{ $workDetail->Architecture }}">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" id="Architecture"
                                     role="progressbar" aria-valuemax="100" style="width: {{ $workDetail->Architecture }}">
                                    {{ ($workDetail->Architecture == 'x') ? '': ('Completed: '.$workDetail->Architecture) }}
                                </div>
                            </div>
                        </div>

                        <div class="input-box">
                            <span class="details">Tổng Tiến Độ:</span>
                            <input type="text" name="Progress" value="{{ $workDetail->Progress }}">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="Progress"
                                     role="progressbar" aria-valuemax="100" style="width: {{ $workDetail->Progress }}">
                                    {{ ($workDetail->Progress == 'x') ? '': ('Completed: '.$workDetail->Progress) }}
                                </div>
                            </div>
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
        let EmpID = $("#EmpID").val();
        getData(EmpID)
        $(document).ajaxComplete(function (empName) {
            empName = $('select[name=EmpName] option:selected').val();
            empPhone = $('select[name=EmpPhone] option:selected').val();
            position = $('select[name=position] option:selected').val();
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
                    var positionData = '';
                    $.each(JSON.parse(data), function (index, row) {
                        positionData += `<option value= "${row.position}" >${row.position}</option><br>`
                    })
                    $("#EmpName").empty().append(EmpNameData);
                    $("#EmpPhone").empty().append(EmpPhoneData);
                    $("#position").empty().append(positionData);
                });
        }
        $("#EmpID").change(function (e) {
            e.preventDefault();
            EmpID = $("#EmpID").val();
            getData(EmpID)
            $(document).ajaxComplete(function (empName) {
                empName = $('select[name=EmpName] option:selected').val();
                empPhone = $('select[name=EmpPhone] option:selected').val();
                position = $('select[name=position] option:selected').val();
                console.log(empName);
                console.log(empPhone);
            });
        });

    });
</script>

