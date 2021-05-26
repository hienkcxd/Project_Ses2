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
        <table id="cusTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH KHÁCH HÀNG PHỤ TRÁCH
            </caption>
            <thead>
            <tr>
                <th>Cus_ID</th>
                <th>Action</th>
                <th>Tên Khách Hàng</th>
                <th>ĐT Khách Hàng</th>
                <th>Công Việc</th>
                <th>Địa Chỉ</th>
                <th>ID Nhân Viên</th>
                <th>Tên Nhân Viên</th>
                <th>ĐT Nhân Viên</th>
                <th>Giá Hợp Đồng - (Triệu)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cusList as $cus)
                <tr>
                    <td>{{ $cus->CusID }}</td>
                    <td>
                        <a id="edit" name="edit" class="edit btn btn-outline-info" href="{{ route('emp.customer_edit', ['customerID'=>$cus->CusID]) }}">Detail</a>
                    </td>
                    <td>{{ $cus->CusName }}</td>
                    <td>{{ $cus->CusPhone }}</td>
                    <td>{{ $cus->WorkName }}</td>
                    <td>{{ $cus->Address  }}</td>
                    <td>{{ $cus->EmpID }}</td>
                    <td>{{ $cus->EmpName }}</td>
                    <td>{{ $cus->EmpPhone }}</td>
                    <td>{{ $cus->Price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">

        var tableEmp = $('#cusTable').DataTable({
            "scrollX": true,
            "lengthMenu": [5, 10, 20, 50],
            "sort": false,
        });

    </script>

@endsection

@section('title', 'Employee_Customer')
