<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Title -->
		<title>Shop Now :: Admin Panel</title>
		<link rel="stylesheet" href="{{asset('backend\fonts\fonts\font-awesome.min.css')}}">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		
		<!-- Sidemenu Css -->
		<link href="{{asset('backend\plugins\fullside-menu\css\style.css')}}" rel="stylesheet">
		<link href="{{asset('backend\plugins\fullside-menu\waves.min.css')}}" rel="stylesheet">
		
		<!-- Dashboard Css -->
		<link href="{{asset('backend\css\dashboard.css')}}" rel="stylesheet">
		
		<!-- c3.js Charts Plugin -->
		<link href="{{asset('backend\plugins\charts-c3\c3-chart.css')}}" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{asset('backend\plugins\scroll-bar\jquery.mCustomScrollbar.css')}}" rel="stylesheet">

		<!---Font icons-->
		<link href="{{asset('backend\css\icons.css')}}" rel="stylesheet">

  </head>
	<body>
		<div class="login-img">
			<div id="global-loader"></div>
			<div class="page">
				<div class="page-single">
					<div class="container">
						<div class="row authentication">
							<div class="col col-login mx-auto">
								<div class="text-center mb-6">
									<img src="{{asset('frontend/images/logo/logo-1.png')}}" alt="logo" class="h-8">
								</div>
								
								<form class="card" method="POST" action="{{ url('/admin/authenticating') }}">
                                    {{ csrf_field() }}
									<div class="card-body p-6 ">
										<div class="card-title text-center">Login to your Account</div>
										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="mdi mdi-account"></i>
											</span>
											<input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
											@if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
										</div>
										<div class="input-icon form-group wrap-input">
											<span class="input-icon-addon search-icon">
												<i class="zmdi zmdi-lock"></i>
											</span>
											<input id="password" type="password" class="form-control mb-0" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif											
										</div>
										<div class="form-group mt-5">
											<label class="custom-control custom-checkbox">
											
                                                    <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}> 
                                               
												<span class="custom-control-label">Remember me</span>
											</label>
										</div>
										<div class="form-footer">
											<button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>

										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Dashboard js -->
		<script src="{{asset('backend\js\vendors\jquery-3.2.1.min.js')}}"></script>
		<script src="{{asset('backend\js\vendors\bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('backend\js\vendors\jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('backend\js\vendors\selectize.min.js')}}"></script>
		<script src="{{asset('backend\js\vendors\jquery.tablesorter.min.js')}}"></script>
		<script src="{{asset('backend\js\vendors\circle-progress.min.js')}}"></script>
		<script src="{{asset('backend\plugins\rating\jquery.rating-stars.js')}}"></script>
		
		<!-- Fullside-menu Js-->
		<script src="{{asset('backend\plugins\fullside-menu\jquery.slimscroll.min.js')}}"></script>
		<script src="{{asset('backend\plugins\fullside-menu\waves.min.js')}}"></script>
		
		<!-- Custom scroll bar Js-->
		<script src="{{asset('backend\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- Custom Js-->
		<script src="{{asset('backend\js\custom.js')}}"></script>
	</body>
</html>
