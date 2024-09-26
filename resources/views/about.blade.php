@extends('layouts.app-public')
@section('title', 'About Us')
@section('content')
<div class="container py-5 bg-light">
    <!-- Welcome Section -->
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 fade-in-left">
            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 fade-in-right">
            <h2 class="mb-4">Welcome to Our Store</h2>
            <p>We are an online store committed to providing high-quality products at affordable prices. Founded in 2010, we have served thousands of satisfied customers across Indonesia.</p>
            <p>Our mission is to make the online shopping experience easy, safe, and enjoyable for all our customers.</p>
        </div>
    </div>

    <!-- Vision, Mission, Values Section -->
    <div class="row mt-5 text-center">
        <div class="col-md-4 mb-4 fade-in">
            <h3 class="mb-3">Our Vision</h3>
            <p>To become the most trusted and leading online store in Indonesia, always prioritizing customer satisfaction.</p>
        </div>
        <div class="col-md-4 mb-4 fade-in">
            <h3 class="mb-3">Our Mission</h3>
            <p>To provide quality products, excellent customer service, and an enjoyable shopping experience.</p>
        </div>
        <div class="col-md-4 mb-4 fade-in">
            <h3 class="mb-3">Our Values</h3>
            <ul class="list-unstyled">
                <li>Integrity</li>
                <li>Innovation</li>
                <li>Customer Satisfaction</li>
                <li>Teamwork</li>
            </ul>
        </div>
    </div>

    <!-- Our Team Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4 fade-in">Our Team</h2>
        </div>

        <div class="col-md-3 mb-4 fade-in">
            <div class="card shadow">
                <img src="{{ asset('assets/images/team-1.jpg') }}" class="card-img-top img-fluid" alt="Team Member 1">
                <div class="card-body text-center">
                    <h5 class="card-title">John Smith</h5>
                    <p class="card-text">CEO & Founder</p>
                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> Connect</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 fade-in">
            <div class="card shadow">
                <img src="{{ asset('assets/images/team-2.jpg') }}" class="card-img-top img-fluid" alt="Team Member 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Sarah Johnson</h5>
                    <p class="card-text">Operations Manager</p>
                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> Connect</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 fade-in">
            <div class="card shadow">
                <img src="{{ asset('assets/images/team-3.jpg') }}" class="card-img-top img-fluid" alt="Team Member 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Windah Bieber Widodo</h5>
                    <p class="card-text">Head of Marketing</p>
                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> Connect</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4 fade-in">
            <div class="card shadow">
                <img src="{{ asset('assets/images/team-4.jpg') }}" class="card-img-top img-fluid" alt="Team Member 4">
                <div class="card-body text-center">
                    <h5 class="card-title">Emily Davis</h5>
                    <p class="card-text">Customer Service Manager</p>
                    <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i> Connect</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }
    .fade-in-left {
        animation: fadeInLeft 1s ease-in-out;
    }
    .fade-in-right {
        animation: fadeInRight 1s ease-in-out;
    }
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    @keyframes fadeInLeft {
        0% { opacity: 0; transform: translateX(-50px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    @keyframes fadeInRight {
        0% { opacity: 0; transform: translateX(50px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
</style>
@endpush
