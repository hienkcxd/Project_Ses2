
<div class='newDetail' >
    <div class='animated bounceInLeft'>
        <div class='formBlock'>

            <form method="POST" action="{{ route('admin.update_News',['NewsID'=>$dataNews->NewsID ])}}" enctype="multipart/form-data">
                @csrf
                <h3 STYLE="font-weight: bold; color: #fab702;">BÀI VIẾT SỐ - {{$dataNews->NewsID}}</h3>
                        <div class="imageContent">
                            <img src="{{ asset("$dataNews->images") }}" alt="background" width="100%" id="srcImg">
                        </div>
                        <div class="contentDetail">
                            <div class="day" style="font-size: 20px">
                                <input title="xx/xx" type="text" name="Day" id="dayInp" value="{{ $dataNews->Day }}" required pattern="[0-9./]{4,6}">
                            </div>

                            <div class="year" style="font-size: 15px;">
                                <input title="4 ký tự - VD: 2020. " type="text" name="Year" id="yearInp" value="{{ $dataNews->Year }}" required pattern=".{4,}">
                            </div>


                            <input type="text" title="lớn hơn 8 ký tự" name="NewsName" id="titleNews" value="{{ $dataNews->NewsName }}" required pattern=".{8,}">
                            <input type="text" title="lớn hơn 10 ký tự" name="Description" id="describe" value="{{ $dataNews->Description }}" required pattern=".{10,}">

                            <input type="text" title="Không được để trống" name="images" id="images" value="{{ $dataNews->images }}" required>

                            <select name="NewsTagName" id="tagName">
                                <option value="{{ $dataNews->NewsTagName }}">---{{ $dataNews->NewsTagName }}---</option>
                                <option value="PCKT">PCKT</option>
                                <option value="NTGD">NTGD</option>
                            </select>

                            <div class="imgBtn">
                                <label for="images_inp"><i class="fas fa-camera-retro"></i></label>
                                <input type="file" name="images_inp" id="images_inp" style="visibility: hidden">
                            </div>
                            <a class="btn-more">Chi tiết</a>

                            <div style="margin-top: 175px; text-align: center; width: 100%">
                                <span style="font-size: 35px">&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;&harrw;</span>
                            </div>
                            <span class="text-danger">@error('images_inp') {{ $message }} @enderror</span>
                        </div>

{{--                Detail News--}}

                        <div class="imageContent" style="margin-top: 190px">
                            <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung đầu bài viết:</p>
                            <span>Nội dung:</span>
                            <input type="text" title="lớn hơn 20 ký tự" name="contentTop" id="images" value="{{ $newsDetail->contentTop }}" required pattern=".{20,}">
                        </div>
                        <div class="imageContent ">
                            <img src="{{ asset("$newsDetail->image1") }}" alt="background" width="100%" id="srcImg1">
                            <div class="linkImg">
                                <div>
                                <span>Link Hình 1:</span>
                                <input type="text" title="Không được để trống" name="image1" id="image1" value="{{ $newsDetail->image1 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images1_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images1_inp" id="images1_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('images1_inp') {{ $message }} @enderror</span>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image2") }}" alt="background" width="100%" id="srcImg2">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 2:</span>
                                    <input type="text" title="Không được để trống" name="image2" id="image2" value="{{ $newsDetail->image2 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images2_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images2_inp" id="images2_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                    <span class="text-danger">@error('images2_inp') {{ $message }} @enderror</span>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image3") }}" alt="background" width="100%" id="srcImg3">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 3:</span>
                                    <input type="text" title="Không được để trống" name="image3" id="image3" value="{{ $newsDetail->image3 }}" required>
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
                            <input type="text" title="lớn hơn 20 ký tự" name="contentMiddle" id="images" value="{{ $newsDetail->contentMiddle }}" required pattern=".{20,}">
                        </div>

                        <div class="imageContent" style="margin-top: 75px">
                            <img src="{{ asset("$newsDetail->image4") }}" alt="background" width="100%" id="srcImg4">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 4:</span>
                                    <input type="text" title="Không được để trống" name="image4" id="image4" value="{{ $newsDetail->image4 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images4_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images4_inp" id="images4_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('images4_inp') {{ $message }} @enderror</span>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image5") }}" alt="background" width="100%" id="srcImg5">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 5:</span>
                                    <input type="text" title="Không được để trống" name="image5" id="image5" value="{{ $newsDetail->image5 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images5_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images5_inp" id="images5_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('images5_inp') {{ $message }} @enderror</span>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image6") }}" alt="background" width="100%" id="srcImg6">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 6:</span>
                                    <input type="text" title="Không được để trống" name="image6" id="image6" value="{{ $newsDetail->image6 }}" required>
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
                            <input type="text" title="lớn hơn 20 ký tự" name="contentBot" id="images" value="{{ $newsDetail->contentBot }}" required pattern=".{20,}">
                        </div>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image7") }}" alt="background" width="100%" id="srcImg7">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 7:</span>
                                    <input type="text" title="Không được để trống" name="image7" id="image7" value="{{ $newsDetail->image7 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images7_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images7_inp" id="images7_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('images7_inp') {{ $message }} @enderror</span>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image8") }}" alt="background" width="100%" id="srcImg8">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 8:</span>
                                    <input type="text" title="Không được để trống" name="image8" id="image8" value="{{ $newsDetail->image8 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images8_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images8_inp" id="images8_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                <span class="text-danger">@error('images8_inp') {{ $message }} @enderror</span>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image9") }}" alt="background" width="100%" id="srcImg9">

                            <div class="linkImg">
                                <div>
                                    <span>Link Hình 9:</span>
                                    <input type="text" title="Không được để trống" name="image9" id="image9" value="{{ $newsDetail->image9 }}" required>
                                </div>
                                <div class="imgBtn-content">
                                    <label for="images9_inp"><i class="fas fa-camera-retro"></i></label>
                                    <input type="file" name="images9_inp" id="images9_inp" style="visibility: hidden">
                                </div>
                            </div>
                        </div>
                <span class="text-danger">@error('images9_inp') {{ $message }} @enderror</span>
                        <div class="btn-detail">
                            <button class="btn btn-outline-success">Submit</button><button class="btn btn-outline-info">GetBack</button>
                        </div>
            </form>
        </div>
    </div>
    <script >
        let link = "images\\blog";
        let link_Detail = "images\\blog\\Detail";

        $('#images_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#images").val()
            $("#srcImg").attr('src', linkSrc)
        });

        $('#images1_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image1").val()
            $("#srcImg1").attr('src', linkSrc)
        });

        $('#images2_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image2").val()
            $("#srcImg2").attr('src', linkSrc)
        });

        $('#images3_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image3").val()
            $("#srcImg3").attr('src', linkSrc)
        });

        $('#images4_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image4").val()
            $("#srcImg4").attr('src', linkSrc)
        });

        $('#images5_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image5").val()
            $("#srcImg5").attr('src', linkSrc)
        });

        $('#images6_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image6").val()
            $("#srcImg6").attr('src', linkSrc)
        });

        $('#images7_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image7").val()
            $("#srcImg7").attr('src', linkSrc)
        });

        $('#images8_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image8").val()
            $("#srcImg8").attr('src', linkSrc)
        });

        $('#images9_inp').change(function (e) {
            e.preventDefault();
            let linkSrc = "";
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
            linkSrc ="http://127.0.0.1:8000/" + $("#image9").val()
            $("#srcImg9").attr('src', linkSrc)
        });


    </script>

</div>
