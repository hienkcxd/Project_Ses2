<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class compWardAndWard extends BaseChart
{
    public ?string $name = 'wardCompareChart';

    public function column(){
        $key= schema::getColumnListing('market_lists');
        $column = [];
        for ($i = 0; $i < count($key); $i++){
            if(str_contains($key[$i],'Thang')){
                array_push($column, $key[$i]);
            }
        }
        return $column;
    }

    public function avgWard($distPara, $wardName, $yearPara){
        $month = $this->column();
        $total = 0;
        $cnt = 0;

        //Cộng các cột tháng của phường thỏa điều kiện
        foreach ($month as $col){
            $data = DB::table('market_lists')
                ->where('DistrictName', '=', $distPara)
                ->where('WardName', '=', $wardName)
                ->where('Year', '=',$yearPara)
                ->sum($col);
            if($data != null){
                $cnt++;
            }
            $total += $data;
        }

        return (int)($total/$cnt);
    }

    public function handler(Request $request): Chartisan
    {
        $distPara = $request->DistrictName;
        $yearPara = $request->Year;

        $data = DB::table('market_lists');
        $listWard = $data
            ->where('DistrictName', '=',$distPara)
            ->where('Year', '=',$yearPara)
            ->orderBy('MarketID', 'asc')
            ->pluck('WardName')->toArray();
        $avg = [];

        foreach ($listWard as $wardName){
            $value = $this->avgWard($distPara, $wardName, $yearPara);
            array_push($avg, $value);
        }

        return Chartisan::build()
            ->labels($listWard)
            ->dataset('Giá Đất Trung Bình Các Phường ' .$distPara,$avg);
    }
}
