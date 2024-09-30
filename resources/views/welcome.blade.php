<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi Informatika</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/prodi1.png') }}" type="image/png"> <!-- Mengatur favicon -->

    <style>
        body {
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
        }
        /* Style for the login modal */
        .modal-content {
            border-radius: 10px;
        }
        .video-container {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden; /* Hide scrollbar */
}

.video-wrapper {
    display: flex;
    overflow-x: auto; /* Enable horizontal scrolling */
    scroll-behavior: smooth; /* Smooth scrolling */
    gap: 10px; /* Space between videos */
    padding: 10px; /* Padding for better alignment */
}

.video-item {
    flex: 0 0 auto;
    width: 300px; /* Adjust width as needed */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.video-item iframe {
    width: 100%; /* Make iframe fill the container */
    height: 225px; /* Adjust height to match the aspect ratio */
}

.video-description {
    font-size: 1.2rem; /* Adjust font size */
    color: #666;
    padding: 10px;
    line-height: 1.5;
    font-weight: bold; /* Make font bold */
    font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
}

/* Style for scroll arrows */
.scroll-arrow {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 40px; /* Adjust size */
    height: 40px; /* Adjust size */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px; /* Adjust font size */
    cursor: pointer;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    transition: background-color 0.3s ease;
}

.scroll-arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.left-arrow {
    left: 10px; /* Position the left arrow */
}

.right-arrow {
    right: 10px; /* Position the right arrow */
}


        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            transition: background-color 0.3s ease;
        }

        .navbar.scrolled {
            background-color: #333;
        }

        .form-inline {
            position: relative;
        }

        .form-inline .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #aaa;
            cursor: pointer;
            background: transparent;
            border: none;
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */

        }

        .form-inline input[type="search"] {
            padding-right: 40px; /* space for the icon */
        }

        .form-inline input[type="search"]:focus {
            outline: none;
        }

        .banner {
            background: url('banner.jpg') no-repeat center center;
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
            letter-spacing: 1.5px;
        }

        .banner p {
            font-size: 20px;
            margin: 10px 0 20px;
        }

        .btn-primary {
            background-color: #f1c40f;
            border: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d4ac0d;
        }

        .full-width-image {
    position: relative;
    width: 100%;
}

.overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    z-index: 2;
    background-color: rgba(0, 0, 0, 0.5); /* Transparansi untuk teks */
    padding: 20px;
    border-radius: 10px;
}

.carousel-item {
    height: 600px;
}

.carousel-inner .carousel-item {
    position: relative;
}

        .full-width-image h2 {
    font-size: 40px;
    font-weight: bold; /* Membuat teks menjadi bold */
    font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
    letter-spacing: 2px;
    color: #fff; /* Warna teks */
    opacity: 0; /* Mulai dengan teks tidak terlihat */
    animation: fadeIn 3s forwards; /* Terapkan animasi */
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
        .full-width-image p {
            font-size: 24px;
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */

        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            background-color: #f8f9fa;
            border-top: 5px solid #f1c40f;
            padding: 20px;
        }

        .card-title {
            color: #333;
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
            margin-bottom: 15px;
        }

        .card-text {
            color: #666;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            transition: background-color 0.3s ease;
        }

        .navbar.scrolled {
            background-color: #333;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }

        .program .card-body {
            padding: 30px;
        }

        .program .card-body .btn {
            background-color: #f1c40f;
            border: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .program .card-body .btn:hover {
            background-color: #d4ac0d;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            height: 100%;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            width: 30px;
            height: 30px;
            background-color: transparent; /* Background transparan untuk panah */
            color: #6c757d; /* Warna abu-abu untuk panah */
        }

        .carousel-control-prev-icon::before {
            content: '\f053';
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
            font-weight: 900;
            color: #6c757d; /* Warna abu-abu untuk panah sebelumnya */
        }

        .carousel-control-next-icon::before {
            content: '\f054';
            font-family: 'AvenirNextLTPro-DemiCn', sans-serif; /* Apply custom font */
            font-weight: 900;
            color: #6c757d; /* Warna abu-abu untuk panah berikutnya */
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.3); /* Background transparan dengan sedikit warna pada hover */
        }

        .video-section {
            margin-bottom: 50px;
        }

        .video-section iframe {
            width: 100%;
            height: 315px;
        }

        .news-section {
            margin-bottom: 50px;
        }

        .news-item {
            margin-bottom: 30px;
        }

        .news-item img {
            max-width: 100%;
            height: auto;
        }
        
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            font-size: 24px;
            text-decoration: none;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .whatsapp-icon:hover {
            background-color: #128C7E;
        }
        .navbar-brand img {
            max-height: 50px;
            margin-right: 20px; /* Adjust the value as needed */

        }
        .navbar-nav .nav-link {
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            margin-right: 20px; /* Jarak antara form pencarian dan tombol login */

        }
        .navbar-toggler {
            border: none;
            margin-right: 20px; /* Jarak antara form pencarian dan tombol login */
        }
        .navbar-nav .nav-item:first-child {
    margin-left: 80px; /* Jarak khusus untuk item pertama */
}
        .search-icon {
            background: transparent;
            border: none;
            color: #fff;
        }
        .search-icon i {
            font-size: 1.2rem;
        }
        .btn-login {
            border-radius: 20px;
        }
        .hero {
            background: url('hero-bg.jpg') no-repeat center center;
            background-size: cover;
            color: #fff;
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 3rem;
        }
        .section {
            padding: 60px 0;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 0;
            border-top: 1px solid #474c54;
        }
        .footer h5 {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 700;
        }
        .footer p, .footer ul li, .footer a {
            font-size: 14px;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons a {
            color: #ffffff;
            margin-right: 15px;
            font-size: 18px;
        }
        .footer .social-icons a:hover {
            color: #000000;
        }
        .footer .contact-info i {
            margin-right: 10px;
        }
        
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('images/prodi1.png') }}" alt="Logo Program Studi" height="50" style="margin-right: 20px;">
                    <span class="fs-4">Program Studi Informatika</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#program">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Layanan</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-4">
                        <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="search-icon" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <button class="btn btn-primary ms-4 btn-login" onclick="window.location.href='{{ route('login') }}'">Login</button>
                </div>
                
            </div>
        </nav>
    </header>
    


    <section class="full-width-image">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000"> <!-- Ganti otomatis 3 detik -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100" style="height:  600px; background: url('{{ asset('images/kampus.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="overlay">
                        <h2>PROGRAM STUDI SARJANA INFORMATIKA (S1)</h2>
                        <p>Jelajahi kurikulum dan layanan kami yang terbaik</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100" style="height:  600px; background: url('{{ asset('images/lab.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="overlay">
                        <h2>FASILITAS MODERN</h2>
                        <p>Lengkapi dirimu dengan fasilitas canggih dan laboratorium terkini</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100" style="height:  600px; background: url('{{ asset('images/kuliah.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="overlay">
                    <h2>KOMPETENSI GLOBAL</h2>
                    <p>Mempersiapkan lulusan yang siap bersaing di era industri 4.0</p>
                </div>
                </div>
            </div>
        </div>
    
        
    </section>
    
   
    
    <section id="layanan-prodi" class="my-5">
        <div class="row text-center no-gutters"> <!-- Menggunakan no-gutters untuk menghilangkan jarak antar kolom -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-comments fa-3x mb-3"></i>
                        <h5 class="card-title">Aduan</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-university fa-3x mb-3"></i>
                        <h5 class="card-title">PMB Informatika</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-3x mb-3"></i>
                        <h5 class="card-title">Persuratan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <main class="container my-5">
        <section>
            <h2>Pengumuman Terbaru</h2>
            @if(isset($pengumuman))
                @if($pengumuman->isEmpty())
                    <p>Belum ada pengumuman terbaru.</p>
                @else
                    @foreach ($pengumuman as $item)
                        <div class="pengumuman-item">
                            <h3>{{ $item->judul }}</h3>
                            <p>{{ $item->isi }}</p>
                            <small>{{ $item->tanggal }}</small>
                            @if ($item->images)
                                <img src="{{ asset('images/' . $item->images) }}" alt="{{ $item->judul }}">
                            @endif
                        </div>
                    @endforeach
                @endif
            @else
                <p>Variabel pengumuman tidak tersedia.</p>
            @endif
        </section>
    </main>
    
    
    
    

        <section id="program" class="program mb-5">
            <h2 class="mb-4 text-center">Program Kami</h2>
            <div id="programCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program1.jpg" class="card-img-top" alt="Program 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 1</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 1.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program2.jpg" class="card-img-top" alt="Program 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 2</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 2.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program3.jpg" class="card-img-top" alt="Program 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 3</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 3.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program4.jpg" class="card-img-top" alt="Program 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 4</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 4.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program5.jpg" class="card-img-top" alt="Program 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 5</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 5.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <img src="program6.jpg" class="card-img-top" alt="Program 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Program Studi 6</h5>
                                        <p class="card-text">Deskripsi singkat tentang Program Studi 6.</p>
                                        <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak carousel-item jika diperlukan -->
                </div>
                
            </div>
        </section>

 <section id="program" class="program mb-5">
    <h2 class="mb-4 text-center">Program Kami</h2>
    <div id="programCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 1</h5>
                            <p>Deskripsi singkat tentang Program Studi 1. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program1" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 2</h5>
                            <p>Deskripsi singkat tentang Program Studi 2. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program2" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 3</h5>
                            <p>Deskripsi singkat tentang Program Studi 3. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program3" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 4</h5>
                            <p>Deskripsi singkat tentang Program Studi 4. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program4" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 5</h5>
                            <p>Deskripsi singkat tentang Program Studi 5. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program5" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <div class="video-container mb-3 mb-md-0">
                            <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_6" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="text-content ml-md-4">
                            <h5>Program Studi 6</h5>
                            <p>Deskripsi singkat tentang Program Studi 6. Tambahkan informasi lebih lanjut tentang keunggulan dan manfaat dari program studi ini.</p>
                            <a href="https://example.com/program6" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak carousel-item jika diperlukan -->
        </div>
    </div>
</section>

        
        
        <!-- New section for Campus News -->
        <section id="news" class="news-section mb-5">
            <h2 class="mb-4 text-center">Campus News</h2>
            <div class="row">
                <div class="col-md-4 mb-4 news-item">
                    <div class="card h-100">
                        <img src="news1.jpg" class="card-img-top" alt="News 1">
                        <div class="card-body">
                            <h5 class="card-title">Berita Kampus 1</h5>
                            <p class="card-text">Ringkasan berita 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 news-item">
                    <div class="card h-100">
                        <img src="news2.jpg" class="card-img-top" alt="News 2">
                        <div class="card-body">
                            <h5 class="card-title">Berita Kampus 2</h5>
                            <p class="card-text">Ringkasan berita 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 news-item">
                    <div class="card h-100">
                        <img src="news3.jpg" class="card-img-top" alt="News 3">
                        <div class="card-body">
                            <h5 class="card-title">Berita Kampus 3</h5>
                            <p class="card-text">Ringkasan berita 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact mb-5 p-4 bg-light border rounded">
            <h2 class="mb-4 text-center text-primary">Kontak Kami</h2>
            <p class="text-center text-secondary">Jika Anda memiliki pertanyaan, silakan hubungi kami melalui email atau telepon.</p>
            <div class="text-center">
                <a href="mailto:info@example.com" class="btn btn-primary me-2">Kirim Email</a>
                <a href="tel:+62123456789" class="btn btn-secondary">Hubungi Kami</a>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <h5>Program Studi Informatika</h5>
                        <p>Universitas Bhinneka PGRI</p>
                        <p>&copy; 2024 Program Studi Informatika Universitas Bhinneka PGRI. All rights reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5>Link Cepat</h5>
                        <ul class="list-unstyled">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">Pengumuman</a></li>
                            <li><a href="#program">Berita</a></li>
                            <li><a href="#services">Layanan Prodi</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5>Kontak Kami</h5>
                        <div class="contact-info">
                            <p><i class="fas fa-map-marker-alt"></i> Jalan Raya Universitas, Tulungagung</p>
                            <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
                            <p><i class="fas fa-envelope"></i> info@ubpgt.ac.id</p>
                        </div>
                        <h5>Ikuti Kami</h5>
                        <div class="social-icons">
                            <a href="https://facebook.com" class="text-white" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" class="text-white" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" class="text-white" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" class="text-white" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

<!-- WhatsApp Floating Icon -->
<a href="https://wa.me/6282228163135" class="whatsapp-icon" target="_blank" title="Hubungi kami di WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Change navbar background on scroll
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
            }
        });
        function scrollVideos(direction) {
    const container = document.querySelector('.video-wrapper');
    const scrollAmount = 300; // Amount to scroll in pixels
    container.scrollBy({
        left: direction * scrollAmount,
        behavior: 'smooth'
    });
}

    </script>
</body>

</html>
