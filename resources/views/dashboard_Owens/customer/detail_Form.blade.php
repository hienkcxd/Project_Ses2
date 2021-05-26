@if($CusDetail != null)
    <div class='empContainer' style="margin-top: 100px">
        <div class='wrapper animated bounceInLeft'>
            <div class='contact'>
                <form method="POST" action="{{ route('customer_update',['customerID'=>$CusDetail->CusID]) }}">
                    @csrf
                    <div class="avata">
                        <img src="{{ asset('images\AboutUs\team_pic_1.jpg') }}" alt="">
                    </div>

                    <div class="title">
                        <h2>{{ $CusDetail->CusName }}</h2>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Tên</label>
                            <input type="text" name='CusName' min="0" value="{{ $CusDetail->CusName }}">
                            <span class="text-danger">@error('CusName') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>ID:</label>
                            <input type="text" name='CusID' value="{{ $CusDetail->CusID }}" readonly>
                        </p>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Công Việc:</label>
                            <input type="text" name='WorkName' min="0" value="{{ $CusDetail->WorkName }}">
                            <span class="text-danger">@error('WorkName') {{ $message }} @enderror</span>

                        </p>
                        <p>
                            <label>Đơn Giá:</label>
                            <input type="text" name='Price' min="0" value="{{ $CusDetail->Price }}">
                            <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="emp2ndRow">

                        <p>
                            <label>Địa Chỉ:</label>
                            <input type="text" name='Address' min="0" value="{{ $CusDetail->Address }}">
                            <span class="text-danger">@error('Address') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Số Điện Thoại:</label>
                            <input type="text" name='CusPhone' value="{{ $CusDetail->CusPhone }}">
                            <span class="text-danger">@error('CusPhone') {{ $message }} @enderror</span>
                        </p>

                    </div>
                    <h4 style="color: white; text-decoration-line:underline">NGƯỜI PHỤ TRÁCH:</h4>
                    <div class="emp2ndRow">
                        <p>
                            <label>ID Nhân Viên:</label>
                            <input type="text" name='EmpID' min="0" value="{{ $CusDetail->EmpID }}" readonly>
                            <span class="text-danger">@error('EmpID') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tên Nhân Viên:</label>
                            <input type="text" name='EmpName' value="{{ $CusDetail->EmpName }}" readonly>
                            <span class="text-danger">@error('EmpName') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <label>Facebook:</label>
                            <input type="text" name='EmpPhone' min="0" value="{{ $CusDetail->EmpPhone }}" readonly>
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

@elseif ($blackCusDetail != null)
    <div class='empContainer' style="margin-top: 100px">
        <div class='wrapper animated bounceInLeft'>
            <div class='contact blackList_Background'>
                <form method="POST" action="{{ route('BlackCust_update', ['BlackCustID'=>$blackCusDetail->BlackCusID ]) }}">
                    @csrf
                    <div class="avata">
                        <img src="{{ asset('images\AboutUs\team_pic_1.jpg') }}" alt="">
                    </div>

                    <div class="title">
                        <h2>{{ $blackCusDetail->BlackCusName }}</h2>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Tên</label>
                            <input type="text" name='BlackCusName' min="0" value="{{ $blackCusDetail->BlackCusName }}">
                        </p>

                        <p>
                            <label>ID:</label>
                            <input type="text" name='BlackCusPhone' value="{{ $blackCusDetail->BlackCusPhone }}"
                                   readonly>
                        </p>
                    </div>

                    <div class="emp2ndRow">
                        <p>
                            <label>Mô Tả:</label>
                            <textarea name='BlackCusDesc' rows="3" cols="50">{{ $blackCusDetail->BlackCusDesc }}</textarea>

                        </p>

                        <div class="thirdRow">
                            <p class='full'>
                                <button class="btn btn-warning">Submit</button>
                            </p>
                        </div>

                </form>
            </div>
        </div>
    </div>

@endif
