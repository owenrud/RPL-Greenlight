<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'daftar_bus';

    protected $fillable = [
        'Nama_Bus',
        'Sifat',
        'Kode_Bus',
        'pabrikan',
        'no_mesin',
        'Plat_nomor',
        'foto',
        'Area',
        'Kapasitas',
        'Bagasi'
    ];
}
