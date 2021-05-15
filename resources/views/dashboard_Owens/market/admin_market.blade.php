@extends('Layout.Owens')

@section('content')

    @include('dashboard_Owens.market.distAndWard_table')
{{--    @include('dashboard_Owens.market.market_table')--}}

{{--    <script>--}}
{{--        // $(document).ready(function() {--}}
{{--        //     $('table.display').DataTable({--}}
{{--        //         "scrollX": true,--}}
{{--        //         "sort": false,--}}
{{--        //     });--}}
{{--        // } );--}}
{{--        $(document).ready(function() {--}}
{{--            $('#example').DataTable( {--}}
{{--                "processing": true,--}}
{{--                "serverSide": true,--}}
{{--                // "ajax": "scripts/server_processing.php"--}}
{{--            } );--}}
{{--        } );--}}
{{--    </script>--}}
@endsection
@section('title', 'Owens_market')
