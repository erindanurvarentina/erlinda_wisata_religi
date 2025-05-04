@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Hero Section -->
        <section class="text-center">
            <h1 class="display-4 text-success mb-4">Layanan Wisata Religi</h1>
            <p class="lead mb-5">Kami menyediakan layanan untuk membantu perjalanan spiritual Anda ke tempat-tempat suci di Indonesia. Jelajahi pengalaman religius yang penuh kedamaian.</p>
        </section>

        <!-- Layanan Wisata Religi -->
        <section class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Layanan Pendaftaran Wisata Religi -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-person-plus" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Pendaftaran Wisata Religi</h5>
                        <p class="card-text">Daftarkan diri Anda untuk menjelajahi situs-situs religi seperti Masjid Istiqlal, Candi Borobudur, dan lainnya.</p>
                        <a href="#" class="btn btn-outline-success w-100 mt-3">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Layanan Paket Tur Religi -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-card-list" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Paket Tur Religi</h5>
                        <p class="card-text">Pilih paket tur untuk mengunjungi situs religi dan budaya terpopuler di Indonesia.</p>
                        <a href="#" class="btn btn-outline-secondary w-100 mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>

            <!-- Layanan Panduan Religi -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Panduan Religi</h5>
                        <p class="card-text">Dapatkan panduan dari pemandu wisata berpengalaman untuk memahami sejarah dan spiritualitas setiap tempat.</p>
                        <a href="#" class="btn btn-outline-success w-100 mt-3">Dapatkan Panduan</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Layanan Akomodasi & Transportasi -->
        <section class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 mt-4">
            <!-- Layanan Akomodasi Religi -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-house-door" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Akomodasi Religi</h5>
                        <p class="card-text">Pilih akomodasi yang nyaman untuk mendalami pengalaman spiritual Anda di tempat-tempat suci.</p>
                        <a href="#" class="btn btn-outline-danger w-100 mt-3">Pilih Akomodasi</a>
                    </div>
                </div>
            </div>

            <!-- Layanan Transportasi Religi -->
            <div class="col">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-body text-center">
                        <i class="bi bi-car-front" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Transportasi Religi</h5>
                        <p class="card-text">Pesan transportasi yang nyaman untuk perjalanan ke tempat-tempat suci, mulai dari bus hingga kendaraan pribadi.</p>
                        <a href="#" class="btn btn-outline-info w-100 mt-3">Pesan Transportasi</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('styles')
    <style>
        /* Card Styling */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Icon Styling */
        .card-body i {
            color: #4CAF50;
        }

        /* Button Styling */
        .btn-outline-success, .btn-outline-secondary, .btn-outline-success, .btn-outline-danger, .btn-outline-info {
            border-width: 2px;
        }

        /* Button hover effect */
        .btn:hover {
            background-color: #f1f1f1;
            color: #333;
        }

        /* Heading Styling */
        h1 {
            font-weight: 700;
        }
    </style>
@endsection
