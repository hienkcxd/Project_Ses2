@extends('Layout.Owens')
@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <form method="POST" action="{{ route('create_News2')}}" enctype="multipart/form-data" style="width: 95%; margin: auto; margin-top: 15px" >
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" name="NewsID" placeholder="Tạo ID bài viết..." value="{{ old('NewsID') }}">
            <span class="text-danger">@error('NewsID') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" name="NewsName" placeholder="Nhập tên bài viết..." value="{{ old('NewsName') }}">
            <span class="text-danger">@error('NewsName') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" name="Description" placeholder="Nhập mô tả bài viết..." value="{{ old('Description') }}">
            <span class="text-danger">@error('Description') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
            <div >
                <input class="form-control" type="date"  id="example-date-input" name="date" value="{{ old('date') }}">
                <span class="text-danger">@error('date') {{ $message }} @enderror</span>
            </div>
        </div>

        <div class="form-group">
            <select name="NewsTagName" id="tagName" class="form-control">
                <option value="" selected disabled>Phân loại bài viết...</option>
                <option value="PCKT">PCKT</option>
                <option value="NTGD">NTGD</option>
            </select>
            <span class="text-danger">@error('tagName') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
        <textarea class="form-control" id="background" name="images" style="resize: none" ></textarea>
            <span class="text-danger">@error('images') {{ $message }} @enderror</span>
        </div>

        <div class="form-group">
        <textarea class="form-control" id="summary-ckeditor" name="content">{{{ old('content') }}}</textarea>
        </div>

        <button type="submit" class="btn btn-success btn-lg btn-block" style="padding: 5px 0 5px 0; border-radius: 0.25rem">CREATE</button>
   </form>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'background', {
            filebrowserUploadUrl: "{{ route('upload', ['_token' => csrf_token() ]) }}",
            filebrowserUploadMethod: 'form',
            // toolbar: [
            //     ['Maximize', 'Image']
            // ],
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
@endsection

@section('title', 'Owens_News_Detail')
