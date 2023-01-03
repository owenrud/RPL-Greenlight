<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'kode_invoice',
        'email',
        'tgl_cetak',
        'tipe_bayar',
        'no_bayar',
        'nama_bus',
        'tgl_pickup',
        'waktu',
        'lokasi',
        'tujuan',
        'kursi',
        'harga',
        'file'
    ];
    public function daftar_bus()
    {
        return $this->belongsTo(Bus::class,'foreign_key');
    }
}
