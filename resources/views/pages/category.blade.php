@extends('layouts.shop')
@section('breadcrumb')
 <h2>ShopNow</h2>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">{{$category->name}} </li>
            </ul>
@stop
@section('content')


           
        
  
        <div class="shop-area pt-90 pb-90 section-padding-2">
            <div class="container-fluid">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="shop-topbar-wrapper">
                            <div class="shop-topbar-left">
                                <div class="view-mode nav">
                                    <a class="active" href="#shop-1" data-toggle="tab"><i class="la la-th"></i></a>
                                    <a href="#shop-2" data-toggle="tab"><i class="la la-list-ul"></i></a>
                                </div>
                                <p>Showing {{$products->firstItem()}} - {{$products->lastItem()}} of {{ $products->total() }} results </p>
                            </div>
                            <div class="product-sorting-wrapper">
                                <div class="product-shorting shorting-style">
                                    <label>View:</label>
                                    <select>
                                        <option value=""> 20</option>
                                        <option value=""> 23</option>
                                        <option value=""> 30</option>
                                    </select>
                                </div>
                                <div class="product-show shorting-style">
                                    <label>Sort by:</label>
                                    <select>
                                        <option value="">Default</option>
                                        <option value=""> Name</option>
                                        <option value=""> price</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="shop-bottom-area">
                            <div class="tab-content jump">
                                <div id="shop-1" class="tab-pane active">
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="product-wrap mb-35">
                                                <div class="product-img mb-15">
                                                    <a href="{{route('shop.product',$product->id)}}"><img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="product"></a>
                                                    <div class="product-action">
                                                        <a class="show_product" data-toggle="modal" data-target="#exampleModal" data-proid="{{$product->id}}" data-cat="{{$product->category->name}}" data-proname="{{$product->name}}" data-review="{{$product->review_id}}" data-proatt="{{$product->attribute_id}}" data-price="{{$product->price}}" data-src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                                        <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                                        <a title="Compare" href="{{ url('add-to-compare/'.$product->id) }}"><i class="la la-retweet"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <span>{{$product->category->name}}</span>
                                                    <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                                    <div class="price-addtocart">
                                                        <div class="product-price">
                                                            <span>{{$product->price}}</span>
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
                                {!! $products->render() !!}                             
                                    
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-wrapper">
                            <div class="sidebar-widget">
                                <h4 class="sidebar-title">Search </h4>
                                <div class="sidebar-search mb-40 mt-20">
                                    <form class="sidebar-search-form" action="#">
                                        <input type="text" placeholder="Search here...">
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
                            <div class="shop-price-filter mt-35 shop-sidebar-border pt-40 sidebar-widget">
                                <h4 class="sidebar-title">Price Filter</h4>
                                <div class="price-filter mt-20">
                                    <span>Range:  $100.00 - 1.300.00 </span>
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <button type="button">Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget shop-sidebar-border pt-40 mt-40">
                                <h4 class="sidebar-title">Refine By </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Colour </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Size </h4>
                                <div class="sidebar-widget-list mt-20">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget pt-40 mt-40 shop-sidebar-border">
                                <h4 class="sidebar-title">Popular Tags </h4>
                                <div class="sidebar-widget-tag mt-20">
                                    <ul>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">For Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       	
   







        	
@stop