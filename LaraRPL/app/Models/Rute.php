<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'rute';

    protected $fillable = [
        'titik_awal',
        'titik_sampai',
        'jam_berangkat',
        'jam_sampai',
        
    ];
}
