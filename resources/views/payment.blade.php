@extends('layouts.app-public')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Memperlebar kolom untuk mengakomodasi lebih banyak konten -->
            <div class="card">
                <div class="card-header bg-black text-white">Pembayaran untuk Buku</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $book->cover }}" alt="{{ $book->title }}" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-8">
                            <h2>{{ $book->title }}</h2>
                            <p class="text-muted">Penulis: {{ $book->author }}</p>
                            <h4 class="text-primary">Harga: Rp {{ number_format($book->price, 0, ',', '.') }}</h4>
                            <hr>
                            <h5>Deskripsi Buku:</h5>
                            <p>{{ $book->description }}</p> <!-- Menambahkan deskripsi buku -->
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <button id="pay-button" class="btn btn-primary btn-lg">Bayar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addition_script')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snap_token }}', {
            onSuccess: function(result) {
                alert("Pembayaran berhasil!");
                console.log(result);
            },
            onPending: function(result) {
                alert("Menunggu pembayaran Anda!");
                console.log(result);
            },
            onError: function(result) {
                alert("Pembayaran gagal!");
                console.log(result);
            },
            onClose: function() {
                alert('Anda menutup popup tanpa menyelesaikan pembayaran');
            }
        });
    });
</script>
@endsection
