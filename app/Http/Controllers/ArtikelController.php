<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        $all_artikel = artikel::paginate(6);

        return view("artikel",[
            "all_article" => $all_artikel
        ]);
    }

    public function readArticle($id){
        $artikel_data = artikel::where("id",$id)->first()->toArray();
        return view("read",[
            "artikel_data" => $artikel_data,
            "id" => $id
        ]);
    }
}
