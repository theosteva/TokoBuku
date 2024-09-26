@extends('layouts.app-public')
@section('title', 'My Profile')
@section('content')
<div class="container py-5" style="background-color: #f8f9fa;">
    <h1 class="text-center mb-5">My Profile</h1>

    <div class="row">
        <!-- Profile Picture Section -->
        <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAjBc0EAnQMrFMO0--9P1x-yu4yNHza_RECg&s" alt="Profile Picture" class="img-fluid rounded-circle shadow-sm" style="width: 200px; height: 200px;">
        </div>

        <!-- Profile Details Section -->
        <div class="col-md-8">
            <h2 class="mb-3">Welcome, Theodorus</h2>
            <p><strong>Full Name:</strong> Theodorus Stevanus Setiawan</p>
            <p><strong>Email:</strong> {{ isset($_COOKIE['ue']) ? $_COOKIE['ue'] : 'N/A' }}</p>
            <p><strong>Member Since:</strong> January 2023</p>

            <!-- Buttons Section -->
            <div class="mt-4">
            </div>
        </div>
    </div>

    <hr class="my-5">

    <!-- Additional Profile Features -->
   
</div>
    <!-- Admin Panel Button -->
    <a href="/admin/panel" class="btn btn-sm btn-primary position-fixed" style="bottom: 20px; right: 20px;">
        Admin Panel
    </a>
</div>
@endsection
