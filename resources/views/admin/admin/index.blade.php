@extends('admin.layouts.default')
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard </li>
							</ol>
						</div>

						<div class="row row-cards">
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
								<div class="card bg-primary shadow-primary">
									<div class="card-body">
										<div class="clearfix">
											<div class="float-right">
											   <i class="mdi mdi-cube text-white icon-size"></i>
											</div>
											<div class="float-left">
												<p class="mb-0 text-left text-white"> Total Product </p>
												<div>
													<h3 class="font-weight-semibold text-left mb-0 text-white">{{count(
													App\Product::all())}}</h3>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
								<div class="card bg-secondary shadow-secondary">
									<div class="card-body">
										<div class="clearfix">
											<div class="float-right">
											    <i class="mdi mdi-receipt text-white icon-size"></i>
											</div>
											<div class="float-left">
												<p class="mb-0 text-left text-white">Current Coupon</p>
												<div>
													<h3 class="font-weight-semibold text-left mb-0 text-white">{{count(
													App\Coupon::all())}}</h3>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
								<div class="card bg-info shadow-info">
								    <div class="card-body">
										<div class="clearfix">
											<div class="float-right">
											<i class="mdi mdi-poll-box text-white icon-size"></i>
											</div>
											<div class="float-left">
												<p class="mb-0 text-left text-white">Profits</p>
												<div>
													<h3 class="font-weight-semibold text-left mb-0 text-white">৳ {{$totalProfit}}</h3>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-3 col-md-6 col-sm-12">
								<div class="card bg-success shadow-success">
									<div class="card-body">
										<div class="clearfix">
											<div class="float-right">
											    <i class="mdi mdi-account-location text-white icon-size"></i>
											</div>
											<div class="float-left">
												<p class="mb-0 text-left text-white">Admin</p>
												<div>
													<h3 class="font-weight-semibold text-left mb-0 text-white">{{count(App\Admin::all())}}</h3>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

						<div class="row row-cards">							
							<div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="row">
											<div class="col-6 align-self-center">
												<div class="h1 m-0"><strong>{{count(App\User::all())}}</strong></div>
											</div>
											<div class="col-6 align-self-center">
												
												<div class="text-muted ">Customers</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="row">
											<div class="col-6 align-self-center">
												<div class="h1 m-0"><strong> {{count($allOrder)}}</strong></div>
											</div>
											<div class="col-6 align-self-center">
												
												<div class="text-muted ">Total Sales</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="row">
											<div class="col-6 align-self-center">
												<div class="h1 m-0"><strong>{{count($currentSale)}}</strong></div>
											</div>
											<div class="col-6 align-self-center">
												
												<div class="text-muted "> New Orders</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="row">
											<div class="col-6 align-self-center">
												<div class="h1 m-0"><strong>{{count($shipped)}}</strong></div>
											</div>
											<div class="col-6 align-self-center">
												
												<div class="text-muted ">Shipped</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row row-cards row-deck">
						    <div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h2 class="card-title">New Order List</h2>
									</div>
									<div class="table-responsive card-body">
										<table class="table table-bordered align-items-center mb-0">
											<thead>
												<tr>
													<th>Shipping_name</th>
													
													<th>Total Ammount</th>
													<th>Profit</th>
													<th>Date</th>									
													<th>Progress</th>
												</tr>
											</thead>
											<tbody>
												@foreach($allOrder as $orders)
												<tr>
													<td>{{$orders->user->name or $orders->shipping_name }}</td>
													<td>{{$orders->total}}</td>
													<td>{{$orders->profit}}</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
					@stop