@extends('layouts.app')

@section('content')
   <!-- Hero Section with Parallax Effect and Transparent Overlay -->
   <section class="hero-section" style="background-image: url('{{ asset('images/religi2.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
    <!-- Transparent Overlay -->
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
        <div class="container text-center py-5">
            <h1 class="display-4 text-shadow">Selamat datang di Wisata Religi Kami!</h1>
            <p class="lead">Temukan kedamaian spiritual di situs-situs religi bersejarah yang menyentuh jiwa di Indonesia.</p>
            <a href="#destinasi" class="btn btn-light btn-lg shadow-sm">Lihat Destinasi Wisata Religi</a>
        </div>
    </div>
</section>

    <!-- Destinasi Wisata Religi -->
    <section id="destinasi" class="py-5">
        <div class="container">
            <h2 class="text-center text-success mb-5">Destinasi Wisata Religi</h2>
            <div class="row">
                <!-- Masjid Agung Banten -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/religi1.png') }}" class="card-img-top" alt="Masjid Agung Banten">
                        <div class="card-body">
                            <h5 class="card-title">Masjid Agung Banten</h5>
                            <p class="card-text">Saksikan keindahan dan ketenangan spiritual di Masjid Agung Banten, salah satu masjid bersejarah di Indonesia.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Candi Borobudur -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/religi2.png') }}" class="card-img-top" alt="Candi Borobudur">
                        <div class="card-body">
                            <h5 class="card-title">Candi Borobudur</h5>
                            <p class="card-text">Nikmati keagungan Candi Borobudur, situs warisan dunia dengan nilai spiritual yang sangat mendalam.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Vihara Avalokitesvara -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <img src="{{ asset('images/religi3.png') }}" class="card-img-top" alt="Vihara Avalokitesvara">
                        <div class="card-body">
                            <h5 class="card-title">Vihara Avalokitesvara</h5>
                            <p class="card-text">Temukan kedamaian spiritual di Vihara Avalokitesvara, tempat yang penuh kedamaian dan kesejukan alam.</p>
                            <a href="#" class="btn btn-outline-success">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Wisata Religi -->
    <section id="layanan" class="py-5" style="background-color: #e9ecef;">
        <div class="container">
            <h2 class="text-center text-success mb-4">Layanan Wisata Religi</h2>
            <div class="row">
                <!-- Pemandu Wisata Religi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Pemandu Wisata Religi</h5>
                            <p class="card-text">Nikmati pengalaman lebih mendalam dengan pemandu wisata yang akan membawa Anda ke tempat-tempat suci dan bersejarah.</p>
                        </div>
                    </div>
                </div>

                <!-- Akomodasi Religi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Akomodasi Religi</h5>
                            <p class="card-text">Tersedia akomodasi yang nyaman dan tenang untuk mendukung perjalanan spiritual Anda di destinasi wisata religi.</p>
                        </div>
                    </div>
                </div>

                <!-- Transportasi Religi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <div class="card-body">
                            <h5 class="card-title">Transportasi Religi</h5>
                            <p class="card-text">Kami menyediakan layanan transportasi yang aman dan nyaman untuk Anda menjelajahi destinasi wisata religi di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Pengunjung -->
    <section id="testimoni" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-success mb-4">Apa Kata Pengunjung?</h2>
            <div class="row">
                <!-- Testimoni 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <div class="card-body">
                            <h5 class="card-title">"Pengalaman yang Tak Terlupakan"</h5>
                            <p class="card-text">"Perjalanan spiritual ke Candi Borobudur benar-benar mengubah hidup saya. Sangat menenangkan dan penuh inspirasi."</p>
                            <p class="text-muted">- Ahmad S.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <div class="card-body">
                            <h5 class="card-title">"Kedamaian yang Saya Cari"</h5>
                            <p class="card-text">"Vihara Avalokitesvara memberikan ketenangan yang saya butuhkan. Lingkungan dan suasana sangat damai."</p>
                            <p class="text-muted">- Siti R.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-light shadow">
                        <div class="card-body">
                            <h5 class="card-title">"Wisata Religi yang Menyentuh Hati"</h5>
                            <p class="card-text">"Masjid Agung Banten memberikan pengalaman spiritual yang luar biasa. Saya merasa lebih dekat dengan Tuhan."</p>
                            <p class="text-muted">- Denny P.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
