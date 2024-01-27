<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelSettings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PerangkatController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);

Route::get('/admin', [LoginController::class, 'index'])->name("admin");
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/perangkat-data/{pangkat}', [PerangkatController::class, 'postPerangkat'])->middleware('auth');
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'readArticle']);
Route::post("/logout",[LoginController::class, 'logout'])->middleware('auth');

// CRUD ARTIKEL
Route::post("/deleteArtikel/{id}",[ArtikelSettings::class, 'deleteArticle'])->middleware('auth');
Route::post("/addartikels",[ArtikelSettings::class, 'postArticle'])->middleware('auth');
Route::get("/addartikel",[ArtikelSettings::class, 'addArtikel'])->middleware('auth');
Route::get("/olahartikel",[ArtikelSettings::class, 'olahArtikel'])->middleware('auth');
Route::get("/kelolapeta",[ArtikelSettings::class, 'kelolaPeta'])->middleware('auth');
Route::get("/showEditArt/{id}",[ArtikelSettings::class, 'showEditArt'])->middleware('auth');
Route::put("/editArtikel/{id}",[ArtikelSettings::class, 'editArtikel'])->middleware('auth');

Route::get("/help",function(){
    return view("help");
})->middleware('auth');