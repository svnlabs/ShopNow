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
                                        
                                        <!-- End .tab-pane -->

                                        
                                    </div>
                                    <div class="tab-pane tab-carousel-wrapper" id="featured">

                                          

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
                                            </div><!-- End .latest-tab-slider --><!-- End .featured-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="bestsellers">

                                           

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
                                            </div><!-- End .latest-tab-slider --><!-- End .bestsellers-tab-slider -->
                                        
                                        </div><!-- End .tab-pane -->

                                        <div class="tab-pane tab-carousel-wrapper" id="special">

                                           

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
                                            </div><!-- End .latest-tab-slider --><!-- End .special-tab-slider -->
                                        
                                        </div><!-- End #products-tabs-content -->

                                </div><!-- End .main-tab-container -->

                                
                                <div class="md-margin2x"></div><!-- Space -->
                            </div><!-- End .col-md-9 -->
                            
                        </div><!-- End .row -->

                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        
        </section><!-- End #content -->
        
        @include('layouts.footer')