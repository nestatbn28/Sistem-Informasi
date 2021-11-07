<?php

namespace App\Http\Controllers;

use App\Models\BPPUP;
use App\Models\Event;
use App\Models\Galeri;
use App\Models\Komentar;
use App\Models\Masukan;
use App\Models\MatHol;
use App\Models\Pariwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;

class AdminController extends Controller
{
    public function log()
    {
        return view('login');
    }

    public function login(Request $request)
        {
            if($request->username=="admin" && $request->password=="admin")
            {
                $request->session()->put('username',$request->username);
                $request->session()->put('password',$request->password);
                return redirect('admins')->with('sukses','Anda telah Login');;
            }
            else
            {
                return redirect('log');
            }

        }
    public function logout(){
        Session::flush();
        return redirect('log')->with('sukses','Anda telah Logout');
    }

    // public function home()
    // {
    //     if(session()->get('username')=="admin" &&session()->get('password')=="admin")
    //     {
    //         return view('admins');
    //     }
    //     else{
    //         return view('log');
    //     }
    // }

    public function index()
    {
        if(session()->get('username')=="admin" &&session()->get('password')=="admin")
        {
    	// mengambil data dari table bppup
    	$bppup = DB::table('bppup')->get();
        $galeri = DB::table('galeri')->get();
        $event = DB::table('event')->get();
        $mathol = DB::table('mathol')->get();
        $pariwisata = Pariwisata::all();
        $masukan=Masukan::all();


    	return view('admin',compact(['bppup','galeri','event','mathol','pariwisata','masukan']));
        }
        else{
            return redirect('log');
        }
    }

    public function show($id)
    {
        $bppup = BPPUP::find($id);
        $komentar = Komentar::where('bppup_id','=',$id)->get();
        return view('pendidikan',compact('komentar','bppup'));
    }

    // method untuk insert data ke table pegawai
        public function storebppup(Request $request)
        {
            $file = $request->file('gambar');

		    $file->move(public_path('BPPUPS'),$file->getClientOriginalName());
            // insert data ke table pegawai
            BPPUP::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $file->getClientOriginalName(),
                'linkyt' => $request->linkyt,
                'googleform' => $request->googleform,
                'kategori' => $request->kategori,
            ]);
            return redirect('/admins');

        }

        public function storeevent(Request $request)
        {

            Event::create([
                'nama'=>$request->nama,
                'googleform'=>$request->googleform,
                'kategori' => $request->kategori,
                'bppup_id'=>$request->bppup_id,
            ]);
            return redirect('/admins');

        }
        public function storegaleri(Request $request)
        {
            $file = $request->file('gambar');

		    $file->move(public_path('Galeri'),$file->getClientOriginalName());
            Galeri::create([
                'gambar'=>$file->getClientOriginalName(),
                'deskripsi'=>$request->deskripsi,
                'kategori'=>$request->kategori,
            ]);
            return redirect('/admins');

        }
        public function storemathol(Request $request)
        {
            $file = $request->file('gambar');

            $file->move(public_path('MatHol'),$file->getClientOriginalName());
            MatHol::create([
                'nama'=>$request->nama,
                'gambar'=>$file->getClientOriginalName(),
                'deskripsi'=>$request->deskripsi,
                'lokasi'=>$request->lokasi,
                'kategori'=>$request->kategori,
                'pariwisata_id'=>$request->pariwisata_id,
            ]);
            return redirect('/admins');

        }
        public function storepariwisata(Request $request)
        {
            $file = $request->file('gambar');

		    $file->move(public_path('Pariwisata'),$file->getClientOriginalName());
            Pariwisata::create([
                'nama'=>$request->nama,
                'deskripsi'=>$request->deskripsii,
                'gambar'=>$file->getClientOriginalName(),
                'linkyt'=>$request->linkyt,
            ]);
            return redirect('/admins');

        }

        public function storekomentar(Request $request,$id)
        {
        Komentar::create([
            'nama'=>$request->nama,
            'isi'=>$request->isi,
            'bppup_id'=>$id,
        ]);

        return Redirect::back();
        }

        public function storemasukan(Request $request)
        {
        Masukan::create([
            'nama'=>$request->nama,
            'nohp'=>$request->nohp,
            'isi'=>$request->isi,
        ]);
        return redirect('');
        }


        public function destroybppup($id)
        {
            $event = BPPUP::find($id);
            $event->delete();
            return redirect('admins');
        }
        public function destroyevent($id)
        {
            $event = Event::find($id);
            $event->delete();
            return redirect('admins');
        }
        public function destroygaleri($id)
        {
            $event = Galeri::find($id);
            $event->delete();
            return redirect('admins');
        }
        public function destroymathol($id)
        {
            $event = MatHol::find($id);
            $event->delete();
            return redirect('admins');
        }

        public function destroymasukan($id)
        {
            $event = Masukan::find($id);
            $event->delete();
            return redirect('admins');
        }
        public function destroypariwisata($id)
        {
            $event = Pariwisata::find($id);
            $event->delete();
            return redirect('admins');
        }

        public function editbppup($id)
    {
        $bppup = BPPUP::find($id);
        return view('edit-bppup',compact('bppup'));
    }

    public function updatebppup(Request $request,$id)
    {
        $bppup=BPPUP::find($id);
        $file = $request->file('gambar');

		$file->move(public_path('BPPUPS'),$file->getClientOriginalName());
        $bppup->judul=$request->judul;
        $bppup->isi=$request->isi;
        $bppup->gambar=$file->getClientOriginalName();
        $bppup->linkyt=$request->linkyt;
        $bppup->googleform=$request->googleform;
        $bppup->kategori=$request->kategori;

        $bppup->save();
        return redirect()->intended('admins');
    }

    public function editevent($id)
    {
        $event=Event::find($id);
        return view('edit-event',compact('event'));
    }

    public function updateevent(Request $request, $id)
    {
        $event=Event::find($id);
        $event->nama=$request->nama;
        $event->googleform=$request->googleform;
        $event->kategori=$request->kategori;
        $event->save();

        return redirect()->intended('admins');
    }

    public function editgaleri($id)
    {
        $galeri=Galeri::find($id);
        return view('edit-galeri',compact('galeri'));
    }

    public function updategaleri(Request $request, $id)
    {
        $galeri=Galeri::find($id);
        $file = $request->file('gambar');

		$file->move(public_path('Galeri'),$file->getClientOriginalName());
        $galeri->gambar=$file->getClientOriginalName();
        $galeri->deskripsi=$request->deskripsi;
        $galeri->kategori=$request->kategori;
        $galeri->save();

        return redirect()->intended('admins');
    }

    public function editmathol($id)
    {
        $mathol = MatHol::find($id);
        $pariwisata = Pariwisata::all();
        return view('edit-mathol',compact(['mathol','pariwisata']));
    }

    public function updatemathol(Request $request, $id)
    {
        $mathol = MatHol::find($id);
        $file = $request->file('gambar');

		$file->move(public_path('MatHolS'),$file->getClientOriginalName());
        $mathol->nama=$request->nama;
        $mathol->gambar=$file->getClientOriginalName();
        $mathol->deskripsi=$request->deskripsi;
        $mathol->lokasi=$request->lokasi;
        $mathol->kategori=$request->kategori;
        $mathol->pariwisata_id=$request->pariwisata_id;
        $mathol->save();

        return redirect()->intended('admins');
    }

    public function editpariwisata($id)
    {
        $pariwisata = Pariwisata::find($id);
        return view('edit-pariwisata',compact('pariwisata'));
    }

    public function updatepariwisata(Request $request, $id)
    {
        $mathol = Pariwisata::find($id);
        $file = $request->file('gambar');

		$file->move(public_path('Pariwisata'),$file->getClientOriginalName());
        $mathol->nama=$request->nama;
        $mathol->deskripsi=$request->deskripsii;
        $mathol->gambar=$file->getClientOriginalName();
        $mathol->linkyt=$request->linkyt;
        $mathol->save();

        return redirect()->intended('admins');
    }
}
