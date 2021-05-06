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

    public function avg(){
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 4; $i < count($key)-2; $i++){
            array_push($month, $key[$i]);
        }
        $data = DB::table('market_lists');
        $priceAVG = [];
        foreach ($month as $key){
            $labelvalue = $data
                ->where('DistrictName','=', 'Quận 1')
                ->where('Year', '=', '2020')
                ->avg($key);
            array_push( $priceAVG, $labelvalue);
        }
        return $priceAVG;
    }


    public function handler(Request $request): Chartisan
    {
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 4; $i < count($key)-2; $i++){
            array_push($month, $key[$i]);
        }
        return Chartisan::build()
            ->labels($month)
            ->dataset('Giá Quận', $this->avg());
    }
}
