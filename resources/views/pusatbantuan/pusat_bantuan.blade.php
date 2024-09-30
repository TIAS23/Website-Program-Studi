<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan - Rohmah's Tailor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .faq-item {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <header class="bg-dark text-white py-3">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo d-flex align-items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="50">
                <span class="ml-2 h4 mb-0">Rohmah's Tailor</span>
            </div>
            <nav class="nav">
                <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                <a class="nav-link text-white" href="{{ url('/kontak') }}">Kontak</a>
                <a class="nav-link text-white" href="{{ url('/kategori') }}">Shop</a>
                <a class="nav-link text-white" href="{{ url('/pusatbantuan') }}">Pusat Bantuan</a>
            </nav>

        </div>
    </header>

    <main class="container my-5">
        <section class="mb-5">
            <h2 class="mb-4 text-center">Pusat Bantuan</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="mb-3">Informasi Umum</h4>
                    <p>Selamat datang di Pusat Bantuan Rohmah's Tailor. Di sini Anda akan menemukan jawaban untuk pertanyaan yang sering diajukan dan informasi lain yang berguna tentang layanan kami.</p>

                    <h4 class="mb-3">Pertanyaan yang Sering Diajukan (FAQ)</h4>
                    <div id="faqAccordion">
                        <div class="faq-item">
                            <h5>
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    Bagaimana cara memesan produk?
                                </button>
                            </h5>
                            <div id="faq1" class="collapse" data-parent="#faqAccordion">
                                <p>Anda bisa memesan produk melalui halaman Shop kami. Pilih produk yang diinginkan, klik tombol "Pesan via WhatsApp", dan Anda akan diarahkan ke WhatsApp untuk melanjutkan pemesanan.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h5>
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    Apa saja metode pembayaran yang diterima?
                                </button>
                            </h5>
                            <div id="faq2" class="collapse" data-parent="#faqAccordion">
                                <p>Kami menerima pembayaran melalui transfer bank dan pembayaran melalui aplikasi dompet digital seperti OVO, GoPay, dan Dana.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <h5>
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    Berapa lama waktu pengerjaan produk?
                                </button>
                            </h5>
                            <div id="faq3" class="collapse" data-parent="#faqAccordion">
                                <p>Waktu pengerjaan produk tergantung pada jenis dan jumlah pesanan. Secara umum, pengerjaan memakan waktu antara 3-7 hari kerja.</p>
                            </div>
                        </div>
                        <!-- Tambahkan FAQ lainnya sesuai kebutuhan -->
                    </div>

                    <h4 class="mb-3">Formulir Kontak</h4>
                    <form id="kontakForm">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Rohmah's Tailor. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('kontakForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var nama = document.getElementById('nama').value;
            var email = document.getElementById('email').value;
            var pesan = document.getElementById('pesan').value;
            var whatsappUrl = 'https://wa.me/6282228163135?text=' +
                encodeURIComponent('Nama: ' + nama + '\nEmail: ' + email + '\nPesan: ' + pesan);
            window.open(whatsappUrl, '_blank');
        });
    </script>

</body>

</html>