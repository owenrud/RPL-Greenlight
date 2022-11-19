<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'tgl_lahir',
        'alamat',
        'no_telp',
    ];
}
