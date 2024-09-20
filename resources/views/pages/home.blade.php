@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <!-- Hero Section -->
        <div class="hero-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Selamat Datang di Jange Store</h1>
                        <p class="lead mb-4">Temukan dunia baru melalui halaman-halaman buku kami.</p>
                        <a href="#" class="btn btn-primary btn-lg">Jelajahi Koleksi</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://img.freepik.com/free-photo/flat-lay-bookmark-books-assortment_23-2149894329.jpg" alt="Hero Image" class="img-fluid rounded-3 shadow-sm">
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Section -->
        <div class="about-us-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-5 mb-4">Tentang W.T.T.W. Store</h2>
                        <p class="lead mb-4">
                            Kami menyediakan koleksi buku terbaik untuk semua pembaca. Dari bestseller terbaru hingga klasik abadi, 
                            kami memiliki sesuatu untuk setiap pecinta buku.
                        </p>
                        <p class="fw-bold text-primary">Buka jendela Anda ke dunia, atau bahkan buka dunia tersembunyi, satu halaman sekaligus!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section -->
        <div class="video-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="ratio ratio-16x9 rounded-3 shadow-sm overflow-hidden">
                            <iframe src="https://www.youtube.com/embed/Na5KPnx0uS8" title="W.T.T.W. Store Video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Brand Section -->
        <div class="brand-section py-5">
            <div class="container">
                <h3 class="text-center mb-4">Mitra Kami</h3>
                <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
                    <!-- Ulangi untuk setiap brand -->
                    <div class="col">
                        <img src="assets/images/brand/partnerb1.jpg" class="img-fluid grayscale" alt="Brand Logo">
                    </div>
                    <!-- ... -->
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="newsletter-section py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3 class="mb-4">Bergabunglah dengan Komunitas Kami</h3>
                        <p class="mb-4">Dapatkan diskon 50% dengan menjadi anggota kami</p>
                        <form class="d-flex">
                            <input type="email" class="form-control form-control-lg" placeholder="Alamat email Anda">
                            <button type="submit" class="btn btn-primary btn-lg ms-2">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('addition_css')
<style>
    body, h1, h2, h3, h4, h5, h6, p, a, button, input {
        font-family: 'Roboto', sans-serif !important;
    }
    .grayscale { filter: grayscale(100%); transition: filter 0.3s; }
    .grayscale:hover { filter: grayscale(0%); }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .text-primary {
        color: #007bff !important;
    }
</style>
@endsection

@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection
