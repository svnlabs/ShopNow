<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShopNow - eCommerce Bootstrap 4 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/vendor/themify.css')}}">
    <!-- othres CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body>
    <div class="main-wrapper">
        <header class="header-area transparent-bar sticky-bar header-padding-3">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-flex ml-50">
                           <div class="main-menu menu-common-style menu-lh-3 menu-margin-4 menu-ngtv-mrg-1 menu-font-2">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a>                                   
                                        </li>  
                                        <li class="angle-shape"><a href="shop.html">Shop </a>

                                       
                                            <ul class="mega-menu mega-menu-hm4">
                                                @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                                <li><a class="menu-title" href="{{route('shop.category',$parent->id)}}">{{$parent->name}}</a>
                                                    <ul >
                                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                                        <li><a href="{{route('shop.category',$child->id)}}">{{$child->name}}</a>
                                                         <ul>
                                                            @foreach(App\Category::where('parent_id',$child->id)->get() as $grand)
                                                                <li><a href="{{route('shop.category',$grand->id)}}">{{$grand->name}}</a></li>
                                                            @endforeach
                                                        </ul>
                                                        </li>
                                                        @endforeach                                                       

                                                    </ul>
                                                </li>
                                                @endforeach
                                                
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                         <div class="col-xl-4 col-lg-4">
                            <div class="header-right-wrap  stick-mt-40">
                                
                                @if(Auth::user())
                                <div class="search-wrap-2 search-wrap-2-mrg border-style">
                                 <div class="header-wishlist">
                                    <a href="wishlist.html"><i class="la la-heart-o"></i></a>
                                </div>
                                </div>
                                <div class="setting-wrap setting-wrap-mrg border-style">
                                    <a class="setting-active" href="#">
                                        <i class="la la-cog"></i>
                                        Account
                                    </a>
                                    <!-- Setting account dropdown start -->
                                    <div class="setting-content">
                                        <ul>
                                            
                                                    <li><a href="{{route('user.index')}}">My Account</a></li>
                                                    <li>
                                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a></li>

                                        
                                                    
                                              
                                        </ul>
                                        <form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel() ? route('admin.logout') : route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                                @else
                                <div class="setting-wrap setting-wrap-mrg border-style">
                                    <div class="header-wishlist">
                                        <a href="{{route('login')}}"><i class="la la-user"></i></a>
                                    </div>
                                </div>
                                @endif
                                <div class="cart-wrap cart-wrap-2">
                                    <button class="cart-active ">
                                       
                                        
                                        <span class="mini-cart-price-2">
                                            @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                    <?php $total = 0 ; $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                     ৳ {{ $total }}
                                            @else
                                                 ৳ 0 
                                       
                                        @endif
                                          </span>
                                         <i class="la la-shopping-cart"></i> 
                                        <span class="count-style-2">@if(session('cart')) {{ count(session('cart')) }} @else 0  @endif</span>
                                        
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Your Cart</h4>
                                            <a class="cart-close" href="#"><i class="la la-close"></i></a>
                                        </div>
                                        <ul>
                                            @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="{{$details['name']}}" src="{{asset('Productimg/'.$details['image'])}}"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">{{ $details['name'] }}</a></h4>
                                                    <span>৳ {{ $details['price'] }}</span>
                                                </div> 
                                                <div class="shopping-cart-delete">
                                                    <button class="la la-trash remove-from-cart" data-id="{{ $id }}"></button>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total">
                                                    @if(session('cart'))                                                
                                                    ৳{{ $total }}
                                                    @else
                                                    ৳ 0 
                                                    @endif
                                                </span></h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover default-btn text-center">
                                                <a class="black-color" href="checkout.html">Continue to Chackout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- main-search start -->
                <div class="main-search-active">
                    <div class="sidebar-search-icon">
                        <button class="search-close"><span class="la la-close"></span></button>
                    </div>
                    <div class="sidebar-search-input">
                        <form>
                            <div class="form-search">
                                <input id="search" class="input-text" value="" placeholder="Search Now" type="search">
                                <button>
                                    <i class="la la-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="assets/images/logo/logo-1.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="cart-wrap common-style">
                                    <button class="cart-active">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="count-style">2 Items</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <h4>Your Cart</h4>
                                            <a class="cart-close" href="#"><i class="la la-close"></i></a>
                                        </div>
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/images/cart/cart-1.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                                    <span>$99.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/images/cart/cart-2.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                                    <span>$99.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="assets/images/cart/cart-3.jpg"></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                                    <span>$99.00</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total">$290.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover default-btn text-center">
                                                <a class="black-color" href="checkout.html">Continue to Chackout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="la la-navicon la-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close"><i class="la la-close"></i></a>
            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version 1 </a></li>
                                        <li><a href="index-2.html">Home version 2 </a></li>
                                        <li><a href="index-3.html">Home version 3 </a></li>
                                        <li><a href="index-4.html">Home version 4 </a></li>
                                        <li><a href="index-5.html">Home version 5 </a></li>
                                        <li><a href="index-6.html">Home version 6 </a></li>
                                        <li><a href="index-7.html">Home version 7 </a></li>
                                        <li><a href="index-8.html">Home version 8 </a></li>
                                        <li><a href="index-9.html">Home version 9 </a></li>
                                        <li><a href="index-10.html">Home version 10 </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">standard grid style</a></li>
                                                <li><a href="shop-2.html">standard style 2</a></li>
                                                <li><a href="shop-2-col.html">shop 2 column</a></li>
                                                <li><a href="shop-no-sidebar.html">shop no sidebar</a></li>
                                                <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                <li><a href="shop-fullwide-no-sidebar.html">fullwide no sidebar </a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop-list.html">list style</a></li>
                                                <li><a href="shop-list-2col.html">list 2 column</a></li>
                                                <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">product details</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">standard style</a></li>
                                                <li><a href="product-details-2.html">standard style 2</a></li>
                                                <li><a href="product-details-tab1.html">tab style 1</a></li>
                                                <li><a href="product-details-tab2.html">tab style 2</a></li>
                                                <li><a href="product-details-tab3.html">tab style 3 </a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-slider.html">slider style</a></li>
                                                <li><a href="product-details-affiliate.html">Affiliate style</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page </a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="my-account.html">my account </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="login-register.html">login/register </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">standard style </a></li>
                                        <li><a href="blog-2col.html">blog 2 column </a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar </a></li>
                                        <li><a href="blog-details.html">blog details </a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-currency-active" href="#">Currency <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown curr-dropdown-active">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">Real</a></li>
                                <li><a href="#">BDT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-account-active" href="#">My Account <i class="la la-angle-down"></i></a>
                        <div class="lang-curr-dropdown account-dropdown-active">
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Creat Account</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mobile-social-wrap">
                    <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                    <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                    <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                    <a class="google" href="#"><i class="ti-google"></i></a>
                </div>
            </div>
        </div>
      
        <div class="breadcrumb-area bg-img" style="background-image:url(frontend/images/bg/breadcrumb.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    @yield('breadcrumb')                    
                </div>
            </div>
        </div>


        @yield('content')



        <footer class="footer-area section-padding-2 bg-bluegray pt-80">
            <div class="container-fluid">
                <div class="footer-top pb-40">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 col-12 col-sm-12">
                            <div class="footer-widget mb-30">
                                <a href="#"><img src="assets/images/logo/logo-1.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-55">
                                <div class="footer-title-3">
                                    <h3>Company</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="about-us.html">About US</a></li>
                                        <li><a href="blog.html">Blogs</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 footer-ngtv-mrg1">
                                <div class="footer-title-3">
                                    <h3>Product</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Customers</a></li>
                                        <li><a href="#">Demos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-35">
                                <div class="footer-title-3">
                                    <h3>Helps</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Introduction</a></li>
                                        <li><a href="#">Feedback</a></li>
                                        <li><a href="#">Referrals</a></li>
                                        <li><a href="#">Network Status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-135">
                                <div class="footer-title-3">
                                    <h3>Social Netowrk</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Linkedin</a></li>
                                        <li><a href="#">Google +</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-40 border-top-1">
                    <div class="row">
                        <div class="col-xl-7 col-lg-10 col-md-11 ml-auto mr-auto">
                            <div class="footer-tag-wrap">
                                <div class="footer-tag-title">
                                    <span>Tags :</span>
                                </div>
                                <div class="footer-tag-list">
                                    <ul>
                                        <li><a href="#">Minimal eCommerce</a></li>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">User Exprience</a></li>
                                        <li><a href="#">Ali Express</a></li>
                                        <li><a href="#">Web </a></li>
                                        <li><a href="#">Digital Expo</a></li>
                                        <li><a href="#">Web Search</a></li>
                                        <li><a href="#">Affiliate </a></li>
                                        <li><a href="#">UCWeb </a></li>
                                        <li><a href="#">Support </a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Best Queality </a></li>
                                        <li><a href="#">Mobile </a></li>
                                        <li><a href="#">24 Support</a></li>
                                        <li><a href="#">Ali Express</a></li>
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#"> Laptop</a></li>
                                        <li><a href="#">Web Search</a></li>
                                        <li><a href="#">Affiliate </a></li>
                                        <li><a href="#">Photoshop </a></li>
                                        <li><a href="#">Support </a></li>
                                        <li><a href="#">Theme.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-3 text-center pt-20 pb-20 border-top-1">
                        <p>Copyright © <a href="#">ShopNow</a>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer> 
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/quickview-l1.jpg" alt="" id="image">
                                    </div>
                                    
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                {{-- <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s4.jpg" alt=""></a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <span id="cat"></span>
                                    <h2 id="proname"></h2>
                                    <div class="product-ratting-review" id="review">
                                        <div class="product-ratting">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-o"></i>
                                        </div>
                                        <div class="product-review">
                                            <span id="review">40+ Reviews</span>
                                        </div>
                                    </div>
                                    {{-- <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="red"></li>
                                                <li class="blue"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="pro-details-price-wrap">
                                        <div class="product-price">                                            
                                            <span id="price"></span>
                                            {{-- <span class="old">$230.00</span> --}}
                                        </div>
                                        {{-- <div class="dec-rang"><span>- 30%</span></div> --}}
                                    </div>
                                    <div class="pro-details-quality">
                                    <form method="post" action="{{route('cart.store')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="proid" id="proid">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="quantity" value="2">
                                        </div>
                                    </div>
                                    <div class="pro-details-compare-wishlist">
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                        <input type="submit" value="Add To Cart" >
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- Modernizer JS -->
    <script src="{{asset('frontend/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('frontend/js/vendor/popper.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Slick Slider JS -->
    <script src="{{asset('frontend/js/plugins/countdown.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/counterup.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/images-loaded.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/instafeed.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/jquery-ui-touch-punch.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/owl-carousel.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/waypoints.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/slick.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/wow.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/textillate.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/elevatezoom.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/sticky-sidebar.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/smoothscroll.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script type="text/javascript">
    
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        $(document).ready(function () {
            $(document).on("click", '.show_product', function (e) {

                var cat = $(this).data('cat');
                var proname = $(this).data('proname');
                var review = $(this).data('review');
                var proatt = $(this).data('proatt');
                var price = $(this).data('price');
                var src = $(this).data('src');
                var proid = $(this).data('proid');
                
               
               

                $("#cat").text(cat);
                $("#proname").text(proname);               
                $("#review").text(review);
                $("#proatt").text(proatt);
                $("#price").text(price);
                $("#proid").val(proid);                         
          
                $("#image").attr("src",src);
       

            });
        });
 
    </script>
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v4.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="2333052446974701"
  theme_color="#67b868">
</div>
</body>

</html>