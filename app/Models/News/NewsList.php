<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsList extends Model
{
    protected $fillable = [
        'NewsID','NewsName', 'NewsTagName','Description','Day', 'Year', 'images',
    ];
}
