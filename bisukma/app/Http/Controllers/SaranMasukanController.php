<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaranMasukanController extends Controller
{
    public function store(Request $request)
        {
            // insert data ke table pegawai
            DB::table('masukan')->insert([
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'isi' => $request->isi,
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect('/kontak');        
        }
}
