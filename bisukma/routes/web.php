<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('log',[App\Http\Controllers\AdminController::class,'log']);
Route::get('logout',[App\Http\Controllers\AdminController::class,'logout']);
Route::post('login',[App\Http\Controllers\AdminController::class,'login']);
Route::get('/',[App\Http\Controllers\WelcomeController::class,'index']);
Route::get('detail',[App\Http\Controllers\WelcomeController::class,'show']);
Route::post('kontak',[App\Http\Controllers\SaranMasukanController::class,'store']);
Route::get('listnews',[App\Http\Controllers\ListNewsController::class,'index']);
Route::get('listartikelpertanian',[App\Http\Controllers\ListArtikelPertanianController::class,'index']);
Route::get('listartikelpendidikan',[App\Http\Controllers\ListArtikelPendidikanController::class,'index']);
Route::get('listartikelumkm',[App\Http\Controllers\ListArtikelUmkmController::class,'index']);
Route::get('listartikel',[App\Http\Controllers\ListArtikelPariwisataController::class,'index']);
Route::get('listwisata',[App\Http\Controllers\ListWisataController::class,'index']);
Route::get('tani',[App\Http\Controllers\TaniController::class,'index']);
Route::get('wisata',[App\Http\Controllers\WisataController::class,'index']);
Route::get('foto',[App\Http\Controllers\GaleriController::class,'index']);
Route::get('admins',[App\Http\Controllers\AdminController::class,'index']);
Route::post('admins/bppup/proses',[App\Http\Controllers\AdminController::class,'storebppup']);
Route::post('admins/event/proses',[App\Http\Controllers\AdminController::class,'storeevent']);
Route::post('admins/galeri/proses',[App\Http\Controllers\AdminController::class,'storegaleri']);
Route::post('admins/mathol/proses',[App\Http\Controllers\AdminController::class,'storemathol']);
Route::post('admins/pariwisata/proses',[App\Http\Controllers\AdminController::class,'storepariwisata']);
Route::post('komentar/proses/{id}',[App\Http\Controllers\AdminController::class,'storekomentar']);
Route::post('masukan/proses',[App\Http\Controllers\AdminController::class,'storemasukan']);

Route::get('admins/{id}',[App\Http\Controllers\AdminController::class,'show']);

Route::get('admins/bppup/delete/{id}',[App\Http\Controllers\AdminController::class,'destroybppup']);
Route::get('admins/event/delete/{id}',[App\Http\Controllers\AdminController::class,'destroyevent']);
Route::get('admins/galeri/delete/{id}',[App\Http\Controllers\AdminController::class,'destroygaleri']);
Route::get('admins/mathol/delete/{id}',[App\Http\Controllers\AdminController::class,'destroymathol']);
Route::get('admins/pariwisata/delete/{id}',[App\Http\Controllers\AdminController::class,'destroypariwisata']);
Route::get('admins/masukan/delete/{id}',[App\Http\Controllers\AdminController::class,'destroymasukan']);


Route::get('bppup/edit/{id}',[App\Http\Controllers\AdminController::class,'editbppup']);
Route::post('bppup/edit/proses/{id}',[App\Http\Controllers\AdminController::class,'updatebppup']);
Route::get('event/edit/{id}',[App\Http\Controllers\AdminController::class,'editevent']);
Route::post('event/edit/proses/{id}',[App\Http\Controllers\AdminController::class,'updateevent']);
Route::get('galeri/edit/{id}',[App\Http\Controllers\AdminController::class,'editgaleri']);
Route::post('galeri/edit/proses/{id}',[App\Http\Controllers\AdminController::class,'updategaleri']);
Route::get('mathol/edit/{id}',[App\Http\Controllers\AdminController::class,'editmathol']);
Route::post('mathol/edit/proses/{id}',[App\Http\Controllers\AdminController::class,'updatemathol']);
Route::get('pariwisata/edit/{id}',[App\Http\Controllers\AdminController::class,'editpariwisata']);
Route::post('pariwisata/edit/proses/{id}',[App\Http\Controllers\AdminController::class,'updatepariwisata']);

Route::get('strukturorganisasi', function () {
    return view('struktur-organisasi');
});
Route::get('tentangkami', function () {
    return view('tentang-kami');
});
Route::get('trackrecord', function () {
    return view('track-record');
});
Route::get('visimisi', function () {
    return view('visi-misi');
});
Route::get('kontak', function () {
    return view('kontakkami');
});
// Route::get('log', function () {
//     return view('login');
// });
