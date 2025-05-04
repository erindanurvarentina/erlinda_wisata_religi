@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-success">Galeri Wisata Religi Indonesia</h1>
        <p class="text-center mb-5">Jelajahi koleksi foto menakjubkan dari berbagai situs religi yang ada di Indonesia. Setiap foto menceritakan kisah spiritual yang mendalam dan keindahan tempat-tempat suci.</p>

        <!-- Galeri Foto Wisata Religi -->
        <section>
            <div class="row">
                <!-- Foto Masjid Agung Banten -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/religi1.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/religi1.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Masjid Agung Banten">
                        </a>
                        <p class="text-center mt-2">Masjid Agung Banten</p>
                    </div>
                </div>

                <!-- Foto Candi Borobudur -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/religi2.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/religi2.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Candi Borobudur">
                        </a>
                        <p class="text-center mt-2">Candi Borobudur</p>
                    </div>
                </div>

                <!-- Foto Vihara Avalokitesvara -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/religi3.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/religi3.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="Vihara Avalokitesvara">
                        </a>
                        <p class="text-center mt-2">Vihara Avalokitesvara</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Lightbox Script (Bootstrap 5) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="lightbox" id="gallery" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel Item Masjid Agung Banten -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/religi1.png') }}" class="d-block w-100" alt="Masjid Agung Banten">
                    </div>
                    <!-- Carousel Item Candi Borobudur -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/religi2.png') }}" class="d-block w-100" alt="Candi Borobudur">
                    </div>
                    <!-- Carousel Item Vihara Avalokitesvara -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/religi3.png') }}" class="d-block w-100" alt="Vihara Avalokitesvara">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        /* Galeri Foto Layout */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            transition: transform 0.3s ease;
        }

        .gallery-img {
            transition: transform 0.3s ease, opacity 0.3s ease;
            border-radius: 12px;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05); /* Zoom effect */
            opacity: 0.9;
        }

        .gallery-item:hover {
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* Hover shadow effect */
            transform: scale(1.05);
        }

        .carousel-inner img {
            border-radius: 12px;
        }

        .text-center p {
            font-size: 1.2rem;
            font-weight: 600;
            color: #4b4b4b;
        }
    </style>
@endsection
