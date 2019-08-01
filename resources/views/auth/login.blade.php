@extends('layouts.shop')

@section('content')
<div class="login-register-area pt-85 pb-90 mt-100  ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container mb-100">
                                <div class="login-register-form">
                                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">E-Mail Address</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">Password</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group button-box">
                                        <div class="login-toggle-btn">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                                <a  href="{{ route('password.request') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="button-box">

                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>                                

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div id="lg2" class="tab-pane">
                        <div class="login-form-container mb-100">
                            <div class="login-register-form ">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        
                                            <h3>YOUR PERSONAL DETAILS</h3>
                                            <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Full Name</span></span>
                                                <input type="text" name="name"  placeholder="Your Name" value="{{ old('name') }}" required autofocus>
                                                @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div><!-- End .input-group -->

                                            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email</span></span>
                                                <input type="email" name="email" required  placeholder="Your Email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <label>Mobile</label>
                                                <input type="text" name="mobile" required  placeholder="Your Mobile Number">
                                            </div><!-- End .input-group -->
                                        

                                        
                                            <h3>YOUR PASSWORD</h3>
                                            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password</span></span>
                                                <input type="password" name="password" required  placeholder="Your Password">
                                                @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password</span></span>
                                                <input type="password" required  placeholder="Your Password" id="password-confirm"  name="password_confirmation">
                                            </div><!-- End .input-group -->
                                        
                                        
                                            <h3>YOUR ADDRESS</h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-company"></span><span class="input-text">Company</span></span>
                                                <input type="text" name="company" required  placeholder="Your Company">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 1</span></span>
                                                <input type="text" name="address1"  placeholder="Your Address">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 2</span></span>
                                                <input type="text" name="address2" required   placeholder="Your Address">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">City</span></span>
                                                <input type="text" name="city" required  placeholder="Your City">
                                            </div><!-- End .input-group -->
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Post Code</span></span>
                                                <input type="text" required name="post-code"  placeholder="Your Post Code">
                                            </div><!-- End .input-group -->
                                        
                                        <fieldset class="half-margin">
                                            <h3>NEWSLETTER</h3>
                                            <div class="custom-checkbox">
                                                <input type="checkbox" name="newsletter"><span class="checbox-container">
                                                   <i class="fa fa-check"></i>
                                               </span>
                                               I wish to subscribe to the ShopNow newsletter.
                                           </div><!-- End .input-desc -->

                                           <div class="input-group custom-checkbox">
                                               <input type="checkbox" required=""> <span class="checbox-container">
                                                   <i class="fa fa-check"></i>
                                               </span>
                                               I have reed and agree to the <a href="#">Privacy Policy</a>.
                                           </div><!-- End .input-group -->
                                       

                                       <input type="submit" value="CREATE MY ACCCOUNT" class="btn btn-custom-2 md-margin">

                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>



@endsection
