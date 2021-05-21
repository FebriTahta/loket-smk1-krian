<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\LoketController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\DisplaySiswaController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'CheckRole:loket,loket2']], function () {
//user
Route::get('/displayUser',[UserController::class,'index'])->name('display.user');
Route::get('/getUser', [UserController::class, 'getUser'])->name('get.user');
Route::post('/saveUser',[UserController::class, 'saveUser'])->name('save.user');
Route::post('/deleteUser',[UserController::class, 'delete'])->name('del.user');
Route::post('/updateUser',[UserController::class, 'update'])->name('update.user');
//print
Route::get('/displayPrint', [PrintController::class, 'index'])->name('display.print');
Route::post('/displayPrint/input', [PrintController::class, 'input1'])->name('print.1');
Route::post('/displayPrint/input2', [PrintController::class, 'input2'])->name('print.2');
//admin loket
Route::get('/displayLoket',[LoketController::class, 'index'])->name('display.loket');
Route::get('/displayHistory', [LoketController::class, 'gethistory'])->name('history');
Route::get('/displayHistory2', [LoketController::class, 'gethistory2'])->name('history2');
Route::get('/daftarAntrian1', [LoketController::class, 'daftarloket1'])->name('display.daftarloket1');
Route::get('/daftarAntrian2', [LoketController::class, 'daftarloket2'])->name('display.daftarloket2');
Route::post('/kelolaantrian1',[LoketController::class, 'updateloket1'])->name('update.antrian1');
Route::post('/kelolaantrian2',[LoketController::class, 'updateloket2'])->name('update.antrian2');
Route::post('/kelolaantrian3',[LoketController::class, 'updateloket3'])->name('update.antrian3');
Route::post('/kelolaantrian4',[LoketController::class, 'updateloket4'])->name('update.antrian4');
Route::post('/kelolaantrian5',[LoketController::class, 'updateloket5'])->name('update.antrian5');
Route::post('/kelolaantrian6',[LoketController::class, 'updateloket6'])->name('update.antrian6');
//display siswa
Route::get('/displaySiswa',[DisplaySiswaController::class, 'index'])->name('display.siswa');
//konten
Route::get('/daftarKonten',[KontenController::class, 'index'])->name('daftar.konten');
Route::post('/postKonten',[KontenController::class, 'store'])->name('post.konten');
Route::post('/postVideo',[KontenController::class, 'store2'])->name('post.video');
Route::get('/getKonten',[KontenController::class, 'getkonten'])->name('get.konten');
Route::get('/getVideo',[KontenController::class, 'getvideo'])->name('get.video');
Route::post('/dellKonten',[KontenController::class, 'hapus'])->name('dell.konten');
});