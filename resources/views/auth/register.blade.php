@extends('layouts.default')

@section('content')
<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register Account</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Register Account</h1>
                    <p class="title-desc">If you already have an account, please login at <a href="{{ route('login') }}">login page</a>.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <fieldset>
                                <h2 class="sub-title">YOUR PERSONAL DETAILS</h2>
                                <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Full Name&#42;</span></span>
                                    <input type="text" name="name" class="form-control input-lg" placeholder="Your Name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- End .input-group -->

                                <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                    <input type="email" name="email" required class="form-control input-lg" placeholder="Your Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Mobile&#42;</span></span>
                                    <input type="text" name="mobile" required class="form-control input-lg" placeholder="Your Mobile Number">
                                </div><!-- End .input-group -->
                               

                            </fieldset>

                            <fieldset>
                                <h2 class="sub-title">YOUR PASSWORD</h2>
                                <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" name="password" required class="form-control input-lg" placeholder="Your Password">
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>
                                    <input type="password" required class="form-control input-lg" placeholder="Your Password" id="password-confirm"  name="password_confirmation">
                                </div><!-- End .input-group -->
                            </fieldset>


                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset>
                                <h2 class="sub-title">YOUR ADDRESS</h2>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-company"></span><span class="input-text">Company&#42;</span></span>
                                    <input type="text" name="company" required class="form-control input-lg" placeholder="Your Company">
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 1&#42;</span></span>
                                    <input type="text" name="address1" class="form-control input-lg" placeholder="Your Address">
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address 2&#42;</span></span>
                                    <input type="text" name="address2" required  class="form-control input-lg" placeholder="Your Address">
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">City&#42;</span></span>
                                    <input type="text" name="city" required class="form-control input-lg" placeholder="Your City">
                                </div><!-- End .input-group -->
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Post Code&#42;</span></span>
                                    <input type="text" required name="post-code" class="form-control input-lg" placeholder="Your Post Code">
                                </div><!-- End .input-group -->

                               {{--  <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-country"></span><span class="input-text">Country*</span></span>
                                    <div class="large-selectbox clearfix">
                                        <select id="country" name="country" class="selectbox">
                                            <option  value="United Kingdom">United Kingdom</option>
                                            <option  value="Brazil">Brazil</option>
                                            <option  value="France">France</option>
                                            <option  value="Italy">Italy</option>
                                            <option  value="Spain">Spain</option>
                                        </select>
                                    </div><!-- End .large-selectbox-->
                                </div><!-- End .input-group -->

                                <div class="input-group">
                                    <span class="input-group-addon"><span class="input-icon input-icon-region"></span><span class="input-text">Region / State&#42;</span></span>
                                    <div class="large-selectbox clearfix">
                                        <select id="state" name="state" class="selectbox">
                                            <option  value="California">California</option>
                                            <option  value="Texas">Texas</option>
                                            <option  value="NewYork">NewYork</option>
                                            <option  value="Narnia">Narnia</option>
                                            <option  value="Jumanji">Jumanji</option>
                                        </select>
                                    </div><!-- End .large-selectbox-->
                                </div><!-- End .input-group --> --}}

                            </fieldset>
                        </div><!-- End .col-md-6 -->

                    </div><!-- End .row -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset class="half-margin">
                                <h2 class="sub-title">NEWSLETTER</h2>
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
                           </fieldset>

                           <input type="submit" value="CREATE MY ACCCOUNT" class="btn btn-custom-2 md-margin">
                       </div><!-- End .col-md-6 -->
                   </div><!-- End .row -->
               </form>
           </div><!-- End .col-md-12 -->
       </div><!-- End .row -->
   </div><!-- End .container -->

</section><!-- End #content -->

@endsection
