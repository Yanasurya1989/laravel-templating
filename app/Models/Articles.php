<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey ='id';
    protected $fillable = [
        'gambar',
        'title',
        'content',
        
        // 'jenis',
        // 'id_user',
        // 'id_jenis',
        'created_at',
        'updated_at',

    ];

    // public function users()
    // {
    //     return $this->belongsTo(User::class, 'id_user', 'id');
    // }

    // public function types()
    // {
    //     return $this->hasOneThrough(
    //         Types::class,
    //         Subtypes::class,
    //         'id_jenis', // Foreign key on the cars table...
    //         'id_types', // Foreign key on the owners table...
    //         'id', // Local key on the mechanics table...
    //         'id' // Local key on the cars table...
    //     );
    // }

    protected $dates = ['created_at','updated_at'];
}
