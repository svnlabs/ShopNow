@extends('layouts.shop')
@section('breadcrumb')
<h2>Wishlist page</h2>
<ul>
	<li>
		<a href="index.html">Home</a>
	</li>
	<li class="active">Wishlist </li>
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
						<table>
							<thead>
								<tr>
									<th>Image</th>
									<th>Product Name</th>
									<th>Until Price</th>
									<th>Qty</th>
									
									<th>Add To Cart</th>
								</tr>
							</thead>
							<tbody>
								@foreach($wishlists as $wishlist)
								<tr>
									<td class="product-thumbnail">
										<a href="#"><img src="{{url($wishlist->product->image? 'Productimg/'.$wishlist->product->image:'images/noimage.jpg')}}" alt=""></a>
									</td>
									<td class="product-name"><a href="#">{{$wishlist->product->name}}</a></td>
									<td class="product-price-cart"><span class="amount">{{$wishlist->product->price}}</span></td>
									
									<td class="product-quantity">
										<form method="post" id="add" action="{{route('cart.store')}}">
                                        {{csrf_field()}}
										<input type="hidden" name="proid" value="{{$wishlist->product_id}}">
										<div class="cart-plus-minus">
											<input class="cart-plus-minus-box" type="number" name="quantity" >
										</div>
										</form>
									</td>									
									<td class="product-wishlist-cart">
										<a onclick="event.preventDefault();document.getElementById('add').submit();"href="#">add to cart</a>
									
									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop 