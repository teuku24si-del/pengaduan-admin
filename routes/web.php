<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{hasbi}', function ($hasbi) {
    return 'Nama saya: ' . $hasbi;
});

Route ::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route :: get('/matakuliah/{param1}', [MatakuliahController::class, 'show']);

Route :: get('/home', [HomeController::class, 'index']);

Route :: get('/informasi', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
