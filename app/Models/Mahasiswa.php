<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'data_mahasiswa';

    public $timestamps = false;

    protected $attributes = [
        'nama' => 'Fulan',
        'tanggal_lahir' => '1990-01-01',
    ];
}
