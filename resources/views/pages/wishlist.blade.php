@extends('layouts.app-public')
@section('title', 'Wishlist')
@section('content')
<div class="site-wrapper-reveal">
    <div class="wishlist-page-area section-space--ptb_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="wishlist-items">
                                <!-- Wishlist items will be dynamically added here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addition_script')
<script src="{{asset('pages/js/wishlist.js')}}"></script>
@endsection

<style>
    .wishlist-page-area .product-remove .btn {
        padding: 10px 15px;
        font-size: 16px;
        white-space: nowrap;
        width: 100%;
        max-width: 200px;
    }
    
    @media (max-width: 768px) {
        .wishlist-page-area .product-remove .btn {
            font-size: 14px;
            padding: 8px 12px;
        }
    }
    
    .wishlist-page-area .product-name h4 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .wishlist-page-area .product-price-cart .amount {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
    }

    .wishlist-page-area .product-remove .btn-success {
        background-color: #28a745; /* Warna hijau default Bootstrap */
        border-color: #28a745;
        padding: 10px 15px;
        font-size: 16px;
        white-space: nowrap;
        width: 100%;
        max-width: 200px;
        color: white !important;
    }
    
    .wishlist-page-area .product-remove .btn-success:hover,
    .wishlist-page-area .product-remove .btn-success:focus {
        background-color: #218838; /* Warna hijau yang lebih gelap saat hover */
        border-color: #1e7e34;
        color: white !important;
    }
    
    @media (max-width: 768px) {
        .wishlist-page-area .product-name h4 {
            font-size: 1rem;
        }
        
        .wishlist-page-area .product-price-cart .amount {
            font-size: 1rem;
        }
        
        .wishlist-page-area .product-remove .btn-success {
            font-size: 14px;
            padding: 8px 12px;
        }
    }
</style>