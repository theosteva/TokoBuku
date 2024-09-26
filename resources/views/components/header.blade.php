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
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('plp') }}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    </ul>
                </nav>
            </div>

            <!-- User Actions -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="header-actions d-flex justify-content-end align-items-center">
                    <a href="{{ route('wishlist.index') }}" class="action-item me-3 d-none d-md-inline-block" title="Wishlist">
                        <i class="icon-heart icon-large" id="wishlist-icon"></i>
                        @if(isset($_COOKIE['ut']))
                            <span class="badge bg-primary rounded-circle">3</span>
                        @endif
                    </a>
                    <a href="#" class="action-item me-3" title="Cart">
                        <i class="icon-bag2 icon-large" id="cart-icon"></i>
                        @if(isset($_COOKIE['ut']))
                            <span class="badge bg-primary rounded-circle">3</span>
                        @endif
                    </a>
                    <div class="user-menu">
                        @if(isset($_COOKIE['ue']))
                            <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                        Hello, {{ucwords(substr($_COOKIE['ue'], 0, 3))}}
                                    </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ route('my-profile') }}">My Profile</a></li>
                                    <li><a class="dropdown-item" href="#" id="logout-btn">Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#authModal">
                                Login
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====================  End of Header Area  ====================-->

<!-- Mobile Navigation Menu -->
<div class="mobile-nav d-md-none bg-light py-2">
    <div class="container-fluid">
        <ul class="nav justify-content-around">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="icon-home icon-large"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('plp') }}"><i class="icon-shop icon-large"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="icon-info icon-large"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><i class="icon-envelope icon-large"></i></a></li>
        </ul>
    </div>
</div>

<!-- Auth Modal -->
<div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-body p-4">
                <ul class="nav nav-pills nav-fill mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_list_07">Register</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                        <form class="account-form-box" id="form-login">
                            <h4 class="text-center mb-4">Welcome Back!</h4>
                            <div id="form-login-error" class="alert alert-danger d-none" role="alert"></div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                                <label for="floatingEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme">
                                    <label class="form-check-label" for="rememberme">Remember me</label>
                                </div>
                                <a href="#" class="text-primary">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-2" id="form-login-btn">Log in</button>
                        </form>
                        <div id="form-login-loading" class="text-center mt-3 d-none">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>

                    <!-- Register Form -->
                    <div class="tab-pane fade" id="tab_list_07" role="tabpanel">
                        <form class="account-form-box" id="form-register">
                            <h3 class="text-center mb-4">Create an Account</h3>
                            <p class="text-center mb-4">Join us and enjoy exclusive benefits</p>
                            <div id="form-register-error" class="alert alert-danger d-none" role="alert"></div>
                            <div class="form-group mb-3">
                                <label for="register-name">Full Name</label>
                                <input id="register-name" name="name" type="text" class="form-control" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="register-email">Email Address</label>
                                <input id="register-email" name="email" type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="register-password">Password</label>
                                <input id="register-password" name="password" type="password" class="form-control" placeholder="Create a password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="register-password-confirm">Confirm Password</label>
                                <input id="register-password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Confirm your password" required>
                            </div>
                            <p class="small text-muted mt-3">
                                By registering, you agree to our <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>.
                            </p>
                            <button type="submit" class="btn btn-primary btn-block mt-4" id="form-register-btn">Create Account</button>
                        </form>
                        <div id="form-register-loading" class="text-center d-none">
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .header-area {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        transition: transform 0.3s ease;
        z-index: 10;
        border-bottom: 1px solid #000000; /* Menambahkan border hitam di bagian bawah */
    }

    .header-area.hidden {
        transform: translateY(-100%);
    }

    body {
        padding-top: 70px; /* Sesuaikan dengan tinggi header Anda */
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
        max-height: 185px;
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

    .icon-home, .icon-shop, .icon-bag2, .icon-heart {
        font-size: 25px; /* Memperbesar ukuran ikon */
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

    /* Menambahkan bayangan untuk efek yang lebih halus */
    .header-area::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -5px;
        height: 5px;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0));
    }

    .main-nav .nav-link {
        font-weight: normal; /* Menghilangkan efek bold */
        color: #000000; /* Memastikan warna teks tetap hitam */
        transition: all 0.3s ease;
    }

    .main-nav .nav-link:hover {
        background-color: #000000;
        color: #ffffff !important;
    }

    .modal-content {
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .nav-pills .nav-link {
        border-radius: 30px;
        transition: all 0.3s ease;
    }
    .nav-pills .nav-link.active {
        background-color: #000000; /* Mengubah warna background tab aktif menjadi hitam */
    }
    .form-control {
        border-radius: 10px;
    }
    .btn-primary {
        background-color: #000000; /* Mengubah warna tombol menjadi hitam */
        border-color: #000000; /* Mengubah warna border tombol menjadi hitam */
        border-radius: 30px;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #333333; /* Warna hover sedikit lebih terang */
        border-color: #333333;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }
    .text-primary {
        color: #000000 !important; /* Mengubah warna teks primary menjadi hitam */
    }
    .spinner-border.text-primary {
        color: #000000 !important; /* Mengubah warna spinner menjadi hitam */
    }

    body, h1, h2, h3, h4, h5, h6, p, a, button, input, textarea, select, .nav-link, .btn {
        font-family: 'Roboto', sans-serif !important;
    }

    /* Menghapus animasi yang berlebihan */
    .animate__animated {
        animation-duration: 0.5s;
    }

    /* Menambahkan transisi halus untuk efek hover */
    .nav-link, .btn, .action-item {
        transition: all 0.3s ease;
    }

    /* Efek hover yang lebih sederhana */
    .nav-link:hover, .btn:hover, .action-item:hover {
        opacity: 0.8;
        transform: translateY(-2px);
    }

    /* Menghapus animasi yang tidak perlu */
    .logo-image {
        transition: all 0.3s ease;
    }

    /* Animasi sederhana untuk dropdown */
    .dropdown-menu {
        display: block;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('form-login');
        const errorDiv = document.getElementById('form-login-error');
        const loadingDiv = document.getElementById('form-login-loading');
        const submitBtn = document.getElementById('form-login-btn');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            errorDiv.classList.add('d-none');
            loadingDiv.classList.remove('d-none');
            submitBtn.disabled = true;

            // Simulasi proses login
            setTimeout(function() {
                loadingDiv.classList.add('d-none');
                submitBtn.disabled = false;
                // Di sini Anda bisa menambahkan logika login yang sebenarnya
                errorDiv.textContent = 'Login gagal! Email atau Password Salah';
                errorDiv.classList.remove('d-none', 'alert-danger');
                errorDiv.classList.add('alert-success');
            }, 2000);
        });

        let lastScrollTop = 0;
        const header = document.querySelector('.header-area');
        const scrollThreshold = 100; // Atur ambang batas scroll

        window.addEventListener('scroll', () => {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                // Scroll ke bawah dan melewati ambang batas
                header.classList.add('hidden');
            } else {
                // Scroll ke atas atau belum melewati ambang batas
                header.classList.remove('hidden');
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        }, { passive: true });

        // Animasi sederhana untuk menu mobile
        const mobileNavItems = document.querySelectorAll('.mobile-nav .nav-item');
        mobileNavItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
            setTimeout(() => {
                item.style.transition = 'all 0.3s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });

        // Animasi sederhana untuk modal
        const authModal = document.getElementById('authModal');
        if (authModal) {
            authModal.addEventListener('show.bs.modal', function (event) {
                this.querySelector('.modal-dialog').style.transform = 'scale(0.8)';
                setTimeout(() => {
                    this.querySelector('.modal-dialog').style.transform = 'scale(1)';
                }, 150);
            });
        }
    });
</script>
