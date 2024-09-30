@extends('layouts.app')
<title>Admin | Rohmah's Tailor</title>

<style>
    .table-container {
        width: 100%;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
    }

    th,
    td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    th {
        text-align: left;
        background-color: #f8f9fa;
    }

    .card-img-top {
        width: 100px;
        height: auto;
        object-fit: cover;
        display: block;
        margin: 0 auto;
    }

    .btn-group {
        display: flex;
        justify-content: center;
    }

    .btn-primary,
    .btn-success,
    .btn-danger {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        border-radius: 0.25rem;
        margin: 0 0.25rem;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4 mt-3">
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barangs as $barang)
                    <tr>
                        <td><img src="{{ asset('images/'. $barang->gambar) }}" class="card-img-top rounded" alt=""></td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>Rp. {{ number_format($barang->harga) }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ $barang->id_kategoris }}</td>
                        <td>{{ $barang->keterangan }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('edit_barang', $barang->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('barang.delete', $barang->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection