<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListWisataController extends Controller
{
    public function index()
    {
        $pariwisata = DB::table('pariwisata')->orderBy('id', 'desc')->get();
        return view('list-wisata',['pariwisata'=> $pariwisata]);

    }
}
