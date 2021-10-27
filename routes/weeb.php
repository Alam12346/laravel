
route::get('post/{nama?}/{alamat?}/{tgllahir?}/{tb?}/{bb?}', function ($nama = null, $alamat = null, $tgllahir = null, $tb = null, $bb = null) {
    return view("biodata", compact('nama', 'alamat', 'tgllahir', 'tb', 'bb'));
});
