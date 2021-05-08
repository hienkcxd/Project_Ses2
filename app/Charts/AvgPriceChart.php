<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AvgPriceChart extends BaseChart
{
    public ?string $name = 'avgPrice';

    public function labelList(){
        $key= schema::getColumnListing('market_lists');
        $labelName = [];
        for ($i = 0; $i < count($key); $i++){
            if(str_contains($key[$i],'Thang')){
                array_push($labelName, $key[$i]);
            }
        }
        return $labelName;
    }

    public function avg($distPara, $yearPara){
        $labelName = $this->labelList();
        $data = DB::table('market_lists');
        $priceAVG = [];
        foreach ($labelName as $key){
            $monthPrice = $data
                ->where('DistrictName','=', $distPara)
                ->where('Year', '=', $yearPara)
                ->avg($key);
            array_push( $priceAVG, $monthPrice);
        }
        return $priceAVG;
    }


    public function handler(Request $request): Chartisan
    {
        //Tham so dau vao
        $distPara = $request->DistrictName;
        $yearPara = 2020;
        $labelName = $this->labelList();

        return Chartisan::build()
            ->labels($labelName)
            ->dataset('Giá Quận', $this->avg($distPara, $yearPara));
    }

}
