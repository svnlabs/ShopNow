<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Shop Now - Responsive eCommerce Template</title>
        <meta name="description" content="Responsive modern ecommerce Html5 Template">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">
        
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/revslider.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        
        <!-- Favicon and Apple Icons -->
        <link rel="icon" type="image/png" href="{{asset('frontend/images/icons/icon.png')}}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/images/icons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/icons/apple-icon-72x72.png')}}">
        
        <!--- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"><\/script>')</script>
        <script src="{{asset('frontend/js/sweetalert2.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('frontend/css/sweetalert2.min.css')}}">

        <!--[if lt IE 9]>
            <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
            <script src="{{asset('frontend/js/respond.min.js')}}"></script>
        <![endif]-->
        
        <style id="custom-style">
        
        </style>
    </head>
    <body>
    <div id="wrapper">
        <header id="header" class="header6">
            <div id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if(Auth::user())
                            <div class="header-top-left">
                                <ul id="top-links" class="clearfix">
                                    <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                    <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                    <li><a href="{{route('cart.index')}}" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                    <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                </ul>
                            </div><!-- End .header-top-left -->
                            @endif
                            <div class="header-top-right">
                                
                               
                                
                                <div class="header-text-container pull-right">
                                    <p class="header-text">Welcome to Shop Now!</p>
                                    <p class="header-link"><a href="#">login</a>&nbsp;or&nbsp;<a href="#">create an account</a></p>
                                </div><!-- End .pull-right -->
                            </div><!-- End .header-top-right -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #header-top -->
            
            <div id="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12 logo-container">
                            <h1 class="logo clearfix">
                               
                                <a href="{{URL::to('/')}}" title="Shop Now eCommerce Template"><img src="{{asset('frontend/images/logo6.png')}}" alt="Shop Now Commerce Template" width="200" height="54"></a>
                            </h1>
                        </div><!-- End .col-md-3 -->
                        <div class="col-md-9 col-sm-9 col-xs-12 header-inner-right">
                            <div class="header-inner-right-wrapper clearfix">
                               
                    
                                <div class="dropdown-cart-menu-container pull-right">
                                    <div class="btn-group dropdown-cart">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="cart-menu-icon"></span>
                                                @if(session('cart'))
                                                {{ count(session('cart')) }} item(s)
                                                @else
                                                0 item(s)
                                                @endif  <span class="drop-price"><?php $total = 0 ?>
                                                @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                    - ৳{{ $total }}
                                                @else
                                                - ৳ 0 
                                                @endif </span>
                                    </button>
                                    
                                        <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                            <p class="dropdown-cart-description">Recently added item(s).</p>
                                            <ul class="dropdown-cart-product-list">
                                                @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                <li class="item clearfix">

                                                    <figure>
                                                        <a href="product.html"><img src="{{asset('Productimg/'.$details['image'])}}" alt="phone 4"></a>
                                                    </figure>
                                                    <div class="dropdown-cart-details">
                                                        <p class="item-name">
                                                        <a href="product.html">{{ $details['name'] }} </a>
                                                        </p>
                                                        <p>
                                                            1x
                                                            <span class="item-price">৳{{ $details['price'] }}</span>
                                                        </p>
                                                    </div><!-- End .dropdown-cart-details -->
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                            
                                            <ul class="dropdown-cart-total">
                                                {{-- <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li> --}}
                                                <li><span class="dropdown-cart-total-title">Total:</span>৳{{ $total }}</li>
                                            </ul><!-- .dropdown-cart-total -->
                                            <div class="dropdown-cart-action">
                                                <p><a href="{{route('cart.index')}}" class="btn btn-custom-2 btn-block">Cart</a></p>
                                                <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                            </div><!-- End .dropdown-cart-action -->
                                            
                                        </div><!-- End .dropdown-cart -->
                                    </div><!-- End .btn-group -->
                                </div><!-- End .dropdown-cart-menu-container -->
                              

                                <div id="quick-access">
                                    <form class="form-inline quick-search-form" role="form" action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search here">
                                        </div><!-- End .form-inline -->
                                        <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                    </form>
                                </div><!-- End #quick-access -->

                                <div class="header-box contact-infos pull-right">
                                    <ul>
                                        <li><span class="header-box-icon header-box-icon-skype"></span>Shop Now_support</li>
                                        <li><span class="header-box-icon header-box-icon-email"></span><a href="mailto:Shop Now@gmail.com">Shop Now@gmail.com</a></li>
                                    </ul>
                                </div><!-- End .contact-infos -->
                                
                                <div class="header-box contact-phones pull-right clearfix">
                                    <span class="header-box-icon header-box-icon-earphones"></span>
                                    <ul class="pull-left">
                                        <li>+(404) 158 14 25 78</li>
                                        <li>+(404) 851 21 48 15</li>
                                    </ul>
                                </div><!-- End .contact-phones -->

                            </div><!-- End .header-inner-right-wrapper -->
                        </div><!-- End .col-md-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                
                <div id="main-nav-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 clearfix">
                                
                                <nav id="main-nav">
                                    <div id="responsive-nav">
                                        <div id="responsive-nav-button">
                                            Menu <span id="responsive-nav-button-icon"></span>
                                        </div><!-- responsive-nav-button -->
                                    </div>
                                    <div class="menu-table">
                                        <ul class="menu clearfix">
                                        <li>
                                            <a class="active" href="{{URL::to('/')}}">HOME</a>                                        
                                        </li>
                                         @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                        <li class="mega-menu-container"><a href="{{route('shop.category',$parent->id)}}">{{$parent->name}}</a>
                                            <div class="mega-menu clearfix">
                                                    <div class="col-5">
                                                        @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                                        <a href="{{route('shop.category',$child->id)}}" class="mega-menu-title">{{$child->name}}</a><!-- End .mega-menu-title -->

                                                        <ul class="mega-menu-list clearfix">
                                                            @foreach(App\Category::where('parent_id',$child->id)->get() as $grand)
                                                            <li>
                                                                
                                                                    
                                                                      <a href="{{route('shop.category',$grand->id)}}">{{$grand->name}}</a>
                                                                   
                                                                 
                                                            </li>
                                                             @endforeach
                                                            
                                                        </ul>
                                                      @endforeach  
                                                   
                                            </div><!-- End .mega-menu -->
                                        </li>
                                         @endforeach
                                        
                                        <li><a href="contact.html">Contact Us</a></li>
                                        @if(Auth::user())
                                        <li><a href="#">My Account</a></li>
                                        @endif
                                        
                                        
                                    </ul>
                                    </div>
                                    
                                </nav>
                                
                            </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                    
                </div><!-- End #nav -->
            </div><!-- End #inner-header -->
        </header>