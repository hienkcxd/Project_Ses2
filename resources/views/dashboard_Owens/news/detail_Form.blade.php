
<div class='newDetail' >
    <div class='animated bounceInLeft'>
        <div class='formBlock'>

            <form method="POST" action="{{ route('admin.update_News',['NewsID'=>$dataNews->NewsID ])}}">
                @csrf
                <h3 STYLE="font-weight: bold; color: #fab702;">BÀI VIẾT SỐ - {{$dataNews->NewsID}}</h3>
                        <div class="imageContent">
                            <img src="{{ asset("$dataNews->images") }}" alt="background" width="100%">
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

                            <label for=""></label><input type="file" name="images_inp" id="images" >
                            <select name="NewsTagName" id="tagName">
                                <option value="{{ $dataNews->NewsTagName }}">---{{ $dataNews->NewsTagName }}---</option>
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
                            <input type="text" title="lớn hơn 20 ký tự" name="contentTop" id="images" value="{{ $newsDetail->contentTop }}" required pattern=".{20,}">
                        </div>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image1") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image1" id="images" value="{{ $newsDetail->image1 }}" required>
                        </div>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image2") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image2" id="images" value="{{ $newsDetail->image2 }}" required>
                        </div>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image3") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image3" id="images" value="{{ $newsDetail->image3 }}" required>
                        </div>

                        <div class="imageContent" style="margin-top: 75px">
                            <span>Nội dung:</span>
                            <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung giữa bài viết:</p>
                            <input type="text" title="lớn hơn 20 ký tự" name="contentMiddle" id="images" value="{{ $newsDetail->contentMiddle }}" required pattern=".{20,}">
                        </div>
                        <div class="imageContent" style="margin-top: 75px">
                            <img src="{{ asset("$newsDetail->image4") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image4" id="images" value="{{ $newsDetail->image4 }}" required>
                        </div>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image5") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image5" id="images" value="{{ $newsDetail->image5 }}" required>
                        </div>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image6") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image6" id="images" value="{{ $newsDetail->image6 }}" required>
                        </div>

                        <div class="imageContent" style="margin-top: 75px">
                            <span>Nội dung:</span>
                            <p style="text-align: left;color: #fab702; text-decoration-line: underline; font-size: 1.2rem ">+Nội dung cuối bài viết:</p>
                            <input type="text" title="lớn hơn 20 ký tự" name="contentBot" id="images" value="{{ $newsDetail->contentBot }}" required pattern=".{20,}">
                        </div>
                        <div class="imageContent">
                            <img src="{{ asset("$newsDetail->image7") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image7" id="images" value="{{ $newsDetail->image7 }}" required>
                        </div>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image8") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image8" id="images" value="{{ $newsDetail->image8 }}" required>
                        </div>
                        <div class="imageContent" >
                            <img src="{{ asset("$newsDetail->image9") }}" alt="background" width="100%">
                            <span>Link Hình:</span>
                            <input type="text" title="Không được để trống" name="image9" id="images" value="{{ $newsDetail->image9 }}" required>
                        </div>

                        <div class="btn-detail">
                            <button class="btn btn-outline-success">Submit</button><button class="btn btn-outline-info">GetBack</button>
                        </div>
            </form>
        </div>
    </div>

</div>
