<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class City extends Model
    {
        // use HasFactory;
        protected $table = 'tbCity';
        protected $fillable = ['id','sname','lname','zipcode','area'];

        public $timestamps = false;

        public function wards()
        {
            return $this->hasMany(Ward::class);
        }
    }
