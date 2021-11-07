<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BPPUP extends Model
{
    use HasFactory;
    protected $table = 'bppup';
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'linkyt',
        'googleform',
        'kategori',
    ];

    public function komentar(){
        
        return $this->hasMany('App\Models\Komentar','bppup_id');
    }
}
