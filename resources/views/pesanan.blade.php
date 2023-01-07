@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/pesanan.css') }}" />
    <title>Document</title>
</head>
<body>
    <div class="container-body">
        <div class="row">
            <div class="col">
                <img src="{{URL::asset('/image/bg2.png')}}" alt="">
            </div>
            <div class="col-6">
                <h1>Paket Studio TotheGenkz</h1>
                <p>1 Produk x Rp. 1.500.000</p>
            </div>
            <div class="col">
                <p>Total Harga</p>
                <h4>Rp. 1.501.500</h4>
            </div>

            <div class="col-9">
                <a href="">Lihat Detail Transaksi</a>
            </div>
            <div class="col-2">
                <a href=""><button type="submit" class="btn1 btn-primary">Beri Ulasan</button></a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection