@extends('Layout.Owens')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
        <div class='container' >
            <div class='wrapper animated bounceInLeft'>
                <div class='contact'>
                    <form method="POST" action="{{ route('admin_market.update_market',['MarketID'=>$marketDetail->MarketID]) }}">
                        @csrf
                        <div class="firstRow">
                            <p>
                                <label>Quận:</label>
                                <select name="districts" id="districts">
                                    <option value="{{ $marketDetail->DistrictName }}">
                                        --- {{ $marketDetail->DistrictName }} ---
                                    </option>
                                    @foreach ($disList as $item)
                                        <option value="{{ $item->DistrictName }}">{{ $item->DistrictName }}</option>
                                    @endforeach
                                </select>
                            </p>

                            <p>
                                <label>Phường:</label>
                                <select name="wardList" id="wardList">
                                    <option value="{{ $marketDetail->WardName }}">---{{ $marketDetail->WardName }}---</option>
                                </select>
                            </p>

                            <p>
                                <label>Năm:</label>
                                <select name="Year" id="Year">
                                    <option value="{{ $marketDetail->Year }}">---{{ $marketDetail->Year }}---</option>
                                    <option value="2020"> 2020</option>
                                    <option value="2021"> 2021</option>
                                </select>
                            </p>
                        </div>

                        <div class="secondRow">
                            <p>
                                <label>Tháng 1:</label><input type="number" name='Thang_01' min="0"
                                                             value="{{ $marketDetail->Thang_01 }}">
                            </p>

                            <p>
                                <label>Tháng 2:</label><input type="number" name='Thang_02' min="0"
                                                             value="{{ $marketDetail->Thang_02 }}">
                            </p>

                            <p>
                                <label>Tháng 3:</label><input type="number" name='Thang_03' min="0"
                                                             value="{{ $marketDetail->Thang_03 }}">
                            </p>

                        </div>

                        <div class="secondRow">
                            <p>
                                <label>Tháng 4:</label><input type="number" name='Thang_04' min="0"
                                                             value="{{ $marketDetail->Thang_04 }}">
                            </p>

                            <p>
                                <label>Tháng 5:</label><input type="number" name='Thang_05' min="0"
                                                             value="{{ $marketDetail->Thang_05 }}">
                            </p>

                            <p>
                                <label>Tháng 6:</label><input type="number" name='Thang_06' min="0"
                                                             value="{{ $marketDetail->Thang_06 }}">
                            </p>
                        </div>

                        <div class="secondRow">
                            <p>
                                <label>Tháng 7:</label><input type="number" name='Thang_07' min="0"
                                                             value="{{ $marketDetail->Thang_07 }}">
                            </p>

                            <p>
                                <label>Tháng 8:</label><input type="number" name='Thang_08' min="0"
                                                             value="{{ $marketDetail->Thang_08 }}">
                            </p>

                            <p>
                                <label>Tháng 9:</label><input type="number" name='Thang_09' min="0"
                                                             value="{{ $marketDetail->Thang_09 }}">
                            </p>

                        </div>

                        <div class="secondRow">

                            <p>
                                <label>Tháng 10:</label><input type="number" name='Thang_10' min="0"
                                                              value="{{ $marketDetail->Thang_10 }}">
                            </p>

                            <p>
                                <label>Tháng 11:</label><input type="number" name='Thang_11' min="0"
                                                              value="{{ $marketDetail->Thang_11 }}">
                            </p>

                            <p>
                                <label>Tháng 12:</label><input type="number" name='Thang_12' min="0"
                                                              value="{{ $marketDetail->Thang_12 }}">
                            </p>

                        </div>

                        <div class="thirdRow">
                            <p class='full'>
                                <button class="btn btn-warning">Submit</button>
                            </p>
                        </div>

                    </form>
                </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(function () {

                        function getData(name) {
                            url ='MarketDetail/'+name;
                            $.get(url)
                                .done(function (data) {
                                    console.log("data: " + data);
                                    var bodyData = '';
                                    $.each(JSON.parse(data), function (index, row) {
                                        bodyData += `<option value= "${row.WardName}" >${row.WardName}</option><br>`
                                    })
                                    $("#wardList").empty().append(bodyData);
                                });
                        }

                        $("#districts").change(function (e) {
                            e.preventDefault();
                            let name = $("#districts").val();
                            getData(name);
                            $(document).ajaxComplete(function (Wname) {
                                Wname = $('select[name=wardList] option:selected').val();
                                console.log(Wname);
                            });
                        });

                });

            </script>
        </div>
@endsection
@section('title', 'Owens_Market_Detail')
