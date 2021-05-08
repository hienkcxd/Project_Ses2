<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WardList extends Model
{
    use HasFactory;
    protected $table = 'ward_lists';
    protected $fillable = ['DistrictName','DistrictID','WardName'];
    protected $primaryKey = 'WardID';

    public $timestamps = false;
}
