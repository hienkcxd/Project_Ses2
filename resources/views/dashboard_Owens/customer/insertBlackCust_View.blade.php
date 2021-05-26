@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <div class='empContainer' style="margin-top: 100px">
        <div class='wrapper animated bounceInLeft'>
            <div class='contact blackList_Background'>
                <form method="POST" action="{{ route('create.BlackCust')}}">
                    @csrf
                    <div class="avata">
                        <img src="{{ asset('images\AboutUs\team_pic_1.jpg') }}" alt="">
                    </div>

                    <div class="title">
                        <h2>THÊM KHÁCH HÀNG VÀO SỔ ĐEN</h2>
                    </div>

                    <div class="empfirstRow">
                        <p>
                            <label>Tên</label>
                            <input type="text" name='BlackCusName' min="0" value="{{ old('BlackCusName') }}">
                            <span class="text-danger">@error('BlackCusName') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>SĐT:</label>
                            <input type="text" name='BlackCusPhone' value="{{ old('BlackCusPhone') }}">
                            <span class="text-danger">@error('BlackCusPhone') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="emp2ndRow">
                        <p>
                            <label>Mô Tả:</label>
                            <textarea name='BlackCusDesc' rows="3" cols="50">{{ old('BlackCusDesc') }}</textarea>
                            <span class="text-danger">@error('BlackCusDesc') {{ $message }} @enderror</span>
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
@endsection

@section('title', 'Owens_CreateBlackCust')
