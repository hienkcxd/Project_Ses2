
<div class='empContainer' style="margin-top: 100px">
    <div class='wrapper animated bounceInLeft'>
        <div class='contact'>
            <form method="POST" action="{{ route('owens.customer_update',['customerID'=>$CusDetail->CusID]) }}">
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

                    </p>
                    <p>
                        <label>Đơn Giá:</label>
                        <input type="text" name='Price' min="0" value="{{ $CusDetail->Price }}">
                    </p>
                </div>

                <div class="emp2ndRow">

                    <p>
                        <label>Địa Chỉ:</label>
                        <input type="text" name='Address' min="0" value="{{ $CusDetail->Address }}">
                    </p>

                    <p>
                        <label>Số Điện Thoại:</label>
                        <input type="text" name='CusPhone' value="{{ $CusDetail->CusPhone }}" >
                    </p>

                </div>
                <h4 style="color: white; text-decoration-line:underline">NGƯỜI PHỤ TRÁCH:</h4>
                <div class="emp2ndRow">
                    <p>
                        <label>ID Nhân Viên:</label>
                        <input type="text" name='EmpID' min="0" value="{{ $CusDetail->EmpID }}" >
                    </p>

                    <p>
                        <label>Tên Nhân Viên:</label>
                        <input type="text" name='EmpName' value="{{ $CusDetail->EmpName }}">
                    </p>
                    <p>
                        <label>Facebook:</label>
                        <input type="text" name='EmpPhone' min="0" value="{{ $CusDetail->EmpPhone }}">
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
    <script>
        $(function () {


        });

    </script>
</div>
