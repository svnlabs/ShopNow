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
                        <div class="product-details-img-left selectProduct">
                            <img class="zoompro" src="{{url($product->image? 'Productimg/'.$product->thumbnail:'images/noimage.jpg')}}" data-zoom-image="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product-details-img" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content pro-details-content-modify">
                            <span>{{$product->category->name}}</span>
                            <h2>{{$product->name}}</h2>
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
                            @if($product->attribute_id)
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
                            @endif
                            <div class="pro-details-price-wrap">
                                @if($product->special_price)
                                <div class="product-price">

                                    <span>৳ {{$product->special_price}}</span>
                                    <span class="old">৳ {{$product->price}}</span>
                                </div>
                                @php
                                    $less = (($product->price - $product->special_price)/$product->price)*100;
                                    $round = round($less);
                                @endphp
                                <div class="dec-rang"><span>- {{$round}} %</span></div>                                      
                                
                                @else
                                    <div class="product-price">

                                   
                                    <span >৳ {{$product->price}}</span>
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
                            <a data-toggle="tab" class="active" href="#des-details1">Description</a>
                            @if($product->attribute_id)<a  data-toggle="tab" href="#des-details2">Specification</a>@endif
                            <a data-toggle="tab" href="#des-details3">Reviews</a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    {!!$product->long_description!!}
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane ">
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
                    @foreach(App\Product::where('category_id',$product->category_id)->where('id','!=',$product->id)->take(3)->get() as $product)                             
                                                
                                                
                                           
                    <div class="product-wrap">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="{{$product->name}}"></a>
                            <div class="product-action">
                                <a class="show_product"  data-toggle="modal" data-target="#exampleModal" data-proid="{{$product->id}}" data-cat="{{$product->category->name}}" data-proname="{{$product->name}}" data-review="{{$product->review_id}}" data-proatt="{{$product->attribute_id}}" data-price="{{$product->price}}" data-src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" title="Quick View" href="#"><i class="la la-search"></i></a>
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
                            <span>৳ {{$product->category->name}}</span>
                            <h4><a href="{{route('shop.product',$product->id)}}">{{$product->name}}</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>৳ {{$product->price}}</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
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
@stop