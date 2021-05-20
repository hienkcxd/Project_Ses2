@extends('Layout.employee')
@section('content')
    @extends('Layout.Owens')
@section('content')
    <div class="marketContainer">
        <table id="cusTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH DỰ ÁN HOÀN THÀNH
                <a class="btn-insert btn btn-outline-info" href="#">Insert</a>
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
            var table = $('#cusTable').DataTable({
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
                            '                     <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>'
                    },
                ]
            });

            $('#cusTable tbody').on('click', '#edit', function getID() {
                var $employeeID = table.row($(this).parents('tr')).data();
                document.location = ""
                $('.edit').attr('href', function () {
                    return document.location + "/edit/employeeID_" + $employeeID['EmployeeID'];
                });
            });

            $('#cusTable tbody').on('click', '#delete', function getID() {
                var $ProjectID = table.row($(this).parents('tr')).data();
                $('.delete').attr('href', function () {
                    return document.location + "/delete/employeeID_" + $employeeID['EmployeeID'];
                });
            });
        });

    </script>
@endsection

@section('title', 'Owens_Dashboard_Customer')

@endsection

@section('title', 'Employee_Dashboard_Customer')
