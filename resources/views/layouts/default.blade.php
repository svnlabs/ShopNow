@include('layouts.header')
<!-- End #header -->

        <section id="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="row slider-position">
                            <div class="md-margin"></div><!-- space -->

                            @include('layouts.sidebar')
                            
                            <div class="col-md-9 col-sm-8 col-xs-12 main-content ">
                                @include('layouts.slider')

                                <div class="md-margin"></div><!-- Space -->

                                <div class="row home-banners">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="#"><img src="{{asset('frontend/images/middle-banner-1.png')}}" alt="Home Big Banner 1" class="img-responsive"></a>
                                    </div><!-- End .col-md-6 -->
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <a href="#"><img src="{{asset('frontend/images/middle-banner-2.png')}}" alt="Home Big Banner 2" class="img-responsive"></a>
                                    </div><!-- End .col-md-4 -->

                                </div><!-- End .home-banners -->

                                <div class="md-margin"></div><!-- space -->

                                <div class="main-tab-container carousel-wrapper">
                                    <ul id="products-tabs-list" class="tab-style-2 clearfix">
                                        <li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>
                                        <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                        <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
                                        <li><a href="#special" data-toggle="tab">Special</a></li>
                                    </ul>
                                    
                                    <div id="products-tabs-content" class="tab-content row">
                                        <div class="tab-pane active tab-carousel-wrapper" id="latest">

                                            <div class="carousel-controls">
                                                <div id="latest-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="latest-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="latest-tab-slider owl-carousel">
                                                @foreach ($products->chunk(2) as $chunk)
                                                <div class="owl-single-col">
                                                    @foreach($chunk as $product)
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="">
                                                                    
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">{{$product->price}}</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">

                                                                @if($date < $product->new_to)                                                                
                                                                    New                                                                
                                                                @endif
                                                            </span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">{{$product->name}}</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                    @endforeach
                                                    
                                                </div><!-- End .owl-single-col  -->
                                                @endforeach                                               
                                            </div><!-- End .latest-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->
                                        
                                        <div class="tab-pane tab-carousel-wrapper" id="featured">

                                            <div class="carousel-controls">
                                                <div id="featured-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="featured-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="featured-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item7.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item7-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="55"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item6.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item6-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$50</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item5.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item5-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$150</span>
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$500</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="60"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item10.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item10-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .featured-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="bestsellers">

                                            <div class="carousel-controls">
                                                <div id="bestsellers-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="bestsellers-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="bestsellers-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$120</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    7 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item8.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item8-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$200</span>
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                            <span class="discount-rect">-20%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="90"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    1 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item9.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item9-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item8.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item8-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .bestsellers-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="special">

                                            <div class="carousel-controls">
                                                <div id="special-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                                <div id="special-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                            </div><!-- End .carousel-controllers -->

                                            <div class="special-tab-slider owl-carousel">
                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item6.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item6-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="55"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$50</span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="86"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item1.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item1-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="old-price">$150</span>
                                                                <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item4.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item4-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$500</span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="60"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="20"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item10.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item10-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$80</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="50"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->

                                                <div class="owl-single-col">
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item2.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item2-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="new-rect">New</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="80"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->

                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="product.html">
                                                                    <img src="{{asset('frontend/images/products/item3.jpg')}}" alt="item1" class="item-image">
                                                                    <img src="{{asset('frontend/images/products/item3-hover.jpg')}}" alt="item1  Hover" class="item-image-hover">
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">$200</span>
                                                            </div><!-- End .item-price-container -->
                                                            <span class="discount-rect">-10%</span>
                                                        </div><!-- End .item-image-wrapper -->
                                                        <div class="item-meta-container">
                                                            <div class="ratings-container">
                                                                <div class="ratings">
                                                                    <div class="ratings-result" data-result="74"></div>
                                                                </div><!-- End .ratings -->
                                                                <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                            </div><!-- End .rating-container -->
                                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                            <div class="item-action">
                                                                <a href="#" class="item-add-btn">
                                                                    <span class="icon-cart-text">Add to Cart</span>
                                                                </a>
                                                                <div class="item-action-inner">
                                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                                </div><!-- End .item-action-inner -->
                                                            </div><!-- End .item-action -->
                                                        </div><!-- End .item-meta-container --> 
                                                    </div><!-- End .item -->
                                                </div><!-- End .owl-single-col  -->
                                            </div><!-- End .special-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        
                                    </div><!-- End #products-tabs-content -->

                                </div><!-- End .main-tab-container -->

                                <div class="xs-margin"></div><!-- Space -->

                                <div class="banner-hero">
                                    <h2>Lookbook</h2>
                                    <h3>Spring-Summer 2014</h3>
                                    <p>Praesent arcu urna, cursus sit amet condimentum id, dapibus mauris. Sed ante massa pellentesque luctus, magna.</p>
                                    <a href="#" class="btn btn-custom-2">Take Look</a>
                                </div><!-- End .banner-hero -->
                                
                                <div class="lg-margin2x"></div><!-- Space -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <header class="content-title">
                                            <h2 class="title">Who We Are?</h2>
                                        </header>
                                        <div class="xs-margin"></div><!-- Space -->
                                        <p>Shop Now is a fully responsive PSD theme designed for all types WooCommerce, Magento, OpenCart, PrestaShop and other. 12 column 1200px responsive grid Template. Great looks on mobiles. Sed interdum magna sit amet orci tristique blandit. quam viverra elementum. </p>
                                        <p>Sed ac magna sed massa rhoncus elementum et ac augue.Pellentesque habitant morbi tristique senectus. Lorem ipsum consectetur adipiscing elit. Vivamus tempor dictum ornare.Ut ligula ornare bibendum. Aliquam ac sagittis metus. Suspendise varius libero, eleifend. <a href="#">Buy Shop Now Theme!</a></p>
                                    </div><!-- End .col-md-6 -->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="sm-margin visible-xs"></div><!-- space -->
                                        <img src="{{asset('frontend/images/team.jpg')}}" alt="Our Team" class="img-responsive">
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                                <div class="xlg-margin"></div><!-- Space -->

                                <div id="services-slider-container" class="carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">Our Services</h2>
                                        </div><!-- End .title-bg -->
                                    </header>
                                        <div class="carousel-controls">
                                            <div id="services-slider-prev" class="carousel-btn carousel-btn-prev">
                                            </div><!-- End .carousel-prev -->
                                            <div id="services-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                            </div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->
                                        <div class="sm-margin"></div><!-- space -->
                                        <div class="row">
                                            <div class="services-slider owl-carousel">
                                                <div class="services-box">
                                                    <div class="service-icon service-icon-development"></div>  
                                                    <h3>
                                                        <a href="#">Development</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Quisque ac quam id quam ullam lorem corper dignissim ullamcorper nisi. Cras ullamcorper ullamcorperultrices. Etiam diam est, adipiscing vitae nibh in, rhoncus laoreet nunc nulla facilisi.</p>
                                                </div><!-- End .services-box -->

                                                <div class="services-box">
                                                    <div class="service-icon service-icon-branding"></div>  
                                                    <h3>
                                                        <a href="#">Branding</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Proin eget sodales magna. Proin acest convallis, interdum odio vel, luctus nibh. Fusce iaculis sollicitudin metus, sed aliquet erat fringilla et. Nulla vel metus mattis odio porttitor dapibus vestibulum.</p>
                                                </div><!-- End .services-box -->

                                                <div class="services-box">
                                                    <div class="service-icon service-icon-marketing"></div>  
                                                    <h3>
                                                        <a href="#">Marketing</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Praesent gravida malesuada fabus.Etiam vehicula massa eget nislante, posuere, vel bibendum nisl elementum. Donec laoreet placerat nibh eget vulputate dui. Pellentesqu tincidunt convallis tempor.</p>
                                                </div><!-- End .services-box -->
                                                    
                                                <div class="services-box">
                                                    <div class="service-icon service-icon-design"></div>  
                                                    <h3>
                                                        <a href="#">Design</a>
                                                        <span class="small-bottom-border"></span>
                                                    </h3>
                                                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit. Proin tincidunt aliquet sapien at commodo. Aliquam erat volutpat. Proin ligula justo, placerat Cras consectetur in tortor sed, vehicula  venenatis erat.</p>
                                                </div><!-- End .services-box -->

                                            </div><!-- End .services-slider -->
                                        </div><!-- End .row -->
                                    </div><!-- End .services-slider-container -->
                                  
                                  <div class="md-margin2x"></div><!-- space -->

                                <div id="latestnews-slider-container" class="carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">Latest News</h2>
                                        </div><!-- End .title-bg -->
                                    </header>
                                        <div class="carousel-controls">
                                            <div id="latestnews-slider-prev" class="carousel-btn carousel-btn-prev">
                                            </div><!-- End .carousel-prev -->
                                            <div id="latestnews-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                            </div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->
                                        <div class="sm-margin"></div><!-- space -->
                                        <div class="row">
                                            <ul class="latestnews-slider owl-carousel">
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post6-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="single.html">35% Discount on second purchase!</a></h3>
                                                    <p>Sed blandit nulla nec nunc ullamcorper tristique. Maurisadipiscing cursus ante ultricies dictum sed lobortis. Nulla iaculis auctor libero, varius adipiscing sapien bibendum vel. In placerat arcu.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            12.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post7-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="single.html">New Arrivals.</a></h3>
                                                    <p>Aiquam mauris libero, suscipit sed ornare ac, suscipit non felis. Fusce sit amet orci justo, a ultrices urna cursus. Suspendisse mauris nibh, tristique eget consectetur a fermentum.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            10.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                        
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post8-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="#">LookBook Spring-Summer 2013</a></h3>
                                                    <p>Nec interdum auctor, sem velit porttitor est, id iaculis mi elit id mi. Etiam dapibus mattis sapien, blandit molestie nunc venenatis ut. Phasellus imperdiet laciniaest, nec convallis dolor aliquet ac. </p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            8.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                                <li>
                                                    <a href="single.html">
                                                        <figure class="latestnews-media-container">
                                                            <img src="{{asset('frontend/images/blog/post6-small.jpg')}}" alt="lats post" class="img-responsive">
                                                        </figure>
                                                    </a>
                                                    <h3><a href="#">New jeans on sales!</a></h3>
                                                    <p>Sed blandit nulla nec nunc ullamcorper tristique. Maurisadipiscing cursus ante ultricies dictum sed lobortis. Nulla iaculis auctor libero, varius adipiscing sapien bibendum vel. In placerat arcu.</p>
                                                    <div class="latestnews-meta-container clearfix">
                                                        <div class="pull-left">
                                                            <a href="#">Read More...</a>
                                                        </div><!-- End .pull-left -->
                                                        <div class="pull-right">
                                                            8.05.2013
                                                        </div><!-- End .pull-right -->
                                                    </div><!-- End .latest-posts-meta-container -->
                                                </li>
                                            </ul>
                                        </div><!-- End .row -->
                                    </div><!-- End .latestnews-slider-container -->

                                <div class="md-margin2x"></div><!-- Space -->
                            </div><!-- End .col-md-9 -->
                            
                        </div><!-- End .row -->

                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        
        </section><!-- End #content -->
        
        @include('layouts.footer')