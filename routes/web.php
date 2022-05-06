<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\ProfilController;

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
    return view('landingpage',[
       'title' => 'Landing Page',
       'active' => 'Landing Page'
    ]);
});

Route::get('/bio', function () {
    return view('bio',[
       'title' => 'Tentang Kami',
       'active' => 'Tentang Kami'
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
       'title' => 'Kontak',
       'active' => 'Kontak'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.home')->middleware('admin');
Route::get('/dashuser', [HomeController::class, 'index'])->name('dashuser')->middleware('pembeli');

Route::get('/dashboard', function(){
    return view(('dashboard.layout.main'));
})->middleware('auth');

Route::get('/profil', function(){
    return view(('profil.index'));
})->middleware('auth');


Route::get('/ubahprofil', function(){
    return view(('dashuser.ubahprofil.index'));
})->middleware('auth');

Route::resource('/puser', ProfilController::class)->middleware('auth');

Route::get('/dashuser', function(){
    return view(('dashuser.index'));
})->middleware('auth');

Route::resource('/dashboard/produk', DashboardProdukController::class)->middleware('auth');

