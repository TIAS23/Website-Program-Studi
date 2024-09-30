<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Rohmah's Tailor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .map-container {
            overflow: hidden;
            position: relative;
            height: 0;
            padding-bottom: 56.25%;
        }
        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
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
    <section>
        <h2 class="mb-4 text-center">Kontak Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="map-container">
                    <!-- Gunakan URL iframe peta Google Maps yang baru dengan protokol HTTPS -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0878882382085!2d111.81984678690314!3d-8.161934885226473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791fbf582c5191%3A0xa4b42670603ee8f6!2sMasjid%20BAITUL%20AB&#39;ROR!5e0!3m2!1sid!2sid!4v1625122111031!5m2!1sid!2sid" 
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <p><strong>Alamat:</strong> </p>
                <p><strong>Deskripsi:</strong> Kami berkomitmen untuk memberikan layanan penjahitan yang berkualitas dan sesuai dengan keinginan Anda. Dengan berbagai pengalaman dalam dunia penjahitan, kami siap membantu Anda menciptakan pakaian yang sesuai dengan gaya dan kebutuhan Anda. Untuk informasi lebih lanjut atau untuk membuat janji temu, Kami sangat menantikan kedatangan Anda!
</p>
                <p><strong>Hubungi kami:</strong> <a href="https://api.whatsapp.com/send?phone=6282228163135&text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20anda." target="_blank">Klik disini !</a></p>
            </div>
        </div>
    </section>
</main>

<footer class="bg-dark text-white text-center py-3 fixed-bottom">
    <p>&copy; 2024 Rohmah's Tailor. All rights reserved.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript for search functionality
    document.getElementById('searchButton').addEventListener('click', function() {
        var searchTerm = document.getElementById('searchInput').value;
        // Perform search operation based on the searchTerm
        // Example: You can use AJAX to fetch search results from the server
        console.log('Search term:', searchTerm);
    });
</script>
</body>
</html>
