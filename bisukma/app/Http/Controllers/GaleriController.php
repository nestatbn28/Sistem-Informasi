<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bppup
    	$gambar = DB::table('galeri')->get();
 
    	// mengirim data pegawai ke view index
    	return view('galeri',['galeri' => $gambar]);
 
    }
}
