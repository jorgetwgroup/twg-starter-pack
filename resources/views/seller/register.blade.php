<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Electronics Store
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.css') }}">
  </head>
  <!-- Body-->
  <body class="toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#signin-tab" data-toggle="tab" role="tab" aria-selected="true"><i class="czi-unlocked mr-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link" href="#signup-tab" data-toggle="tab" role="tab" aria-selected="false"><i class="czi-user mr-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="form-group">
                <label for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group d-flex flex-wrap justify-content-between">
                <div class="custom-control custom-checkbox mb-2">
                  <input class="custom-control-input" type="checkbox" id="si-remember">
                  <label class="custom-control-label" for="si-remember">Remember me</label>
                </div><a class="font-size-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="form-group">
                <label for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="form-group">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="form-group">
                <label for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn">
                    <input class="custom-control-input" type="checkbox"><i class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title product-title"><a href="shop-single-v2.html" data-toggle="tooltip" data-placement="right" title="Go to product page">Smartwatch Youth Edition<i class="czi-arrow-right font-size-lg ml-2"></i></a></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pr-lg-0">
                <div class="cz-product-gallery">
                  <div class="cz-preview order-sm-2">
                    <div class="cz-preview-item active" id="first"><img class="cz-image-zoom" src="{{ asset('img/shop/single/gallery/05.jpg') }}" data-zoom="img/shop/single/gallery/05.jpg') }}" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="second"><img class="cz-image-zoom" src="{{ asset('img/shop/single/gallery/06.jpg') }}" data-zoom="img/shop/single/gallery/06.jpg') }}" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="third"><img class="cz-image-zoom" src="{{ asset('img/shop/single/gallery/07.jpg') }}" data-zoom="img/shop/single/gallery/07.jpg') }}" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                    <div class="cz-preview-item" id="fourth"><img class="cz-image-zoom" src="{{ asset('img/shop/single/gallery/08.jpg') }}" data-zoom="img/shop/single/gallery/08.jpg') }}" alt="Product image">
                      <div class="cz-image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="cz-thumblist order-sm-1"><a class="cz-thumblist-item active" href="#first"><img src="{{ asset('img/shop/single/gallery/th05.jpg') }}" alt="Product thumb"></a><a class="cz-thumblist-item" href="#second"><img src="{{ asset('img/shop/single/gallery/th06.jpg') }}" alt="Product thumb"></a><a class="cz-thumblist-item" href="#third"><img src="{{ asset('img/shop/single/gallery/th07.jpg') }}" alt="Product thumb"></a><a class="cz-thumblist-item" href="#fourth"><img src="{{ asset('img/shop/single/gallery/th08.jpg') }}" alt="Product thumb"></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                <div class="product-details ml-auto pb-3">
                  <div class="mb-2">
                    <div class="star-rating"><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star-filled active"></i><i class="sr-star czi-star"></i>
                    </div><span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">74 Reviews</span>
                  </div>
                  <div class="h3 font-weight-normal text-accent mb-3 mr-1">$124.<small>99</small></div>
                  <div class="font-size-sm mb-4"><span class="text-heading font-weight-medium mr-1">Color:</span><span class="text-muted">Dark blue/Orange</span></div>
                  <div class="position-relative mr-n4 mb-3">
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color1" checked>
                      <label class="custom-option-label rounded-circle" for="color1"><span class="custom-option-color rounded-circle" style="background-color: #f25540;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color2">
                      <label class="custom-option-label rounded-circle" for="color2"><span class="custom-option-color rounded-circle" style="background-color: #65805b;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color3">
                      <label class="custom-option-label rounded-circle" for="color3"><span class="custom-option-color rounded-circle" style="background-color: #f5f5f5;"></span></label>
                    </div>
                    <div class="custom-control custom-option custom-control-inline mb-2">
                      <input class="custom-control-input" type="radio" name="color" id="color4">
                      <label class="custom-option-label rounded-circle" for="color4"><span class="custom-option-color rounded-circle" style="background-color: #333;"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="czi-security-check"></i>Product available</div>
                  </div>
                  <div class="d-flex align-items-center pt-2 pb-4">
                    <select class="custom-select mr-3" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow btn-block" type="button"><i class="czi-cart font-size-lg mr-2"></i>Add to Cart</button>
                  </div>
                  <div class="d-flex mb-4">
                    <div class="w-100 mr-3">
                      <button class="btn btn-secondary btn-block" type="button"><i class="czi-heart font-size-lg mr-2"></i><span class='d-none d-sm-inline'>Add to </span>Wishlist</button>
                    </div>
                    <div class="w-100">
                      <button class="btn btn-secondary btn-block" type="button"><i class="czi-compare font-size-lg mr-2"></i>Compare</button>
                    </div>
                  </div>
                  <h5 class="h6 mb-3 py-2 border-bottom"><i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>Product info</h5>
                  <h6 class="font-size-sm mb-2">General</h6>
                  <ul class="font-size-sm pb-2">
                    <li><span class="text-muted">Model: </span>Amazfit Smartwatch</li>
                    <li><span class="text-muted">Gender: </span>Unisex</li>
                    <li><span class="text-muted">OS campitibility: </span>Android / iOS</li>
                  </ul>
                  <h6 class="font-size-sm mb-2">Physical specs</h6>
                  <ul class="font-size-sm pb-2">
                    <li><span class="text-muted">Shape: </span>Rectangular</li>
                    <li><span class="text-muted">Body material: </span>Plastics / Ceramics</li>
                    <li><span class="text-muted">Band material: </span>Silicone</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar Electronics Store-->
    <header class="box-shadow-sm">
      <!-- Topbar-->
      <div class="topbar topbar-dark bg-dark">
        <div class="container">
          <div>
            <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown"><img class="mr-2" width="20" src="{{ asset('img/flags/en.png') }}" alt="English"/>Eng / $</a>
              <ul class="dropdown-menu">
                <li class="dropdown-item">
                  <select class="custom-select custom-select-sm">
                    <option value="usd">$ USD</option>
                    <option value="eur">€ EUR</option>
                    <option value="ukp">£ UKP</option>
                    <option value="jpy">¥ JPY</option>
                  </select>
                </li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/fr.png') }}" alt="Français"/>Français</a></li>
                <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/de.png') }}" alt="Deutsch"/>Deutsch</a></li>
                <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/it.png') }}" alt="Italiano"/>Italiano</a></li>
              </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block border-left border-light pl-3 ml-3"><span class="text-muted mr-1">Available 24/7 at</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
          </div>
          <div class="topbar-text dropdown d-md-none ml-auto"><a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">Wishlist / Compare / Track</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="account-wishlist.html"><i class="czi-heart text-muted mr-2"></i>Wishlist (3)</a></li>
              <li><a class="dropdown-item" href="comparison.html"><i class="czi-compare text-muted mr-2"></i>Compare (3)</a></li>
              <li><a class="dropdown-item" href="order-tracking.html"><i class="czi-location text-muted mr-2"></i>Order tracking</a></li>
            </ul>
          </div>
          <div class="d-none d-md-block ml-3 text-nowrap"><a class="topbar-link d-none d-md-inline-block" href="account-wishlist.html"><i class="czi-heart mt-n1"></i>Wishlist (3)</a><a class="topbar-link ml-3 pl-3 border-left border-light d-none d-md-inline-block" href="comparison.html"><i class="czi-compare mt-n1"></i>Compare (3)</a><a class="topbar-link ml-3 border-left border-light pl-3 d-none d-md-inline-block" href="order-tracking.html"><i class="czi-location mt-n1"></i>Order tracking</a></div>
        </div>
      </div>
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-dark">
        <div class="navbar navbar-expand-lg navbar-dark">
          <div class="container"><a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="index.html" style="min-width: 7rem;"><img width="100" src="{{ asset('img/logo-pyme.png') }}" alt="Cartzilla"/></a><a class="navbar-brand d-sm-none mr-2" href="index.html" style="min-width: 4.625rem;"><img width="74" src="{{ asset('img/logo-icon.png') }}" alt="Cartzilla"/></a>
            <!-- Search-->
            <div class="input-group-overlay d-none d-lg-block mx-4">
              <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
              <input class="form-control prepended-form-control appended-form-control" type="text" placeholder="Search for products">
              <div class="input-group-append-overlay">
                <select class="custom-select">
                  <option>All categories</option>
                  <option>Computers</option>
                  <option>Smartphones</option>
                  <option>TV, Video, Audio</option>
                  <option>Cameras</option>
                  <option>Headphones</option>
                  <option>Wearables</option>
                  <option>Printers</option>
                  <option>Video Games</option>
                  <option>Home Music</option>
                  <option>Data Storage</option>
                </select>
              </div>
            </div>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-menu"></i></div></a><a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#signin-modal" data-toggle="modal">
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon czi-user"></i></div>
                <div class="navbar-tool-text ml-n3"><small>Hello, Sign in</small>My Account</div></a>
              <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon czi-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$1,247.00</a>
                <!-- Cart dropdown-->
                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                  <div class="widget widget-cart px-3 pt-2 pb-3">
                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                      <div class="widget-cart-item pb-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/05.jpg') }}" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Bluetooth Headphones</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$259.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/06.jpg') }}" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$122.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/07.jpg') }}" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$799.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="widget-cart-item py-2 border-bottom">
                        <button class="close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                        <div class="media align-items-center"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/08.jpg') }}" alt="Product"/></a>
                          <div class="media-body">
                            <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smart TV Box</a></h6>
                            <div class="widget-product-meta"><span class="text-accent mr-2">$67.<small>00</small></span><span class="text-muted">x 1</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                      <div class="font-size-sm mr-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent font-size-base ml-1">$1,247.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="czi-arrow-right ml-1 mr-n1"></i></a>
                    </div><a class="btn btn-primary btn-sm btn-block" href="checkout-details.html"><i class="czi-card mr-2 font-size-base align-middle"></i>Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-expand-lg navbar-dark navbar-stuck-menu mt-n2 pt-0 pb-2">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group-overlay d-lg-none my-3">
                <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                <input class="form-control prepended-form-control" type="text" placeholder="Search for products">
              </div>
              <!-- Departments menu-->
              <ul class="navbar-nav mega-nav pr-lg-2 mr-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown"><i class="czi-menu align-middle mt-n1 mr-2"></i>Departments</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-laptop opacity-60 font-size-lg mt-n1 mr-2"></i>Computers &amp; Accessories</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Computers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laptops &amp; Tablets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Computers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer External Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Computer Internal Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Networking Products (NAS)</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Single Board Computers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Desktop Barebones</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Monitors</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags, Cases &amp; Sleeves</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Adapters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cooling Pads</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Screens</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Security Locks</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stands</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/07.jpg') }}" alt="Computers & Accessories"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$149.<small>80</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-mobile opacity-60 font-size-lg mt-n1 mr-2"></i>Smartphones &amp; Tablets</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links mb-3">
                              <h6 class="font-size-base mb-3">Smartphones</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPhone</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Smartphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Phablets</a></li>
                              </ul>
                            </div>
                            <div class="widget widget-links">
                              <h6 class="font-size-base">Tablets</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Apple iPad</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Android Tablets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tablets with Keyboard</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessory Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Battery Packs</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Car Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Charges &amp; Power Adapters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">FM Transmitters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mounts &amp; Stands</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Replacement Parts</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Styluses</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/09.jpg') }}" alt="Smartphones & Tablets"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$127.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-monitor opacity-60 font-size-lg mt-n1 mr-2"></i>TV, Video &amp; Audio</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Television &amp; Video</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV Sets</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Blue-ray Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">HD DVD Players &amp; Recorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DVD-VCR Combos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DTV Converters</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Receivers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">AV Amplifiers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projectors</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Projection Screens</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satelite Television</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">TV-DTD Combos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Cinema Systems</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Streaming Media Players</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">VCRs</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Glasses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Lens Attachments</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/08.jpg') }}" alt="TV, Video & Audio"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$78.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-camera opacity-60 font-size-lg mt-n1 mr-2"></i>Cameras, Photo &amp; Video</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Cameras &amp; Lenses</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Point &amp; Shoot Digital Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">DSLR Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mirrorless Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Body Mounted Cameras</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorders</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Lenses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camera Lenses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Macro &amp; Ringlight Flashes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Shoe Mount Flashes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Tripods &amp; Monopods</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Studio</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bags &amp; Cases</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Binoculars &amp; Scopes</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Batteries &amp; Chargers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Camcorder Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Protector Foils</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Filters &amp; Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Remote Controls</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rain Covers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Viewfinders</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/10.jpg') }}" alt="Cameras, Photo & Video"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$210.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-earphones opacity-60 font-size-lg mt-n1 mr-2"></i>Headphones</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Headphones</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Earbud Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Over-Ear Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">On-Ear Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sports &amp; Fitness Headphones</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Noise-Cancelling Headphones</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Accessories</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cases &amp; Sleeves</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cables &amp; Cords</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ear Pads</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Repair Kits</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Cleaning Equipment</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/11.jpg') }}" alt="Headphones"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$35.<small>99</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-watch opacity-60 font-size-lg mt-n1 mr-2"></i>Wearable Electronics</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Gadgets</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smartwatches</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Fitness Trackers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Smart Glasses</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Rings</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Virtual Reality</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Clips, Arm &amp; Wristbands</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/12.jpg') }}" alt="Wearable Electronics"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$79.<small>50</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-printer opacity-60 font-size-lg mt-n1 mr-2"></i>Printers &amp; Ink</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links mb-3">
                              <h6 class="font-size-base mb-3">By type</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">All-in-One</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Copying</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Faxing</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printing</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Printing Only</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Scanning</a></li>
                              </ul>
                            </div>
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Scanners</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Business Card Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Document Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Flatbed &amp; Photo Scanners</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Slide &amp; Negative Scanners</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base">Printers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Dot Matrix Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Inkjet Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Label Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Laser Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Photo Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wide Format Printers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Plotter Printers</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/13.jpg') }}" alt="Printers & Ink"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$54.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-joystick opacity-60 font-size-lg mt-n1 mr-2"></i>Video Games</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Games &amp; Hardware</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Video Games</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 4</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation 3</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox One</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Xbox 360</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo Switch</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii U</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wii</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PC</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Mac</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo 3DS &amp; 2DS</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Nintendo DS</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">PlayStation Vita</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sony PSP</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Retro Gaming</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Microconsoles</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Accessories</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Digital Games</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/14.jpg') }}" alt="Video Games"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$19.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-speaker opacity-60 font-size-lg mt-n1 mr-2"></i>Speakers &amp; Home Music</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Speakers</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bluetooth Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Bookshelf Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Ceiling &amp; In-Wall Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Center-Channel Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floorstanding Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Outdoor Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Satellite Speakers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Sound Bars</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Subwoofers</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Surround Sound Systems</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Home Audio</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Theater</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Wireless &amp; Streaming Audio</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Stereo System Components</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Compact Radios &amp; Stereos</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Home Audio Accessories</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/16.jpg') }}" alt="Speakers & Home Music"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$43.<small>00</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="czi-server opacity-60 font-size-lg mt-n1 mr-2"></i>HDD/SSD Data Storage</a>
                      <div class="dropdown-menu p-0">
                        <div class="d-flex flex-wrap flex-md-nowrap px-2">
                          <div class="mega-dropdown-column py-4 px-3">
                            <div class="widget widget-links">
                              <h6 class="font-size-base mb-3">Data Storage</h6>
                              <ul class="widget-list">
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Hard Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Solid State Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">External Zip Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Floppy &amp; Tape Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Hard Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Internal Solid State Drives</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">Network Attached Storage</a></li>
                                <li class="widget-list-item pb-1"><a class="widget-list-link" href="#">USB Flash Drives</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a class="d-block mb-2" href="#"><img src="{{ asset('img/shop/departments/15.jpg') }}" alt="HDD/SSD Data Storage"/></a>
                            <div class="font-size-sm mb-3">Starting from <span class='font-weight-medium'>$21.<small>60</small></span></div><a class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i class="czi-arrow-right font-size-xs ml-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th01.jpg') }}" alt="Fashion Store v.1"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th03.jpg') }}" alt="Electronics Store"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th04.jpg') }}" alt="Marketplace"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th06.jpg') }}" alt="Grocery Store"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th07.jpg') }}" alt="Food Delivery Service"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th02.jpg') }}" alt="Fashion Store v.2"/></a></div>
                    </li>
                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                      <div class="dropdown-menu h-100 animation-0 mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="{{ asset('img/home/preview/th05.jpg') }}" alt="Single Product / Brand Store"/></a></div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                  <div class="dropdown-menu p-0">
                    <div class="d-flex flex-wrap flex-md-nowrap px-2">
                      <div class="mega-dropdown-column py-4 px-3">
                        <div class="widget widget-links mb-3">
                          <h6 class="font-size-base mb-3">Shop layouts</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                          </ul>
                        </div>
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Marketplace</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column py-4 px-3">
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Shop pages</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="mega-dropdown-column py-4 pr-3">
                        <div class="widget widget-links mb-3">
                          <h6 class="font-size-base mb-3">Grocery store</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                          </ul>
                        </div>
                        <div class="widget widget-links">
                          <h6 class="font-size-base mb-3">Food Delivery</h6>
                          <ul class="widget-list">
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                            <li class="widget-list-item pb-1"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Account</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Shop User Account</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                        <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                        <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                        <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                        <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vendor Dashboard</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                        <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                        <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                        <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                        <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                        <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                        <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                    <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navbar Variants</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                        <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                        <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                        <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                        <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                        <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                        <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                        <li><a class="dropdown-item" href="home-single-store.html">Transparent</a></li>
                      </ul>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                    <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Help Center</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                        <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                        <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">404 Not Found</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                        <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog List Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Blog Grid Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Single Post Layouts</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Docs / Components</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-book"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="components/typography.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-server"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Components<span class="badge badge-info ml-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="docs/changelog.html">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-edit"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Changelog<span class="badge badge-success ml-2">v1.4</span></span><small class="d-block text-muted">Regular updates</small></div>
                        </div></a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="mailto:contact@createx.studio">
                        <div class="d-flex">
                          <div class="lead text-muted pt-1"><i class="czi-help"></i></div>
                          <div class="ml-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">contact@createx.studio</small></div>
                        </div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Page title-->
    <!-- Page Content-->
    <!-- Hero (Banners + Slider)-->
    <section class="bg-secondary py-4 pt-md-5">
      <div class="container py-xl-2">
        <div class="row">
          <!-- Slider     -->
          <div class="col-xl-9 pt-xl-4 order-xl-2">
            <div class="cz-carousel">
              <div class="cz-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: false}">
                <div>
                  <div class="row align-items-center">
                    <div class="col-md-6 order-md-2"><img class="d-block mx-auto" src="{{ asset('img/home/hero-slider/05.jpg') }}" alt="VR Collection"></div>
                    <div class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-left">
                      <h2 class="font-weight-light pb-1 from-bottom">World of music with</h2>
                      <h1 class="display-4 from-bottom delay-1">Headphones</h1>
                      <h5 class="font-weight-light pb-3 from-bottom delay-2">Choose between top brands</h5><a class="btn btn-primary btn-shadow scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                    </div>
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
                      <h5 class="font-weight-light pb-3 scale-up delay-2">&amp; Accessories collection</h5><a class="btn btn-primary btn-shadow scale-up delay-4" href="shop-grid-ls.html">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banner group-->
          <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0">
            <div class="table-responsive" data-simplebar>
              <div class="d-flex d-xl-block"><a class="media w-100 align-items-center bg-faded-info rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm01.png') }}" width="125" alt="Banner">
                  <div class="media-body py-4 px-2">
                    <h5 class="mb-2"><span class="font-weight-light">Next Gen</span><br>Video <span class="font-weight-light">with</span><br>360 Cam</h5>
                    <div class="text-info font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i></div>
                  </div></a><a class="media w-100 align-items-center bg-faded-warning rounded-lg pt-2 pl-2 mb-4 mr-4 mr-xl-0" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm02.png') }}" width="125" alt="Banner">
                  <div class="media-body py-4 px-2">
                    <h5 class="mb-2"><span class="font-weight-light">Top Rated</span><br>Gadgets<br><span class="font-weight-light">are on </span>Sale</h5>
                    <div class="text-warning font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i></div>
                  </div></a><a class="media w-100 align-items-center bg-faded-success rounded-lg pt-2 pl-2 mb-4" href="#" style="min-width: 16rem;"><img src="{{ asset('img/home/banners/banner-sm03.png') }}" width="125" alt="Banner">
                  <div class="media-body py-4 px-2">
                    <h5 class="mb-2"><span class="font-weight-light">Catch Big</span><br>Deals <span class="font-weight-light">on</span><br>Earbuds</h5>
                    <div class="text-success font-size-sm">Shop now<i class="czi-arrow-right font-size-xs ml-1"></i></div>
                  </div></a></div>
            </div>
          </div>
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
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h3>
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
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">AirPort Extreme Base Station</a></h3>
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
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">TV, Video &amp; Audio</a>
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart TV LED 49’’ Ultra HD</a></h3>
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
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Smart Home</a>
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart Speaker with Voice Control</a></h3>
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
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Wearable Electronics</a>
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Fitness GPS Smart Watch</a></h3>
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
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Popular Smartphone 128GB</a></h3>
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
            <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Wearable Electronics</a>
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h3>
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
              <h3 class="product-title font-size-sm"><a href="shop-single-v2.html">Convertible 2-in-1 HD Laptop</a></h3>
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
            <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/05.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$259.<small>00</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/06.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud Security Camera</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$122.<small>00</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/07.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S10</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$799.<small>00</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/cart/widget/08.jpg') }}" alt="Product"/></a>
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
            <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/06.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Monoblock Desktop PC</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$1,949.<small>00</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/07.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Laserjet Printer All-in-One</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/08.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Console Controller Charger</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$14.<small>97</small></span>
                  <del class="text-muted font-size-xs">$16.<small>47</small></del>
                </div>
              </div>
            </div>
            <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/09.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Smart Watch Series 5, Aluminium</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$349.<small>99</small></span></div>
              </div>
            </div>
            <p class="mb-0">...</p><a class="font-size-sm" href="shop-grid-ls.html">View more<i class="czi-arrow-right font-size-xs ml-1"></i></a>
          </div>
        </div>
        <!-- Top rated-->
        <div class="col-lg-4 col-md-6 mb-2 py-3">
          <div class="widget">
            <h3 class="widget-title">Top rated</h3>
            <div class="media align-items-center pb-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/10.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Android Smartphone S9</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$749.<small>99</small></span>
                  <del class="text-muted font-size-xs">$859.<small>99</small></del>
                </div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/11.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">Wireless Bluetooth Headphones</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$428.<small>60</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2 border-bottom"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/12.jpg') }}" alt="Product"/></a>
              <div class="media-body">
                <h6 class="widget-product-title"><a href="shop-single-v2.html">360 Degrees Camera</a></h6>
                <div class="widget-product-meta"><span class="text-accent">$98.<small>75</small></span></div>
              </div>
            </div>
            <div class="media align-items-center py-2"><a class="d-block mr-2" href="shop-single-v2.html"><img width="64" src="{{ asset('img/shop/widget/13.jpg') }}" alt="Product"/></a>
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
    <section class="container pb-5 mb-md-3">
      <div class="border rounded-lg p-3">
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="bg-secondary p-5 text-center"><img class="d-block mb-4 mx-auto" src="{{ asset('img/home/yt-logo.png') }}" width="120" alt="YouTube">
              <div class="media justify-content-center align-items-center mb-4"><img class="mr-2" src="{{ asset('img/home/yt-subscribers.png') }}" width="126" alt="YouTube Subscribers"><span class="font-size-sm">250k+</span></div><a class="btn btn-primary border-0 btn-sm mb-3" href="#" style="background-color: #ff0000;"><i class="czi-add-user mr-2"></i>Subscribe*</a>
              <p class="font-size-sm mb-0">*View latest gadgets reviews available for purchase in our store.</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-2">
              <h2 class="h4 mb-3">Latest videos from Cartzilla channel</h2><a class="btn btn-outline-accent btn-sm mb-3" href="#">More videos<i class="czi-arrow-right font-size-xs ml-1 mr-n1"></i></a>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/vS93u75NnPo">
                  <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:16</span><img class="w-100" src="{{ asset('img/home/video/cover01.jpg') }}" alt="Video cover"></div>
                  <h6 class="font-size-sm pt-1">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</h6></a></div>
              <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/B6LaYgGogf0">
                  <div class="video-cover-thumb mb-2"><span class="badge badge-dark">7:27</span><img class="w-100" src="{{ asset('img/home/video/cover02.jpg') }}" alt="Video cover"></div>
                  <h6 class="font-size-sm pt-1">5 Super Useful Gadgets on Cartzilla You Must Have in 2020</h6></a></div>
              <div class="col-lg-4 col-6 mb-3"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/kB-ROfRS9V4">
                  <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:20</span><img class="w-100" src="{{ asset('img/home/video/cover03.jpg') }}" alt="Video cover"></div>
                  <h6 class="font-size-sm pt-1">Top 5 New Amazing Gadgets on Cartzilla You Must See</h6></a></div>
              <div class="col-lg-4 col-6 mb-3 d-lg-none"><a class="video-cover video-popup-btn d-block text-decoration-0 px-2" href="https://www.youtube.com/embed/sJK67XXE_Rg">
                  <div class="video-cover-thumb mb-2"><span class="badge badge-dark">6:11</span><img class="w-100" src="{{ asset('img/home/video/cover04.jpg') }}" alt="Video cover"></div>
                  <h6 class="font-size-sm font-weight-bold pt-1">5 Amazing Construction Inventions and Working Tools Available...</h6></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog + Instagram info cards-->
    <section class="container-fluid px-0">
      <div class="row no-gutters">
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
            <div class="card-body text-center"><i class="czi-edit h3 mt-2 mb-4 text-primary"></i>
              <h3 class="h5 mb-1">Read the blog</h3>
              <p class="text-muted font-size-sm">Latest store, fashion news and trends</p>
            </div></a></div>
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
            <div class="card-body text-center"><i class="czi-instagram h3 mt-2 mb-4 text-accent"></i>
              <h3 class="h5 mb-1">Follow on Instagram</h3>
              <p class="text-muted font-size-sm">#ShopWithCartzilla</p>
            </div></a></div>
      </div>
    </section>
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
    <!-- Footer-->
    <!-- Footer-->
    <footer class="bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="cz-subscribe-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group input-group-overlay flex-nowrap">
                  <div class="input-group-prepend-overlay"><span class="input-group-text text-muted font-size-base"><i class="czi-mail"></i></span></div>
                  <input class="form-control prepended-form-control" type="email" name="EMAIL" placeholder="Your email" required>
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="cz-subscribe-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div><small class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</small>
                <div class="subscribe-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="mr-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="media"><i class="czi-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="media-body pl-3">
                  <h6 class="font-size-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 font-size-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light pb-4 mb-3">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-left mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 mr-3" href="#"><img class="d-block" width="117" src="{{ asset('img/footer-logo-light.png') }}" alt="Cartzilla"/></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-toggle="dropdown"><img class="mr-2" width="20" src="{{ asset('img/flags/en.png') }}" alt="English"/>Eng / $
                  </button>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <select class="custom-select custom-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/fr.png') }}" alt="Français"/>Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/de.png') }}" alt="Deutsch"/>Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="mr-2" width="20" src="{{ asset('img/flags/it.png') }}" alt="Italiano"/>Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-right mb-4">
              <div class="mb-3"><a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#"><i class="czi-twitter"></i></a><a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#"><i class="czi-facebook"></i></a><a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#"><i class="czi-instagram"></i></a><a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#"><i class="czi-pinterest"></i></a><a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#"><i class="czi-youtube"></i></a></div><img class="d-inline-block" width="187" src="{{ asset('img/cards-alt.png') }}" alt="Payment methods"/>
            </div>
          </div>
          <div class="pb-4 font-size-xs text-light opacity-50 text-center text-md-left">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices-->
    <div class="cz-handheld-toolbar">
      <div class="d-table table-fixed w-100"><a class="d-table-cell cz-handheld-toolbar-item" href="account-wishlist.html"><span class="cz-handheld-toolbar-icon"><i class="czi-heart"></i></span><span class="cz-handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="#navbarCollapse" data-toggle="collapse" onclick="window.scrollTo(0, 0)"><span class="cz-handheld-toolbar-icon"><i class="czi-menu"></i></span><span class="cz-handheld-toolbar-label">Menu</span></a><a class="d-table-cell cz-handheld-toolbar-item" href="shop-cart.html"><span class="cz-handheld-toolbar-icon"><i class="czi-cart"></i><span class="badge badge-primary badge-pill ml-1">4</span></span><span class="cz-handheld-toolbar-label">$265.00</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon czi-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/jquery/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/drift-zoom/dist/Drift.min.js') }}"></script>
    <script src="{{ asset('vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('vendor/lg-video.js/dist/lg-video.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>
  </body>
</html>
