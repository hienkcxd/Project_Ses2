@extends('Layout.employee')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::get('thongbao'))
        <div class="alert alert-info">
            {{ Session::get('thongbao') }}
        </div>
    @endif

    <div class="projectContainer">
        <table id="projectTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH DỰ ÁN HOÀN THÀNH
                <a class="btn-insert btn btn-outline-info" href="{{ route('createProject_emp') }}">Create New</a>
            </caption>
            <thead>
            <tr>
                <th>ID</th>
                <th>Project ID</th>
                <th>Action</th>
                <th>Ngày Hoàn Thành</th>
                <th>Location</th>
                <th>Price</th>
                <th>Client Dung 1</th>
                <th>tagName Dung 2</th>
                <th>Nội Dung 1</th>
                <th>Nội Dung 2</th>
                <th>Hình 1</th>
                <th>Hình 2</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // DataTable
            var table = $('#projectTable').DataTable({
                columnDefs: [
                    {orderable: false, targets: "_all"},
                    {visible: false, targets: 0}
                ],
                "scrollX": true,
                lengthMenu: [6, 15, 25, 50],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.allProject') }}",
                    type: "GET",
                },
                columns: [
                    {data: 'ProDetailID'},
                    {data: 'ProjectID'},
                    {
                        data: null,
                        defaultContent: '<a id="edit" name="edit"  class="edit btn btn-outline-info" href="">Edit</a> ' +
                            '                     <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>'
                    },
                    {data: 'DateFinish'},
                    {data: 'Location'},
                    {data: 'Price'},
                    {data: 'Client'},
                    {data: 'tagName'},
                    {data: 'contentTop',
                        render: function ( data, type, row ) {
                            return data.substr( 0, 30 )+ "...";}} ,
                    {data: 'contentBot',
                        render: function ( data, type, row ) {
                            return data.substr( 0, 30 )+ "...";}},
                    {data: 'imageTop',
                        "render": function (data, type, row, meta) {
                            return '<img src="\\' + data + '" alt="' + data + '"height="100" width="100"/>';}
                    },
                    {data: 'imageBot',
                        "render": function (data, type, row, meta) {
                            return '<img src="\\' + data + '" alt="' + data + '"height="100" width="100"/>';}
                    },
                ]
            });

            $('#projectTable tbody').on('click', '#edit', function getID() {
                var $ProjectID = table.row($(this).parents('tr')).data();
                document.location = ""
                $('.edit').attr('href', function () {
                    return document.location + "/edit/ProjectID_" + $ProjectID['ProjectID'];
                });
            });

            $('#projectTable tbody').on('click', '#delete', function getID() {
                var $ProjectID = table.row($(this).parents('tr')).data();
                $('.delete').attr('href', function () {
                    return document.location + "/delete/ProjectID_" + $ProjectID['ProjectID'];
                });
            });
        });

    </script>
@endsection
@section('title', 'Employee_Project')
