@extends('layouts.shop')
@section('breadcrumb')
 <h2>ShopNow</h2>
            <ul>
                <li>
                    <a href="index.html">Search Result For</a>
                </li>
                <li class="active">{{$q}} </li>
            </ul>
@stop
@section('content')       
        
  
        <div class="shop-area pt-90 pb-90 section-padding-2">
            <div class="container-fluid">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                
                                <p>Showing {{$searchResult->firstItem()}} - {{$searchResult->lastItem()}} of {{ $searchResult->total() }} results </p>
                            </div>
                            
                        </div>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        @foreach($searchResult as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="{{route('shop.product',$product->id)}}"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a class="show_product" data-toggle="modal" data-target="#exampleModal" data-proid="{{$product->id}}" data-cat="{{$product->category->name}}" data-proname="{{$product->name}}" data-review="{{$product->review_id}}" data-proatt="{{$product->attribute_id}}" data-price="{{$product->selling_price}}" data-src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="{{ url('add-to-compare/'.$product->id) }}"><i class="la la-retweet"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span>{{$product->category->name}}</span>
                                                    <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>{{$product->selling_price}}</span>
                                                        </div>
                                                        <div class="product-addtocart">
                                                            <a title="Add To Cart" href="{{ url('add-to-cart/'.$product->id) }}">+ Add To Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                     
                                    </div>
                                </div>
                                {!! $searchResult->render() !!}                             
                                    
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">Search </h4>
                                <div class="sidebar-search mb-40 mt-20">                                    
                                    <form class="sidebar-search-form" method="get" action="{{URL::to('search')}}">
                                        <input type="text" name="q" placeholder="Search here...">
                                        <button>
                                            <i class="la la-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border pt-40">
                                <h4 class="sidebar-title">Shop By Categories</h4>
                                <div class="shop-catigory mt-20">
                                    <ul id="faq">
                                        @foreach(App\Category::Where('parent_id',0)->get() as $parent)
                                        <li> <a data-toggle="collapse" data-parent="#faq" @if( count($parent->products)) href="{{route('shop.category',$parent->id)}}" @endif>{{$parent->name}} <i class="la la-angle-down"></i></a>
                                             <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                            @foreach(App\Category::where('parent_id',$parent->id)->get() as $child)
                                           
                                                <li>
                                                <a @if( count($child->products))href="{{route('shop.category',$child->id)}}" @endif>{{$child->name}}</a>
                                                <ul id="shop-catigory-1" class="panel-collapse collapse show">
                                                    @foreach(App\Category::where('parent_id',$child->id)->get() as $grand)
                                                        <li>
                                                <a @if( count($grand->products))href="{{route('shop.category',$grand->id)}}" @endif>{{$grand->name}}</a></li>
                                                    @endforeach
                                                </ul>

                                            </li>
                                            
                                            @endforeach
                                            </ul>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>       	
   







        	
@stop