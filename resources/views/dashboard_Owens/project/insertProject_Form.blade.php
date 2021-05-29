@extends('Layout.Owens')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @if(Session::get('thongbao'))
        <div class="alert alert-info">
            {{ Session::get('thongbao') }}
        </div>
    @endif
    <div class="container">

        <div class="projectForm">
            <form method="POST" action="{{ route('create_Project')}}" enctype="multipart/form-data">
                @csrf
                <div class="title">Thông Tin Dự Án:</div>
                <div class="project-infor">
                    <div class="input-box">
                        <span class="details">Project ID:</span>
                        <input type="text" name="ProjectID" placeholder="bắt đầu với: NP | DCH | NTC | BT"
                               value="{{ old('ProjectID') }}">
                        <span class="text-danger">@error('ProjectID') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Project Name:</span>
                        <input type="text" name="ProjectName" placeholder="Nhập tên dự án"
                               value="{{ old('ProjectName') }}">
                        <span class="text-danger">@error('ProjectName') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Khách Hàng:</span>
                        <input type="text" name="Client" placeholder="Nhập tên khách hàng - vd: Ms.Hoa"
                               value="{{ old('Client') }}">
                        <span class="text-danger">@error('Client') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Location:</span>
                        <input type="text" name="Location" placeholder="Nhập địa chỉ dự án"
                               value="{{ old('Location') }}">
                        <span class="text-danger">@error('Location') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Ngày Hoàn Thành:</span>
                        <input type="text" name="DateFinish" placeholder="Nhập ngày hoàn thành - dd/mm/yyyy"
                               value="{{ old('DateFinish') }}">
                        <span class="text-danger">@error('DateFinish') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Giá:</span>
                        <input type="text" name="Price" placeholder="Nhập giá dự án - VD: 100 triệu"
                               value="{{ old('Price') }}">
                        <span class="text-danger">@error('Price') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details" style="font-weight: bold">Tag Name:</span>
                        <select name="TagName" id="TagName">
                            <option value="NP">NP</option>
                            <option value="DCH">DCH</option>
                            <option value="NTC">NTC</option>
                            <option value="BT">BT</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Category:</span>
                        <input type="text" name="tagName" id="category" value="Nhà Phố" readonly>
                    </div>
                </div>

                <div class="title">Nội Dung Dự Án:</div>
                <div class="project-content">
                    <div class="input-box">
                        <div>
                            <span class="details">Image Background:</span>
                            <input type="text" name="images" id="images" value="{{ old('images') }}"/>
                        </div>
                        <div class="inpImage">
                            <input type="file" name="images_inp" id="images_inp" style="visibility: hidden;">
                            <label for="images_inp" class="details">
                                <i class="fas fa-camera-retro"></i>
                            </label>
                        </div>
                        <span class="text-danger">@error('images_inp') {{ $message }} @enderror</span>
                    </div>
                    {{--                input image top--}}
                    <div class="input-box">
                        <div>
                            <span class="details">Image Top:</span>
                            <input type="text" name="imageTop" id="imageTop" value="{{ old('imageTop') }}">
                        </div>
                        <div class="inpImage">
                            <input type="file" name="imageTop_inp" id="imageTop_inp" style="visibility:hidden;">
                            <label for="imageTop_inp" class="details">
                                <i class="fas fa-camera-retro"></i>
                            </label>
                        </div>
                        <span class="text-danger">@error('imageTop_inp') {{ $message }} @enderror</span>
                    </div>

                    {{--                input image bot--}}
                    <div class="input-box">
                        <div>
                            <span class="details">Image Bot:</span>
                            <input type="text" name="imageBot" id="imageBot" value="{{ old('imageBot') }}">
                        </div>
                        <div class="inpImage">
                            <input type="file" name="imageBot_inp" id="imageBot_inp" style="visibility:hidden;">
                            <label for="imageBot_inp" class="details">
                                <i class="fas fa-camera-retro"></i>
                            </label>
                        </div>
                        <span class="text-danger">@error('imageBot_inp') {{ $message }} @enderror</span>
                    </div>
                    {{--                content top--}}
                    <div class="input-box">
                        <span class="details">Content Top:</span>
                        <input type="text" name="contentTop" placeholder="Nhập nội dung bot" value="{{ old('contentTop') }}">
                        <span class="text-danger">@error('contentTop') {{ $message }} @enderror</span>
                    </div>
                    {{--                content bot--}}
                    <div class="input-box">
                        <span class="details">Content Bot:</span>
                        <input type="text" name="contentBot" placeholder="Nhập nội dung bot"
                               value="{{ old('contentBot') }}">
                        <span class="text-danger">@error('contentBot') {{ $message }} @enderror</span>
                    </div>

                </div>
                <div class="button">
                    <button class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
        <script>
            $(document).ready(function () {
                let TagName = $('select[name=TagName] option:selected').val();
                console.log(TagName)

                let link_NP = "images\\Project\\nhapho";
                let link_NP_Detail = "images\\Project\\nhapho\\Detail";

                let link_DCH = "images\\Project\\canho";
                let link_DCH_Detail = "images\\Project\\canho\\Detail";

                let link_NTC = "images\\Project\\tanco";
                let link_NTC_Detail = "images\\Project\\tanco\\Detail";

                let link_BT = "images\\Project\\bietthu";
                let link_BT_Detail = "images\\Project\\bietthu\\Detail";

                $('#images_inp').change(function (e) {
                    let TagName = $('select[name=TagName] option:selected').val();
                    e.preventDefault();
                    let link = "";
                    //lấy tên hình ảnh
                    let imgBG = $('#images_inp').val();
                    //vị trí dấu "\" cuối cùng
                    let get_imgBG = imgBG.lastIndexOf("\\");
                    //tên hình ảnh
                    let bgName = imgBG.substr(get_imgBG);

                    if (TagName === 'NP') {
                        link = link_NP;
                        $("#images").val(function () {
                            this.value = "";
                            return this.value = link + bgName;
                        });
                    } else if (TagName === 'DCH') {
                        link = link_DCH;
                        link_Detail = link_DCH_Detail;
                        $("#images").val(function () {
                            this.value = "";
                            return this.value = link + bgName;
                        });
                    } else if (TagName === 'NTC') {
                        link = link_NTC;
                        link_Detail = link_NTC_Detail;
                        $("#images").val(function () {
                            this.value = "";
                            return this.value = link + bgName;
                        });
                    } else if (TagName === 'BT') {
                        link = link_BT;
                        link_Detail = link_BT_Detail;
                        $("#images").val(function () {
                            this.value = "";
                            return this.value = link + bgName;
                        });
                    }
                });

                $('#imageTop_inp').change(function (e) {
                    let TagName = $('select[name=TagName] option:selected').val();
                    e.preventDefault();
                    let link_Detail = "";
                    //lấy tên hình ảnh
                    let imgTop = $('#imageTop_inp').val();

                    //vị trí dấu "\" cuối cùng
                    let get_imgTop = imgTop.lastIndexOf("\\");


                    //tên hình ảnh
                    let imgTop_name = imgTop.substr(get_imgTop);

                    if (TagName === 'NP') {
                        link_Detail = link_NP_Detail;
                        $("#imageTop").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgTop_name;
                        });
                    } else if (TagName === 'DCH') {
                        link_Detail = link_DCH_Detail;

                        $("#imageTop").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgTop_name;
                        });
                    } else if (TagName === 'NTC') {
                        link_Detail = link_NTC_Detail;
                        $("#imageTop").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgTop_name;
                        });
                    } else if (TagName === 'BT') {
                        link_Detail = link_BT_Detail;
                        $("#imageTop").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgTop_name;
                        });
                    }
                });

                $('#imageBot_inp').change(function (e) {
                    TagName = $('select[name=TagName] option:selected').val();
                    e.preventDefault();
                    let link_Detail = "";
                    //lấy tên hình ảnh
                    let imgBot = $('#imageBot_inp').val();
                    //vị trí dấu "\" cuối cùng
                    let get_imgBot = imgBot.lastIndexOf("\\");
                    //tên hình ảnh
                    let imgBot_name = imgBot.substr(get_imgBot);

                    if (TagName === 'NP') {
                        link_Detail = link_NP_Detail;
                        $("#imageBot").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgBot_name;
                        });
                    } else if (TagName === 'DCH') {
                        link_Detail = link_DCH_Detail;
                        $("#imageBot").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgBot_name;
                        });
                    } else if (TagName === 'NTC') {
                        link_Detail = link_NTC_Detail;
                        $("#imageBot").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgBot_name;
                        });
                    } else if (TagName === 'BT') {
                        link_Detail = link_BT_Detail;
                        $("#imageBot").val(function () {
                            this.value = "";
                            return this.value = link_Detail + imgBot_name;
                        });
                    }

                });

                $("#TagName").change(function (e) {
                    e.preventDefault();
                    let TagName = $('select[name=TagName] option:selected').val();
                    console.log(TagName)
                    let category = "";
                    if (TagName === 'NP') {
                        $("#category").val(function () {
                            category = 'Nhà Phố';
                            this.value = "";
                            return this.value + category;
                        });
                    } else if (TagName === 'DCH') {
                        $("#category").val(function () {
                            category = 'Decor Căn Hộ';
                            this.value = "";
                            return this.value + category;
                        });
                    } else if (TagName === 'NTC') {
                        $("#category").val(function () {
                            category = 'Nhà Tân Cổ';
                            this.value = "";
                            return this.value + category;
                        });
                    } else if (TagName === 'BT') {
                        $("#category").val(function () {
                            category = 'Biệt Thự';
                            this.value = "";
                            return this.value + category;
                        });
                    }

                });

            });
        </script>
    </div>

@endsection
@section('title', 'Owens_CreateProject')

