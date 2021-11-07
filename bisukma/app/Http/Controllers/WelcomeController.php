<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use App\Models\BPPUP;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bppup
        $bppup = DB::table('bppup')->orderBy('id', 'desc')->limit(2)->get();
        $galeri = DB::table('galeri')->get();

    	// mengirim data pegawai ke view index
    	return view('welcome',['bppup' => $bppup,'galeri' => $galeri]);

    }
    public function show($id){

        $komentar = Komentar::all();
        $bppup = BPPUP::find($id);
        $event = Event::orderBy('id', 'desc')->where('kategori', $bppup->kategori)->limit(5)->get();
    
        return view('pertanian', compact('bppup','event','komentar'));

    }
}
