<header class="custom-navbar">
    <div class="container nav-container">
        <!-- KIRI: Logo & Teks -->
        <div class="brand-wrap">
            <div class="logo-badge">K</div>
            <div class="brand-text">
                <h1>KursusKu</h1>
                <p>Pemrograman Web III · Laravel MVC</p>
            </div>
        </div>

        <!-- TENGAH: Menu Navigasi -->
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-link-custom">Beranda</a>
            <a href="#alur-mvc" class="nav-link-custom">Alur MVC</a>
            <a href="{{ route('enrollments.create') }}" class="nav-link-custom">Pendaftaran</a>
        </div>
        
        <!-- KANAN: Tombol Lihat Program -->
        <div class="nav-right-action">
            <a href="#katalog" class="btn-lihat-program">Lihat Program</a>
        </div>
    </div>
</header>