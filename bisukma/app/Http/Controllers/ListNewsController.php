<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListNewsController extends Controller
{
    public function index()
    {
    	$kategori="Berita";
        $bppup = DB::table('bppup')->where('kategori', $kategori)->orderBy('id', 'desc')->get();
        return view('listberita',['bppup'=> $bppup]);

    }
}
