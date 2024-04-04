<?php

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\KategoriController;
// use App\Http\Controllers\LevelController;
// use App\Http\Controllers\PenjualanController;
// use App\Http\Controllers\POSController;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\WelcomeController;
// use App\Models\User;
// use Illuminate\Support\Facades\Route;



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

// Route::get('/', [HomeController::class, 'index']); 

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::prefix('/category')->group(function () {
//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
//     Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
//     Route::get('/home-care', [ProductController::class, 'homeCare'])->name('home-care');
//     Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
// });

// // Route::get('/user/{id}/name/{name}',[UserController::class,'index']);

// Route::get('/penjualan', [PenjualanController::class, 'index']);



// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);

// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('/user/tambah');
// Route::get('/user/ubah{id}', [UserController::class, 'ubah'])->name('/user/ubah');
// Route::get('/user/hapus{id}', [UserController::class, 'hapus'])->name('/user/hapus');

// Route::get('/user', [UserController::class, 'index'])->name('/user');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('/user/tambah_simpan');
// Route::put('/user/ubah_simpan{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');


// Route::get('/kategori', [KategoriController::class, 'index']);

// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);

// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
// Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');

// Route::get('/formuser', function () {
//     return view('formuser');
// });

// Route::get('/formlevel', function () {
//     return view('formlevel');
// });

// Route::resource('m_user', POSController::class);



// Route::group(['prefix' => 'user'], function () {
//     Route::get('/', [UserController::class, 'index']);          //menampilkan halaman awal user
//     Route::post('/list',[UserController::class,'list']);        //menampilkan data user dalam bentuk json untuk datatables
//     Route::get('/create',[UserController::class,'create']);     //menampilkan halaman form tambah user
//     Route::post('/',[UserController::class,'store']);           //menyimpan data user baru
//     Route::get('/{id}',[UserController::class,'show']);         //menampilkan detail user
//     Route::get('/{id}/edit',[UserController::class,'edit']);    //menampilkan halaman form edit user
//     Route::put('/{id}',[UserController::class,'update']);       //menyimpan perubahan data user
//     Route::delete('/{id}',[UserController::class,'destroy']);   //menghapus data user
// });

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'index']);


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
Route::get('/', [WelcomeController::class, 'index']);
Route::group(['prefix' => "user"], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::resource('level', LevelController::class);
Route::post('/level/list', [LevelController::class, 'list']);

Route::resource('/kategori', KategoriController::class);
Route::post('/kategori/list', [KategoriController::class, 'list']);

Route::resource('/barang', BarangController::class);
Route::post('/barang/list', [BarangController::class, 'list']);

Route::resource('/stok', StokController::class);
Route::post('/stok/list', [StokController::class, 'list']);

Route::resource('/transaksi', TransaksiController::class);
Route::post('/transaksi/list', [TransaksiController::class, 'list']);

// API
Route::get('/api/barang/{id}/get', [BarangController::class, 'get']);





