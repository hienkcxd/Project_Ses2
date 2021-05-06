<div class="main__cards">
    <div class="card">
        <i
            class="fa fa-user-o fa-2x text-lightblue"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">
                @dd($wardList)
                <select name="districts" id="districts">
{{--                    @foreach($districtList as $name)--}}
                    <option value="Quận 1">Quận 1</option>
{{--                    @endforeach--}}
                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
        <div class="card_inner">
            <p class="text-primary-p">
                <select name="wards" id="wards">
                    @foreach($wardList as $ward)
                    <option value="{{ $ward->WardName }}">Phường {{ $ward->WardName }}</option>
                    @endforeach
                </select>
            </p>
        </div>
    </div>

    <div class="card">
        <i
            class="fa fa-video-camera fa-2x text-yellow"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">Giá Trung Bình: 120(Triệu/m<sup>2</sup>)</p>
        </div>
    </div>

    <div class="card">
        <i
            class="fa fa-thumbs-up fa-2x text-green"
            aria-hidden="true"
        ></i>
        <div class="card_inner">
            <p class="text-primary-p">So Sánh</p>
            <span class="font-bold text-title">Q1</span>
            <span class="font-bold text-title">Q2</span>
        </div>
    </div>
</div>
