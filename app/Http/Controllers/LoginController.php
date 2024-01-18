<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $validatedData = $request->validate([
            "email" => 'required',
            'password' => 'required'
        ]);

        $validator = Validator::make($request->all(),[
            "email" => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()){
            alert()->error('Field Kosong','semua field form harus terisi');
            return back();
        };

        if(Auth::attempt($validatedData)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        alert()->error('login gagal','password salah');
        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}
