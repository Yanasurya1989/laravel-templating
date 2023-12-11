<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey ='id';
    protected $fillable = [
        'image',
        'title',
        'content',
        'created_at',
        'updated_at',

    ];

    protected $dates = ['created_at','updated_at'];
}
