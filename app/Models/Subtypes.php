<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtypes extends Model
{
    use HasFactory;
    protected $table = 'subtypes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'subtype',
        'id_subtype',
        'created_at',
        'updated_at'
    ];

    public function types(){
        return $this->belongsTo(Types::class, 'id_subtype', 'id');
    }
}
