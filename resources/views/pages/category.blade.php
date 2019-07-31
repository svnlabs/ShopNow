@extends('layouts.shop')
@section('content')
 <section id="content">
        	
   <div class="breadcrumb-area bg-img" style="background-image:url(assets/images/bg/breadcrumb.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>shop page</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">shop full wide </li>
            </ul>
        </div>
    </div>
</div>
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				
        				<div class="row">
        					
        					<div class="col-md-9 col-sm-8 col-xs-12 main-content">
        						
        						<div id="category-header" class="category-banner">
        							<img src="{{asset('frontend/images/banner.png')}}" alt="Category banner" class="img-responsive">
										<div class="category-title">
											<h2>{{$category->name}}</h2>
											<p>{{$category->description or "No description available"}}</p>
											<a href="#" class="btn btn-custom">LEARN MORE</a>
										</div><!-- End .category-title -->
        						</div><!-- End #category-header -->
        						
        						<div class="md-margin"></div><!-- space -->
        						
        						<div class="category-toolbar clearfix">
									<div class="toolbox-filter clearfix">
									
										<div class="sort-box">
											<span class="separator">sort by:</span>
											<div class="btn-group select-dropdown">
												<button type="button" class="btn select-btn">Position</button>
												<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Date</a></li>
													<li><a href="#">Name</a></li>
												</ul>
											</div>
										</div>
										
										
										
									</div><!-- End .toolbox-filter -->
									
        							
        						</div><!-- End .category-toolbar -->
        						<div class="md-margin"></div><!-- .space -->
        						<div class="category-item-container"> 
                                <div class="row">
                                	@foreach($products->products as $product)
                                            <div class="col-md-4 col-sm-6 col-xs-12">

                                         <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="{{route('shop.product',$product->id)}}">
                                                                    <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="">
                                                                    
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">{{$product->price}}</span>
                                                            </div><!-- End .item-price-container -->
                                                            

                                                                @if($date < $product->new_to)
                                                                    <span class="new-rect">                                                                
                                                                    New 
                                                                    </span>                                                               
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
                                    </div>
                                    

                                        @endforeach
                                    @foreach($products->childs as $child)

                                    	
                                        @foreach($child->childs as $grand)
                                            @foreach($grand->products as $product)
                                                <div class="col-md-4 col-sm-6 col-xs-12">

                                         <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="{{route('shop.product',$product->id)}}">
                                                                    <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="">
                                                                    
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">{{$product->price}}</span>
                                                            </div><!-- End .item-price-container -->
                                                            

                                                                @if($date < $product->new_to)
                                                                <span class="new-rect">                                                                
                                                                    New  
                                                                 </span>                                                              
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
                                    </div>
                                            @endforeach
                                        @endforeach
                                        @foreach($child->products as $product)
                                            <div class="col-md-4 col-sm-6 col-xs-12">

                                         <div class="item item-hover">
                                                        <div class="item-image-wrapper">
                                                            <figure class="item-image-container">
                                                                <a href="{{route('shop.product',$product->id)}}">
                                                                    <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="">
                                                                    
                                                                </a>
                                                            </figure>
                                                            <div class="item-price-container">
                                                                <span class="item-price">{{$product->price}}</span>
                                                            </div><!-- End .item-price-container -->
                                                            

                                                                @if($date < $product->new_to)
                                                                    <span class="new-rect">                                                                
                                                                    New 
                                                                    </span>                                                               
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
                                    </div>
                                        @endforeach

                                    @endforeach                             	

                                    
                                </div><!-- End .row -->
                                </div><!-- End .category-item-container -->
        						
        						
							
        						
        					</div><!-- End .col-md-9 -->
        					
        					<aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
        						<div class="widget">
        							<div class="panel-group custom-accordion sm-accordion" id="category-filter">
										<div class="panel">
											<div class="accordion-header">
												<div class="accordion-title"><span>Category</span></div><!-- End .accordion-title -->
									<a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-1"></a>
											</div><!-- End .accordion-header -->
								
										<div id="category-list-1" class="collapse in">
											<div class="panel-body">
												<ul class="category-filter-list jscrollpane">
													@forelse ($products->childs as $child)
													<li><a href="{{route('shop.category',$child->id)}}">{{$child->name}} ({{$child->products->count()}})</a></li>
													@foreach ($child->childs as $grand)
													<li><a href="{{route('shop.category',$grand->id)}}">{{$grand->name}} ({{$grand->products->count()}})</a></li>
													
													@endforeach
													@empty No category available
													
													@endforelse 

													
													
												</ul>
											</div><!-- End .panel-body -->
										</div><!-- #collapse -->
										</div><!-- End .panel -->
        								
        								<div class="panel">
											<div class="accordion-header">
												<div class="accordion-title"><span>Brand</span></div><!-- End .accordion-title -->
									<a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-2"></a>
											</div><!-- End .accordion-header -->
								
										<div id="category-list-2" class="collapse in">
											<div class="panel-body">
											<ul class="category-filter-list jscrollpane">
												@forelse($products->products as $product)
												<li><a href="#">{{$product->brand_id  }} </a></li>
												@empty 	No brand											
												@endforelse
											</ul>
											</div><!-- End .panel-body -->
										</div><!-- #collapse -->
										</div><!-- End .panel -->
        							
        							{{-- <div class="panel"> --}}
									{{-- 		<div class="accordion-header">
												<div class="accordion-title"><span>Price</span></div><!-- End .accordion-title -->
									<a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-3"></a>
											</div><!-- End .accordion-header -->
								
										<div id="category-list-3" class="collapse in">
											<div class="panel-body">
												<div id="price-range">
													
												</div><!-- End #price-range -->
												<div id="price-range-details">
													<span class="sm-separator">from</span>
													<input type="text" id="price-range-low" class="separator">
													<span class="sm-separator">to</span>
													<input type="text" id="price-range-high">
												</div>
												<div id="price-range-btns">
													<a href="#" class="btn btn-custom-2 btn-sm">Ok</a>
													<a href="#" class="btn btn-custom-2 btn-sm">Clear</a>
												</div>
												
											</div><!-- End .panel-body -->
										</div>
										<!-- #collapse -->
										</div><!-- End .panel --> --}}
        							
        							{{-- <div class="panel">
											<div class="accordion-header">
												<div class="accordion-title"><span>Color</span></div><!-- End .accordion-title -->
									<a class="accordion-btn opened"  data-toggle="collapse" data-target="#category-list-4"></a>
											</div><!-- End .accordion-header -->
								
										<div id="category-list-4" class="collapse in">
											<div class="panel-body">
											<ul class="filter-color-list clearfix">
												<li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a></li>
												<li><a href="#" data-bgcolor="#ffff33" class="filter-color-box"></a></li>
												<li><a href="#" data-bgcolor="#ff9900" class="filter-color-box"></a></li>
												<li class="last-md"><a href="#" data-bgcolor="#ff9999" class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="#" data-bgcolor="#99cc33" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#339933" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#ff0000" class="filter-color-box"></a></li>
                                                <li class="last-md"><a href="#" data-bgcolor="#ff3366" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#cc33ff" class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="#" data-bgcolor="#9966cc" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#99ccff" class="filter-color-box"></a></li>
                                                <li  class="last-md"><a href="#" data-bgcolor="#3333cc" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#999999" class="filter-color-box"></a></li>
                                                <li><a href="#" data-bgcolor="#663300" class="filter-color-box"></a></li>
                                                <li class="last-lg"><a href="#" data-bgcolor="#000" class="filter-color-box"></a></li>
											</ul>
											</div><!-- End .panel-body -->
										</div><!-- #collapse -->
										</div><!-- End .panel -->
        							</div><!-- .panel-group --> --}}
        						</div><!-- End .widget -->
        						
        						<div class="widget featured">
        							<h3>Featured</h3>
        							
        							<div class="featured-slider flexslider sidebarslider">
        								<ul class="featured-list clearfix">
        									<li>
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item5.jpg" alt="item5">
        											</figure>
        											<h5><a href="#">Jacket Suiting Blazer</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$40</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        										
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item1.jpg" alt="item1">
        											</figure>
        											<h5><a href="#">Gap Graphic Cuffed</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$18</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        										
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item2.jpg" alt="item2">
        											</figure>
        											<h5><a href="#">Women's Lauren Dress</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$30</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        									</li>
        									<li>
        										<div class="featured-product clearfix">
        											<figure>
                                                        <img src="{{asset('frontend/images/products/t')}}humbnails/item3.jpg" alt="item3">
                                                    </figure>
        											<h5><a href="#">Swiss Mobile Phone</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="64"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$39</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        										
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item4.jpg" alt="item4">
        											</figure>
        											<h5><a href="#">Zwinzed HeadPhones</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="94"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$18.99</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        										
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item7.jpg" alt="item7">
        											</figure>
        											<h5><a href="#">Kless Man Suit</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="74"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$99</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        									</li>
        									<li>
        										
        										<div class="featured-product clearfix">
        											<figure>
                                                        <img src="{{asset('frontend/images/products/t')}}humbnails/item4.jpg" alt="item4">
                                                    </figure>
        											<h5><a href="#">Gap Graphic Cuffed</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$17</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        										
        										<div class="featured-product clearfix">
        											<figure>
        												<img src="{{asset('frontend/images/products/t')}}humbnails/item6.jpg" alt="item6">
        											</figure>
        											<h5><a href="#">Women's Lauren Dress</a></h5>
        											<div class="ratings-container">
														<div class="ratings">
															<div class="ratings-result" data-result="84"></div>
														</div><!-- End .ratings -->
													</div><!-- End .rating-container -->
        											<div class="featured-price">$30</div><!-- End .featured-price -->
        										</div><!-- End .featured-product -->
        									</li>
        								</ul>
        							</div><!-- End .featured-slider -->
        						</div><!-- End .widget -->
        						
        						<div class="widget banner-slider-container">
        							<div class="banner-slider flexslider">
        								<ul class="banner-slider-list clearfix">
        									<li><a href="#"><img src="{{asset('frontend/images/banner1.jp')}}g" alt="Banner 1"></a></li>
        									<li><a href="#"><img src="{{asset('frontend/images/banner2.jp')}}g" alt="Banner 2"></a></li>
        									<li><a href="#"><img src="{{asset('frontend/images/banner3.jp')}}g" alt="Banner 3"></a></li>
        								</ul>
        							</div>
        						</div><!-- End .widget -->
        						
        					</aside><!-- End .col-md-3 -->
        				</div><!-- End .row -->
        				
        				
        			</div><!-- End .col-md-12 -->
        		</div><!-- End .row -->
			</div><!-- End .container -->
        
        </section>
@stop