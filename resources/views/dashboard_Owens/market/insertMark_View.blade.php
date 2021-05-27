@extends('Layout.Owens')

@section('content')
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    <div class='container'>
        <div class='wrapper animated bounceInLeft'>
            <div class='contact'>
                <form method="POST" action="{{ route('create_Market') }}">
                    @csrf
                    <div class="firstRow">
                        <p>
                            <label>Quận:</label>
                            <select name="DistrictName" id="districts">
                                @foreach ($distList as $item)
                                    <option value="{{ $item->DistrictName }}">{{ $item->DistrictName }}</option>
                                @endforeach
                            </select>
                        </p>

                        <p>
                            <label>Phường:</label>
                            <select name="WardName" id="wardList"></select>
                        </p>

                        <p>
                            <label>Năm:</label>
                            <select name="Year" id="Year">
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                            </select>
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 1:</label><input type="number" name='Thang_01' min="0" value="{{ old('Thang_01') }}">
                            <span class="text-danger">@error('Thang_01') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 2:</label><input type="number" name='Thang_02' min="0" value="{{ old('Thang_02') }}">
                            <span class="text-danger">@error('Thang_02') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 3:</label><input type="number" name='Thang_03' min="0" value="{{ old('Thang_03') }}">
                            <span class="text-danger">@error('Thang_03') {{ $message }} @enderror</span>
                        </p>

                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 4:</label><input type="number" name='Thang_04' min="0" value="{{ old('Thang_04') }}">
                            <span class="text-danger">@error('Thang_04') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 5:</label><input type="number" name='Thang_05' min="0" value="{{ old('Thang_05') }}">
                            <span class="text-danger">@error('Thang_05') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 6:</label><input type="number" name='Thang_06' min="0" value="{{ old('Thang_06') }}">
                            <span class="text-danger">@error('Thang_06') {{ $message }} @enderror</span>
                        </p>
                    </div>

                    <div class="secondRow">
                        <p>
                            <label>Tháng 7:</label><input type="number" name='Thang_07' min="0" value="{{ old('Thang_07') }}">
                            <span class="text-danger">@error('Thang_07') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 8:</label><input type="number" name='Thang_08' min="0" value="{{ old('Thang_08') }}">
                            <span class="text-danger">@error('Thang_08') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 9:</label><input type="number" name='Thang_09' min="0" value="{{ old('Thang_09') }}">
                            <span class="text-danger">@error('Thang_09') {{ $message }} @enderror</span>
                        </p>

                    </div>

                    <div class="secondRow">

                        <p>
                            <label>Tháng 10:</label><input type="number" name='Thang_10' min="0" value="{{ old('Thang_10') }}">
                            <span class="text-danger">@error('Thang_10') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 11:</label><input type="number" name='Thang_11' min="0" value="{{ old('Thang_11') }}">
                            <span class="text-danger">@error('Thang_11') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <label>Tháng 12:</label><input type="number" name='Thang_12' min="0" value="{{ old('Thang_12') }}">
                            <span class="text-danger">@error('Thang_12') {{ $message }} @enderror</span>
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
                let name = $("#districts").val();
                getData(name);
                $(document).ajaxComplete(function (Wname) {
                    Wname = $('select[name=wardList] option:selected').val();
                    console.log(Wname);
                });

                function getData(name) {
                    url = 'create/' + name;
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
                    });
                });

            });

        </script>
    </div>
@endsection
@section('title', 'Owens_CreateMarket')
