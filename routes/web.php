<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route :: get('/home', [HomeController::class, 'index'])->name('home');

Route :: get('/informasi', [PegawaiController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('checkislogin');


Route::resource('pelanggan', PelangganController::class);

Route::resource('user', UserController::class);

// Profile Routes
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/multipleuploads', 'MultipleuploadsController@index')->name('uploads');
Route::post('/save','MultipleuploadsController@store')->name('uploads.store');

//login
Route::get('login',[AuthController::class, 'index'])->name('login.index');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');

//middleware
Route::group(['middleware' => ['checkrole:Admin']], function () {
    Route::get('user',[UserController::class,'index'])->name('user.index');
});
