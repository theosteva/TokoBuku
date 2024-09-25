@extends('layouts.app-public')
@section('title', 'Home')
@section('content')
    <div class="site-wrapper-reveal">
        <!-- Hero Section -->
        <div class="hero-section py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Welcome to Jange Book Store</h1>
                        <p class="lead mb-4">Find the new world through our books!</p>
                        <a href="{{route('plp')}}" class="btn btn-primary btn-lg">Browse our collection</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://img.freepik.com/free-photo/flat-lay-bookmark-books-assortment_23-2149894329.jpg" alt="Hero Image" class="img-fluid rounded-3 shadow-sm">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-box-area" style="background-image: url('https://img.freepik.com/free-photo/white-paper-texture-background_23-2151025767.jpg">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <!-- Hero Slider Area Start -->
                        <div class="hero-area" id="product-preview">
                        </div>
                        <!-- Hero Slider Area End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Section -->
        <div class="about-us-section py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="display-5 mb-4">About Jange Book Store</h2>
                        <p class="lead mb-4">
                        We offer a collection of the best books for all readers. 
                        From the latest bestsellers to timeless classics, we have something for every book lover.
                        </p>
                        <p class="fw-bold text-black">Open your window to the world, or even open a hidden world, one page at a time!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section -->
        <div class="video-section py-5 bg-light">
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
        <div class="brand-section py-5 bg-light">
            <div class="container">
                <h3 class="text-center mb-5">Our Partners</h3>
                <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
                    <div class="col">
                        <img src="assets/images/brand/partnerb7.jpg" class="img-fluid grayscale" alt="Logo Mitra 7">
                    </div>
                    <div class="col">
                        <img src="assets/images/brand/partnerb2.jpg" class="img-fluid grayscale" alt="Logo Mitra 2">
                    </div>
                    <div class="col">
                        <img src="assets/images/brand/partnerb6.jpg" class="img-fluid grayscale" alt="Logo Mitra 6">
                    </div>
                </div>
            </div>
        </div>

        <!-- Spacer -->
        <div class="py-2 bg-light"></div>
        <!-- Newsletter Section -->
        <div class="newsletter-section py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3 class="mb-4">Join Our Community</h3>
                        <p class="mb-4">Get a 50% discount by becoming our member</p>
                        <form class="d-flex">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                            <button type="submit" class="btn btn-primary btn-lg ms-2">Subscribe</button>
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
        background-color: #000000;
        border-color: #000000;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .text-primary {
        color: #000000 !important;
    }
    .btn-dark {
        background-color: #000000;
        border-color: #000000;
        color: #ffffff;
    }
    .btn-dark:hover {
        background-color: #333333;
        border-color: #333333;
    }
    .discover-now-btn {
        background-color: #000000;
        color: #ffffff;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .discover-now-btn:hover {
        background-color: #333333;
        color: #ffffff;
    }
    .hero-section {
        /* Menghapus properti background-image dan background-attachment */
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .hero-box-area {
        /* Hapus background-image */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
@endsection

@section('addition_script')
    <script src="{{asset('pages/js/home.js')}}"></script>
@endsection
