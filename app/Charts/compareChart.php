<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class compareChart extends BaseChart
{
    public ?string $name = 'comparePriceDistAndWard';

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

    public function priceWard($distPara, $wardPara, $yearPara){
        $labelName = $this->labelList();
        //Get value with month
        $data = DB::table('market_lists');

        $labelvalue = $data
            ->where('DistrictName','=', $distPara)
            ->where('WardName','=', $wardPara)
            ->where('Year', '=', $yearPara)
            ->select($labelName)
            ->get()->toArray();

        //Put value from db to array
        $priceMonth = [];
        foreach ($labelvalue as $key => $value) {
            foreach ($value as $k => $v) {
                if (in_array($k, $labelName)) {
                    array_push($priceMonth, $v);
                }
            }
        }
        return $priceMonth;
    }

    public function handler(Request $request): Chartisan
    {
        $distPara = $request->DistrictName;
        $yearPara = $request->Year;
        $wardPara = $request->WardName;
        $labelName = $this->labelList();

        return Chartisan::build()
            ->labels($labelName)
            ->dataset('Giá Đất ' .$distPara, $this->avg($distPara, $yearPara))
            ->dataset('Giá Đất '.$wardPara, $this->priceWard($distPara, $wardPara, $yearPara));
    }
}
