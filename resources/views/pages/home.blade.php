@extends('layouts.default')
@section('content')
<div class="slider-area pt-10">
            <div class="container">               
                <div class="slider-active-3 owl-carousel nav-style-4 ">
                    @foreach($slider as $slide)
                    <div class="slider-area slider-height-6 bg-img"  style="background-image:url(slide/{{$slide->image1}});background-size: contain;">
                        @if(!$slide->hide_product)
                        <div class="container">
                            
                             @foreach(App\Product::all()->random(1) as $product)
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class=" slider-content-3 slider-animated-1 ml-70">
                                       
                                        <h1 class="wow fadeInUp">{{$product->name}}</h1>
                                        <p class="wow fadeInUp">{!!$product->short_description!!}</p>
                                        <div class="slider-btn-1 default-btn btn-hover">
                                            <a class="animated btn-color-theme btn-size-md btn-style-outline" href="{{route('shop.product',$product->id)}}">BUY NOW</a>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="slider-sin-img-hm6">
                                        <img class="tilter" src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="" style="max-width: 333px">
                                        <div class="slider-price">
                                            <h4> ৳ {{$product->price}}</h4>
                                        </div>
                                    </div>
                                </div>
                               
                            
                            </div>
                             @endforeach
                        </div>
                        @endif
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="product-area pb-100">
            <div class="container">
                <div class="section-title-2 text-center">
                    <h2>Featured products</h2>
                    <img src="assets/images/icon-img/title-shape.png" alt="icon-img">
                </div>
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrap product-border-1 product-img-zoom">
                        <div class="product-img">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm2-1.jpg" alt="product"></a>
                            <div class="product-action-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="compare.html"><i class="la la-repeat"></i></a>
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
                    <div class="product-wrap product-border-1 product-img-zoom">
                        <div class="product-img">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm2-2.jpg" alt="product"></a>
                            <div class="product-action-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="compare.html"><i class="la la-repeat"></i></a>
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
                    <div class="product-wrap product-border-1 product-img-zoom">
                        <div class="product-img">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm2-3.jpg" alt="product"></a>
                            <div class="product-action-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="compare.html"><i class="la la-repeat"></i></a>
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
                    <div class="product-wrap product-border-1 product-img-zoom">
                        <div class="product-img">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm2-4.jpg" alt="product"></a>
                            <div class="product-action-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="compare.html"><i class="la la-repeat"></i></a>
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
                    <div class="product-wrap product-border-1 product-img-zoom">
                        <div class="product-img">
                            <a href="product-details.html"><img src="assets/images/product/pro-hm2-5.jpg" alt="product"></a>
                            <div class="product-action-2">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <a title="Add To Cart" href="#"><i class="la la-cart-plus"></i></a>
                                <a title="Wishlist" href="wishlist.html"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="compare.html"><i class="la la-repeat"></i></a>
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
            </div>
        </div>
        @if($deals)
        @foreach($deals as $deal)
        <div class="deal-area pb-80 pt-80 mt-50 mb-50 bg-img" style="background-image:url(dealimg/{{$deal->back_image}}); ">
            <div class="container-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="deal-content-2 deal-content-3">
                            <h2 style="color:lightsteelblue">{{$deal->title}}</h2>
                            <p style="color:lightsteelblue">{{$deal->description}}</p>
                            <div class="timer timer-style-3">
                                <div data-countdown="{{$deal->end_date}}"></div>
                            </div>
                            <div class="deal-5-btn btn-hover hover-border-none">
                                <a class="black-color" href="{{$deal->link}}">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="deal-5-img wow fadeInRight">
                            <img src="{{url($deal->front_image? 'dealimg/'.$deal->front_image:'images/noimage.jpg')}}" alt="deal" style="max-width: 222px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach   
        @else
        <div class="pt-10 pb-10"></div>
        @endif
        
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
                                @foreach($featureProduct as $parent)
                                <a href="#{{$parent->slug}}" data-toggle="tab">
                                    <h5>{{$parent->name}} </h5>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                   @foreach($featureProduct as $key =>$allproduct)
                    <div id="{{$allproduct->slug}}" class="tab-pane {{ $key==0 ? 'active' : ''}}">
                        <div class="product-slider-active owl-carousel">
                            @foreach($allproduct->products as $product)
                                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                                <div class="product-action-4">
                                                    <div class="product-action-4-style">
                                                        <a data-tooltip="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}"><i class="la la-cart-plus"></i></a>
                                                        <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding">
                                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                <div class="price-addtocart">
                                                    <div class="product-price">
                                                        <span>৳ {{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                            
                        </div>
                    </div>
                    @endforeach
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
                                @foreach(App\Category::where('parent_id',0)->get() as $parent)
                                <a href="#{{$parent->slug}}2" data-toggle="tab">
                                    <h5>{{$parent->name}} </h5>
                                </a>
                                 @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content jump">
                    @foreach(App\Category::where('parent_id',0)->get() as $key => $allproduct)
                    <div id="{{$allproduct->slug}}2" class="tab-pane {{ $key==0 ? 'active' : ''}}">
                        <div class="row">
                            @php
                            $id=$allproduct->id;
                            
                             $products = App\Category::with(['products','childs.products','childs.childs.products'])->find($id);
                            @endphp
                            @foreach($products->products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                        <div class="product-action-4">
                                            <div class="product-action-4-style">
                                                <a data-tooltip="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}"><i class="la la-cart-plus"></i></a>
                                                <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content product-content-padding">
                                        <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                        <div class="price-addtocart">
                                            <div class="product-price">
                                                <span>{{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @foreach($products->childs as $child)                                        
                                @foreach($child->childs as $grand)
                                    @foreach($grand->products as $product)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                                <div class="product-action-4">
                                                    <div class="product-action-4-style">
                                                        <a data-tooltip="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}"><i class="la la-cart-plus"></i></a>
                                                        <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding">
                                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                <div class="price-addtocart">
                                                    <div class="product-price">
                                                        <span>{{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                                @foreach($child->products as $product)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="product-wrap product-border-3 product-img-zoom mb-30">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                                <div class="product-action-4">
                                                    <div class="product-action-4-style">
                                                        <a data-tooltip="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}"><i class="la la-cart-plus"></i></a>
                                                        <a data-tooltip="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a data-tooltip="Compare" href="#"><i class="la la-random"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content product-content-padding">
                                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                <div class="price-addtocart">
                                                    <div class="product-price">
                                                        <span>{{$product->price}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                           
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="brand-logo-area pb-70">
            <div class="container">
                <div class="brand-logo-padding bg-gray-3">
                    <div class="brand-logo-active-2 owl-carousel">
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-5.png')}}" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-6.png')}}" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-7.png')}}" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-8.png')}}" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-9.png')}}" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="{{asset('frontend/images/brand-logo/brand-logo-6.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@stop