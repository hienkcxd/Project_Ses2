<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketList extends Model
{
    protected $primaryKey = 'MarketID';
    protected $fillable = [
        'DistrictName','WardName', 'Year','Thang_01','Thang_02', 'Thang_03', 'Thang_04', 'Thang_05',
        'Thang_06', 'Thang_07', 'Thang_08', 'Thang_09', 'Thang_10', 'Thang_11', 'Thang_12',
    ];
}
