<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalMataKuliahController;
 
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('/jadwalmatakuliah', JadwalMataKuliahController::class);
