<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatHol extends Model
{
    use HasFactory;
    protected $table = 'mathol';
    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'lokasi',
        'kategori',
        'pariwisata_id',
    ];
}
