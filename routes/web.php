<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratpengajuanController;
use App\Http\Controllers\DatapendudukController;
use App\Http\Controllers\AgendaController;
use App\Models\datapenduduk;
use App\Models\Agenda;
use Dompdf\Dompdf;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UpdateprofilController;
use App\Http\Controllers\DatapenggunaController;
use App\Http\Controllers\DataPengajuanController;
use App\Http\Controllers\DataKeuanganController;



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


//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Add the route for totalagenda
Route::get('/totalagenda', [DashboardController::class, 'totalagenda'])
    ->middleware(['auth', 'verified'])
    ->name('totalagenda');

// Add the route for totalsuratpengajuan
Route::get('/totalsuratpengajuan', [DashboardController::class, 'totalsuratpengajuan'])
    ->middleware(['auth', 'verified'])
    ->name('totalsuratpengajuan');

// Add the route for totaldatapenduduk
Route::get('/totaldatapenduduk', [DashboardController::class, 'totaldatapenduduk'])
    ->middleware(['auth', 'verified'])
    ->name('totaldatapenduduk');

   

    

Route::get('/janjitemu', function () {
    return view('janjitemu');
})->middleware(['auth', 'verified'])->name('janjitemu');

Route::get('/datapenduduk',[DatapendudukController::class,'index'])->middleware(['auth','verified'])->name('datapenduduk');

Route::get('/tampilkandata/{id}',[DatapendudukController::class,'tampilkandata'])->middleware(['auth','verified'])->name('tampilkandata');

Route::post('/updatedata/{id}',[DatapendudukController::class,'updatedata'])->middleware(['auth','verified'])->name('updatedata');

Route::get('/delete/{id}',[DatapendudukController::class,'delete'])->middleware(['auth','verified'])->name('delete');

Route::get('/exportpdf',[DatapendudukController::class,'exportpdf'])->middleware(['auth','verified'])->name('exportpdf');

Route::get('/pengaturanagenda',[AgendaController::Class,'index'])->middleware(['auth', 'verified'])->name('agenda');

Route::get('/',[AgendaController::Class,'index2'])->name('welcome');

Route::get('/tambahagenda',[AgendaController::Class,'tambahagenda'])->middleware(['auth', 'verified'])->name('tambahagenda');

Route::post('/insertagenda',[AgendaController::Class,'insertagenda'])->middleware(['auth', 'verified'])->name('insertagenda');

Route::get('/tampilkanagenda/{id}',[AgendaController::class,'tampilkanagenda'])->middleware(['auth','verified'])->name('tampilkanagenda');

Route::post('/updateagenda/{id}',[AgendaController::class,'updateagenda'])->middleware(['auth','verified'])->name('updateagenda');

Route::get('/deleteagenda/{id}',[AgendaController::class,'deleteagenda'])->middleware(['auth','verified'])->name('deleteagenda');


Route::get('/datapengguna', [ProfileController::class, 'index'])->middleware(['auth','verified'])->name('datapengguna');

Route::delete('/deletepengguna/{id}', [ProfileController::class, 'hapuspengguna'])->name('profile.hapuspengguna');

Route::get('/tambahdata',[DatapendudukController::class,'tambahdata'])->middleware(['auth','verified'])->name('tambahdata');

Route::post('/masukdata',[DatapendudukController::class,'masukdata'])->middleware(['auth','verified'])->name('masukdata');

Route::get('datapenduduk/{groupId}', 'DatapendudukController@datapenduduk');

Route::get('/datapengajuan',[DataPengajuanController::class,'index'])->middleware(['auth','verified'])->name('datapengajuan');

Route::get('/tampilkansuratpengajuan/{id}',[DataPengajuanController::class,'tampilkansuratpengajuan'])->middleware(['auth','verified'])->name('tampilkansuratpengajuan');

Route::get('/datakeuangan',[DataKeuanganController::class,'index'])->middleware(['auth','verified'])->name('datakeuangan');

Route::get('/tambahdatakeuangan',[DataKeuanganController::class,'tambahdatakeuangan'])->middleware(['auth','verified'])->name('tambahdatakeuangan');

Route::post('/masukdatakeuangan',[DataKeuanganController::class,'masukdatakeuangan'])->middleware(['auth','verified'])->name('masukdatakeuangan');

Route::get('/delete-all-data', [DataKeuanganController::class, 'deleteAllData'])->middleware(['auth','verified'])->name('deleteAllData');




Route::get('/pengajuan', [SuratpengajuanController::class,'pengajuan'] 
)->middleware(['auth', 'verified'])->name('pengajuan');









Route::get('/bantuan', function () {
    return view('bantuan');
})->middleware(['auth', 'verified'])->name('bantuan');






Route::get('/suratpengajuans',[SuratpengajuanController::class,'index'])->name('suratpengajuan');

Route::get('/pengajuanlanjut',[SuratpengajuanController::class,'index'])->name('pengajuanlanjut');

Route::post('/insertdata',[SuratpengajuanController::class,'insertdata'])->name('insertdata');




Route::get('/pengajuan',[SuratpengajuanController::class,'pengajuan'])->name('pengajuan');

Route::get('/status',[SuratpengajuanController::class,'status'])->name('status');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [UpdateprofilController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::middleware(['auth', 'user-role:admin'])->group (function ()
{
Route::get("/admin", [HomeController::class, 'adminHome'])->name('admin');
});

require __DIR__ . '/auth.php';

// reference the Dompdf namespace


