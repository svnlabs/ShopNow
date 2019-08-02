@extends('admin.layouts.default')
@section('css')
<!-- select2 Plugin -->
		<link href="{{asset('backend\plugins\select2\select2.min.css')}}" rel="stylesheet">

		<!-- Time picker Plugin -->
		<link href="{{asset('backend\plugins\time-picker\jquery.timepicker.css')}}" rel="stylesheet">

		<!-- Date Picker Plugin -->
		<link href="{{asset('backend\plugins\date-picker\spectrum.css')}}" rel="stylesheet">

		<link href="{{asset('backend\plugins\fileuploads\css\dropify.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('backend\plugins\wysiwyag\richtext.css')}}" rel="stylesheet" type="text/css">

@stop
@section('content')
<div class=" content-area">
						<div class="page-header">
							<h4 class="page-title">Coupons</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('coupon.index')}}">Coupons</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add new</li>
							</ol>
						</div>

						
					
						<div class="row row-deck">
							<div class="col-lg-12">
								<form class="card" name="couponform" method="post" action="{{route('coupon.store')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="card-header">
										<h3 class="card-title">Add Brand</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												
											<div class="form-group">
												<label class="form-label">Generate Promo Code</label>
											<div class="input-group wd-150">
												
												<input name="coupon_code" class="form-control ui-timepicker-input" type="text" size="40">
												<input type="button" class="btn btn btn-primary br-tl-0 br-bl-0" value="Generate" onClick="generate();" tabindex="2">
												
											</div><!-- input-group -->
										
											</div>
										
												
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Value</label>
													<input type="number" name="value" id="notes" class="form-control ">
												</div>
											</div>
											<div class="col-md-3">
												
												
												<div class="form-group">
													<div class="form-label">is discount type Percent?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_percent" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">Yes, Percent</span>
													</label>
												</div>
											</div>
											<div class="col-md-3">					
												
												<div class="form-group">
													<div class="form-label">Would you like to free deliver?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_percent" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">Yes, Free Delivery</span>
													</label>
												</div>
											</div>
									
											
											
											<div class="col-md-3">
												
												
												<div class="form-group">
													<div class="form-label">Is this PromoCode Active?</div>
													<label class="custom-switch">
														<input type="checkbox" name="is_active" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">Yes! Active</span>
													</label>
												</div>
											</div>
								
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Add Brand</button>
									</div>
								</form>
							</div>
						</div>
					</div>
@stop
@section('js')
<!-- Timepicker js -->
		<script src="{{asset('backend\plugins\time-picker\jquery.timepicker.js')}}"></script>
		<script src="{{asset('backend\plugins\time-picker\toggles.min.js')}}"></script>

		<!-- Datepicker js -->
		<script src="{{asset('backend\plugins\date-picker\spectrum.js')}}"></script>
		<script src="{{asset('backend\plugins\date-picker\jquery-ui.js')}}"></script>
		<script src="{{asset('backend\plugins\input-mask\jquery.maskedinput.js')}}"></script>
		<script src="{{asset('backend\plugins\wysiwyag\jquery.richtext.js')}}"></script>
		<!-- Inline js -->
		<script src="{{asset('backend\plugins\select2\select2.full.min.js')}}"></script>

		<script src="{{asset('backend\js\select2.js')}}"></script>
		<!-- file uploads js -->
        <script src="{{asset('backend\plugins\fileuploads\js\dropify.min.js')}}"></script>
        
        <script type="text/javascript">
        	function randomCoupon(length) {
        		var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
        		var coupon = "";
        		for (var x = 0; x < length; x++) {
        			var i = Math.floor(Math.random() * chars.length);
        			coupon += chars.charAt(i);
        		}
        		return coupon;
        	}

        	function generate() {
        		couponform.coupon_code.value = randomCoupon(10);
        	}
        </script>

       
@stop