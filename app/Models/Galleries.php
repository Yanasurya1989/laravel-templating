<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    use HasFactory;

    protected $table = 'galleries';
    protected $primaryKey ='id';
    protected $fillable = [
        'image',
        'title',
        'teks',
        'created_at',
        'updated_at',

    ];

}
