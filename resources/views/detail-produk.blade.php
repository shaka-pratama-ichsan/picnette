@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/detail-produk.css') }}" />
    <title>picnette</title>
</head>
<body>
    <div class="container-header">
        <div class="row">
            <div class="col">
                <img src="{{URL::asset('/image/detail-produk.png')}}" alt="">
            </div>

            <div class="col">
                <h1>Deskripsi Paket Foto</h1>
                <p>Harga</p>
                <h3>Rp. ?.?00.000</h3><hr>
                <p>Yang Termasuk Kedalam Paket</p>
                <p>> 4 x Shoot <br>
                    > 4 File Picnette Cloud <br>

                    > Setiap orang mendapatkan : <br>
                    1 Cetak ukuran 12RP + Blok (15x30cm) <br>

                    > Harga tertera adalah harga per orang <br>
                    > Berlaku mulai 5 orang <br>
                    > Paket tidak berlaku untuk photo keluarga</p>
                <a href="{{ url('/booking') }}"><button type="submit" class="btn1 btn-primary">Book Now</button></a>
            </div>
        </div>

        <hr>
        <p>Ketentuan Produk Ini</p>
        <p>> Menggunakan satu kostum (dari   konsumen) <br>
            > Biaya penambahan orang Rp 100.000/orang <br>
            >Tidak tersedia opsi penambahan shoot</p>
    </div>
</body>
</html>
@include('layouts.footer')
@endsection