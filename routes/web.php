<?php

// use App\Http\Controllers\AuthPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\MahasiswaController; 
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
    return 'Hallo, Selamat Datang di Tutorial Laravel';
});

Route::get('/myhome', [HomeController::class, 'myHome']);
Route::get('/office', [OfficeController::class, 'office']);
Route::get('/about', [HomeController::class, 'about']); 
Route::get('/contact', [HomeController::class, 'contact']); 
// Route::get('/login', [AuthPageController::class, 'login']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', [
    MahasiswaController::class,
    'index'
]);

Route::get('/mahasiswa/{id}', [
    MahasiswaController::class,
    'show'
]);

Route::middleware(['auth', 'isAdministrator'])
    ->group(function () {
        Route::get('/admin', fn () => view('admin'));
    });

Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::get('/nilai', function () {
        return view('nilai');
    });
});


Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('mata-kuliah', MataKuliahController::class)
        ->only(['index']);
});

Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('mata-kuliah', MataKuliahController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->parameters(['mata-kuliah' => 'id']);
});

// READ: Administrator dan Dosen
Route::middleware(['auth', 'role:1,2'])->group(function () {
    Route::resource('prodi', ProdiController::class)
        ->only(['index']);
});

// CREATE, UPDATE, DELETE: Administrator saja
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('prodi', ProdiController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->parameters(['prodi' => 'id']);
});

