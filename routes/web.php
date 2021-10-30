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
    return view("biodata", compact('a', 'b', 'c', 'd', 'e'));
});

route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});
//mencari data berdasarkan field 'title' yang sama dengan
// parameter 's'
route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', "%$s%")->get();
    return $query;
});
//mengubah judul dari data ke 2 berdasarkan 'id'
route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "bane si bajak laut";
    $query->save();
    return $query;
});
route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "sholawat penghapus maksiat";
    $query->content = "lorem ipsum sit amet dolor";
    $query->save();
    return $query;
});

route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete;
    return redirect('/testmodel');

});

Route::get('barang', function () {
    $query = App\Models\barang::all();
    return $query;
});
