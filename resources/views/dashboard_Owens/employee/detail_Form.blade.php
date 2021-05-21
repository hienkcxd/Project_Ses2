<div class='empContainer' style="margin-top: 100px">
    <div class='wrapper animated bounceInLeft'>
        <div class='contact'>
            <form method="POST" action="{{ route('owens.update_emp',['EmployeeID'=>$empDetail->EmployeeID]) }}">
                @csrf
                <div class="avata">
                <img src="{{ asset("$empDetail->images") }}" alt="">
                </div>

                <div class="title">
                <h2>{{ $empDetail->empName }}</h2>
                </div>

                <div class="empfirstRow">
                    <p>
                        <label>Tên</label>
                        <input type="text" name='empName' min="0" value="{{ $empDetail->empName }}">
                    </p>

                    <p>
                        <label>ID:</label>
                        <input type="text" name='EmployeeID' value="{{ $empDetail->EmployeeID  }}" readonly>
                    </p>
                </div>

                <div class="emp2ndRow">
                    <p>
                        <label>Chức Vụ</label>
                        <input type="text" name='position' min="0" value="{{ $empDetail->position }}">
                    </p>

                    <p>
                        <label>Mô Tả:</label>
                        <input type="text" name='describe' min="0" value="{{ $empDetail->describe }}">
                    </p>

                    <p>
                        <label>Email:</label>
                        <input type="text" name='email' value="{{ $empDetail->email  }}" >
                    </p>

                </div>
                <h4 style="color: white; text-decoration-line:underline">THÔNG TIN LIÊN LẠC:</h4>
                <div class="emp2ndRow">
                    <p>
                        <label>Số ĐT:</label>
                        <input type="text" name='phone' min="0" value="{{ $empDetail->phone }}" >
                    </p>

                    <p>
                        <label>Zalo:</label>
                        <input type="text" name='zalo' value="{{ $empDetail->zalo  }}">
                    </p>
                    <p>
                        <label>Facebook:</label>
                        <input type="text" name='facebook' min="0" value="{{ $empDetail->facebook }}">
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
