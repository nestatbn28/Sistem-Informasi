<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListArtikelUmkmController extends Controller
{
    public function index(){
        $kategori="UMKM";
        $bppup = DB::table('bppup')->where('kategori', $kategori)->orderBy('id', 'desc')->get();
        $komentar=Komentar::all();
        return view('list-artikel-umkm',compact('bppup','komentar'));

    }

}
