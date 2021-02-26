<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ->name('home');

Route::get('/', function () {
    echo "Selamat Datang";
});

Route::get('/about',function (){
    echo " NIM : 20417230 </br> Nama : Moch Yudha Erian Saputra";
});

Route::get('/articles/1',function(){
    echo "Halaman Artikel 1";
});
