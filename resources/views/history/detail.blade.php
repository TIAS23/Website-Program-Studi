@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row bg-warning">
        <div class="col-md-12 mt-2">
            <a href="{{ url('history') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-warning">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <h3>Sukses Check Out</h3>
                <h5>Pesanan anda sudah sukses dicheck out. Silahkan pilih metode pembayaran:</h5>

                <form method="POST" action="{{ route('history.payment', ['id' => $pesanan->id]) }}">
                    @csrf

                    <input type="hidden" name="amount" value="{{ $pesanan->kode + $pesanan->jumlah_harga }}">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pembayaran</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="form-label">Metode Pembayaran</label>
                        <select name="bank" id="bank" class="form-control" required>
                            <option value="BCA">Bank BCA</option>
                            <option value="MANDIRI">Bank Mandiri</option>
                            <option value="BRI">Bank BRI</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="transferAndRedirect()">Transfer</button>
                    <script>
                    function transferAndRedirect() {
                        // Menggunakan SweetAlert untuk menampilkan notifikasi sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses Transfer',
                            text: 'Transfer berhasil dilakukan.',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            // Mengarahkan pengguna ke halaman home.blade.php setelah notifikasi ditutup
                            window.location.href = "{{ route('home') }}";
                        });
                    }
                    </script>

                </form>
                <div class="card mt-2 mb-3">
                    <div class="card-body bg-warning">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        @if(!empty($pesanan))
                        <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ url('images') }}/{{ $pesanan_detail->barang->gambar }}" width="100"
                                            alt="...">
                                    </td>
                                    <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                    <td>{{ $pesanan_detail->jumlah }} kaos</td>
                                    <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                    <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Pajak :</strong></td>
                                    <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong>
                                    </td>
                                    <td align="right"><strong>Rp.
                                            {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
