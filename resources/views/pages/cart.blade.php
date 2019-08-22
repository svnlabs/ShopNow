@extends('layouts.shop')
@section('breadcrumb')
<h2>Cart</h2>
<ul>
    <li>
        <a href="{{url('/')}}">Home</a>
    </li>
    <li class="active">cart  </li>
</ul>


@stop
@section('content')
 <div class="cart-main-area pt-85 pb-90">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                @if(session('cart'))
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Unit Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach(session('cart') as $id => $details)
                                        <tr>
                                            <td class="product-thumbnail">                                           
                                                    <a href="#"><img alt="{{$details['name']}}" src="{{asset('Productimg/'.$details['image'])}}" style="max-width:100px"></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $details['name'] }}</a></td>
                                             <td class="product-price-cart"><span class="amount"> ৳ {{ $details['price'] }}</span></td>
                                            <td class="product-quantity">
                                                <form action="{{route('cart.update', ['id' => $id])}}" method="post">
                                                    {{csrf_field()}}
                                                <input name="_method" type="hidden" value="PATCH">
                                                <input type="hidden" name="id" value="">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box quantity" type="text" name="quantity" value="{{ $details['quantity'] }}">
                                                </div>
                                                </form>
                                            </td>

                                            <td class="product-subtotal">
                                                @if(session('cart'))
                                                @php$total = 0;$subtotal=$details['quantity']* $details['price']; @endphp
                                                    
                                                    ৳{{ $subtotal }}
                                                    @else
                                                    ৳ 0 
                                                    @endif</td>
                                            <td class="product-remove">     
                                                <a class="update-cart" data-id="{{ $id }}"><i class="la la-pencil"></i></a>                                         
                                                <a class="remove-from-cart" data-id="{{ $id }}"><i class="la la-close"></i></a>
                                            </td>

                                           @endforeach
                                        
                                               
                                            
                                            
                                           
                                            
                                            
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                @else
                                <div class="alert alert-info"><h3>Cart is empty</h3></div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a onclick="window.history.back()">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                                <a class="black-color" href="{{route('shop.checkout')}}">Continue to Chackout</a>
                                            </div>
                                        <div class="cart-clear">                                           
                                            <a class="clearcart">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
                 @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                                    @endforeach
                                                    @endif
                 <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-6 mb-50 text-center">
                    <h2>Cross Sell</h2>
                </div>
                <div class="product-slider-active owl-carousel">
                    @if(session('cart'))
                    @foreach(App\Product::where('selling_price','<',$total)->get() as $product)                             
                                                
                                                
                                           
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
                            <span>৳ {{$product->category->name}}</span>
                            <h4><a href="{{route('shop.product',$product->id)}}">{{$product->name}}</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>৳ {{$product->selling_price}}</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach 
                    @endif                  
                </div>
            </div>
        </div>                 <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-6 mb-50 text-center">
                    <h2>Up Sell</h2>
                </div>
                <div class="product-slider-active owl-carousel">
                    @if(session('cart'))
                    @foreach(App\Product::where('selling_price','>',$total)->get() as $product)                             
                                                
                                                
                                           
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
                            <span>৳ {{$product->category->name}}</span>
                            <h4><a href="{{route('shop.product',$product->id)}}">{{$product->name}}</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>৳ {{$product->selling_price}}</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach 
                    @endif                  
                </div>
            </div>
        </div>
            </div>
        </div>      
            
        
        
       
@stop
@section('js')
<script src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.debouncedresize.js')}}"></script>
<script>
    $(".clearcart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-all') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}'},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
</script>
@stop