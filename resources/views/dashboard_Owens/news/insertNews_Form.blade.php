@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    <div class='newDetail' >
        <div class='animated bounceInLeft'>
            <div class='formBlock'>

                <form method="POST" action="{{ route('create_News') }}">
                    @csrf
                    <div style="margin-bottom: 25px">
                    <h3 STYLE="font-weight: bold; color: #fab702;">TẠO BÀI VIẾT</h3>
                    <input title="dd/mm" type="text" name="NewsID" id="dayInp" required placeholder="ID bài viết: " value="{{ old('NewsID') }}">
                    </div>
                    <div class="contentDetail">
                        <div class="day" style="font-size: 20px">
                            <input title="dd/mm" type="text" name="Day" id="dayInp" required placeholder="dd/mm" value="{{ old('Day') }}">
                        </div>

                        <div class="year" style="font-size: 15px;">
                            <input title="4 ký tự - VD: 2020." type="text" name="Year" id="yearInp" required placeholder="nhập năm" value="{{ old('Year') }}">
                        </div>


                        <input type="text" title="lớn hơn 8 ký tự" name="NewsName" id="titleNews" required placeholder="nhập tên bài viết" value="{{ old('NewsName') }}">
                        <input type="text" title="lớn hơn 10 ký tự" name="Description" id="describe" required placeholder="nhập mô tả bài viết" value="{{ old('Description') }}">
                        <input type="text" title="Khong được để trống" name="images" id="images" required placeholder="nhập ảnh đại diện bài viết" value="{{ old('images') }}">


                        <select name="NewsTagName" id="tagName">
                            <option value="PCKT">PCKT</option>
                            <option value="NTGD">NTGD</option>
                        </select>
                        <a class="btn-more">Chi tiết</a>
                        <div style="margin-top: 175px; text-align: center; width: 100%">
                            <span style="font-size: 35px">&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;</span>
                        </div>
                    </div>

                    {{--                Detail News--}}

                    <div class="imageContent" style="margin-top: 190px">
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung đầu bài viết:</p>
                        <span>Nội dung:</span>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentTop" id="images" required placeholder="nhập nội dung đầu bài viết" value="{{ old('contentTop') }}">
                        <span class="text-danger">@error('contentTop') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent">
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image1" id="images" required placeholder="nhập ảnh 1" value="{{ old('image1') }}">
                        <span class="text-danger">@error('image1') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent">
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image2" id="images" required placeholder="nhập ảnh 2" value="{{ old('image2') }}">
                        <span class="text-danger">@error('image2') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent">
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image3" id="images" required placeholder="nhập ảnh 3" value="{{ old('image3') }}">
                        <span class="text-danger">@error('image3') {{ $message }} @enderror</span>
                    </div>

                    <div class="imageContent" style="margin-top: 75px">
                        <span>Nội dung:</span>
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung giữa bài viết:</p>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentMiddle" id="images" required placeholder="nhập nội dung giữa bài viết" value="{{ old('contentMiddle') }}">
                        <span class="text-danger">@error('contentMiddle') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent" >
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image4" id="images" required placeholder="nhập ảnh 4" value="{{ old('image4') }}">
                        <span class="text-danger">@error('image4') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent" >
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image5" id="images" required placeholder="nhập ảnh 5" value="{{ old('image5') }}">
                        <span class="text-danger">@error('image5') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent" >
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image6" id="images" required placeholder="nhập ảnh 6" value="{{ old('image6') }}">
                        <span class="text-danger">@error('image6') {{ $message }} @enderror</span>
                    </div>

                    <div class="imageContent" style="margin-top: 75px">
                        <span>Nội dung:</span>
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung cuối bài viết:</p>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentBot" id="images" required placeholder="nhập nội dung cuối bài viết" value="{{ old('contentBot') }}">
                        <span class="text-danger">@error('contentBot') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent">
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image7" id="images" required placeholder="nhập ảnh 7" value="{{ old('image7') }}">
                        <span class="text-danger">@error('image7') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent" >

                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image8" id="images" required placeholder="nhập ảnh 8" value="{{ old('image8') }}">
                        <span class="text-danger">@error('image8') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent" >
                        <span>Link Hình:</span>
                        <input type="text" title="Không được để trống" name="image9" id="images" required placeholder="nhập ảnh 9" value="{{ old('image9') }}">
                        <span class="text-danger">@error('image9') {{ $message }} @enderror</span>
                    </div>

                    <div class="btn-detail">
                        <button class="btn btn-outline-success">Submit</button><button class="btn btn-outline-info" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

@section('title', 'Owens_News_Detail')
