@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.card {
    background-color: #fff;
    border: 4px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
}

.card img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 0.25rem 0.25rem 0 0;
}

.card .card-body {
    background-color: #fff;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: red;
}

.card-text {
    margin-bottom: 1rem;
    font-size: 16px;
    color: dark;
    margin-bottom: 10px;
    line-height: 1.4;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 0.25rem;
}
</style>

</styl.card>
@section('content')
<div class="container bg-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-4 mt-3">
                <img src="{{ url('image/logo_joger.png') }}" class="rounded mx-auto d-block bg-dark" width="100" alt="">
            </div>
            @foreach($barangs as $barang)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ url('images') }}/{{ $barang->gambar }}" class="rounded img-fluid" alt=""
                        style="width:400px">
                    <div class="card-body">
                        <h5 class="card-title justify-content-center">{{ $barang->nama_barang }}</h5>
                        <p class="card-text">
                            <strong> Harga : Rp. {{ number_format($barang->harga) }}</strong>
                            <br>
                            <strong> Stok : {{ $barang->stok }} </strong>
                            <br>
                            <br>
                            <strong>Keterangan : <br>
                                {{ $barang->keterangan }}</strong> <br>
                        </p>
                        <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i
                                class="fa fa-shopping-cart"></i> Pesan</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
