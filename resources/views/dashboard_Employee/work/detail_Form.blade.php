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
                        </div>

                        <div class="input-box">
                            <span class="details">Địa Chỉ:</span>
                            <input type="text" name="Address" value="{{ $workList->Address }}">
                        </div>

                        <div class="input-box">
                            <span class="details">Giá Dự Án:</span>
                            <input type="text" name="Price" value="{{ $customer->Price }}">
                        </div>

                        <div class="input-box">
                            <span class="details">Thành Tiền:</span>
                            <input type="number" name="Price_Int" value="{{ $workDetail->Price_Int }}">
                        </div>

                        <div class="input-box">
                            <span class="details">Mô tả:</span>
                            <textarea name="WorkDesc" id="WorkDesc" style="resize: none;" cols="60" rows="3">{{ $workList->WorkDesc }}</textarea>
{{--                            <input type="text" name="WorkDesc" value="{{ $workList->WorkDesc }}">--}}
                        </div>

                    </div>
                </div>

                <div class="block_2">
                    <div class="title">Thông Tin Khách Hàng:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Cust_ID:</span>
                            <input type="text" name="CusID" value="{{ $customer->CusID }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Tên Khách Hàng:</span>
                            <input type="text" name="CusName" value="{{ $customer->CusName }}">
                        </div>
                        <div class="input-box">
                            <span class="details">SĐT Khách Hàng:</span>
                            <input type="text" name="CusPhone" value="{{ $customer->CusPhone}}">
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
                            <input type="text" name="EmpID" value="{{ $customer->EmpID }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Tên Nhân Viên:</span>
                            <input type="text" name="EmpName" value="{{ $workDetail->EmpName }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Số Điện Thoại:</span>
                            <input type="text" name="EmpPhone" value="{{ $customer->EmpPhone }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Chức Vụ:</span>
                            <input type="text" name="Position" value="{{ $Emp->Position }}" readonly>
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
                    <button class="btn btn-warning" style="background-color: #00ACC1">Get Back</button>
                </div>

            </div>

        </form>
    </div>
</div>

