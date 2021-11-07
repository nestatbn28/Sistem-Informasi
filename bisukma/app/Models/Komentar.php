<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $fillable = [
        'nama',
        'isi',
        'bppup_id',
    ];

    public function bppup(){
        
        return $this->belongsTo('App\Models\BPPUP','id');
    }
}
