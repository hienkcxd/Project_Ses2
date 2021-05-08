<?php

namespace App\Models\Market;

use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictList extends Model
{
//    use HasFactory;
    protected $table = 'district_lists';
    protected $fillable = ['DistrictID','DistrictName'];

    public $timestamps = false;
    public function wards()
    {
        return $this->hasMany(WardList::class);
    }
}

