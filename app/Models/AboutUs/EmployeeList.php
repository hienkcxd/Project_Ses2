<?php

namespace App\Models\AboutUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeList extends Model
{
    protected $fillable = [
        'EmployeeID','EmpName', 'Position',
    ];
}
