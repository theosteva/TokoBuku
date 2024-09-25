@extends('layouts.app-public')

@section('content')
<div class="container py-5 bg-light">
    <h1 class="text-center mb-5">About Us</h1>
    
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('assets/images/about-us.jpg') }}" alt="About Us" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Welcome to Our Store</h2>
            <p>We are an online store committed to providing high-quality products at affordable prices. Founded in 2010, we have served thousands of satisfied customers across Indonesia.</p>
            <p>Our mission is to make the online shopping experience easy, safe, and enjoyable for all our customers.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mb-4">
            <h3 class="mb-3">Our Vision</h3>
            <p>To become the most trusted and leading online store in Indonesia, always prioritizing customer satisfaction.</p>
        </div>
        <div class="col-md-4 mb-4">
            <h3 class="mb-3">Our Mission</h3>
            <p>To provide quality products, excellent customer service, and an enjoyable shopping experience.</p>
        </div>
        <div class="col-md-4 mb-4">
            <h3 class="mb-3">Our Values</h3>
            <ul>
                <li>Integrity</li>
                <li>Innovation</li>
                <li>Customer Satisfaction</li>
                <li>Teamwork</li>
            </ul>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Our Team</h2>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/team-1.jpg') }}" class="card-img-top" alt="Team Member 1">
                <div class="card-body">
                    <h5 class="card-title">John Smith</h5>
                    <p class="card-text">CEO & Founder</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/team-2.jpg') }}" class="card-img-top" alt="Team Member 2">
                <div class="card-body">
                    <h5 class="card-title">Sarah Johnson</h5>
                    <p class="card-text">Operations Manager</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/team-3.jpg') }}" class="card-img-top" alt="Team Member 3">
                <div class="card-body">
                    <h5 class="card-title">Windah Bieber Widodo</h5>
                    <p class="card-text">Head of Marketing</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/images/team-4.jpg') }}" class="card-img-top" alt="Team Member 4">
                <div class="card-body">
                    <h5 class="card-title">Emily Davis</h5>
                    <p class="card-text">Customer Service Manager</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endpush
