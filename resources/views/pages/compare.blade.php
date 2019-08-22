@extends('layouts.shop')
@section('breadcrumb')
<h2>Compare page</h2>
<ul>
	<li>
		<a href="index.html">Home</a>
	</li>
	<li class="active">Compare </li>
</ul>


@stop
@section('content') 
<div class="compare-page-wrapper pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Compare Page Content Start -->
                        <div class="compare-page-content-wrap">
                            <div class="compare-table table-responsive">
                            	@if(session('compare'))
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="first-column">Product</td>
                                            @foreach(session('compare') as $id => $product)
                                            <td class="product-image-title">
                                                <a href="single-product.html" class="image">
                                                    <img class="img-fluid" src="{{asset('Productimg/'.$product['image'])}}" alt="Compare Product">
                                                </a>
                                                <a href="#" class="category">{{$product['category']}}</a>
                                                <a href="single-product-sale.html" class="title">{{$product['name']}}</a>
                                            </td>                                            
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="first-column">Description</td>
                                            @foreach(session('compare') as $id => $product)
                                            <td class="pro-desc">
                                                {!!$product['description']!!}
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="first-column">Price</td>
                                            @foreach(session('compare') as $id => $product)
                                            <td class="pro-price">{{$product['selling_price']}}</td>
                                            @endforeach
                                            
                                        </tr>
                                        {{-- <tr>
                                            <td class="first-column">Color</td>
                                            @foreach(session('compare') as $id => $product)
                                            <td class="pro-color">Black</td> 
                                            @endforeach                              
                                        </tr> --}}
                                        <tr>
                                            <td class="first-column">Stock</td>
                                            @foreach(session('compare') as $id => $product)
                                            <td class="pro-stock">@if($product['selling_price'] > 2) In Stock @else Out of Stock @endif</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="first-column">Add to cart</td>
                                           @foreach(session('compare') as $id => $product)
                                            <td><a {{ url('add-to-cart/'.$id) }} class="check-btn">Add to Cart</a></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="first-column">Rating</td>
                                           @foreach(session('compare') as $id => $product)
                                           
                                            <td class="pro-ratting">
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                                <i class="la la-star"></i>
                                            </td>
                                            @endforeach
                                           
                                        </tr>
                                        <tr>
                                            <td class="first-column">Remove</td>
                                            @foreach(session('compare') as $id => $product)                                           
                                            <td class="pro-remove">
                                                 <button class="la la-trash remove-from-compare" data-id="{{ $id }}"></button>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>                                
                                @endif
                            </div>
                        </div>
                        <!-- Compare Page Content End -->
                    </div>
                </div>
            </div>
        </div>
@stop