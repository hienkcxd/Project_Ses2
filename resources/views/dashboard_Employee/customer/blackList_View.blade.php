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
        <table id="blackListTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                BLACK LIST
            </caption>
            <thead>
            <tr>

                <th>Tên Khách Hàng</th>
                <th>ĐT Khách Hàng</th>
                <th>Mô Tả</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blackList as $cus)
                <tr>
                    <td>{{ $cus->BlackCusName }}</td>
                    <td>{{ $cus->BlackCusPhone }}</td>
                    <td>{{ $cus->BlackCusDesc }}</td>
                    <td>
                        <a id="edit" name="edit" class="edit btn btn-outline-info" href="{{ route('emp.blackList_edit', ['BlackCusID'=>$cus->BlackCusID ]) }}">Detail</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">

        var tableEmp = $('#blackListTable').DataTable({
            "scrollX": true,
            "lengthMenu": [5, 10, 20, 50],
            "sort": false,
        });

    </script>
@endsection

@section('title', 'Employee_BlackLíst')
