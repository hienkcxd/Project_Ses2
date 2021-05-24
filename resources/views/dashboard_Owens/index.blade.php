@extends('Layout.Owens')

@section('content')
    <h2>owens</h2>
        <div class="projectContainer">
                <h4>Dashboard</h4>
                <hr>
                <table id="demo" class="display nowrap uk-table uk-table-hover uk-table-striped table-bordered" style="width: 100%;">
                    <thead>
                    <th>Emp ID</th>
                    <th>Account</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $LoggedAdminInfo['EmployeeID'] }}</td>
                        <td>{{ $LoggedAdminInfo['Account'] }}</td>
                        <td>{{ $LoggedAdminInfo['Email'] }}</td>
                        <td>{{ $LoggedAdminInfo['Password'] }}</td>
{{--                        <td>{{ $LoggedAdminInfo['Role'] }}</td>--}}
                        <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                    </tr>
                    </tbody>
                </table>
    </div>

    <script>
        $(document).ready(function () {
            // DataTable
            var tableWard = $('#demo').DataTable({
                "scrollX": true,
                lengthMenu: [5, 10, 20, 50],
                "bInfo": false,
                "sort": false,
            });
        });
    </script>
@endsection
@section('title', 'Owens_Dashboard')
