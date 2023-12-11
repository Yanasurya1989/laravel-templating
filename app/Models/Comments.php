<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $primaryKey ='id';
    protected $fillable = [
        'id_detil',
        'name',
        'email',
        'website',
        'comment',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at','updated_at'];
}
