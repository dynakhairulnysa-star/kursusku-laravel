@extends('layouts.app')

@section('title', 'Beranda - KursusKu')

@section('content')
<!-- 1. HERO SECTION -->
<section class="hero-section py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <!-- Teks Kiri (Diperbesar) -->
            <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                <!-- Badge hijau sudah dihapus -->
                
                <h1 class="display-2 fw-bolder text-white mb-4" style="line-height: 1.1; letter-spacing: -1px;">
                    Belajar terstruktur dengan <span style="color: #3b82f6;">Route, Controller, dan Blade.</span>
                </h1>
                <p class="lead text-secondary mb-5" style="font-size: 1.4rem; font-weight: 500; line-height: 1.6;">
                    Landing page KursusKu dipindahkan dari PHP biasa ke pola framework Laravel. Request masuk melalui route, data disiapkan controller, lalu Blade merender HTML secara terstruktur.
                </p>
                
                <!-- 2 TOMBOL DENGAN EFEK GLOW -->
                <div class="d-flex gap-3 flex-wrap justify-content-center justify-content-lg-start">
                    <a href="#katalog" class="btn btn-primary btn-lg px-4 py-3 fw-bold btn-glow" style="background: #3b82f6; border: none; font-size: 1.2rem;">
                        Program Belajar Unggulan
                    </a>
                    
                    <a href="#alur-mvc" class="btn btn-outline-primary btn-lg px-4 py-3 fw-bold btn-glow-outline" style="color: #60a5fa; border-color: #60a5fa; font-size: 1.2rem;">
                        Lihat Alur MVC
                    </a>
                </div>
            </div>
            
            <!-- Gambar Kanan (Diperbesar sedikit) -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/hero-kursus.png') }}" alt="Ilustrasi KursusKu" class="img-fluid rounded-4 shadow-lg" style="border: 1px solid rgba(59, 130, 246, 0.4);">
            </div>
        </div>
    </div>
</section>

<!-- 2. SECTION ALUR MVC -->
<section id="alur-mvc" class="mvc-section py-5">
    <div class="container py-3">
        <h2 class="text-center text-white mb-5 display-5 fw-bold">Alur MVC</h2>
        <div class="mvc-grid">
            <div class="mvc-step"><h3>Browser</h3><p>GET /</p></div>
            <div class="mvc-step"><h3>Route</h3><p>web.php</p></div>
            <div class="mvc-step"><h3>Controller</h3><p>HomeController@index</p></div>
            <div class="mvc-step"><h3>Blade View</h3><p>home.blade.php</p></div>
            <div class="mvc-step"><h3>Response</h3><p>HTML ke browser</p></div>
        </div>
    </div>
</section>

<!-- 3. SECTION KATALOG KURSUS -->
<section id="katalog" class="katalog-section py-5">
    <div class="container py-3">
        <h2 class="text-center text-white mb-5 display-5 fw-bold">Kursus Pilihan</h2>
        <div class="row g-4">
            @foreach ($featured as $course)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 custom-card">
                    <div class="card-body p-4 d-flex flex-column">
                        <span class="course-code">{{ $course['code'] }}</span>
                        <h3 class="mt-2">{{ $course['name'] }}</h3>
                        <p class="course-date">Mulai: {{ $course['start'] }}</p>
                        
                        <div class="course-price mt-2">{{ $course['price'] }}</div>
                        <p class="course-quota">Sisa kuota: {{ $course['quota'] }} kursi</p>
                        
                        <div class="mt-auto pt-3">
                            @if ($course['quota'] > 0)
                                <span class="badge-available">Tersedia</span>
                            @else
                                <span class="badge-full">Penuh</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection