<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Keranjang;

 
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for  your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
Route::get('/', \App\Http\Livewire\Home::class);
Route::get('/Navbar', \App\Http\Livewire\Navbar::class);
Route::get('/DaftarDriver', \App\Http\Livewire\DaftarDriver::class);
Route::get('/DaftarKendaraan', \App\Http\Livewire\DaftarKendaraan::class);
Route::get('/DaftarPesanan', \App\Http\Livewire\DaftarPesanan::class);
Route::get('/TambahDriver', \App\Http\Livewire\TambahDriver::class);
Route::get('/TambahKendaraan', \App\Http\Livewire\TambahKendaraan::class);
Route::get('/TambahPesanan', \App\Http\Livewire\TambahPesanan::class);
Route::get('/Persetujuan', \App\Http\Livewire\Persetujuan::class);
