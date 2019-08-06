<nav id="sidebar" class="nav-sidebar">
	<ul class="list-unstyled components" id="accordion">
		<div class="user-profile">
			<div class="dropdown user-pro-body">
				<div><img src="{{asset('backend\images\faces\female\25.jpeg')}}" alt="user-img" class="img-circle"></div>
				<div class="mb-2"><a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold">Joyce Stewart</span>  </a>
					<br><span class="text-gray">Web Designer</span>
				</div>
			</div>
		</div>

		<li class="">
			<a href="{{route('index')}}" class="accordion-toggle wave-effect" >
				<i class="fa fa-desktop mr-2"></i> Dashboard
			</a>			
		</li>
		<li class="">
			<a href="#products" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
				<i class="fa fa-cubes mr-2"></i> Product
			</a>
			<ul class="collapse list-unstyled" id="products" data-parent="#accordion">
				<li>
					<a href="{{route('category.index')}}">Category</a>
				</li>
				<li>
					<a href="{{route('brand.index')}}">Brand</a>
				</li>
				<li>
					<a href="{{route('product.index')}}">Product</a>
				</li>
				<li>
					
				</li>
				
			</ul>
		</li>
		<li class="">
			<a href="#sale" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
				<i class="mdi mdi-buffer mr-2"></i>Sale
			</a>
			<ul class="collapse list-unstyled" id="sale" data-parent="#accordion">
				<li>
					<a href="{{route('order.index')}}">Pending Order </a>
				</li>
				{{-- <li>
					<a href="{{route('shipment.index')}}">Shipment Status</a>
				</li> --}}

				<li>
					<a href="{{route('order.all')}}">All Order</a>
				</li>

				
			</ul>
		</li>
		<li>
			<a href="#pageSubmenu" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-area-chart mr-2"></i> Website Setting</a>
			<ul class="collapse list-unstyled" id="pageSubmenu" data-parent="#accordion">
				<li>
					<a href="{{route('slides.index')}}">Slider </a>
				</li>
				
				
			</ul>
		</li>
		<li class="">
			<a href="#Uielements" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
				<i class="mdi mdi-buffer mr-2"></i>Promotion
			</a>
			<ul class="collapse list-unstyled" id="Uielements" data-parent="#accordion">
				<li>
					<a href="{{route('deal.index')}}">Deal CountDown </a>
				</li>
				<li>
					<a href="{{route('coupon.index')}}">Coupon</a>
				</li>
				
			</ul>
		</li>
		
	</ul>
</nav>