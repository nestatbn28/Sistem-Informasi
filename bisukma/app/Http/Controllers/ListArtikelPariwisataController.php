<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListArtikelPariwisataController extends Controller
{
    public function index(){
        $kategori="Pariwisata";
        $bppup = DB::table('bppup')->where('kategori', $kategori)->orderBy('id', 'desc')->get();
        $komentar=Komentar::all();
        return view('list-artikel',compact('bppup','komentar'));
    }
}
