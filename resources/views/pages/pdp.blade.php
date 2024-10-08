@extends('layouts.app-public')
@section('title', 'Book Detail')
@section('content')
<div class="site-wrapper-reveal">

    <div class="single-product-wrap section-space--pt_90 border-bottom pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">

                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images-2 slider-lg-image-2">

                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset('assets/images/product/single-product-01.webp')}}" class="poppu-img product-img-main-href">
                                        <img src="{{asset('assets/images/product/single-product-01.webp')}}" class="img-fluid product-img-main-src" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset('assets/images/product/single-product-02.webp')}}" class="poppu-img">
                                        <img src="{{asset('assets/images/product/single-product-03.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset('assets/images/product/single-product-03.webp')}}" class="poppu-img">
                                        <img src="{{asset('assets/images/product/single-product-03.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{asset('assets/images/product/single-product-04.webp')}}" class="poppu-img">
                                        <img src="{{asset('assets/images/product/single-product-04.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="product-details-thumbs-2 slider-thumbs-2">
                            <div class="sm-image"><img src="{{asset('assets/images/product/small/1-100x100.webp')}}" alt="product image thumb" class="product-img-main-src"></div>
                            <div class="sm-image"><img src="{{asset('assets/images/product/small/2-100x100.webp')}}" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{asset('assets/images/product/small/3-100x100.webp')}}" alt="product image thumb"></div>
                            <div class="sm-image"><img src="{{asset('assets/images/product/small/4-100x100.webp')}}" alt="product image thumb"></div>
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <div class="product-details-content">

                        <h5 class="font-weight--reguler mb-10" id="product-name"></h5>
                        <div class="quickview-ratting-review mb-10">
                            <div class="quickview-ratting-wrap">
                                <div class="quickview-ratting" id="product-review-stars">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star-empty"></i>
                                </div>
                                <a href="#" id="product-review-body-count"></a>
                            </div>
                        </div>
                        <h3 class="price" id="product-price"></h3>

                        <div class="stock mt-10" id="product-status-stock"></div>

                        <div class="quickview-peragraph mt-10"><p id="product-description"></p></div>


                        <div class="quickview-action-wrap mt-30">
                            <div class="quickview-cart-box">
                                <div class="quickview-quality product-add-to-cart">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                    </div>
                                </div>
                                <div class="text-color-primary product-add-to-cart-is-disabled" style="display:none;font-size:10px">
                                    You may cant buy this item now, but keep it on your wishlist so we can remind you when in stock
                                </div>
                                <div class="quickview-button">
                                    <div class="quickview-cart button product-add-to-cart">
                                    <a href="#" id="purchase-link" class="btn--lg btn--black font-weight--reguler text-white">
                                          Purchase Now
                                         </a>
                                    </div>
                                    <div class="quickview-wishlist button" title="Add to wishlist">
                                        <a href="#" id="add-to-wishlist" class="btn btn-outline-dark">
                                            <i class="icon-heart"></i>
                                        </a>
                                    </div>
                                    <div class="quickview-wishlist button" title="Add to cart">
                                        <a href="#" id="add-to-wishlist22" class="btn btn-outline-dark">
                                            <i class="icon-bag2 icon-large"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="product_meta mt-30">
                            <div class="posted_in item_meta">
                                <span class="label">Author: </span>
                                <span id="product-author" class="text-color-primary"></span>
                            </div>
                            <div class="posted_in item_meta">
                                <span class="label">Publisher: </span>
                                <span id="product-publisher"></span>
                            </div>
                            <div class="tagged_as item_meta">
                                <span class="label">Tag: </span>
                                <span id="product-tags"></span>
                            </div>
                        </div>

                        <div class="product_socials section-space--mt_60">
                            <span class="label">Share this items :</span>
                            <ul class="helendo-social-share socials-inline">
                                <li>
                                    <a class="share-facebook helendo-facebook" href="#" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="share-twitter helendo-twitter" href="#" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                        </svg>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{asset('pages/js/pdp.js')}}"></script>
@endsection