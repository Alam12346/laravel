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

Route::get('/', function () {
    return view('welcome');
});
Route::get('tentang', function () {
    return "<h1> hello </h1>"
        . "selamat datang di webapp saya<br>"
        . "laravel emang keren";
});
//php artisan serve

//akses localhost:host:8000/tentang

Route::get('saya', function () {
    $mamat = "mamat abdullah";
    return view('profile', compact('mamat'));

});

Route::get('selvi', function () {
    $nama = "selvi puspita dewi";
    $umur = "17";
    $agama = "islam";
    $alamat = "kampung suka mukti rt/tw 03/01";
    return view('selvi', compact('nama', 'umur', 'agama', 'alamat'));

});
Route::get('syukur', function () {
    $nama = "syukur sidiq nur alam";
    $umur = "17";
    $agama = "islam";
    $alamat = "nataendah blok i 88";
    return view('syukur', compact('nama', 'umur', 'agama', 'alamat'));

});
Route::get('suci', function () {
    $nama = "suci apriani";
    $umur = "17";
    $agama = "islam";
    $alamat = "cilebak";
    return view('suci', compact('nama', 'umur', 'agama', 'alamat'));

});

Route::get('rizky', function () {
    $nama = "rizky nur rahman";
    $umur = "17";
    $agama = "islam";
    $alamat = "citepus wetan";
    return view('rizky', compact('nama', 'umur', 'agama', 'alamat'));

});
Route::get('riski', function () {
    $nama = "rizky say afif";
    $umur = "17";
    $agama = "islam";
    $alamat = "bmi";
    return view('riski', compact('nama', 'umur', 'agama', 'alamat'));

});
route::get('posting/{nama}/{alamat}/{tgllahir}/{tb}/{bb}', function ($a, $b, $c, $d, $e) {
    return view("biodssata", compact('a', 'b', 'c', 'd', 'e'));
});
