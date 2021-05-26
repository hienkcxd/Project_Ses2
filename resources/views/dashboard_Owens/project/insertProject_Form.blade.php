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
            <form method="POST" action="{{ route('create_Project')}}">
                @csrf
                <div class="title">Thông Tin Dự Án:</div>
                <div class="project-infor">
                    <div class="input-box">
                        <span class="details">Project ID:</span>
                        <input type="text"  name="ProjectID" placeholder="bắt đầu với: NP | DCH | NTC | BT" value="{{ old('ProjectID') }}">
                        <span class="text-danger">@error('ProjectID') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Project Name:</span>
                        <input type="text" name="ProjectName" placeholder="Nhập tên dự án" value="{{ old('ProjectName') }}">
                        <span class="text-danger">@error('ProjectName') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Khách Hàng:</span>
                        <input type="text" name="Client" placeholder="Nhập tên khách hàng - vd: Ms.Hoa" value="{{ old('Client') }}">
                        <span class="text-danger">@error('Client') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Location:</span>
                        <input type="text" name="Location" placeholder="Nhập địa chỉ dự án" value="{{ old('Location') }}">
                        <span class="text-danger">@error('Location') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Ngày Hoàn Thành:</span>
                        <input type="text" name="DateFinish" placeholder="Nhập ngày hoàn thành - dd/mm/yyyy" value="{{ old('DateFinish') }}">
                        <span class="text-danger">@error('DateFinish') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Giá:</span>
                        <input type="text" name="Price" placeholder="Nhập giá dự án - VD: 100 triệu" value="{{ old('Price') }}">
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
                        <span class="details">Image Background:</span>
                        <input type="file"  name="images" placeholder="Nhập link hình background" value="{{ old('images') }}">
                        <span class="text-danger">@error('images') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Image Top:</span>
                        <input type="text"  name="imageTop" placeholder="Nhập link hình ảnh top" value="{{ old('imageTop') }}">
                        <span class="text-danger">@error('imageTop') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Image Bot:</span>
                        <input type="text" name="imageBot" placeholder="Nhập link hình ảnh bottom" value="{{ old('imageBot') }}">
                        <span class="text-danger">@error('imageBot') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Content Top:</span>
                        <input type="text" name="contentTop" placeholder="Nhập nội dung top" value="{{ old('contentTop') }}">
                        <span class="text-danger">@error('contentTop') {{ $message }} @enderror</span>
                    </div>
                    <div class="input-box">
                        <span class="details">Content Bot:</span>
                        <input type="text" name="contentBot" placeholder="Nhập nội dung bot" value="{{ old('contentBot') }}">
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

                $("#TagName").change(function (e) {
                    e.preventDefault();
                    let TagName = $('select[name=TagName] option:selected').val();
                    console.log(TagName)
                    let category = "";
                    if(TagName === 'NP'){
                        $("#category").val(function() {
                            category = 'Nhà Phố';
                            this.value = "";
                            return this.value + category;
                        });
                    }
                    else if(TagName === 'DCH'){
                        $("#category").val(function() {
                            category = 'Decor Căn Hộ';
                            this.value = "";
                            return this.value + category;
                        });
                    }
                    else if(TagName === 'NTC'){
                        $("#category").val(function() {
                            category = 'Nhà Tân Cổ';
                            this.value = "";
                            return this.value + category;
                        });
                    }
                    else if (TagName === 'BT'){
                        $("#category").val(function() {
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

