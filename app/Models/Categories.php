<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey ='id';
    protected $fillable = [
        'category',
        'created_at',
        'updated_at',

    ];

    protected $dates = ['created_at','updated_at'];
}
