@extends('Layout.employee')
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

    <div class="projectContainer">
        <table id="newsTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%; text-align: left">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH BÀI VIẾT TRÊN TRANG
                <a class="btn-insert btn btn-outline-info" href="#">Insert</a>
            </caption>
            <thead>
            <tr>
                <th>ID_News</th>
                <th>Action</th>
                <th>Tên Bài</th>
                <th>Thể Loại</th>
                <th>Mô Tả</th>
                <th>Ngày Viết</th>
                <th>Năm</th>
                <th>Background</th>

            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // DataTable
            var table = $('#newsTable').DataTable({
                columnDefs: [
                    {orderable: false, targets: "_all"},
                ],
                "scrollX": true,
                lengthMenu: [6, 15, 25, 50],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.allNews') }}",
                    type: "GET",
                },
                columns: [
                    {data: 'NewsID'},
                    {
                        data: null,
                        defaultContent: '<a id="edit" name="edit"  class="edit btn btn-outline-info" href="">Edit</a> ' +
                            '                     <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>'
                    },
                    {data: 'NewsName'},
                    {data: 'NewsTagName'},
                    {data: 'Description'},
                    {data: 'Day'},
                    {data: 'Year'},
                    {data: 'images'},
                ]
            });

            $('#newsTable tbody').on('click', '#edit', function getID() {
                var $NewsID = table.row($(this).parents('tr')).data();
                document.location = ""
                $('.edit').attr('href', function () {
                    return document.location + "/edit/NewsID_" + $NewsID['NewsID'];
                });
            });

            $('#newsTable tbody').on('click', '#delete', function getID() {
                var $NewsID = table.row($(this).parents('tr')).data();
                $('.delete').attr('href', function () {
                    return document.location + "/delete/NewsID_" + $NewsID['NewsID'];
                });
            });
        });

    </script>
@endsection

@section('title', 'Employee_News')
