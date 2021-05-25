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
    <div class="projectContainer">
        <table id="cusTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH KHÁCH HÀNG
                <a class="btn-insert btn btn-outline-info" href="#">CREATE NEW</a>
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
                <th>Giá Hợp Đồng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cusList as $cus)
                <tr>
                    <td>{{ $cus->CusID }}</td>
                    <td>
                        <a id="edit" name="edit" class="edit btn btn-outline-info" href="{{ route('owens.customer_edit', ['customerID'=>$cus->CusID]) }}">Detail</a>
                        <a id="delete" name="delete" class="delete btn btn-outline-danger" href="{{ route('owens.customer_delete', ['customerID'=>$cus->CusID]) }}">Delete</a>
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

@section('title', 'Owens_Customer')
