<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShopNow - eCommerce Bootstrap 4 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png')}}">

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
        <header class="header-area">
            <div class="main-header-wrap">
                <div class="header-top pt-15 pb-15 bg-black-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="welcome">
                                    @if(Auth::user())
                                    <p><span>Dear, {{ Auth::user()->name }} </span >Welcome Back!</p>
                                    @else
                                  
                                    <p>Welcome to our shop!</p>
                                   
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="setting-wrap-2">
                                    
                                    <div class="setting-content2-right">
                                        @if(Auth::user())
                                        <a href="my-account.html">My Account</a>
                                        @endif
                                        <a href="wishlist.html">Wishlist</a>
                                        <a href="login-register.html">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle border-top-2 pt-30 pb-30">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="header-contact-search-wrap header-contact-search-mrg">
                                    <div class="header-contact-2">
                                        <div class="header-contact-2-icon">
                                            <i class="la la-phone"></i>
                                        </div>
                                        <div class="header-contact-2-text">
                                            <span>Contact</span>
                                            <p>+8801 22 5555 66</p>
                                        </div>
                                    </div>
                                    <div class="search-style-4">
                                        <form>
                                            <div class="form-search-4">
                                                <input id="search" class="input-text" value="" placeholder="Search Hear" type="search">
                                                <button>
                                                    <i class="la la-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1 col-lg-2">
                                 <div class="cart-wrap cart-wrap-3 cart-wrap-3-white">
                                    <button class="cart-active">
                                        <i class="la la-shopping-cart"></i> <br>
                                        @if(session('cart'))
                                        <span class="mini-cart-price-3">
                                            @foreach(session('cart') as $id => $details)
                                                    <?php $total = 0 ; $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                     ৳{{ $total }}
                                            @else
                                                 ৳ 0 
                                        </span>
                                        @endif
                                        
                                      
                                        <span class="count-style-3"> @if(session('cart')) {{ count(session('cart')) }} @else 0  @endif</span>
                                        
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
                                                    <span>৳{{ $details['price'] }}</span>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total">
                                                    @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
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
                <div class="header-bottom sticky-bar bg-red">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="category-menu-wrap">
                                    <h3 class="showcat">
                                        <a href="#">
                                            <img class="category-menu-non-stick" src="{{asset('frontend/images/icon-img/category-menu.png')}}" alt="icon">
                                            <img class="category-menu-stick" src="{{asset('frontend/images/icon-img/category-menu-stick.png')}}" alt="icon">
                                            All Department <i class="la la-angle-down"></i>
                                        </a>
                                    </h3>
                                    <div class="category-menu hidecat">
                                        <nav>
                                            <ul>
                                                @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                                <li class="cr-dropdown"><a href="{{route('shop.category',$parent->id)}}">{{ $parent->name}} <span class="la la-angle-right"></span></a>

                                                    <div class="category-menu-dropdown ct-menu-res-height-1">
                                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                                        <div class="single-category-menu ct-menu-mrg-bottom category-menu-border">
                                                            <a href="{{route('shop.category',$child->id)}}"><h4>{{$child->name}}</h4></a>
                                                            <ul>
                                                                @foreach(App\Category::where('parent_id',$child->id)->get() as $grand)
                                                                <li><a href="{{route('shop.category',$grand->id)}}">{{$grand->name}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        @endforeach
                                                       
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex justify-content-end">
                                <div class="main-menu menu-common-style menu-lh-5 menu-margin-4 menu-font-2 menu-font-2-white res-hm8-margin">
                                    <nav>
                                        <ul>
                                            <li class="angle-shape"><a href="index.html">Home</a>
                                                
                                            </li>
                                   
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="{{asset('frontend/images/logo/logo-1.png')}}">
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="cart-wrap common-style">
                                    <button class="cart-active">
                                        <i class="la la-shopping-cart"></i>
                                        <span class="count-style">@if(session('cart')) {{ count(session('cart')) }} @else 0  @endif Items</span>
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
                                                    <a href="#"><i class="la la-trash"></i></a>
                                                </div>
                                            </li>
                                           @endforeach
                                            @endif
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total">
                                                <h4>Subtotal <span class="shop-total"> @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                    ৳{{ $total }}
                                                    @else
                                                    ৳ 0 
                                                    @endif</span></h4>
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
            <div class="bg-red pt-20 pb-20 ct-menu-small-device">
                <div class="container">
                    <div class="category-menu-wrap">
                        <h3 class="showcat">
                            <a href="#">
                                <img class="category-menu-non-stick" src="{{asset('frontend/images/icon-img/category-menu.png')}}" alt="icon">
                                <img class="category-menu-stick" src="{{asset('frontend/images/icon-img/category-menu-stick.png')}}" alt="icon">
                                All Department <i class="la la-angle-down"></i>
                            </a>
                        </h3>
                        <div class="category-menu mobile-category-menu hidecat">
                            <nav>
                                <ul>
                                    @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                    <li class="cr-dropdown"><a href="{{route('shop.category',$parent->id)}}">{{ $parent->name}} <span class="la la-angle-right"></span></a>

                                     <ul class="cr-menu-desktop-none">
                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                        <li class="cr-sub-dropdown sub-style">
                                            <a href="{{route('shop.category',$child->id)}}"><h4>{{$child->name}}</h4></a>
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
                            </nav>
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
                                </li>
                                @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                    <li class="menu-item-has-children "><a href="{{route('shop.category',$parent->id)}}">{{ $parent->name}} <span class="la la-angle-right"></span></a>

                                    <ul class="dropdown">
                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                         <li class="menu-item-has-children">
                                            <a href="{{route('shop.category',$child->id)}}"><h4>{{$child->name}}</h4></a>
                                            <ul class="dropdown">
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
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-curr-lang-wrap">
                    
                    <div class="single-mobile-curr-lang">
                        @if(Auth::user())
                        <a class="mobile-account-active" href="#">My Account </a>
                        @else
                       
                        <a  href="{{route('login')}}">Login</a></li>
                        <a  href="{{route('register')}}">Creat Account</a></li>
                     
                        @endif
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
       @yield('content')
        <footer class="footer-area section-padding-2 bg-bluegray pt-80">
            <div class="container-fluid">
                <div class="footer-top pb-40">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 col-12 col-sm-12">
                            <div class="footer-widget mb-30">
                                <a href="#"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
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
</body>

</html>