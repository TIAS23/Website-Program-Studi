@extends('layouts.app')
@section('content')

<body>
    <div class="row bg-warning">
        <div class="col-md-12 mt-2">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-warning">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card bg-warning mb-3">
                <div class="card-body bg-warning">
                    <div class="row">
                        <div class="col-md-5 d-flex justify-content-center align-items-center">
                            <img src="{{ url('images') }}/{{ $barang->gambar }}" class="rounded img-fluid" alt=""
                                style="width:250px">
                        </div>
                        <div class="col-md-5 mt-3 bg-warning">
                            <h2>{{ $barang->nama_barang }}</h2>
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($barang->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok </td>
                                        <td>:</td>
                                        <td>{{ number_format($barang->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $barang->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>:</td>
                                        <td>
                                            <div>
                                                <label for="size">Ukuran:</label>
                                                <select name="size" id="size">
                                                    <option value="s">S</option>
                                                    <option value="m">M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                    <option value="xxl">XXL</option>
                                                    <option value="xxxl">XXXL</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form method="post" action="{{ url('pesan') }}/{{ $barang->id }}">
                                                @csrf
                                                <input type="text" name="jumlah_pesan" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i
                                                        class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
