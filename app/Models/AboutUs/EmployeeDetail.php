<?php

namespace App\Models\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    protected $fillable = [
        'EmployeeID','empName', 'position', 'describe','email', 'phone', 'facebook', 'zalo', 'images',
    ];
}
