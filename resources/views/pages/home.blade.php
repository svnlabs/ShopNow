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
                                    <div class=" slider-content-1 slider-animated-1 ml-70">
                                       
                                        <h1 class="wow fadeInUp">{{$product->name}}</h1>
                                        <p class="wow fadeInUp">{!!$product->description!!}</p>
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
   <div class="banner-area pt-30 pb-40">
            <div class="container">
                <div class="row">
                    @foreach(App\Product::all()->random(3) as $ban1)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="banner-wrap mb-30">
                            <a href="product-details.html">
                                <img src="{{asset('frontend/images/banner/banner-20.png')}}" alt="banner">
                            </a>
                            <div class="banner-content-12">
                                <h2>{{$ban1->name}}</h2>
                                <h5>{{$ban1->category->name}}</h5>
                                <h3>৳ {{$ban1->price}}</h3>
                            </div>
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
        <div class="banner-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap mb-30">
                            <a href="product-details.html"><img src="{{asset('frontend/images/banner/banner-15.png')}}" alt="banner"></a>
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
                            <a href="product-details.html"><img src="{{asset('frontend/images/banner/banner-23.png')}}" alt="banner"></a>
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