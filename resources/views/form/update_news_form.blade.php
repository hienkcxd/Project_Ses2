<form method="POST" action="{{ route('admin.update_News', ['NewsID'=>$dataNews->NewsID])}}" enctype="multipart/form-data" style="width: 95%; margin: auto; margin-top: 15px" >
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" name="NewsID" placeholder="Tạo ID bài viết..." value="{{ $dataNews->NewsID }}" readonly>
        <span class="text-danger">@error('NewsID') {{ $message }} @enderror</span>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" name="NewsName" placeholder="Nhập tên bài viết..." value="{{ $dataNews->NewsName }}">
        <span class="text-danger">@error('NewsName') {{ $message }} @enderror</span>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputPassword1" name="Description" placeholder="Nhập mô tả bài viết..." value="{{ $dataNews->Description }}">
        <span class="text-danger">@error('Description') {{ $message }} @enderror</span>
    </div>

    <div class="form-group">
        <div >
            <input class="form-control" type="date"  id="example-date-input" name="date" value="{{ $cvDate }}">
            <span class="text-danger">@error('date') {{ $message }} @enderror</span>
        </div>
    </div>

    <div class="form-group">
        <select name="NewsTagName" id="tagName" class="form-control">
            <option value="{{ $dataNews->NewsTagName }}">---{{ $dataNews->NewsTagName }}---</option>
            <option value="PCKT">PCKT</option>
            <option value="NTGD">NTGD</option>
        </select>
        <span class="text-danger">@error('tagName') {{ $message }} @enderror</span>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="background" name="images" style="resize: none" > {!!('<img src="'.$dataNews->images.'"'.'alt="">')!!}</textarea>
        <span class="text-danger">@error('images') {{ $message }} @enderror</span>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="summary-ckeditor" name="content">{!!($newsDetail->content)!!}</textarea>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block" style="padding: 5px 0 5px 0; border-radius: 0.25rem">UPDATE</button>
</form>

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'background', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        toolbar: [
            ['Maximize', 'Image', 'html']
        ],
        height: 100,
        resize_enabled : false,
        extraPlugins: 'editorplaceholder',
        editorplaceholder: 'Nhập trang bìa bài viết...',

    });

    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'editorplaceholder',
        editorplaceholder: 'Nhập nội dung bài viết...'
    });
</script>
