<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages_Controller;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Data_Pakaian_Controller;
use App\Http\Controllers\Kategori_Pakaian_Controller;

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


Route::redirect('/', '/login');

Route::get('/login', [Pages_Controller::class, 'loginPage'])->name('login');

Route::post('/login', [User_Controller::class, 'login'])->name('user.login');

Route::get('/register', [Pages_Controller::class, 'registerPage'])->name('register');

Route::post('/register', [User_Controller::class, 'register'])->name('register');

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin_home', function () {
    return view('web.admin.admin');
})->name('admin_home');

Route::get('/pengguna_home', function () {
    return view('web.view.home');
})->name('pengguna_home');

Route::get('/profil', function () {
    return view('web.view.profil');
});

Route::get('/data_pakaian', function () {
    return view('web.admin.data_pakaian');
});
Route::get('/data_pakaian', [Pages_Controller::class, 'data_pakaianPage'])->name('data_pakaian');

Route::get('/create_pakaian', [Data_Pakaian_Controller::class, 'createData_Pakaian'])->name('create_data_pakaian');

Route::post('/create_pakaian', [Data_Pakaian_Controller::class, 'create'])->name('action.create_data_pakaian');

Route::get('/kategori_pakaian', [Pages_Controller::class, 'kategori_pakaianPage'])->name('kategori_pakaian');

Route::get('/create_kategori_pakaian', [Kategori_Pakaian_Controller::class, 'createKategori_Pakaian'])->name('create_kategori_pakaian');

Route::post('/create_kategori_pakaian', [Kategori_Pakaian_Controller::class, 'create'])->name('action.create_kategori_pakaian');

Route::get('/kategori_pakaian{kategori_pakaian_id}', [Kategori_Pakaian_Controller::class, 'updateKategori_Pakaian'])->name('update_kategori_pakaian');

Route::post('/update_kategori_pakaian', [Kategori_Pakaian_Controller::class, 'update'])->name('action.kategori_pakaian');

Route::patch('/kategori_pakaian/{kategori_pakaian_id}', [Kategori_Pakaian_Controller::class, 'update'])->name('kategori_pakaian.update');

Route::delete('/kategori_pakaian/{kategori_pakaian_id}', [Kategori_Pakaian_Controller::class, 'delete'])->name('kategori_pakaian.delete');