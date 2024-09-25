<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Book;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createTransaction(Request $request, $bookId)
    {
        // Ambil data buku berdasarkan ID
        $book = Book::find($bookId);
        
        if (!$book) {
            return redirect()->back()->with('error', 'Book not found!');
        }

        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Data transaksi berdasarkan harga buku
        $transaction_details = [
            'order_id' => uniqid(), // ID transaksi unik
            'gross_amount' => $book->price, // Harga buku dari database
        ];

        // Data item yang akan dibeli
        $item_details = [
            [
                'id' => $book->id,
                'price' => $book->price, // Harga buku
                'quantity' => 1,
                'name' => $book->title, // Nama buku
            ],
        ];

        // Data customer berdasarkan pengguna yang sedang login
        $customer_details = [
            'first_name' => 'Theodorus',
            'last_name' => 'Setiawan' // Jika Anda memiliki kolom last_name di tabel users, Anda bisa menggunakannya Pastikan kolom phone ada di tabel users atau gunakan nilai default
        ];

        // Parameter transaksi
        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        ];

        // Buat Snap Token
        $snapToken = Snap::getSnapToken($transaction);

        // Tampilkan halaman pembayaran dengan Snap Token
        return view('payment', ['snap_token' => $snapToken, 'book' => $book]);
    }
}

