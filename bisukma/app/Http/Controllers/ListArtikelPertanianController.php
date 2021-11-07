<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListArtikelPertanianController extends Controller
{
    public function index(){
        $kategori="Pertanian";
        $bppup = DB::table('bppup')->where('kategori', $kategori)->orderBy('id', 'desc')->get();
        $komentar=Komentar::all();
        return view('list-artikel-pertanian',compact('bppup','komentar'));
    }
}
