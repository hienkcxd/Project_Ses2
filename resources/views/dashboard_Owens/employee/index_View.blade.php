@extends('Layout.Owens')

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
    <div class="marketContainer">
        <table id="empTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH NHÂN VIÊN
                <a class="btn-insert btn btn-outline-info" href="{{ route('owens.create_Emp') }}">Create New</a>
            </caption>
            <thead>
            <tr>
                <th>EMP_ID</th>
                <th>TÊN NHÂN VIÊN</th>
                <th>CHỨC VỤ</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // DataTable
            var table = $('#empTable').DataTable({
                columnDefs: [
                    {orderable: false, targets: "_all"},
                ],
                "scrollX": true,
                lengthMenu: [6, 15, 25, 50],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.allEmployee') }}",
                    type: "GET",
                },
                columns: [
                    {data: 'EmployeeID'},
                    {data: 'EmpName'},
                    {data: 'Position'},
                    {
                        data: null,
                        defaultContent: '<a id="edit" name="edit"  class="edit btn btn-outline-info" href="">Edit</a> ' +
                                        '<a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>'
                    },
                ]
            });

            $('#empTable tbody').on('click', '#edit', function getID() {
                var $EmployeeID = table.row($(this).parents('tr')).data();
                document.location = ""
                $('.edit').attr('href', function () {
                    return document.location + "/edit/Employee_" + $EmployeeID['EmployeeID'];
                });
            });

            $('#empTable tbody').on('click', '#delete', function getID() {
                var $EmployeeID = table.row($(this).parents('tr')).data();
                $('.delete').attr('href', function () {
                    return document.location + "/delete/Employee_" + $EmployeeID['EmployeeID'];
                });
            });

        });
    </script>
@endsection

@section('title', 'Owens_Employee')
