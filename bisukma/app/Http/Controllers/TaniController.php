<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BPPUP;
use App\Models\Event;
use App\Models\Komentar;
use Carbon\Carbon;
class TaniController extends Controller
{
    public function index(Request $request){

        $komentar = Komentar::all();
        $bppup = BPPUP::find($request->id);
        $event = Event::orderBy('id', 'desc')->where('kategori', $bppup->kategori)->limit(5)->get();
    
        return view('pertanian', compact('bppup','event','komentar'));

    }
}
