<?php

use App\Http\Controllers\Controller;
//TODO --- ADMIN SECTION ---
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_Auth_Controller;
use App\Http\Controllers\Admin_Balita_Controller;
use App\Http\Controllers\Admin_Petugas_Controller;
use App\Http\Controllers\Admin_Orangtua_Controller;
use App\Http\Controllers\Admin_Dashboard_Controller;
use App\Http\Controllers\Admin_Imunisasi_Controller;
use App\Http\Controllers\Admin_Vitamin_Controller;
use App\Http\Controllers\Admin_Penimbangan_Controller;
use App\Http\Controllers\Admin_Riwayat_Controller;
use App\Http\Controllers\Orangtua_Dashboard_Controller;
//TODO --- USER SECTION ---
use App\Http\Controllers\User_Auth_Controller;
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

// ? USER SECTION
Route::controller(User_Auth_Controller::class)->group(function () {
     Route::get('session_users', 'index');

     Route::post('session_users/login', 'login');
});

Route::controller(Orangtua_Dashboard_Controller::class)->group(function () {
     Route::get('/', 'index');

     // ! JANGAN LUPA MIDDLEWARE
     Route::get('/balita/{id}', 'getBalitaOrtu')->name('getBalita_orangtua')->middleware('middleware_admin');

     Route::get('/balita/imun/{id}', 'getBalitaImun')->name('getBalitaImun')->middleware('middleware_admin');
});


// ? ADMIN SECTION
// !LOGIN ADMIN
Route::controller(Admin_Auth_Controller::class)->group(function () {
     Route::get('session_admin', 'index')->middleware('middleware_sudah_login');

     Route::post('session_admin/login', 'login')->middleware('middleware_sudah_login');

     Route::get('session_admin/logout', 'logout');

     // ! REGISTER
     Route::get('session_admin/registrasi', 'register')->middleware('middleware_sudah_login');

     Route::post('session_admin/create', 'create')->middleware('middleware_sudah_login');
});

// !DASHBOARD
Route::get('admin/dashboard', [Admin_Dashboard_Controller::class, 'halaman_main'])->middleware('middleware_admin');


// !BALITA
Route::get('admin/balita/add_data_balita', [Admin_Balita_Controller::class, 'create'])->middleware('middleware_admin');

Route::resource('admin/balita', Admin_Balita_Controller::class)->middleware('middleware_admin');


// ! ORANG TUA
Route::get('admin/orangtua/add_data_orangtua', [Admin_Orangtua_Controller::class, 'create'])->middleware('middleware_admin');

Route::resource('admin/orangtua', Admin_Orangtua_Controller::class)->middleware('middleware_admin');


// ! PETUGAS
Route::get('admin/petugas/add_data_petugas', [Admin_Petugas_Controller::class, 'create'])->middleware('middleware_admin');

Route::resource('admin/petugas', Admin_Petugas_Controller::class)->middleware('middleware_admin');


// ! PENIMBANGAN ANAK
Route::controller(Admin_Penimbangan_Controller::class)->group(function () {
     Route::get('admin/penimbangan_anak/{id}', 'getBalita')->name('getBalita_timbang')->middleware('middleware_admin');

     Route::post('admin/penimbangan_anak/store', 'storePenimbangan')->middleware('middleware_admin');
});

Route::resource('admin/penimbangan_anak', Admin_Penimbangan_Controller::class)->middleware('middleware_admin');


// ! IMUNISASI
Route::controller(Admin_Imunisasi_Controller::class)->group(function () {
     Route::get('admin/imunisasi_anak/balita/{id}', 'getBalita')->name('getBalita_imunisasi')->middleware('middleware_admin');

     Route::post('admin/imunisasi_anak/store', 'storeImunisasi')->middleware('middleware_admin');
});

Route::resource('admin/imunisasi_anak', Admin_Imunisasi_Controller::class)->middleware('middleware_admin');


// ! VITAMIN
Route::controller(Admin_Vitamin_Controller::class)->group(function () {
     Route::get('admin/vitamin_anak/balita/{id}', 'getBalita')->name('getBalita_vitamin')->middleware('middleware_admin');

     Route::post('admin/vitamin_anak/store', 'storeVitamin')->middleware('middleware_admin');
});

Route::resource('admin/vitamin_anak', Admin_Vitamin_Controller::class)->middleware('middleware_admin');


// !REKAP DATA
Route::resource('admin/rekap_riwayat_balita', Admin_Riwayat_Controller::class)->middleware('middleware_admin');

Route::get('admin/rekap_riwayat_balita/detail/{id_balita}', [Admin_Riwayat_Controller::class, 'show'])->middleware('middleware_admin');
