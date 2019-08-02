@extends('layouts.shop')

@section('breadcrumb')
<h2>checkout page</h2>
<ul>
	<li>
		<a href="index.html">Home</a>
	</li>
	<li class="active">checkout </li>
</ul>


@stop
@section('content')
 
      <div class="checkout-main-area pt-90 pb-90">
            <div class="container">
                <div class="customer-zone mb-20">
                    <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
                    <div class="checkout-login-info">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Username or email address <span>*</span></label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="sin-checkout-login">
                                        <label>Passwords <span>*</span></label>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                                </div>
                            </div>
                            <div class="button-remember-wrap">
                                <button class="button" type="submit">Login</button>
                                <div class="checkout-login-toggle-btn">
                                     <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    <label>Remember me</label>
                                </div>
                            </div>
                            <div class="lost-password">
                                <a href="{{ route('password.request') }}">Lost your password?</a>
                            </div>
                        </form>
                        <div class="checkout-login-social">
                            <span>Login with:</span>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="customer-zone mb-20">
                    <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                    <div class="checkout-login-info3">
                        <form method="post" action="{{route('apply.promo')}}">
                            {{csrf_field()}}
                            <input type="text" placeholder="Coupon code" name="coupon_code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div>
                <form method="post" action="{{route('place.order')}}">
                    {{csrf_field()}}
                <input type="hidden" name="user_id" @if(Auth::user()) value="{{ Auth::user()->id }}" @endif>
                <div class="checkout-wrap pt-30">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing-info-wrap mr-50">
                                <h3>Billing Details</h3>
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label> Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="name" @if(Auth::user()) value="{{ Auth::user()->name }}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Company Name <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="company" @if(Auth::user()) value="{{ Auth::user()->company }}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                            <input class="billing-address" name="address1" id placeholder="House number and street name" type="text" @if(Auth::user()) value="{{ Auth::user()->address1 }}" @endif>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-20">
                                            <label>City <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="address2"  id="city" @if(Auth::user()) value="{{ Auth::user()->address2 }}" @endif>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Division</label>
                                                <input type="text" name="city" @if(Auth::user()) value="{{ Auth::user()->city }}" @endif>
                                            </div>
                                        </div>                                   
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Postcode <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" id="postcode" name="postcode" @if(Auth::user()) value="{{ Auth::user()->postcode }}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" id="mobile" name="mobile" @if(Auth::user()) value="{{ Auth::user()->mobile }}" @endif>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="billing-info mb-20">
                                            <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="email" @if(Auth::user()) value="{{ Auth::user()->email }}" @endif>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="checkout-account mt-25">
                                    <input class="checkout-toggle" type="checkbox" name="anothershipping">
                                    <span>Ship to a different address?</span>
                                </div>
                                <div class="different-address open-toggle mt-30">
                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label> Name</label>
                                                <input type="text" name="name1">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Company Name</label>
                                                <input type="text" name="company1">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Street Address</label>
                                                <input class="billing-address1" name="address11" placeholder="House number and street name" type="text">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Town / City</label>
                                                <input type="text" name="address21" id="city1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Division</label>
                                                <input type="text" name="city1" id="division1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Postcode / ZIP</label>
                                                <input type="text" name="postcode1" id="postcode1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="billing-info mb-20">
                                                <label>Phone</label>
                                                <input type="text" name="mobile" id="mobile1">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order-area">
                                <h3>Your order</h3>
                                <div class="your-order-wrap gray-bg-4">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-info">
                                            <ul>
                                                <li>Product <span>Total</span></li>
                                            </ul>
                                        </div>
                                        <div class="your-order-middle">
                                            <ul>
                                            	@if(session('cart'))
                                            	@foreach(session('cart') as $id => $details)
                                                <li>{{$details['name']}} X {{$details['quantity']}} <span> <?php $unit = $details['price'] * $details['quantity'];  $total = 0 ; $total += $details['price'] * $details['quantity'] ?> {{$unit}} </span></li>
                                                @endforeach
                                                @else
                                                Ops! Cart is empty!
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="your-order-info order-subtotal">
                                            <ul>
                                                <li>Subtotal <span>{{$total}} </span></li>
                                            </ul>
                                        </div>
                                        @if(session('promo'))
                                        <div class="your-order-info order-subtotal">
                                            <ul>
                                                <li>Coupon Discount <span>{{ session('promo')['discount']}} </span></li>
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="your-order-info order-shipping">
                                            <ul>
                                                <li>Shipping       
                                                </li>
                                                @if(Auth::user())
                                                 <p><span id="address1">{{ Auth::user()->address1 }}</span>, <span id="address2">{{ Auth::user()->address2 }}</span></p>
                                                    <p><span id="address3">{{ Auth::user()->city }}</span>-
                                                    <span id="address4">{{ Auth::user()->postcode }}</span></p>
                                                    <p><span id="address5">{{ Auth::user()->mobile }}</span></p>
                                                @else
                                                <p><span id="address1">Street Address</span>, <span id="address2">City</span></p>
                                                    <p><span id="address3">Division</span>-
                                                    <span id="address4">Postcode</span></p>
                                                    <p><span id="address5">Mobile</span></p>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="your-order-info order-total">
                                            <ul>

                                               
                                                 @if(session('promo'))                             
                            
                                                 <li >Total 
                                                    <span style="margin: 0 0 0 10px;">{{ session('promo')['final_amount']}}</span>
                                                    <span class="old-price" style="text-decoration: line-through;margin: 0 0 0 10px;">{{$total}}</span>                                                </li>
                                                 
                                                  @else
                                                   <li>Total <span>  {{$total}} </span></li>
                                                  @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                       
                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                            <label for="payment-method-3">Cash on delivery </label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="Place-order mt-40">
                                    <input type="submit" value="Place Order">
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
@stop
@section('js')
<script type="text/javascript">
var ckbox = $('.checkout-toggle');
if (ckbox.is(':checked')) {
$('.billing-address').on('input', function (e) {    
    $("#address1").text($(this).val());
});
$('#city').on('input', function (e) {    
    $("#address2").text($(this).val());
});
$('#division').on('input', function (e) {    
    $("#address3").text($(this).val());
});
$('#postcode').on('input', function (e) {    
    $("#address4").text($(this).val());
});$('#mobile').on('input', function (e) {    
    $("#address4").text($(this).val());
});
}
else{
$('.billing-address1').on('input', function (e) {    
    $("#address1").text($(this).val());
});
$('#city1').on('input', function (e) {    
    $("#address2").text($(this).val());
});
$('#division1').on('input', function (e) {    
    $("#address3").text($(this).val());
});
$('#postcode1').on('input', function (e) {    
    $("#address4").text($(this).val());
});$('#mobile1').on('input', function (e) {    
    $("#address4").text($(this).val());
});
}
</script>
@stop

