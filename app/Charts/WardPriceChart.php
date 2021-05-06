<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WardPriceChart extends BaseChart
{
    public ?string $name = 'wardPrice';


    public function priceWard(){
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 4; $i < count($key)-2; $i++){
            array_push($month, $key[$i]);
        }
        //Get value with month
        $data = DB::table('market_lists');
        $labelvalue = $data
            ->where('DistrictName','=', 'Quận 1')
            ->where('WardName','=', 'Bến Nghé')
            ->where('Year', '=', '2020')
            ->select($month)
            ->get()->toArray();

        //Put value from db to array
        $price = [];
        foreach ($labelvalue as $key => $value) {
            foreach ($value as $k => $v) {
                if (in_array($k, $month)) {
                    array_push($price, $v);
                }
            }
        }
        return $price;
    }
    public function handler(Request $request): Chartisan
    {
        //Get label name for chart
        $key= DB::getSchemaBuilder()->getColumnListing('market_lists');
        $month = [];
        for ($i = 4; $i < count($key)-2; $i++){
            array_push($month, $key[$i]);
        }

        return Chartisan::build()
            ->labels($month)
            ->dataset('Giá Phường', $this->priceWard());
    }
}
