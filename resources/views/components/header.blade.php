<!--====================  Area Header  ====================-->
<header class="header-area header-sticky bg-white py-2">
    <div class="container-fluid container-fluid--cp-100">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-4 col-6 logo-container">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" class="img-fluid logo-image">
                </a>
            </div>

            <!-- Navigation menu -->
            <div class="col-lg-6 col-md-4 d-none d-md-block">
                <nav class="main-nav">
                    <ul class="nav justify-content-center">
                        <li class="nav-item"><a class="nav-link bold-text" href="{{ route('home') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link bold-text" href="{{ route('plp') }}">Belanja</a></li>
                        <li class="nav-item"><a class="nav-link bold-text" href="#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link bold-text" href="#contact">Kontak</a></li>
                    </ul>
                </nav>
            </div>

            <!-- User Actions -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="header-actions d-flex justify-content-end align-items-center">
                    <a href="#wishlist" class="action-item me-3 d-none d-md-inline-block" title="Wishlist">
                        <i class="icon-heart"></i>
                        <span class="badge bg-primary rounded-circle">3</span>
                    </a>
                    <a href="#minicart" class="action-item me-3" title="Keranjang">
                        <i class="icon-bag2"></i>
                        <span class="badge bg-primary rounded-circle">3</span>
                    </a>
                    <div class="user-menu">
                        @if(isset($_COOKIE['ut']))
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-outline-primary btn-sm" href="#" role="button" data-bs-toggle="dropdown">
                                    {{ ucwords(substr($_COOKIE['ue'], 0, 3)) }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#my-profile">Profil Saya</a></li>
                                    <li><a class="dropdown-item" href="#" id="logout-btn">Keluar</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#authModal">
                                Masuk
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====================  Akhir Area Header  ====================-->

<!-- Mobile Navigation Menu -->
<div class="mobile-nav d-md-none bg-light py-2">
    <div class="container-fluid">
        <ul class="nav justify-content-around">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="icon-home"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('plp') }}"><i class="icon-shop"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#about"><i class="icon-info"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><i class="icon-envelope"></i></a></li>
        </ul>
    </div>
</div>

<!-- Auth Modal (tidak berubah) -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#login-tab">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#register-tab">Daftar</a>
                    </li>
                </ul>
                <div class="tab-content mt-3">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login-tab">
                        <!-- Login form content -->
                    </div>
                    <!-- Register Form -->
                    <div class="tab-pane fade" id="register-tab">
                        <!-- Register form content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .header-area {
        min-height: 70px;
        position: relative;
        z-index: 10;
    }

    .logo-container {
        position: relative;
    }

    .logo {
        display: block;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 20;
    }

    .logo-image {
        max-height: 150px;
        width: auto;
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .logo-image {
            max-height: 120px;
        }
    }

    @media (max-width: 576px) {
        .logo-image {
            max-height: 100px;
        }
    }

    .bold-text {
        font-weight: bold;
        color: #000000; /* Mengubah warna teks menjadi hitam */
    }

    .bold-text:hover {
        color: #000000; /* Mengubah warna hover menjadi hitam */
    }

    /* Menambahkan aturan umum untuk mengubah semua teks menjadi hitam */
    .header-area, .header-area a, .header-area .nav-link, .header-area .btn {
        color: #000000;
    }

    /* Mengubah warna ikon menjadi hitam */
    .header-area .icon-heart, .header-area .icon-bag2 {
        color: #000000;
    }

    /* Mengubah warna badge menjadi hitam dengan teks putih */
    .header-area .badge {
        background-color: #000000 !important;
        color: #ffffff;
    }

    /* Mengubah warna tombol outline menjadi hitam */
    .header-area .btn-outline-primary {
        color: #000000;
        border-color: #000000;
    }

    /* Mengubah warna tombol primary menjadi hitam */
    .header-area .btn-primary {
        background-color: #000000;
        border-color: #000000;
        color: #ffffff;
    }

    /* Menambahkan efek hover pada menu navigasi */
    .main-nav .nav-item .nav-link {
        padding: 5px 10px;
        transition: all 0.3s ease;
    }

    .main-nav .nav-item .nav-link:hover {
        background-color: #000000;
        color: #ffffff !important;
    }
</style>
