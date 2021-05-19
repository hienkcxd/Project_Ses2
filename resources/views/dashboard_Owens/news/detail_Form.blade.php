
<div class='newDetail' >

    <div class='animated bounceInLeft'>

        <div class='formBlock'>
            <form action="{{ route('emp.news')}}" >
                        <div class="post-image">
                            <img src="{{ asset("$dataNews->images") }}" alt="background" width="100%">

                        </div>
                        <div class="contentDetail">
                            <div class="day" style="font-size: 20px"><input title="Ngày viết bài" type="text" name="dayInp" id="dayInp" value="{{ $dataNews->Day }}" ></div>
                            <div class="year" style="font-size: 15px;"><input title="Năm viết bài" type="text" name="yearInp" id="yearInp" value="{{ $dataNews->Year }}" ></div>
                            <input type="text" title="Tên bài viết" name="titleNews" id="titleNews" COL value="{{ $dataNews->NewsName }}">
                            <input type="text" title="Mô tả bài viết" name="describe" id="describe" cols="30" value="{{ $dataNews->Description }}">
                            <input type="text" title="Link background bài viết" name="images" id="images" value="{{ $dataNews->images }}">
                            <select name="tagName" id="tagName">
                                <option name="firstValue" id="firstValue" value="{{ $dataNews->NewsTagName }}">---{{ $dataNews->NewsTagName }}---</option>
                                <option name="PCKT" id="PCKT" value="PCKT">PCKT</option>
                                <option name="NTGD" id="NTGD" value="NTGD">NTGD</option>
                            </select>
                            <a class="btn-more">Chi tiết</a>
                        </div>

                        <div class="btn-detail">
                            <button class="btn btn-outline-success">Submit</button><button class="btn btn-outline-info">GetBack</button>
                        </div>
            </form>
        </div>
    </div>

</div>
