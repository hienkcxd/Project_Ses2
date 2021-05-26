@extends('Layout.Owens')

@section('content')
    @if(Session::get('success'))
        <div class="alert alert-info">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="projectContainer">
        <table id="accTable" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered"
               style="width:100%">
            <caption style="caption-side: top; font-size: 1.5rem; font-weight: bold; color: #039BE5">
                DANH SÁCH TAÌ KHOẢN
                <a class="btn-insert btn btn-outline-info" href="{{ route('owens_register') }}">CREATE NEW</a>
            </caption>
            <thead>
            <tr>
                <th>Employee_ID</th>
                <th>Account</th>
                <th>Password</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accLists as $acc)
                <tr>
                    <td>{{ $acc->EmployeeID }}</td>
                    <td>{{ $acc->Account }}</td>
                    <td>{{ $acc->Password }}</td>
                    <td>{{ $acc->Email }}</td>
                    <td>{{ $acc->Role  }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">

        var tableEmp = $('#accTable').DataTable({
            "scrollX": true,
            "lengthMenu": [5, 10, 20, 50],
            "sort": false,
        });

    </script>
@endsection

@section('title', 'Owens_AccLists')
