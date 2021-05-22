<div class="containerWork">
    <div class="projectForm">
        <form method="POST" action="#">
            @csrf

            <div class="row">

                <div class="block_1">
                    <div class="title">Thông Tin Công Việc:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Tên Công Việc:</span>
                            <input type="text" name="WorkName" value="{{ $workList->WorkName }}" readonly>
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
                            <input type="text" name="Price_Int" value="{{ $workDetail->Price_Int * 1000000 }}">
                        </div>

                        <div class="input-box">
                            <span class="details">Mô tả:</span>
                            <input type="text" name="WorkDesc" value="{{ $workDetail->WorkDesc }}">
                        </div>

                    </div>
                </div>

                <div class="block_2">
                    <div class="title">Thông Tin Khách Hàng:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Project ID:</span>
                            <input type="text" name="ProjectID" value="{{ $workDetail->WorkID }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Project Name:</span>
                            <input type="text" name="ProjectName" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Khách Hàng:</span>
                            <input type="text" name="Client" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Location:</span>
                            <input type="text" name="Location" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Ngày Hoàn Thành:</span>
                            <input type="text" name="DateFinish" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Giá:</span>
                            <input type="text" name="Price" value="{{ $workDetail->WorkID }}">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="block_3">
                    <div class="title">Nhân Viên Phụ Trách:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Project ID:</span>
                            <input type="text" name="ProjectID" value="{{ $workDetail->WorkID }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Project Name:</span>
                            <input type="text" name="ProjectName" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Khách Hàng:</span>
                            <input type="text" name="Client" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Location:</span>
                            <input type="text" name="Location" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Ngày Hoàn Thành:</span>
                            <input type="text" name="DateFinish" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Giá:</span>
                            <input type="text" name="Price" value="{{ $workDetail->WorkID }}">
                        </div>
                    </div>
                </div>

                <div class="block_4">
                    <div class="title">Tiến Độ Hoàn Thành:</div>
                    <div class="project-infor">
                        <div class="input-box">
                            <span class="details">Project ID:</span>
                            <input type="text" name="ProjectID" value="{{ $workDetail->WorkID }}" readonly>
                        </div>
                        <div class="input-box">
                            <span class="details">Project Name:</span>
                            <input type="text" name="ProjectName" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Khách Hàng:</span>
                            <input type="text" name="Client" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Location:</span>
                            <input type="text" name="Location" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Ngày Hoàn Thành:</span>
                            <input type="text" name="DateFinish" value="{{ $workDetail->WorkID }}">
                        </div>
                        <div class="input-box">
                            <span class="details">Giá:</span>
                            <input type="text" name="Price" value="{{ $workDetail->WorkID }}">
                        </div>
                    </div>
                </div>

            </div>


    </div>
    </form>
</div>
</div>
