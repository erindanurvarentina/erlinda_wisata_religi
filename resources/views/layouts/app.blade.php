<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Religi Indonesia</title>
    <!-- Menambahkan CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Untuk ikon -->
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #34495e;
        }

        .navbar-brand {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color: #ecf0f1 !important;
        }

        .nav-link {
            font-size: 1.1rem;
            color: #ecf0f1 !important;
        }

        .nav-link:hover {
            color: #16a085 !important;
        }

        .navbar-toggler-icon {
            background-color: #ecf0f1;
        }

        .navbar-light .navbar-toggler-icon {
            background-color: #ecf0f1;
        }

        .navbar-nav {
            margin-left: auto;
        }

        /* Tombol Search dan profil di kanan */
        .nav-item .nav-link .bi {
            font-size: 1.2rem;
        }

        /* Hero Section Styling */
        .hero-section {
            background-image: url('{{ asset('images/religi-banner.jpg') }}');
            background-size: cover;
            background-position: center;
            height: 80vh;
            color: white;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            height: 100%;
        }

        .hero-section h1 {
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .hero-section p {
            font-size: 1.2rem;
        }

        .btn-light {
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        /* Footer Styling */
        footer {
            background-color: #34495e;
            color: #ecf0f1;
            padding: 20px;
        }

        footer a {
            color: #16a085;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Wisata Religi Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-search"></i> Cari
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Tempat untuk skrip tambahan dari halaman lainnya -->
    @yield('scripts')  <!-- Di sini JavaScript akan dimasukkan -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
