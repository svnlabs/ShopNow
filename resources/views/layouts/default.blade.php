<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShopNow :: SuperShop Micro Framework</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="SuperShop Micro Framework | Developed by Khyrul Kabir">
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
                                        <a href="{{route('user.index')}}">My Account</a>
                                        <a href="{{route('compare.index')}}">Compare</a>

                                        <a href="{{route('wishlist.index')}}">Wishlist</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        @else
                                        <a href="{{route('compare.index')}}">Compare</a>
                                        <a href="{{route('login')}}">Sign in</a>
                                        @endif
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
                                            <p>+88015 15 2325 88</p>
                                        </div>
                                    </div>
                                    <div class="search-style-4">
                                        <form method="get" action="{{URL::to('search')}}">
                                            <div class="form-search-4">
                                                <input id="search" class="input-text" value="" placeholder="Search Hear" name="q" type="search">
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
                                        
                                        <span class="mini-cart-price-3">
                                            @if(session('cart'))
                                            @php $total = 0  @endphp
                                            @foreach(session('cart') as $id => $details)
                                                    <?php  $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                     ৳ {{ $total }}
                                            @else
                                                 ৳ 0 
                                       
                                            @endif
                                        </span>
                                       
                                         
                                      
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
                                                    <a class="la la-trash remove-from-cart" data-id="{{ $id }}"></a>
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
                                                <a class="black-color" href="{{route('cart.index')}}">Cart</a>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover default-btn text-center">

                                                <a class="black-color" href="{{route('shop.checkout')}}">Continue to Chackout</a>
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
                                                <li class="cr-dropdown"><a @if( count($parent->products))href="{{route('shop.category',$parent->id)}}" @endif>{{ $parent->name}} <span class="la la-angle-right"></span></a>

                                                    <div class="category-menu-dropdown ct-menu-res-height-1">
                                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                                        <div class="single-category-menu ct-menu-mrg-bottom category-menu-border">
                                                            <a @if( count($child->products))href="{{route('shop.category',$child->id)}}" @endif><h4>{{$child->name}}</h4></a>
                                                            <ul>
                                                                @foreach(App\Category::where('parent_id',$child->id)->get() as $grand)
                                                                <li><a @if( count($grand->products)) href="{{route('shop.category',$grand->id)}}" @endif>{{$grand->name}}</a></li>
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
                                            <li ><a href="{{url('/')}}">Home</a>
                                                
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
                                <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo"></a>
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
                                                    <a class="la la-trash remove-from-cart" data-id="{{ $id }}"></a>
                                                    
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
                                                <a class="black-color" href="{{route('cart.index')}}">Cart</a>
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
                    <form method="get" action="{{URL::to('search')}}">
                        <input type="text" name="q" placeholder="Search entire store…">
                        <button class="button-search"><i class="la la-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="{{url('/')}}">Home</a>    
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
                    <a class="facebook" href="www.facebook.com"><i class="ti-facebook"></i></a>
                    <a class="twitter" href="www.twitter.com"><i class="ti-twitter-alt"></i></a>
                
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
                                    <p>Shop Now Is Basic Ecommerce Framework For Startup Business. If You Want Extra Feature, Please Contact With Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-55">
                                <div class="footer-title-3">
                                    <h3>About Developer</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="http://kabir.wdpfbd.com/">Khyrul Kabir</a></li>                                        
                                        <li><a href="http://kabir.wdpfbd.com/contacts.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 footer-ngtv-mrg1">
                                <div class="footer-title-3">
                                    <h3>Other Work By Developer</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="https://www.kabir.infantinventory.com/hms">HMS</a></li>
                                        <li><a href="https://www.kabir.infantinventory.com/ngSpa/">SPA for Hotel</a></li>
                                        <li><a href="#" style="color: #ff5151;">More projects are coming</a></li>
                                        
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
                                        <li><a href="https://www.facebook.com/kvai.idb">Facebook</a></li>
                                        <li><a href="https://github.com/kabirkhyrul">Github</a></li>
                                        <li><a href="https://www.fiverr.com/kabirkhyrul">Fiverr</a></li>
                                        <li><a href="https://www.linkedin.com/in/khyrulkabir1">Linkedin</a></li>
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
    <script src="{{asset('frontend/js/Compare.js')}}"></script>
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