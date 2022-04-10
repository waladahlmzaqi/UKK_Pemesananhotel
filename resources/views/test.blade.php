<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $judul }}</h1>
</body>
</html>










{{-- @foreach ($kamars as $kamar)
<ul>
    <li>{{ $kamar->tp_kamar }}</li>
    <ol>
        @foreach ($kamar->fasikamar as $fasi)
        <li>{{ $fasi->nama_fasilitas }}</li>
        @endforeach
    </ol>
</ul>
@endforeach --}}


{{-- @foreach ($kamars as $kamar)
<ul>
    <li>{{ $kamar->tp_kamar }}</li>
    <ol>
        @foreach ($kamar->fasi_kamars as $phone)
        <li>{{ $phone->nama_fasilitas }}</li>
        @endforeach
    </ol>
</ul>
@endforeach --}}
