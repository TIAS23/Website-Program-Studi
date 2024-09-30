<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.col-md-3 {
    flex: 1 1 calc(25% - 20px);
    margin-bottom: 20px;
}

.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #fff;
}

.card img {
    border-bottom: 1px solid #ddd;
    border-radius: 8px 8px 0 0;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-group {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 10px;
}

</style>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Produk Kami</h1>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/' . $product->image) }}" class="rounded img-fluid" alt="{{ $product->nama_barang }}" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama_barang }}</h5>
                        <p class="card-text">
                            <strong>Harga : Rp. {{ number_format($product->harga) }}</strong><br>
                            <strong>Stok : {{ $product->stok }}</strong><br><br>
                            <strong>Keterangan :</strong><br>
                            {{ $product->keterangan }}
                        </p>
                        <a href="https://api.whatsapp.com/send?phone=6282228163135&text=Halo, saya ingin memesan {{ $product->nama_barang }}." class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan via WhatsApp</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ url('home') }}">Login Admin</a>
    </div>
</body>
</html>
