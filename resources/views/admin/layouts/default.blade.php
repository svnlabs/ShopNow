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
		<title>adminor – Clean & Modern Responsive Bootstrap 4 admin dashboard HTML5 Template.</title>
		<link rel="stylesheet" href="{{asset('backend\fonts\fonts\font-awesome.min.css')}}">

		<!-- Font family -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

		<!-- Sidemenu Css -->
		<link href="{{asset('backend\plugins\fullside-menu\css\style.css')}}" rel="stylesheet">
		<link href="{{asset('backend\plugins\fullside-menu\waves.min.css')}}" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="{{asset('backend\css\dashboard.css')}}" rel="stylesheet">

        <!-- Morris.js Charts Plugin -->
		<link href="{{asset('backend\plugins\morris\morris.css')}}" rel="stylesheet">

		<!-- c3.js Charts Plugin -->
		<link href="{{asset('backend\plugins\charts-c3\c3-chart.css')}}" rel="stylesheet">
		@yield('css')
		<!-- Custom scroll bar css-->
		<link href="{{asset('backend\plugins\scroll-bar\jquery.mCustomScrollbar.css')}}" rel="stylesheet">

		<!---Font icons-->
		<link href="{{asset('backend\css\icons.css')}}" rel="stylesheet">

	</head>
	<body class="">
		<div id="global-loader"></div>
		<div class="page">
			<div class="page-main">
				@include('admin.layouts.topbar')
				<div class="wrapper">
					<!-- Sidebar Holder -->
					@include('admin.layouts.leftbar')
					@yield('content')
				</div>
			</div>

			<!--footer-->
			@include('admin.layouts.footer')
			<!-- End Footer-->
		</div>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
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

		<!-- Charts Plugin -->
		<script src="{{asset('backend\plugins\chart\Chart.bundle.js')}}"></script>
		<script src="{{asset('backend\plugins\chart\utils.js')}}"></script>

		<!--Morris.js Charts Plugin -->
		<script src="{{asset('backend\plugins\morris\raphael-min.js')}}"></script>
		<script src="{{asset('backend\plugins\morris\morris.js')}}"></script>
		{{-- datatable --}}
		<script src="{{asset('backend\plugins\morris\morris.js')}}"></script>

		<!-- Input Mask Plugin -->
		<script src="{{asset('backend\plugins\input-mask\jquery.mask.min.js')}}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{asset('backend\plugins\scroll-bar\jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <!-- Index Scripts -->
		<script src="{{asset('backend\js\index4.js')}}"></script>
		@yield('js')
		<!-- Custom-->
		<script src="{{asset('backend\js\custom.js')}}"></script>
		@yield('js')
	</body>
</html>