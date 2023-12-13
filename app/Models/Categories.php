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
        'id_category',
        'created_at',
        'updated_at',

    ];

    public function article(){
        return $this->belongsTo(Categories::class, 'id', 'id_category' );
    }

    protected $dates = ['created_at','updated_at'];
}
