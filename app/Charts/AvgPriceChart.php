<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvgPriceChart extends BaseChart
{
    public ?string $name = 'avgPrice';

    public function avg($name, $year){
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 0; $i < count($key); $i++){
            if(str_contains($key[$i],'Thang')){
                array_push($month, $key[$i]);
            }
        }
        $data = DB::table('market_lists');
        $priceAVG = [];
        foreach ($month as $key){
            $labelvalue = $data
                ->where('DistrictName','=', $name)
                ->where('Year', '=', $year)
                ->avg($key);
            array_push( $priceAVG, $labelvalue);
        }
        return $priceAVG;
    }


    public function handler(Request $request): Chartisan
    {
        $name = $request->DistrictName;
        $year = 2020;
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 0; $i < count($key); $i++){
            if(str_contains($key[$i],'Thang')){
                array_push($month, $key[$i]);
            }
        }
        return Chartisan::build()
            ->labels($month)
            ->dataset('Giá Quận', $this->avg($name, $year));
    }

}
