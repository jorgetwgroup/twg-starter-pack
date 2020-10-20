@extends('layouts.base')

@section('content')
<!-- Page title-->
<!-- Page Content-->
<!-- Hero (Banners + Slider)-->
<section class="bg-secondary py-4 pt-md-5">
    <div class="container py-xl-2">
        <div class="row">
            <!-- Slider     -->
            <div class="col-xl-12 pt-xl-4 order-xl-2">
                <div class="cz-carousel">
                    <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                        <div>
                            <div class="row align-items-center">
                                <div class="col-md-12 order-md-2">
                                    <img class="d-block mx-auto" src="{{ asset('img/home/hero-slider/banner-01.png') }}" alt="Registra tu Pyme">
                                </div>
                                {{-- <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-left">
                                    <h2 class="font-weight-light pb-1 from-bottom">World of music with</h2>
                                    <h1 class="display-4 from-bottom delay-1">Headphones</h1>
                                    <h5 class="font-weight-light pb-3 from-bottom delay-2">Choose between top brands</h5>
                                    <a class="btn btn-primary btn-shadow scale-up delay-4" href="shop-grid-ls.html">
                                        Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div>
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="{{ asset('img/home/hero-slider/04.jpg') }}" alt="VR Collection"></div>
                                <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-left">
                                    <h2 class="font-weight-light pb-1 from-left">Explore the best</h2>
                                    <h1 class="display-4 from-left delay-1">VR Collection</h1>
                                    <h5 class="font-weight-light pb-3 from-left delay-2">on the market</h5><a class="btn btn-primary btn-shadow scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="{{ asset('img/home/hero-slider/06.jpg') }}" alt="VR Collection"></div>
                                <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-left">
                                    <h2 class="font-weight-light pb-1 scale-up">Check our huge</h2>
                                    <h1 class="display-4 scale-up delay-1">Smartphones</h1>
                                    <h5 class="font-weight-light pb-3 scale-up delay-2">&amp; Accessories collection
                                    </h5><a class="btn btn-primary btn-shadow scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner group-->
            {{-- <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
                <div class="table-responsive" data-simplebar>
                    <div class="d-flex d-xl-block"><a class="media w-100 align-items-center bg-faded-info rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm01.png') }}" width="125" alt="Banner">
                            <div class="media-body py-4 px-2">
                                <h5 class="mb-2"><span class="font-weight-light">Next Gen</span><br>Video <span class="font-weight-light">with</span><br>360 Cam</h5>
                                <div class="text-info font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i></div>
                            </div>
                        </a><a class="media w-100 align-items-center bg-faded-warning rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm02.png') }}" width="125" alt="Banner">
                            <div class="media-body py-4 px-2">
                                <h5 class="mb-2"><span class="font-weight-light">Top
                                        Rated</span><br>Gadgets<br><span class="font-weight-light">are on
                                    </span>Sale</h5>
                                <div class="text-warning font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i>
                                </div>
                            </div>
                        </a><a class="media w-100 align-items-center bg-faded-success rounded-lg pt-2 pl-2 mb-4" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm03.png') }}" width="125" alt="Banner">
                            <div class="media-body py-4 px-2">
                                <h5 class="mb-2"><span class="font-weight-light">Catch Big</span><br>Deals <span class="font-weight-light">on</span><br>Earbuds</h5>
                                <div class="text-success font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- Products grid (Trending products)-->
<section class="container pt-5">
    <!-- Heading-->
    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 mr-2">Trending products</h2>
        <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">More products<i class="czi-arrow-right ml-1 mr-n1"></i></a></div>
    </div>
    <!-- Grid-->
    <div class="row pt-2 mx-n2">
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/58.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Headphones</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Wireless Bluetooth
                            Headphones</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$198.<small>00</small></span></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/59.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Computers</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">AirPort Extreme Base
                            Station</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$98.<small>50</small></span>
                            <del class="font-size-sm text-muted">$149.<small>99</small></del>
                        </div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/60.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">TV, Video
                        &amp; Audio</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart TV LED 49’’ Ultra
                            HD</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-muted font-size-sm">Out of stock</span></div>
                    </div>
                </div>
                <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm btn-block mb-2" href="shop-single-v2.html">View details</a>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/61.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Smart
                        Home</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart Speaker with Voice
                            Control</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$49.<small>99</small></span></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/62.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Wearable
                        Electronics</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Fitness GPS Smart Watch</a>
                    </h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$317.<small>40</small></span></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/63.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Smartphones</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Popular Smartphone
                            128GB</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$965.<small>00</small></span></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge badge-info badge-shadow">New</span>
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/64.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Wearable
                        Electronics</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart Watch Series 5,
                            Aluminium</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$349.<small>99</small></span></div>
                        <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2">
            <div class="card product-card">
                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style mr-2" href="#"><i class="czi-compare mr-1"></i>Compare</a>
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="czi-heart"></i></button>
                </div><a class="card-img-top d-block overflow-hidden" href="shop-single-v2.html"><img src="{{ asset('img/shop/catalog/65.jpg') }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Computers</a>
                    <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Convertible 2-in-1 HD
                            Laptop</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">$412.<small>00</small></span></div>
                    </div>
                </div>
                <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-cart font-size-sm mr-1"></i>Add to Cart</button>
                    <div class="text-center"><a class="nav-link-style font-size-ms" href="#quick-view-electro" data-toggle="modal"><i class="czi-eye align-middle mr-1"></i>Quick view</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo banner-->
<section class="container mt-4 mb-grid-gutter">
    <div class="bg-faded-info rounded-lg py-4">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="px-4 pr-sm-0 pl-sm-5"><span class="badge badge-danger">Limited Offer</span>
                    <h3 class="mt-4 mb-1 text-body font-weight-light">All new</h3>
                    <h2 class="mb-1">Last Gen iPad Pro</h2>
                    <p class="h5 text-body font-weight-light">at discounted price. Hurry up!</p>
                    <div class="cz-countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                        <div class="cz-countdown-days"><span class="cz-countdown-value"></span><span class="cz-countdown-label text-muted">d</span></div>
                        <div class="cz-countdown-hours"><span class="cz-countdown-value"></span><span class="cz-countdown-label text-muted">h</span></div>
                        <div class="cz-countdown-minutes"><span class="cz-countdown-value"></span><span class="cz-countdown-label text-muted">m</span></div>
                        <div class="cz-countdown-seconds"><span class="cz-countdown-value"></span><span class="cz-countdown-label text-muted">s</span></div>
                    </div><a class="btn btn-accent" href="#">View offers<i class="czi-arrow-right font-size-ms ml-1"></i></a>
                </div>
            </div>
            <div class="col-md-7"><img src="{{ asset('img/home/banners/offer.jpg') }}" alt="iPad Pro Offer"></div>
        </div>
    </div>
</section>
<!-- Brands carousel-->
<section class="container mb-5">
    <div class="cz-carousel border-right">
        <div class="cz-carousel-inner" data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/13.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/14.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/17.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/16.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/15.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/18.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/19.png') }}" style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img class="d-block mx-auto" src="{{ asset('img/shop/brands/20.png') }}" style="width: 165px;" alt="Brand"></a></div>
        </div>
    </div>
</section>
<!-- Product widgets-->
<section class="container pb-4 pb-md-5">
    <div class="row">
        <!-- Bestsellers-->
        <div class="col-lg-4 col-md-6 mb-2 py-3">
            <div class="widget">
                <h3 class="widget-title">Bestsellers</h3>
                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/05.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth
                                Headphones</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$259.<small>00</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/06.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a>
                        </h6>
                        <div class="widget-product-meta"><span class="text-accent">$122.<small>00</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/07.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a>
                        </h6>
                        <div class="widget-product-meta"><span class="text-accent">$799.<small>00</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/08.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$67.<small>00</small></span>
                            <del class="text-muted font-size-xs">$90.<small>43</small></del>
                        </div>
                    </div>
                </div>
                <p class="mb-0">...</p><a class="font-size-sm" href="shop-grid-ls.html">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>
            </div>
        </div>
        <!-- New arrivals-->
        <div class="col-lg-4 col-md-6 mb-2 py-3">
            <div class="widget">
                <h3 class="widget-title">New arrivals</h3>
                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/06.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop PC</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$1,949.<small>00</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/07.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer
                                All-in-One</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/08.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Console Controller
                                Charger</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$14.<small>97</small></span>
                            <del class="text-muted font-size-xs">$16.<small>47</small></del>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/09.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch Series 5,
                                Aluminium</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$349.<small>99</small></span>
                        </div>
                    </div>
                </div>
                <p class="mb-0">...</p><a class="font-size-sm" href="shop-grid-ls.html">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>
            </div>
        </div>
        <!-- Top rated-->
        <div class="col-lg-4 col-md-6 mb-2 py-3">
            <div class="widget">
                <h3 class="widget-title">Top rated</h3>
                <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/10.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S9</a>
                        </h6>
                        <div class="widget-product-meta"><span class="text-accent">$749.<small>99</small></span>
                            <del class="text-muted font-size-xs">$859.<small>99</small></del>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/11.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth
                                Headphones</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/12.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees Camera</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$98.<small>75</small></span>
                        </div>
                    </div>
                </div>
                <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/13.jpg') }}" alt="Product" /></a>
                    <div class="media-body">
                        <h6 class="widget-product-title"><a href="shop-single-v2.html">Digital Camera 40MP</a></h6>
                        <div class="widget-product-meta"><span class="text-accent">$210.<small>00</small></span>
                            <del class="text-muted font-size-xs">$249.<small>00</small></del>
                        </div>
                    </div>
                </div>
                <p class="mb-0">...</p><a class="font-size-sm" href="shop-grid-ls.html">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- YouTube feed-->
{{-- <section class="container pb-5 mb-md-3">
    <div class="border rounded-lg p-3">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="bg-secondary p-5 text-center"><img class="d-block mb-4 mx-auto" src="{{ asset('img/home/yt-logo.png') }}" width="120" alt="YouTube">
                    <div class="media justify-content-center align-items-center mb-4"><img class="mr-2" src="{{ asset('img/home/yt-subscribers.png') }}" width="126" alt="YouTube Subscribers"><span class="font-size-sm">250k+</span></div><a class="btn btn-primary border-0 btn-sm mb-3" href="#" style="background-color: #ff0000;"><i class="czi-add-user mr-2"></i>Subscribe*</a>
                    <p class="font-size-sm mb-0">*View latest gadgets reviews available for purchase in our store.
                    </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-2">
                    <h2 class="h4 mb-3">Latest videos from Cartzilla channel</h2><a class="btn btn-outline-accent btn-sm mb-3" href="#">More videos<i class="czi-arrow-right font-size-xs ml-1 mr-n1"></i></a>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/vS93u75NnPo">
                            <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:16</span><img class="w-100" src="{{ asset('img/home/video/cover01.jpg') }}" alt="Video cover">
                            </div>
                            <h6 class="font-size-sm pt-1">5 New Cool Gadgets You Must See on Cartzilla - Cheap
                                Budget</h6>
                        </a></div>
                    <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/B6LaYgGogf0">
                            <div class="video-cover-thumb mb-2"><span class="badge badge-dark">7:27</span><img class="w-100" src="{{ asset('img/home/video/cover02.jpg') }}" alt="Video cover">
                            </div>
                            <h6 class="font-size-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020
                            </h6>
                        </a></div>
                    <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/kB-ROfRS9V4">
                            <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:20</span><img class="w-100" src="{{ asset('img/home/video/cover03.jpg') }}" alt="Video cover">
                            </div>
                            <h6 class="font-size-sm pt-1">Top 5 New Amazing Gadgets on Cartzilla You Must See</h6>
                        </a></div>
                    <div class="col-lg-4 col-6 mb-3 d-lg-none"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/sJK67XXE_Rg">
                            <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:11</span><img class="w-100" src="{{ asset('img/home/video/cover04.jpg') }}" alt="Video cover">
                            </div>
                            <h6 class="font-size-sm font-weight-bold pt-1">5 Amazing Construction Inventions and
                                Working Tools Available...</h6>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Blog + Instagram info cards-->
{{-- <section class="container-fluid px-0">
    <div class="row no-gutters">
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
                <div class="card-body text-center"><i class="czi-edit h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h5 mb-1">Read the blog</h3>
                    <p class="text-muted font-size-sm">Latest store, fashion news and trends</p>
                </div>
            </a></div>
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                <div class="card-body text-center"><i class="czi-instagram h3 mt-2 mb-4 text-accent"></i>
                    <h3 class="h5 mb-1">Follow on Instagram</h3>
                    <p class="text-muted font-size-sm">#ShopWithCartzilla</p>
                </div>
            </a></div>
    </div>
</section> --}}
<!-- Toast: Added to Cart-->
<div class="toast-container toast-bottom-center">
    <div class="toast mb-3" id="cart-toast" data-delay="5000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success text-white"><i class="czi-check-circle mr-2"></i>
            <h6 class="font-size-sm text-white mb-0 mr-auto">Added to cart!</h6>
            <button class="close text-white ml-2 mb-1" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="toast-body">This item has been added to your cart.</div>
    </div>
</div>
@endsection
