<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if ($nama == null)
        silahkan isi biodata anda
    @elseif ($nama != null)
        nama :{{ $nama }} <br>
    @endif
    @if ($alamat != null)
        alamat :{{ $alamat }}<br>
    @endif
    @if ($tgllahir != null)
        tanggal lahir :{{ $tgllahir }}<br>
    @endif
    @if ($tb != null)
        tinggi badan :{{ $tb }}<br>
    @endif
    @if ($bb != null)
        berat badan : {{ $bb }}<br>
    @endif



</body>

</html>
