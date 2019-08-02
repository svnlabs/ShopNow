@extends('layouts.shop')
@section('breadcrumb')
<h2>{{$product->name}} details page</h2>
<ul>
    <li>
        <a href="index.html">Home</a>
    </li>
    <li class="active">{{$product->name}}  </li>
</ul>


@stop
@section('content')
       <div class="product-details-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img-left">
                            <img class="zoompro" src="{{url($product->image? 'Productimg/'.$product->thumbnail:'images/noimage.jpg')}}" data-zoom-image="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product-details-img" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-modify">
                            <span>Life Style</span>
                            <h2>LaaVista Depro, FX 829 v1</h2>
                            <div class="product-ratting-review">
                                <div class="product-ratting">
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star"></i>
                                    <i class="la la-star-half-o"></i>
                                </div>
                                <div class="product-review">
                                    <span>40+ Reviews</span>
                                </div>
                            </div>
                            <div class="pro-details-color-wrap">
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
                            </div>
                            <div class="pro-details-price-wrap">
                                <div class="product-price">
                                    <span>$210.00</span>
                                    <span class="old">$230.00</span>
                                </div>
                                <div class="dec-rang"><span>- 30%</span></div>
                            </div>
                            
                            <div class="pro-details-compare-wishlist">
                                <div class="pro-details-compare">
                                    <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <form action="{{route('wishlist.store')}}" id="contact_form" method="post" style="display: none;">
                                      {{csrf_field()}}
                                      <input name="user_id" type="hidden"  @if(Auth::user()) value="{{Auth::user()->id}}" @endif />
                                      <input name="product_id" type="hidden" value="{{$product->id}}" />
                                  </form>  



                                  <a title="Add To Wishlist" @if(Auth::user())onclick="document.getElementById('contact_form').submit();" @else href="{{route('login')}}" @endif><i class="la la-heart-o"></i> Add to wish list</a>
                                </div>
                            </div>
                            <div class="pro-details-compare-wishlist pro-details-quality">
                                <div class="cart-plus-minus">
                                    <form method="post" action="{{route('cart.store')}}">
                                        {{csrf_field()}}
                                    <input type="hidden" name="proid" value="{{$product->id}}">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                            </div>
                            <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                <a href="{{ url('add-to-cart/'.$product->id) }}">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pb-90">
            <div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto col-lg-10">
                        <div class="dec-review-topbar nav mb-40">
                            <a data-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-toggle="tab" href="#des-details2">Specification</a>
                            <a data-toggle="tab" href="#des-details3">Reviews</a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane">
                                <div class="description-wrap">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane active">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Name / Model</td>
                                                <td>LaaVista Depro, FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td>Categories</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Categories</td>
                                                <td>Product Type</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Display Port</td>
                                                <td>Multi</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Media</td>
                                                <td>Brightside</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="dec-review-wrap mb-50">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-1.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dec-review-wrap mb-50">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-2.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dec-review-wrap">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-5">
                                            <div class="dec-review-img-wrap">
                                                <div class="dec-review-img">
                                                    <img src="assets/images/product-details/review-3.png" alt="review">
                                                </div>
                                                <div class="dec-client-name">
                                                    <h4>Jonathon Doe</h4>
                                                    <div class="dec-client-rating">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star-half-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-7">
                                            <div class="dec-review-content">
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                                <div class="review-content-bottom">
                                                    <div class="review-like">
                                                        <span><i class="la la-heart-o"></i> 24 Likes</span>
                                                    </div>
                                                    <div class="review-date">
                                                        <span>25 Jun 2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-6 mb-50 text-center">
                    <h2>Related Product</h2>
                </div>
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrap">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm1-5.jpg" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$210.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
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
        
       
@stop
@section('js')
<script src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.debouncedresize.js')}}"></script>
@stop