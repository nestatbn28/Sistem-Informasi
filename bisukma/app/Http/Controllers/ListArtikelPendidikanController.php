<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListArtikelPendidikanController extends Controller
{
    public function index(){
        $kategori="Pendidikan";
        $bppup = DB::table('bppup')->where('kategori', $kategori)->orderBy('id', 'desc')->get();
        $komentar=Komentar::all();
        return view('list-artikel-pendidikan',compact('bppup','komentar'));
    }
}
