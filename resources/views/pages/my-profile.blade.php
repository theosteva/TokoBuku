@extends('layouts.app-public')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">My Profile</h1>
    
    <div class="row">
        <div class="col-md-6 mb-4 d-flex justify-content-center align-items-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAjBc0EAnQMrFMO0--9P1x-yu4yNHza_RECg&s" alt="Profile Picture" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">Welcome, {{ isset($_COOKIE['ue']) ? ucwords(substr($_COOKIE['ue'], 0, 3)) : 'Guest' }}</h2>
            <p>Full Name: {{ isset($_COOKIE['un']) ? ucwords($_COOKIE['un']) : 'N/A' }}</p> <!-- Menampilkan nama lengkap -->
            <p>Email: {{ isset($_COOKIE['ue']) ? $_COOKIE['ue'] : 'N/A' }}</p>
            <p>Member since: January 2023</p>
            <a href="#" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
