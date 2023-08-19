<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return '<h1>Hello ini laravel saya</h1>';
});

Route::get('tampilan/{nilai}', function ($nilai) {
    return 'Nilai saya adalah : ' . $nilai;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah ' . $nilai1 + $nilai2;
});

Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pengurangan adalah ' . $nilai1 - $nilai2;
});

Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil perkalian adalah ' . $nilai1 * $nilai2;
});

Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pembagian adalah ' . $nilai1 / $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    $data = ['meja', 'lampu', 'kursi', 'monitor', 'pc', 'kalender', 'bangku', 'foto'];
    return view('tabel', compact('data'));
});


Route::get('tabeld', function () {
    $data = [
        [
            'nama' => 'ffebriansyah1',
            'jk' => 'L'
        ],
        [
            'nama' => 'ffebriansyah2',
            'jk' => 'L'
        ],
        [
            'nama' => 'ffebriansyah3',
            'jk' => 'L'
        ],
    ];

    return view('tabeld', compact('data'));
});

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);
Route::resource('upload', UploadController::class);

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahdata', [SiswaController::class, 'create']);

// Route::get('UploadControllerfunction ($id) {
// });
// Route::post('users/{id}', function ($id) {
// });
// Route::put('users/{id}', function ($id) {
// });
// Route::delete('users/{id}', function ($id) {
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
