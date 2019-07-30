@extends('layouts.default')
@section('content')
<section id="content">
        	<div id="breadcrumb-container">
        		<div class="container">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Product</li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				
        				<div class="row">
        				
        				<div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">


        					<div id="product-image-container">
        						<figure><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" data-zoom-image="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="Product Big image" id="product-image" style="">
        							<figcaption class="item-price-container">
                                        
                                        @if($product->special_price)
										<span class="old-price">৳ {{$product->special_price}}</span>
										<span class="item-price">৳ {{$product->price}}</span>
                                        @else
                                        <span class="item-price">৳ {{$product->price}}</span>
                                        @endif
                                       

									</figcaption>
        						</figure>
        					</div><!-- product-image-container -->        				 
        				</div><!-- End .col-md-6 -->

        				<div class="col-md-6 col-sm-12 col-xs-12 product">
                        <div class="lg-margin visible-sm visible-xs"></div><!-- Space -->
        					<h1 class="product-name">{{$product->name}}</h1>
        					@if($product->review)
                            <div class="ratings-container">
								<div class="ratings separator">
									<div class="ratings-result" data-result="60"></div>
								</div><!-- End .ratings -->
								<span class="ratings-amount separator">
									3 Review(s)
								</span>
								<span class="separator">|</span>
								<a href="#review" class="rate-this">Add Your Review</a>
							</div><!-- End .rating-container -->
                            @else
                            <div class="ratings-container">
                                <div class="ratings separator">
                                    <div class="ratings-result" data-result="0"></div>
                                </div><!-- End .ratings -->
                                <span class="ratings-amount separator">
                                    0 Review(s)
                                </span>
                                <span class="separator">|</span>
                                <a href="#review" class="rate-this">Add Your Review</a>
                            </div><!-- End .rating-container -->
                            @endif
        				<ul class="product-list">
        					<li><span>Availability:</span>{{$product->qty >= 2 ? 'In Stock': 'Out Of Stock'}}</li>
        					<li><span>Product Code:</span>{{$product->sku}}</li>
        					<li><span>Brand:</span>{{$product->brand->name or 'No Brand'}}</li>
        				</ul>
        				<hr>
                        @if($product->attribute_id)
                        <div class="product-color-filter-container">
                            <span>Select Color:</span>
                            <div class="xs-margin"></div>
                            <ul class="filter-color-list clearfix">
                                <li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#d1d2d4" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#666467" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#515151" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#bcdae6" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#5272b3" class="filter-color-box"></a></li>
                                <li><a href="#" data-bgcolor="#acbf0b" class="filter-color-box"></a></li>
                            </ul>
                        </div><!-- End .product-color-filter-container-->
                       <div class="product-size-filter-container">
                            <span>Select Size:</span>
                            <div class="xs-margin"></div>
                            <ul class="filter-size-list clearfix">
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div><!-- End .product-size-filter-container-->

                        <hr>
                        @endif 
							<div class="product-add clearfix">
								<div class="custom-quantity-input">
									<input type="text" name="quantity" value="1">
									<a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i class="fa fa-angle-up"></i></a>
									<a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i class="fa fa-angle-down"></i></a>
								</div>
								<a class="btn btn-custom-2" href="{{ url('add-to-cart/'.$product->id) }}">ADD TO CART</a>
							</div><!-- .product-add -->
        					<div class="md-margin"></div><!-- Space -->
        					<div class="product-extra clearfix">
								<div class="product-extra-box-container clearfix">
									<div class="item-action-inner">
										<a href="#" class="icon-button icon-like">Favourite</a>
										<a href="#" class="icon-button icon-compare">Checkout</a>
									</div><!-- End .item-action-inner -->
								</div>
								<div class="md-margin visible-xs"></div>
								<div class="share-button-group">
									<!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
									<a class="addthis_button_facebook"></a>
									<a class="addthis_button_twitter"></a>
									<a class="addthis_button_email"></a>
									<a class="addthis_button_print"></a>
									<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
									</div>
									<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
									<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b2197865ea0183"></script>
									<!-- AddThis Button END -->
								</div><!-- End .share-button-group -->
        					</div>
        				</div><!-- End .col-md-6 -->
        					
        					
        				</div><!-- End .row -->
        				
        				<div class="lg-margin2x"></div><!-- End .space -->
        				
        				<div class="row">
        					<div class="col-md-9 col-sm-12 col-xs-12">
        						
        						<div class="tab-container left product-detail-tab clearfix">
        								<ul class="nav-tabs">
										  <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
										  <li><a href="#description" data-toggle="tab">Description</a></li>
										  <li><a href="#review" data-toggle="tab">Review</a></li>										  
										  <li><a href="#video" data-toggle="tab">Video</a></li>
										</ul>
        								<div class="tab-content clearfix">
        									
        									<div class="tab-pane active" id="overview">
        										{!!$product->description!!}
        									</div><!-- End .tab-pane -->
        									
        									<div class="tab-pane" id="description">
												{!!$product->description!!}
        									</div><!-- End .tab-pane -->
        									
        									<div class="tab-pane" id="review">        				{{$product->review_id or 'No review yet!!'}}						
        										
        									</div><!-- End .tab-pane -->
        									
        									
        									
        									<div class="tab-pane" id="video">
        										<div class="video-container">
        											{{$product->video or 'No video Available'}}        											
        										</div><!-- End .video-container -->
        										
        									</div><!-- End .tab-pane -->
        								</div><!-- End .tab-content -->
        						</div><!-- End .tab-container -->
        						<div class="lg-margin visible-xs"></div>
        					</div><!-- End .col-md-9 -->
        					<div class="lg-margin2x visible-sm visible-xs"></div><!-- Space -->
        					<div class="col-md-3 col-sm-12 col-xs-12 sidebar">
        						<div class="widget related">
        							<h3>Related</h3>
        							
        							<div class="related-slider flexslider sidebarslider">
        								<ul class="related-list clearfix">
                                            <li>
                                            @foreach(App\Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->take(3)->get() as $product)
        									
        										<div class="related-product clearfix">
        											<figure>
        												<img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="{{$product->name}}" style="max-height: 115px">
        											</figure>
        											<h5><a href="#">{{$product->name}}</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="related-price">{{$product->price}}</div><!-- End .related-price -->
        										</div><!-- End .related-product -->
        										
        									@endforeach
        									</li>
        								    
        								</ul>
        							</div><!-- End .related-slider -->
        						</div><!-- End .widget -->
        						
        					</div><!-- End .col-md-4 -->
        				</div><!-- End .row -->
        				<div class="lg-margin2x"></div><!-- Space -->
        				<div class="purchased-items-container carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Also Purchased</h2>
                                </div><!-- End .title-bg -->
                                <p class="title-desc">Note the similar products - after buying for more than $500 you can get a discount.</p>
                            </header>
                            
                                <div class="carousel-controls">
                                    <div id="purchased-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                    <div id="purchased-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controllers -->
                                <div class="purchased-items-slider owl-carousel">
                                     @foreach($sideproducts as $product)
                                                <div class="owl-single-col">
                                                    
                                                    <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="{{route('shop.product',$product->id)}}">
                                                                    <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="">
                                                                    
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">৳ {{$product->price}}</span>
                                                            </div><!-- End .item-price-container -->
                                                           

                                                                @if($date < $product->new_to)                                                                
                                                                 <span class="new-rect">    New    </span>                                                            
                                                                @endif
                                                            
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
                                                            <h3 class="item-name"><a href="{{route('shop.product',$product->id)}}">{{$product->name}}</a></h3>
                                                            <div class="item-action">
                                                                <a href="{{ url('add-to-cart/'.$product->id) }}" class="item-add-btn">
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
                                                @endforeach         
                                </div><!--purchased-items-slider -->
                            </div><!-- End .purchased-items-container -->

        			</div><!-- End .col-md-12 -->
        		</div><!-- End .row -->
			</div><!-- End .container -->
        
        </section><!-- End #content -->
@stop
@section('js')
<script src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.debouncedresize.js')}}"></script>
@stop