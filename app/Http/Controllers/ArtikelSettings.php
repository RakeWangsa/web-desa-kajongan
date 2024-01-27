<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\Peta;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ArtikelSettings extends Controller
{
    public function addArtikel(){
        return view("addartikel");
    }

    public function postArticle(Request $request){
        // return dd($request->all());
        $validatedData = $request->all();
        $validator = Validator::make($request->all(),[
            "title" => "required",
            "author" => "required",
            "thumbnail" => "required",
            "article-trixFields" => "required",
        ]);

        if($validator->fails()){
            alert()->error('Field Kosong','semua field form harus terisi');
            return back();
        };

        $img = $request->file('thumbnail');
        $id = artikel::max('id') + 1;
        $name = "artikel-img-".$id.".".$img->extension();
        $img->move(public_path('assets/artikelImage'),$name);
        artikel::create([
            "author" => request("author"),
            "title" => request("title"),
            "thumbnail" => $name,
            "article" => json_encode(request("article-trixFields")['contents'])
        ]);

        alert()->success('Berhasil Ditambahkakn','Artikel Berhasil ditambahkan');
        return back();
    }

    public function olahArtikel(){
        $allData = artikel::paginate(10);
        return view("olahArtikel",[
            "allData" => $allData
        ]);
    }

    public function deleteArticle($id){
        artikel::where('id', $id)->delete();
        alert()->success('Berhasil Dihapus','Artikel Berhasil dihapus');
        return back();
    }

    public function showEditArt($id){
        $all_artikel = artikel::where('id',$id)->first();
        return view("editArtikel",[
            "all_artikel" => $all_artikel
        ]);
    }

    public function editArtikel(Request $request,$id){
        // return dd($request->all());
        $artikel = artikel::where('id',$id)->first();
        $input_data = $request->all();
        $artikel["author"] = $input_data["author"];
        $artikel["title"] = $input_data["title"];
        $artikel["article"] = $input_data["content"];

        $artikel->save();
        alert()->success('Berhasil diedit','Artikel Berhasil diedit');
        return back();
    }

    public function kelolaPeta(){
        $allData = Peta::paginate(10);
        return view("kelolaPeta",[
            "allData" => $allData
        ]);
    }

    public function editMap($id){
        $all_peta = Peta::where('id',$id)->first();
        return view("editMap",[
            "all_peta" => $all_peta
        ]);
    }
    
    public function editMapSubmit(Request $request,$id){
        // return dd($request->all());
        $artikel = Peta::where('id',$id)->first();
        $input_data = $request->all();
        $artikel["nama"] = $input_data["nama"];
        $artikel["koordinat"] = $input_data["koordinat"];

        $artikel->save();
        alert()->success('Berhasil diedit','Peta Berhasil diedit');
        return redirect('/kelolapeta');
    }

    public function deleteMap($id){
        Peta::where('id', $id)->delete();
        alert()->success('Berhasil Dihapus','Peta Berhasil dihapus');
        return redirect('/kelolapeta');
    }

    public function addMap(Request $request){
        Peta::create([
            'nama' => $request->nama,
            'koordinat' => $request->koordinat,
        ]);
        alert()->success('Berhasil Ditambahkan','Peta Berhasil ditambahkan');
        return redirect('/kelolapeta');
    }
}
