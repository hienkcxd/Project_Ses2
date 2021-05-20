@extends('Layout.Owens')
@section('content')
    <div class="marketContainer">
        <table id="empTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH BAÌ VIẾT TRÊN TRANG
                <a class="btn-insert btn btn-outline-info" href="#">Add New</a>
            </caption>
            <thead>
            <tr>
                <th>EmpID</th>
                <th>Tên Nhân Viên</th>
                <th>Chức Vụ</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($empList as $e)
                <tr>
                    <td>{{ $e->EmployeeID }}</td>
                    <td>{{ $e->EmpName }}</td>
                    <td>{{ $e->Position}}</td>
                    <td>
                        <a id="edit" name="edit" class="edit btn btn-outline-info" href="">Detail</a>
                        <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>
                        <a id="register" name="register" class="delete btn btn-outline-danger" href="">Register</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            // DataTable
            var tableEmp = $('#empTable').DataTable({
                "scrollX": true,
                "lengthMenu": [5, 10, 20, 50],
                "sort": false,
            });
            $('#empTable tbody').on('click', '#edit', function getID() {
                var $EmployeeID = table.row($(this).parents('tr')).data();
                document.location = ""
                $('.edit').attr('href', function () {
                    return document.location + "/edit/EmployeeID_" + $EmployeeID['MarketID'];
                });
            });

            $('#empTable tbody').on('click', '#delete', function getID() {
                var $EmployeeID = table.row($(this).parents('tr')).data();
                $('.delete').attr('href', function () {
                    return document.location + "/delete/EmployeeID_" + $EmployeeID['MarketID'];
                });
            });

            $('#empTable tbody').on('click', '#register', function getID() {
                var $EmployeeID = table.row($(this).parents('tr')).data();
                $('.register').attr('href', function () {
                    return document.location + "/delete/EmployeeID_" + $EmployeeID['MarketID'];
                });
            });

        });
    </script>
@endsection

@section('title', 'Owens_Dashboard_Employee')
