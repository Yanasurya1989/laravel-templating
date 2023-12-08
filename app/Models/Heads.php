<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heads extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'heads';
    protected $primaryKey ='id';
    protected $fillable = [
        'favicons',
        'title',
    ];
}
