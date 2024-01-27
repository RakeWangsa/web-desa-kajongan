<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetaController extends Controller
{
    public function index()
    {
        $peta = DB::table('peta')
        ->select('*')
        ->get();
        dd($peta);
    }
}
