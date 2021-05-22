@extends('Layout.Owens')
@section('content')
    <div class="marketContainer">
        <table id="workTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH DỰ ÁN ĐANG THỰC HIỆN
                <a class="btn-insert btn btn-outline-info" href="#">CREATE NEW</a>
            </caption>
            <thead>
            <tr>
                <th>Work_ID</th>
                <th>Action</th>
                <th>Tên Dự Án</th>
                <th>Địa Chỉ</th>
                <th>ID Khách Hàng</th>
                <th>ID Nhân Viên</th>
                <th>Mô Tả</th>
            </tr>
            </thead>
            <tbody>
            @foreach($workList as $wk)
                <tr>
                    <td>{{ $wk->WorkID  }}</td>
                    <td>
                        <a id="edit" name="edit" class="edit btn btn-outline-info" href="">Detail</a>
                        <a id="delete" name="delete" class="delete btn btn-outline-danger" href="">Delete</a>
                    </td>
                    <td>{{ $wk->WorkName }}</td>
                    <td>{{ $wk->Address }}</td>
                    <td>{{ $wk->CusID }}</td>
                    <td>{{ $wk->EmpID }}</td>
                    <td>{{ $wk->WorkDesc }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">

        var tableEmp = $('#workTable').DataTable({
            "scrollX": true,
            "lengthMenu": [5, 10, 20, 50],
            "sort": false,
        });
    </script>
@endsection

@section('title', 'Owens_Dashboard_work')
