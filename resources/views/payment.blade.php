@extends('layouts.app-public')
@section('title', 'Payment')
@section('additional_styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css">
<style>
    /* ... (gaya CSS yang sudah ada) ... */
    .swal2-popup {
        font-family: 'Arial', sans-serif;
    }
</style>
@endsection
@section('content')
<div class="container py-5" >
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Widened column to accommodate more content -->
            <div class="card">
                <div class="card-header bg-black text-white">Payment for Book</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $book->cover }}" alt="{{ $book->title }}" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-8">
                            <h2>{{ $book->title }}</h2>
                            <p class="text-muted">Author: {{ $book->author }}</p>
                            <h4 class="text-primary">Price: Rp {{ number_format($book->price, 2, '.', ',') }}</h4>
                            <hr>
                            <h5>Book Description:</h5>
                            <p>{{ $book->description }}</p> <!-- Adding book description -->
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <button id="pay-button" class="btn btn-primary btn-lg">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addition_script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snap_token }}', {
            onSuccess: function(result) {
                Swal.fire({
                    title: 'Payment Successful!',
                    text: 'Your transaction has been completed successfully.',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    background: '#ffffff',
                    iconColor: '#28a745',
                    confirmButtonColor: '#007bff'
                });
                console.log(result);
            },
            onPending: function(result) {
                Swal.fire({
                    title: 'Payment Pending',
                    text: 'We are still waiting for your payment to be completed.',
                    icon: 'info',
                    confirmButtonText: 'I\'ll complete it soon',
                    background: '#ffffff',
                    iconColor: '#17a2b8',
                    confirmButtonColor: '#007bff'
                });
                console.log(result);
            },
            onError: function(result) {
                Swal.fire({
                    title: 'Payment Failed!',
                    text: 'There was an error processing your payment. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'Try Again',
                    background: '#ffffff',
                    iconColor: '#dc3545',
                    confirmButtonColor: '#007bff'
                });
                console.log(result);
            },
            onClose: function() {
                Swal.fire({
                    title: 'Payment Cancelled',
                    text: 'You closed the payment window without completing the transaction.',
                    icon: 'warning',
                    confirmButtonText: 'Got it',
                    background: '#ffffff',
                    iconColor: '#ffc107',
                    confirmButtonColor: '#007bff'
                });
            }
        });
    });
</script>
@endsection
