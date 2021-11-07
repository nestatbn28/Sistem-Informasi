<?php

namespace App\Http\Controllers;
use App\Models\MatHol;
use App\Models\Pariwisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(Request $request)
    {
        //$pariwisata = DB::table('pariwisata')->orderBy('id', 'desc')->get();
        $wisata = Pariwisata::find($request->id);
        $hotel = MatHol::where([
            ['kategori', '=', 'Hotel'],
            ['pariwisata_id', '=', $request->id],
        ])->orderBy('id', 'desc')->limit(5)->get();
        $makan = MatHol::where([
            ['kategori', '=', 'Tempat Makan'],
            ['pariwisata_id', '=', $request->id],
        ])->orderBy('id', 'desc')->limit(5)->get();
        return view('pariwisata', compact('wisata','hotel','makan'));

    }
}
