<?php

namespace App\Http\Controllers;

use App\Models\KadusGembongan;
use App\Models\KadusKemloko;
use App\Models\KadusKrajen;
use App\Models\KasiPemerintah;
use App\Models\kasiSejahtera;
use App\Models\KaurKeungan;
use App\Models\KaurUmum;
use App\Models\KepalaDesa;
use App\Models\SekreDesa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // retrive data from database
        $kades = KepalaDesa::orderBy('id', 'desc')->first();
        $sekre = SekreDesa::orderBy('id', 'desc')->first();
        $kaurUang = KaurKeungan::orderBy('id', 'desc')->first();
        $kaurUmum = KaurUmum::orderBy('id', 'desc')->first();
        $kasiPemerintah = KasiPemerintah::orderBy('id', 'desc')->first();
        $kasiSejahtera = kasiSejahtera::orderBy('id', 'desc')->first();
        $kadusKemloko = KadusKemloko::orderBy('id', 'desc')->first();
        $kadusKrajen = KadusKrajen::orderBy('id', 'desc')->first();
        $kadusGembogan = KadusGembongan::orderBy('id', 'desc')->first();
// Mendapatkan data dari database
$peta = DB::table('peta')->select('*')->get();

// Mengonversi data dari objek koleksi ke dalam array
$petaArray = $peta->toArray();

        return view("welcome",[
            "kades_name" => $kades->name,
            "photo_kades" => $kades->photo_url,

            "sekre_name" => $sekre->name,
            "photo_sekre" => $sekre->photo_url,

            "kaurUang_name" => $kaurUang->name,
            "photo_kaurUang" => $kaurUang->photo_url,
            
            "kaurUmum_name" => $kaurUmum->name,
            "photo_kaurUmum" => $kaurUmum->photo_url,

            "kasiPemerintah_name" => $kasiPemerintah->name,
            "photo_kasiPemerintah" => $kasiPemerintah->photo_url,

            "kasiSejahtera_name" => $kasiSejahtera->name,
            "photo_kasiSejahtera" => $kasiSejahtera->photo_url,

            "kadusKemloko_name" => $kadusKemloko->name,
            "photo_kadusKemloko" => $kadusKemloko->photo_url,

            "kadusKrajen_name" => $kadusKrajen->name,
            "photo_kadusKrajen" => $kadusKrajen->photo_url,

            "kadusGembongan_name" => $kadusGembogan->name,
            "photo_kadusGembongan" => $kadusGembogan->photo_url,

            "petaArray"=>$petaArray
        ]);
    }
}
