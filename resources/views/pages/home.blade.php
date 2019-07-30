@extends('layouts.default')
@section('content')

 @include('layouts.3banner')       
     
        <div class="product-area pb-40">
            <div class="container">
                <div class="section-title-tab-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4">
                            <div class="section-title-5">
                                <h2>Featured Product</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                            <div class="product-tab-list-4 nav">
                                @foreach(App\Category::where('parent_id',0)->get() as $parent)
                                <a href="#{{$parent->name}}" data-toggle="tab">
                                    <h5>{{$parent->name}} </h5>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-5" class="tab-pane">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-8.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-9.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-10.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-6" class="tab-pane active">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-7" class="tab-pane">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-10.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-9.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-8.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-8" class="tab-pane">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-9" class="tab-pane">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$220.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$210.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                <div class="product-img">
                                    <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                    <div class="product-action-4">
                                        <div class="product-action-4-style">
                                            <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                            <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                            <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content product-content-padding">
                                    <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                    <div class="price-addtocart">
                                        <div class="product-price">
                                            <span>$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="product-details.html"><img src="assets/images/banner/banner-15.png" alt="banner"></a>
                            <div class="banner-content-10">
                                <h2>Mak Pro Gamming</h2>
                            </div>
                            <div class="banner-content-10-btn">
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="banner-wrap mb-30 res-white-overly-xs res-white-overly-md">
                            <a href="product-details.html"><img src="assets/images/banner/banner-23.png" alt="banner"></a>
                            <div class="banner-content-13">
                                <h3>Qucx electric scooter</h3>
                                <p>It is a long established fact that a reader will be distracted by the readable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-40">
            <div class="container">
                <div class="section-title-tab-wrap">
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4">
                            <div class="section-title-5">
                                <h2>All Product</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                            <div class="product-tab-list-4 nav">
                                <a href="#product-10" data-toggle="tab">
                                    <h5>Computer </h5>
                                </a>
                                <a class="active" href="#product-11" data-toggle="tab">
                                    <h5>Accessories</h5>
                                </a>
                                <a href="#product-12" data-toggle="tab">
                                    <h5>Apple</h5>
                                </a>
                                <a href="#product-13" data-toggle="tab">
                                    <h5>Dell </h5>
                                </a>
                                <a href="#product-14" data-toggle="tab">
                                    <h5>Watch</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                    <div id="product-10" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-8.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$220.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$230.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$240.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$260.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$270.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-11" class="tab-pane active">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$220.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$230.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$240.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$260.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-8.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$270.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-12" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-9.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-10.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$220.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-11.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$230.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$240.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$260.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$270.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-13" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-3.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$220.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$230.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-8.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$240.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$260.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-5.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$270.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="product-14" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-10.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-9.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$220.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-11.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$210.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-2.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$230.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-4.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$240.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-1.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$250.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-6.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$260.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="assets/images/product/pro-hm5-7.jpg" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>$270.00</span>
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
        <div class="brand-logo-area pb-70">
            <div class="container">
                <div class="brand-logo-padding bg-gray-3">
                    <div class="brand-logo-active-2 owl-carousel">
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-5.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-6.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-7.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-8.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-9.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/images/brand-logo/brand-logo-6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@stop