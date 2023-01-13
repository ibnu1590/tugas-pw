<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/add', [HomeController::class, 'add']);
Route::post('/insert', [HomeController::class, 'insert']);
Route::get('/edit/{id}', [HomeController::class, 'edit']);
Route::post('/update/{id}', [HomeController::class, 'update']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/lap_nilai', [HomeController::class, 'lap_nilai']);
Route::get('/mhs_v', [HomeController::class, 'mahasiswa']);
//matakuliah
Route::get('/matakuliah_v', [HomeController::class, 'matakuliah']);
Route::get('/addMatakuliah', [HomeController::class, 'addMatakuliah']);
Route::post('/insertMatakuliah', [HomeController::class, 'insertMatakuliah']);
Route::get('/editMatakuliah/{id}', [HomeController::class, 'editMatakuliah']);
Route::post('/updateMatakuliah/{id}', [HomeController::class, 'updateMatakuliah']);
Route::get('/deleteMatakuliah/{id}', [HomeController::class, 'deleteMatakuliah']);
//penilaian
Route::get('/home', [HomeController::class, 'penilaian']);
Route::get('/addPenilaian', [HomeController::class, 'addPenilaian']);
Route::post('/insertPenilaian', [HomeController::class, 'insertPenilaian']);
Route::get('/editPenilaian/{id}', [HomeController::class, 'editPenilaian']);
Route::post('/updatePenilaian/{id}', [HomeController::class, 'updatePenilaian']);
Route::get('/deletePenilaian/{id}', [HomeController::class, 'deletePenilaian']);
//cetak pdf
Route::get('/lap_nilai', [HomeController::class, 'getPenilaian']);
Route::get('/cetakPDF/{id}', [HomeController::class, 'cetakPDF']);

//cetak xls
Route::get('/cetakXLS/{id}', [HomeController::class, 'cetakXLS']);
Route::get('export/', [HomeController::class, 'cetakXLS'])->name('export');

