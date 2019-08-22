@extends('layouts.shop')
@section('breadcrumb')
<h2>My account page</h2>
<ul>
	<li>
		<a href="index.html">Home</a>
	</li>
	<li class="active">My account </li>
</ul>
@stop
@section('content')

<!-- my account wrapper start -->
<div class="my-account-wrapper pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- My Account Page Start -->
				<div class="myaccount-page-wrapper">
					<!-- My Account Tab Menu Start -->
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="myaccount-tab-menu nav" role="tablist">
								<a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
								Dashboard</a>
								<a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
								
								
								<a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
								<a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>

							</div>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
							</form>
						</div>
						<!-- My Account Tab Menu End -->
						<!-- My Account Tab Content Start -->
						<div class="col-lg-9 col-md-8">
							<div class="tab-content" id="myaccountContent">
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
									<div class="myaccount-content">
										<h3>Dashboard</h3>
										<div class="welcome">
											<p>Hello, <strong> {{ Auth::user()->name }}</strong> (If Not <strong> {{ Auth::user()->name }} !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
										</div>

										<p class="mb-0">From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
									</div>
								</div>
								<!-- Single Tab Content End -->
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="orders" role="tabpanel">
									<div class="myaccount-content">
										<h3>Orders</h3>
										<div class="myaccount-table table-responsive text-center">
											<table class="table table-bordered">
												<thead class="thead-light">
													<tr>
														<th>Order</th>
														<th>Date</th>
														<th>Status</th>
														<th>Total</th>
														
													</tr>
												</thead>
												<tbody>
													@foreach(App\Order::where('user_id',Auth::user()->id)->get() as $key=>$order)
													<tr>
														<td>{{++$key}}</td>
														<td>{{$order->created_at}}</td>
														<td>{{$order->status? 'Pending':'Approved'}}</td>
														<td> ৳ {{$order->total}}</td>
														
													</tr>
													@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- Single Tab Content End -->
								
								
								<!-- Single Tab Content End -->
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="address-edit" role="tabpanel">
									<div class="myaccount-content">
										<h3>Billing Address</h3>
										<address>
											<p><strong>{{ Auth::user()->name }}</strong></p>
											<p>{{ Auth::user()->address1 }}</p>
											<p>Mobile: {{ Auth::user()->mobile }}</p>
										</address>
										
									</div>
								</div>
								<!-- Single Tab Content End -->
								<!-- Single Tab Content Start -->
								<div class="tab-pane fade" id="account-info" role="tabpanel">
									<div class="myaccount-content">
										<h3>Account Details</h3>
										<div class="account-details-form">
											<form action="{{route('user.update',['id' => Auth::user()->id ])}}" method="post">		
												{{csrf_field()}}
												
												<input name="_method" type="hidden" value="PATCH">										
												<div class="single-input-item">
													<label for="display-name" class="required"> Name</label>
													<input type="text" name="name" id="display-name" value="{{ Auth::user()->name }}" />
												</div>
												<div class="single-input-item">
													<label for="email" class="required">Email Addres</label>
													<input type="email" name="email" id="email" value="{{ Auth::user()->email }}" />
												</div>
												
												<div class="single-input-item">
													<button class="check-btn sqr-btn ">Save Changes</button>
												</div>
											</form>	
											
										</div>
										<div class="account-details-form">
											<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
													{{ csrf_field() }}

											
												<h3>Password change</h3>

													<input type="hidden" name="token" value="{{ Auth::user()->remember_token }}">

													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
														<label for="email" class="col-md-4 control-label">E-Mail Address</label>

														<div class="col-md-6">
															<input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required autofocus>

															@if ($errors->has('email'))
															<span class="help-block">
																<strong>{{ $errors->first('email') }}</strong>
															</span>
															@endif
														</div>
													</div>

													<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
														<label for="password" class="col-md-4 control-label">New Password</label>

														<div class="col-md-6">
															<input id="password" type="password" class="form-control" name="password" required>

															@if ($errors->has('password'))
															<span class="help-block">
																<strong>{{ $errors->first('password') }}</strong>
															</span>
															@endif
														</div>
													</div>

													<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
														<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
														<div class="col-md-6">
															<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

															@if ($errors->has('password_confirmation'))
															<span class="help-block">
																<strong>{{ $errors->first('password_confirmation') }}</strong>
															</span>
															@endif
														</div>
													</div>

													<div class="form-group">
														<div class="col-md-6 col-md-offset-4">
															<button type="submit" class="btn btn-primary">
																Reset Password
															</button>
														</div>
													</div>
													
												</form>
											</div>
									</div>
								</div> <!-- Single Tab Content End -->
							</div>
						</div> <!-- My Account Tab Content End -->
					</div>
				</div> <!-- My Account Page End -->
			</div>
		</div>
	</div>
</div>
@stop