<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WardPriceChart extends BaseChart
{
    public ?string $name = 'wardPrice';

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

    public function priceWard($distPara, $wardPara, $yearPara){
        $labelName = $this->labelList();

        //Get value with month
        $data = DB::table('market_lists');
        $wardPrice = $data
            ->where('DistrictName','=', $distPara)
            ->where('WardName','=', $wardPara)
            ->where('Year', '=', $yearPara)
            ->select($labelName)
            ->get()->toArray();

        //Put value from db to array
        $price = [];
        foreach ($wardPrice as $key => $value) {
            foreach ($value as $k => $v) {
                if (in_array($k, $labelName)) {
                    array_push($price, $v);
                }
            }
        }
        return $price;
    }
    public function handler(Request $request): Chartisan
    {
        //Get label name for chart
        $distPara = $request->DistrictName;
        $yearPara = $request->Year;
        $wardPara = $request->WardName;
        $labelName = $this->labelList();

        return Chartisan::build()
            ->labels($labelName)
            ->dataset('Giá Đất Phường '.$wardPara, $this->priceWard($distPara, $wardPara, $yearPara));
    }
}
