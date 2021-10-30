<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    route::get('bodata',function () {
        $nama ="mamat abdullah";
        $alamat ="bojong yellow";
        $tgllahir = "15 agustus 2000";
        $tb =170;
        $bb =75;
        return view('biodata', compact('nama','alamat','tgllahir','tb','bb'));
    });
    route::get('posting/{id}',function($a) {
        return "halaman postng ke - <b> $a </b>";
    })
</body>
</html>
