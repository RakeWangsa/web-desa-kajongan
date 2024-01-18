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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerangkatController extends Controller
{

    public function postPerangkat(Request $request, $pangkat){
        $validatedData = $request->all();
        $validator = Validator::make($request->all(),[
            "name" => "required",
            "photo_url" => "required",
        ]);

        if($validator->fails()){
            alert()->error('Field Kosong','semua field form harus terisi');
            return back();
        };

        $img = $request->file('photo_url');
        if($pangkat == "kepala"){
            $id = KepalaDesa::max('id') + 1;
            $name = 'kepala-desa-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KepalaDesa::create($validatedData);
        }else if($pangkat == "sekre"){
            $id = SekreDesa::max('id') + 1;
            $name = 'sekre-desa-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            SekreDesa::create($validatedData);
        }else if($pangkat == "kaurUang"){
            $id = KaurKeungan::max('id') + 1;
            $name = 'kaur-uang-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KaurKeungan::create($validatedData);
        }else if($pangkat == "kaurUmum"){
            $id = KaurUmum::max('id') + 1;
            $name = 'kaur-umum-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KaurUmum::create($validatedData);
        }else if($pangkat == "kasiPemerintah"){
            $id = KasiPemerintah::max('id') + 1;
            $name = 'kasi-pemerintah-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KasiPemerintah::create($validatedData);
        }else if($pangkat == "kasiSejahtera"){
            $id = kasiSejahtera::max('id') + 1;
            $name = 'kasi-sejahtera-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            kasiSejahtera::create($validatedData);
        }else if($pangkat == "kadusKemloko"){
            $id = KadusKemloko::max('id') + 1;
            $name = 'kadus-kemloko-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KadusKemloko::create($validatedData);
        }else if($pangkat == "kadusKrajen"){
            $id = KadusKrajen::max('id') + 1;
            $name = 'kadus-krajen-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KadusKrajen::create($validatedData);
        }else if($pangkat == "kadusGembongan"){
            $id = KadusGembongan::max('id') + 1;
            $name = 'kadus-gembongan-'.$id.'.'.$img->extension();
            $img->move(public_path('assets/perangkat'),$name);
            $validatedData['photo_url'] = $name;
            KadusGembongan::create($validatedData);
        }

        alert()->success('Berhasil Diubah','Data berhasil di ubah.');
        return back();
    }

}
