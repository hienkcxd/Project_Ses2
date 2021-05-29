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

                <form method="POST" action="{{ route('create_News') }}" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 25px">
                    <h3 STYLE="font-weight: bold; color: #fab702;">TẠO BÀI VIẾT</h3>
                    <input title="dd/mm" type="text" name="NewsID" id="dayInp" required placeholder="ID bài viết: " value="{{ old('NewsID') }}">
                        <span class="text-danger">@error('NewsID') {{ $message }} @enderror</span>
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
                        <div class="imgBtn">
                            <label for="images_inp"><i class="fas fa-camera-retro"></i></label>
                            <input type="file" name="images_inp" id="images_inp" style="visibility: hidden">
                        </div>
                        <a class="btn-more">Chi tiết</a>
                        <div style="margin-top: 175px; text-align: center; width: 100%">
                            <span class="text-danger">@error('images_inp') {{ $message }} @enderror</span> <br>
                            <span style="font-size: 35px">&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;</span>
                        </div>
                    </div>

                    {{--                Detail News--}}

                    <div class="imageContent" style="margin-top: 190px">
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung đầu bài viết:</p>
                        <span>Nội dung:</span>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentTop" required placeholder="nhập nội dung đầu bài viết" value="{{ old('contentTop') }}">
                        <span class="text-danger">@error('contentTop') {{ $message }} @enderror</span>
                    </div>
                    <div class="imageContent">

                        <div class="linkImg">
                            <div>
                                <span>Link Hình 1:</span>
                                <input type="text" title="Không được để trống" name="image1" id="image1" required placeholder="nhập ảnh 1" value="{{ old('image1') }}">
                                <span class="text-danger">@error('image1') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images1_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images1_inp" id="images1_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images1_inp') {{ $message }} @enderror</span>

                    <div class="imageContent">
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 2:</span>
                                <input type="text" title="Không được để trống" name="image2" id="image2" required placeholder="nhập ảnh 2" value="{{ old('image2') }}">
                                <span class="text-danger">@error('image2') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images2_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images2_inp" id="images2_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images2_inp') {{ $message }} @enderror</span>

                    <div class="imageContent">
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 3:</span>
                                <input type="text" title="Không được để trống" name="image3" id="image3" required placeholder="nhập ảnh 3" value="{{ old('image3') }}">
                                <span class="text-danger">@error('image3') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images3_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images3_inp" id="images3_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images3_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" style="margin-top: 75px">
                        <span>Nội dung:</span>
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung giữa bài viết:</p>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentMiddle" id="images" required placeholder="nhập nội dung giữa bài viết" value="{{ old('contentMiddle') }}">
                        <span class="text-danger">@error('contentMiddle') {{ $message }} @enderror</span>
                    </div>

                    <div class="imageContent" >
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 4:</span>
                                <input type="text" title="Không được để trống" name="image4" id="image4" required placeholder="nhập ảnh 4" value="{{ old('image4') }}">
                                <span class="text-danger">@error('image4') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images4_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images4_inp" id="images4_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images4_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" >
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 5:</span>
                                <input type="text" title="Không được để trống" name="image5" id="image5" required placeholder="nhập ảnh 5" value="{{ old('image5') }}">
                                <span class="text-danger">@error('image5') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images5_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images5_inp" id="images5_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images5_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" >
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 6:</span>
                                <input type="text" title="Không được để trống" name="image6" id="image6" required placeholder="nhập ảnh 6" value="{{ old('image6') }}">
                                <span class="text-danger">@error('image6') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images6_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images6_inp" id="images6_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images6_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" style="margin-top: 75px">
                        <span>Nội dung:</span>
                        <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung cuối bài viết:</p>
                        <input type="text" title="lớn hơn 20 ký tự" name="contentBot" id="images" required placeholder="nhập nội dung cuối bài viết" value="{{ old('contentBot') }}">
                        <span class="text-danger">@error('contentBot') {{ $message }} @enderror</span>
                    </div>

                    <div class="imageContent">
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 7:</span>
                                <input type="text" title="Không được để trống" name="image7" id="image7" required placeholder="nhập ảnh 7" value="{{ old('image7') }}">
                                <span class="text-danger">@error('image7') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images7_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images7_inp" id="images7_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images7_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" >
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 8:</span>
                                <input type="text" title="Không được để trống" name="image8" id="image8" required placeholder="nhập ảnh 8" value="{{ old('image8') }}">
                                <span class="text-danger">@error('image8') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images8_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images8_inp" id="images8_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images8_inp') {{ $message }} @enderror</span>

                    <div class="imageContent" >
                        <div class="linkImg">
                            <div>
                                <span>Link Hình 9:</span>
                                <input type="text" title="Không được để trống" name="image9" id="image9" required placeholder="nhập ảnh 9" value="{{ old('image9') }}">
                                <span class="text-danger">@error('image9') {{ $message }} @enderror</span>
                            </div>
                            <div class="imgBtn-content">
                                <label for="images9_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images9_inp" id="images9_inp" style="visibility: hidden">
                            </div>
                        </div>
                    </div>
                    <span class="text-danger">@error('images9_inp') {{ $message }} @enderror</span>

                    <div class="btn-detail">
                        <button class="btn btn-outline-success">Submit</button><button class="btn btn-outline-info" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script >
        let link = "images\\blog";
        let link_Detail = "images\\blog\\Detail";

        $('#images_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#images").val(function () {
                this.value = "";
                return this.value =link + bgName;
            });
        });

        $('#images1_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images1_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image1").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images2_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images2_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image2").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images3_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images3_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image3").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images4_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images4_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image4").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images5_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images5_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image5").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images6_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images6_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image6").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images7_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images7_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image7").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images8_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images8_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image8").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });

        $('#images9_inp').change(function (e) {
            e.preventDefault();
            //lấy tên hình ảnh
            let imgBG = $('#images9_inp').val();
            //vị trí dấu "\" cuối cùng
            let get_imgBG = imgBG.lastIndexOf("\\");
            //tên hình ảnh
            let bgName = imgBG.substr(get_imgBG);
            $("#image9").val(function () {
                this.value = "";
                return this.value =link_Detail + bgName;
            });
        });


    </script>
@endsection

@section('title', 'Owens_News_Detail')
