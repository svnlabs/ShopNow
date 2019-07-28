<div class="col-md-3 col-sm-4 col-xs-12 sidebar">

                                <div class="widget reversebg">
                                    <h3>Categories</h3>
                                    
                                    <div class="list-group list-group-brand list-group-accordion">
                                        @foreach($categories as $category)
                                        <a href="{{route('shop.category',$category->id)}}" class="list-group-item">{{$category->name}}
                                            <span class="filter-icon filter-icon-fashion"></span>
                                        </a>
                                        @endforeach
                                        
                                    </div><!-- End .list-group -->
                                </div>

                                <div class="widget reversebg">
                                    <h3>Brands</h3>
                                    
                                    <div class="list-group list-group-brand">
                                        @foreach($brands as $brand)
                                        <a href="{{route('shop.brand',$brand->id)}}" class="list-group-item">{{$brand->name}}</a>
                                        @endforeach
                                        
                                    </div><!-- End .list-group -->
                                </div>

                                <div class="widget subscribe">
                                    <h3>BE THE FIRST TO KNOW</h3>
                                    <p> Get all the latest information on Events, Sales and Offers. Sign up for the Shop Now store newsletter today.</p>
                                    <form action="#" id="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
                                        </div>
                                        <input type="submit" value="SUBMIT" class="btn btn-custom">
                                    </form>
                                </div>

                              <!-- End .widget -->

                                <div class="widget popular">
                                    <h3>Popular</h3>
                                    
                                    <div class="related-slider flexslider sidebarslider">
                                        <ul class="related-list clearfix">
                                            
                                            <li>
                                                @foreach($sideproducts as $product)
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="item1" width="115" height="115">
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
                                </div>
                                
                               <!-- End .widget -->
                                
                                <!--<div class="widget banner-slider-container">
                                    <div class="banner-slider flexslider">
                                        <ul class="banner-slider-list clearfix">
                                            {{-- <li><a href="#"><img src="{{asset('frontend/images/banner1.jpg')}}" alt="Banner 1"></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/images/banner2.jpg')}}" alt="Banner 2"></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/images/banner3.jpg')}}" alt="Banner 3"></a></li> --}}
                                        </ul>
                                    </div>
                                </div> -->
                                
                            </div><!-- End .col-md-3 -->