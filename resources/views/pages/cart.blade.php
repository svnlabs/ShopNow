@extends('layouts.default')
@section('content')
   <section id="content">

        	<div id="breadcrumb-container">
        		<div class="container">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">Shopping Cart</li>
					</ul>
        		</div>
        	</div>
        	<div class="container">
                        @if(session('success'))

                        <div class="alert alert-success">
                                    {{ session('success') }}
                        </div>

                        @endif
        		<div class="row">
        			<div class="col-md-12">
						<header class="content-title">
							<h1 class="title">Shopping Cart</h1>
							<p class="title-desc">Just this week, you can use the free premium delivery.</p>
						</header>
        				<div class="xs-margin"></div><!-- space -->
        				<div class="row">
        					
        					<div class="col-md-12 table-responsive">
								
        						<table class="table cart-table">
        						<thead>
        							<tr>
										<th class="table-title">Product Name</th>
										<th class="table-title">Product Code</th>
										<th class="table-title">Unit Price</th>
                                        <th class="table-title">Quantity</th>										
										<th class="table-title">SubTotal</th>
        							</tr>
        						</thead>
								<tbody>
                                    <?php $total = 0 ?>

                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)

                                    <?php $total += $details['price'] * $details['quantity'] ?>

									<tr>

										<td class="item-name-col">
											<figure>
												<a href="#"><img src="{{asset('Productimg/'.$details['image'])}}" alt="phone 4"></a>
											</figure>
											<header class="item-name"><a href="#">{{ $details['name'] }}</a></header>
											{{ $details['description'] }}
										</td>
										<td class="item-code">{{ $details['sku'] }}</td>
										<td class="item-price-col"><span class="item-price-special">৳{{ $details['price'] }}</span></td>
										<td>
											<div class="custom-quantity-input">
												<input type="number" value="{{ $details['quantity'] }}" name="quantity" step="1">

											</div>
                                            

                                          
										</td>
                                        
										<td class="item-total-col"><span class="item-price-special">৳ {{ $details['price'] * $details['quantity'] }}</span>
										
                                        <button class="close-button remove-from-cart" data-id="{{ $id }}"></button>
										</td>


									</tr>
                                    @endforeach
                                    @endif
									
								</tbody>
							  </table>
        						
        					</div><!-- End .col-md-12 -->
        					
        				</div><!-- End .row -->
        				<div class="lg-margin"></div><!-- End .space -->
        				
        				<div class="row">
        					<div class="col-md-8 col-sm-12 col-xs-12 lg-margin">
        						
        						<div class="tab-container left clearfix">
        								<ul class="nav-tabs">
										  <li class="active"><a href="#shipping" data-toggle="tab">Shipping &amp; Taxes</a></li>
										  <li><a href="#discount" data-toggle="tab">Discount Code</a></li>
										  <li><a href="#gift" data-toggle="tab">Gift voucher </a></li>
										  
										</ul>
        								<div class="tab-content clearfix">
        									<div class="tab-pane active" id="shipping">
        										
        										<form action="#" id="shipping-form">
        											<p class="shipping-desc">Enter your destination to get a shipping estimate.</p>
													<div class="form-group">
														<label for="select-country" class="control-label">Country&#42;</label>
														<div class="input-container normal-selectbox">
                                                            <select id="select-country" name="select-country" class="selectbox">
                                                                <option  value="Japan">Japan</option>
                                                                <option  value="Brazil">Brazil</option>
                                                                <option  value="France">France</option>
                                                                <option  value="Italy">Italy</option>
                                                                <option  value="Spain">Spain</option>
                                                            </select>
                                                        </div><!-- End .select-container -->
													</div><!-- End .form-group -->
													<div class="xss-margin"></div>
													<div class="form-group">
                                                        <label for="select-state" class="control-label">Regison/State&#42;</label>
                                                        <div class="input-container normal-selectbox">
                                                            <select id="select-state" name="select-state" class="selectbox">
                                                            <option  value="California">California</option>
                                                            <option  value="Texas">Texas</option>
                                                            <option  value="NewYork">NewYork</option>
                                                            <option  value="Narnia">Narnia</option>
                                                            <option  value="Jumanji">Jumanji</option>
                                                        </select>
                                                        </div><!-- End .select-container -->
                                                    </div><!-- End .form-group -->
        										  <div class="xss-margin"></div>
        										<div class="form-group">
													<label for="select-country" class="control-label"  >Post Code&#42;</label>
													<div class="input-container">
                                                        <input type="text" required class="form-control" placeholder="Your fax">
                                                    </div>
												</div><!-- End .form-group -->
        										<div class="xss-margin"></div>
        										<p class="text-right">
        											<input type="submit" class="btn btn-custom-2" value="GET QUOTES">
        										</p>
        										</form>
        										
        									</div><!-- End .tab-pane -->
        									
        									<div class="tab-pane" id="discount">
        										<p>Enter your discount coupon code here.</p>
        										<form action="#">
        											<div class="input-group">
														<input type="text" required class="form-control" placeholder="Coupon code">
														
													</div><!-- End .input-group -->	
        										<input type="submit" class="btn btn-custom-2" value="APPLY COUPON">
        										</form>
        									</div><!-- End .tab-pane -->
        									
        									<div class="tab-pane" id="gift">
        										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dignissimos nostrum debitis optio molestiae in quam dicta labore obcaecati ullam necessitatibus animi deleniti minima dolor suscipit nobis est excepturi inventore.</p>
        									</div><!-- End .tab-pane -->
        									
        								</div><!-- End .tab-content -->
        						</div><!-- End .tab-container -->
        						
        					</div><!-- End .col-md-8 -->

        					<div class="col-md-4 col-sm-12 col-xs-12">
        						
        						<table class="table total-table">
        							<tbody>
        								<tr>
        									<td class="total-table-title">Subtotal:</td>
        									<td>৳ {{ $total }}</td>
        								</tr>
        								<tr>
        									<td class="total-table-title">Shipping:</td>
        									<td>$0.00</td>
        								</tr>
        								<tr>
        									<td class="total-table-title">TAX (0%):</td>
        									<td>$0.00</td>
        								</tr>
        							</tbody>
        							<tfoot>
        								<tr>
											<td>Total:</td>
											<td>৳ {{ $total }}</td>
        								</tr>
        							</tfoot>
        						</table>
        						<div class="md-margin"></div><!-- End .space -->
        						<a href="#" class="btn btn-custom-2">CONTINUE SHOPPING</a>
        						<a href="#" class="btn btn-custom">CHECKOUT</a>
        					</div><!-- End .col-md-4 -->
        				</div><!-- End .row -->
        				<div class="md-margin2x"></div><!-- Space -->
        				
        				<div class="similiar-items-container carousel-wrapper">
                            <header class="content-title">
                                <div class="title-bg">
                                    <h2 class="title">Similiar Products</h2>
                                </div><!-- End .title-bg -->
                                <p class="title-desc">Note the similar products - after buying for more than $500 you can get a discount.</p>
                            </header>
                            
                                <div class="carousel-controls">
                                    <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                    <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controls -->
                                <div class="similiar-items-slider owl-carousel">
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container">
                                                <a href="product.html">
                                                    <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                    <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                </a>
                                            </figure>
                                            <div class="item-price-container">
                                                <span class="item-price">$160<span class="sub-price">.99</span></span>
                                            </div><!-- End .item-price-container -->
                                            <span class="new-rect">New</span>
                                        </div><!-- End .item-image-wrapper -->
                                        <div class="item-meta-container">
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-result" data-result="80"></div>
                                                </div><!-- End .ratings -->
                                                <span class="ratings-amount">
                                                    5 Reviews
                                                </span>
                                            </div><!-- End .rating-container -->
                                            <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                            <div class="item-action">
                                                <a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Add to Cart</span>
                                                </a>
                                                <div class="item-action-inner">
                                                    <a href="#" class="icon-button icon-like">Favourite</a>
                                                    <a href="#" class="icon-button icon-compare">Checkout</a>
                                                </div><!-- End .item-action-inner -->
                                            </div><!-- End .item-action -->
                                        </div><!-- End .item-meta-container --> 
                                    </div><!-- End .item -->                                 

                                   <!-- End .item -->

                                </div><!--purchased-items-slider -->
                            </div><!-- End .purchased-items-container -->
        				
        			</div><!-- End .col-md-12 -->
        		</div><!-- End .row -->
			</div><!-- End .container -->
        
        </section><!-- End #content -->
@stop
@section('js')
 <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@stop