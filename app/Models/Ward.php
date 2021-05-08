<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Ward extends Model
    {
        use HasFactory;
        protected $table = 'tbWard';
        protected $fillable = ['id','name','cityid'];

        public $timestamps = false;
    }
