@extends('layouts.app')

@section('content')
   <!-- Hero Section with Parallax Effect and Transparent Overlay -->
   <section class="hero-section" style="background-image: url('{{ asset('images/religi1.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
    <!-- Transparent Overlay -->
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
        <div class="container text-center py-5">
            <h1 class="display-4 text-shadow">Selamat datang di Wisata Religi Kami!</h1>
            <p class="lead">Temukan kedamaian spiritual dan perjalanan suci Anda di berbagai situs religi terkenal di Indonesia.</p>
            <a href="#destinasi" class="btn btn-light btn-lg shadow-sm">Lihat Destinasi Wisata Religi</a>
        </div>
    </div>
</section>

    <!-- Sekilas Tentang Wisata Religi -->
    <section id="tentang" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-success">Tentang Wisata Religi Kami</h2>
            <p class="text-center">Wisata Religi kami menawarkan pengalaman mendalam dalam menjelajahi tempat-tempat suci dan situs bersejarah di Indonesia, tempat yang menginspirasi dan membawa kedamaian batin.</p>
        </div>
    </section>

    <!-- Destinasi Wisata Religi dengan Carousel -->
    <section id="destinasi" class="py-5">
        <div class="container">
            <h2 class="text-center text-success">Destinasi Wisata Religi</h2>
            <div id="carouselDestinasi" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/religi1.png') }}" class="d-block w-100" alt="Masjid Agung Banten">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Masjid Agung Banten</h5>
                            <p>Rasakan ketenangan di salah satu masjid bersejarah di Indonesia.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/religi2.png') }}" class="d-block w-100" alt="Candi Borobudur">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Candi Borobudur</h5>
                            <p>Menikmati keagungan Candi Borobudur, situs warisan dunia yang sarat dengan nilai spiritual.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/religi3.png') }}" class="d-block w-100" alt="Vihara Avalokitesvara">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Vihara Avalokitesvara</h5>
                            <p>Mengunjungi vihara yang penuh kedamaian dan kesucian di tengah alam yang mempesona.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestinasi" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDestinasi" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Galeri Foto Wisata Religi -->
    <section id="galeri" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-success">Galeri Wisata Religi</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/religi1.png') }}" class="img-fluid rounded shadow-lg" alt="Masjid Agung Banten">
                    <p class="text-center mt-2">Masjid Agung Banten</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/religi2.png') }}" class="img-fluid rounded shadow-lg" alt="Candi Borobudur">
                    <p class="text-center mt-2">Candi Borobudur</p>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="{{ asset('images/religi3.png') }}" class="img-fluid rounded shadow-lg" alt="Vihara Avalokitesvara">
                    <p class="text-center mt-2">Vihara Avalokitesvara</p>
                </div>
            </div>
        </div>
    </section>
@endsection
