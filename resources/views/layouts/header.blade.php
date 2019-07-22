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
                            <div class="header-top-left">
                                <ul id="top-links" class="clearfix">
                                    <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Wishlist</span></a></li>
                                    <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                    <li><a href="{{route('cart.index')}}" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                    <li><a href="checkout.html" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                </ul>
                            </div><!-- End .header-top-left -->
                            <div class="header-top-right">
                                
                                <div class="header-top-dropdowns pull-right">
                                    <div class="btn-group dropdown-money">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                            <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a></li>
                                            <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a></li>
                                        </ul>
                                    </div><!-- End .btn-group -->
                                    <div class="btn-group dropdown-language">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                            <span class="flag-container"><img src="{{asset('frontend/images/england-flag.png')}}" alt="flag of england"></span>
                                            <span class="hide-for-xs">English</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li><a href="#"><span class="flag-container"><img src="{{asset('frontend/images/italy-flag.png')}}" alt="flag of england"></span><span class="hide-for-xs">Italian</span></a></li>
                                            <li><a href="#"><span class="flag-container"><img src="{{asset('frontend/images/spain-flag.png')}}" alt="flag of italy"></span><span class="hide-for-xs">Spanish</span></a></li>
                                            <li><a href="#"><span class="flag-container"><img src="{{asset('frontend/images/france-flag.png')}}" alt="flag of france"></span><span class="hide-for-xs">French</span></a></li>
                                            <li><a href="#"><span class="sm-separator"><img src="{{asset('frontend/images/germany-flag.png')}}" alt="flag of germany"></span><span class="hide-for-xs">German</span></a></li>
                                        </ul>
                                    </div><!-- End .btn-group -->
                                </div><!-- End .header-top-dropdowns -->
                                
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
                               
                                <a href="index.html" title="Shop Now eCommerce Template"><img src="{{asset('frontend/images/logo6.png')}}" alt="Shop Now Commerce Template" width="200" height="54"></a>
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
                                                <a href="#" title="Delete item" class="delete-item"><i class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i class="fa fa-pencil"></i></a>
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
                                        <li class="mega-menu-container"><a href="#">SHOP</a>
                                            <div class="mega-menu clearfix">
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Clothing</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jeans &amp; Trousers</a></li>
                                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                                            <li><a href="#">Tops &amp; T-Shirts</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                            <li><a href="#">Skirts</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Shoes</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Formal Shoes</a></li>
                                                            <li><a href="#">Casual Shoes</a></li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Boots</a></li>
                                                            <li><a href="#">Wide Fit</a></li>
                                                            <li><a href="#">Slippers</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Accessories</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Bags &amp; Purses</a></li>
                                                            <li><a href="#">Belts</a></li>
                                                            <li><a href="#">Gloves</a></li>
                                                            <li><a href="#">Jewellery</a></li>
                                                            <li><a href="#">Sunglasses</a></li>
                                                            <li><a href="#">Hair Accessories</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Sports</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Sport Tops &amp; Vests</a></li>
                                                            <li><a href="#">Swimwear</a></li>
                                                            <li><a href="#">Footwear</a></li>
                                                            <li><a href="#">Sports Underwear</a></li>
                                                            <li><a href="#">Bags</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">Maternity</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Tops &amp; Skirts</a></li>
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Trousers &amp; Shorts</a></li>
                                                            <li><a href="#">Knitwear</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                            </div><!-- End .mega-menu -->
                                        </li>
                                        
                                        <li>
                                            <a href="#">PAGES</a>
                                            <ul>
                                                <li><a href="#">Headers</a>
                                                    <ul>
                                                        <li><a href="header1.html">Header Version 1</a></li>
                                                        <li><a href="header2.html">Header Version 2</a></li>
                                                        <li><a href="header3.html">Header Version 3</a></li>
                                                        <li><a href="header4.html">Header Version 4</a></li>
                                                        <li><a href="header5.html">Header Version 5</a></li>
                                                        <li><a href="header6.html">Header Version 6</a></li>
                                                        <li><a href="header7.html">Header Version 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Footers</a>
                                                    <ul>
                                                        <li><a href="footer1.html">Footer Version 1</a></li>
                                                        <li><a href="footer2.html">Footer Version 2</a></li>
                                                        <li><a href="footer3.html">Footer Version 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product.html">Product</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="category.html">Category</a>
                                                    <ul>
                                                        <li><a href="category-list.html">Category list</a></li>
                                                        <li><a href="category.html">Category Banner 1</a></li>
                                                        <li><a href="category-banner-2.html">Category Banner 2</a></li>
                                                        <li><a href="category-banner-3.html">Category Banner 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Right Sidebar</a></li>
                                                        <li><a href="blog-sidebar-left.html">Left Sidebar</a></li>
                                                        <li><a href="blog-sidebar-both.html">Both Sidebar</a></li>
                                                        <li><a href="single.html">Blog Post</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="aboutus.html">About Us</a></li>
                                                <li><a href="register-account.html">Register Account</a></li>
                                                <li><a href="compare-products.html">Compare Products</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="#">Classic</a>
                                                    <ul>
                                                        <li><a href="portfolio-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Masonry</a>
                                                    <ul>
                                                        <li><a href="portfolio-masonry-2.html">Two Columns</a></li>
                                                        <li><a href="portfolio-masonry-3.html">Three Columns</a></li>
                                                        <li><a href="portfolio-masonry-4.html">Four Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Portfolio Posts</a>
                                                    <ul>
                                                        <li><a href="single-portfolio.html">Image Post</a></li>
                                                        <li><a href="single-portfolio-gallery.html">Gallery Post</a></li>
                                                        <li><a href="single-portfolio-video.html">Video Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Elements</a>
                                            <ul>
                                                <li><a href="elements/tabs.html">Tabs</a></li>
                                                <li><a href="elements/titles.html">Titles</a></li>
                                                <li><a href="elements/typography.html">Typography</a></li>
                                                <li><a href="elements/collapses.html">collapses</a></li>
                                                <li><a href="elements/animations.html">animations</a></li>
                                                <li><a href="elements/grids.html">Grid System</a></li>
                                                <li><a href="elements/alerts.html">Alert Boxes</a></li>
                                                <li><a href="elements/buttons.html">Buttons</a></li>
                                                <li><a href="elements/medias.html">Media</a></li>
                                                <li><a href="elements/forms.html">Forms</a></li>
                                                <li><a href="elements/icons.html">Icons</a></li>
                                                <li><a href="elements/lists.html">Lists</a></li>
                                                <li><a href="elements/more.html">More</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">News</a></li>
                                        
                                    </ul>
                                    </div>
                                    
                                </nav>
                                
                            </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                    
                </div><!-- End #nav -->
            </div><!-- End #inner-header -->
        </header>