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
                        <div class="product-details-img-left selectProduct ml-100">
                            <img class="zoompro" src="{{url($product->image? 'Productimg/'.$product->thumbnail:'images/noimage.jpg')}}" data-zoom-image="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product-details-img" style="max-width: 300px">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-modify">
                            <span>{{$product->category->name}}</span>
                            <h2>{{$product->name}}</h2>
                           
                            
                            <div class="pro-details-price-wrap">
                                @if($product->special_price)
                                <div class="product-price">

                                    <span>৳ {{$product->special_price}}</span>
                                    <span class="old">৳ {{$product->selling_price}}</span>
                                </div>
                                @php
                                    $less = (($product->selling_price - $product->special_price)/$product->selling_price)*100;
                                    $round = round($less);
                                @endphp
                                <div class="dec-rang"><span> {{$round}} %</span></div>                                      
                                
                                @else
                                    <div class="product-price">

                                   
                                    <span >৳ {{$product->selling_price}}</span>

                                </div>  
                                <div class="product-price ml-20">
                                   <h3>{{$product->quantity}} Pc/Kg Available </h3> 
                                </div>  
                                @endif


                                
                            </div>
                            
                            <div class="pro-details-compare-wishlist">
                                <div class="pro-details-compare">
                                    <a title="Add To Compare" href="{{ url('add-to-compare/'.$product->id) }}" class="addToCompare"><i class="la la-retweet"></i> Compare</a>
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
                                
                                    <form method="post" name="cart" action="{{ url('add-to-cart/'.$product->id) }}">
                                        {{csrf_field()}}
                                   
                                    <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="2">
                                    </div>
                            </div>
                            <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                <a  href="javascript:{}" onclick="document.getElementById('cart').submit();">Add To Cart</a>
                            </form>
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
                            <a data-toggle="tab" class="active" href="#des-details1">Description</a>                           
                            
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    {!!$product->long_description!!}
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
                    @foreach(App\Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->take(3)->get() as $product)                             
                                                
                                                
                                           
                    <div class="product-wrap">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="{{$product->name}}"></a>
                            <div class="product-action">
                                <a class="show_product"  data-toggle="modal" data-target="#exampleModal" data-proid="{{$product->id}}" data-cat="{{$product->category->name}}" data-proname="{{$product->name}}" data-review="{{$product->review_id}}" data-proatt="{{$product->attribute_id}}" data-price="{{$product->selling_price}}" data-src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" title="Quick View" href="#"><i class="la la-search"></i></a>
                                <form action="{{route('wishlist.store')}}" id="contact_form" method="post" style="display: none;">
                                      {{csrf_field()}}
                                      <input name="user_id" type="hidden"  @if(Auth::user()) value="{{Auth::user()->id}}" @endif />
                                      <input name="product_id" type="hidden" value="{{$product->id}}" />
                                  </form>  



                                  <a title="Add To Wishlist" @if(Auth::user())onclick="document.getElementById('contact_form').submit();" @else href="{{route('login')}}" @endif><i class="la la-heart-o"></i></a>
                                
                                <a title="Compare" href="{{ url('add-to-compare/'.$product->id) }}"><i class="la la-repeat"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>{{$product->category->name}}</span>
                            <h4><a href="{{route('shop.product',$product->id)}}">{{$product->name}}</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>৳ {{$product->selling_price}}</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}"><i class="la la-cart-plus"></i> Add to Cart`</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach                   
                </div>
            </div>
        </div>
        	
        
        
       
@stop
@section('js')
<script src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.debouncedresize.js')}}"></script>
<script>
    $.
</script>
@stop