<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey ='id';
    protected $fillable = [
        'title',
        'author',
        'content',
        'images',
        'created_at',
        'updated_at',

    ];

    protected $dates = ['created_at','updated_at'];

}
