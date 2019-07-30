<footer id="footer">
            <div id="footer-top">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12 widget">
                            <div class="title-bg">
                                <h3>Popular</h3>
                            </div><!-- End .title-bg -->

                            <div class="footer-popular-slider flexslider footerslider">
                                <ul class="slides">
                                     @foreach ($products->chunk(3) as $chunk)
                                            <li>
                                                @foreach($chunk as $product)
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">{{$product->name}}</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">{{$product->price}}</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                @endforeach
                                            </li>
                                            @endforeach
                                   
                                </ul>
                            </div><!-- End Footerpouplar-slider -->
                            <div class="md-margin visible-xs"></div><!-- space -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4 col-sm-4 col-xs-12 widget">
                            <div class="title-bg">
                                <h3>Featured</h3>
                            </div><!-- End .title-bg -->

                            <div class="footer-featured-slider flexslider footerslider">
                                <ul class="slides">
                                     @foreach ($products->chunk(3) as $chunk)
                                            <li>
                                                @foreach($chunk as $product)
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">{{$product->name}}</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">{{$product->price}}</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                @endforeach
                                            </li>
                                            @endforeach
                                   
                                </ul>
                            </div><!-- End Footerpouplar-slider -->
                            <div class="md-margin visible-xs"></div><!-- space -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4 col-sm-4 col-xs-12 widget">
                            <div class="title-bg">
                                <h3>Specials</h3>
                            </div><!-- End .title-bg -->

                            <div class="footer-specials-slider flexslider footerslider">
                                <ul class="slides">
                                     @foreach ($products->chunk(3) as $chunk)
                                            <li>
                                                @foreach($chunk as $product)
                                                <div class="related-product clearfix">
                                                    <figure>
                                                        <img src="{{url($product->image? 'Productimg/'.$product->image:'images/noimage.jpg')}}" alt="item1">
                                                    </figure>
                                                    <h5><a href="#">{{$product->name}}</a></h5>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-result" data-result="84"></div>
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <div class="related-price">{{$product->price}}</div><!-- End .related-price -->
                                                </div><!-- End .related-product -->
                                                
                                                @endforeach
                                            </li>
                                            @endforeach
                                   
                                </ul>
                            </div><!-- End Footerpouplar-slider -->

                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row --> --}}
                </div><!-- End .container -->
            </div><!-- End #footer-top -->
            
            <div id="inner-footer">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            <ul class="links">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Addresses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Your Vouchers</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>INFORMATION</h3>
                            <ul class="links">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Our stores</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            
                            <ul class="contact-list">
                                <li><strong>Shop Now Ltd</strong></li>
                                <li>United Kingdom</li>
                                <li>Greater London</li>
                                <li>London 02587</li>
                                <li>Oxford Street 48/188</li>
                                <li>Working Days: Mon. - Sun.</li>
                                <li>Working Hours: 9.00AM - 8.00PM</li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="clearfix visible-sm"></div>
                        
                        <div class="col-md-3 col-sm-12 col-xs-12 widget">
                            <h3>FACEBOOK LIKE BOX</h3>
                            
                            <div class="facebook-likebox">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                            </div>
                            
                            
                        </div><!-- End .widget -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            
            </div><!-- End #inner-footer -->
            
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                            <ul class="social-links clearfix">
                                <li><a href="#" class="social-icon icon-facebook"></a></li>
                                <li><a href="#" class="social-icon icon-twitter"></a></li>
                                <li><a href="#" class="social-icon icon-rss"></a></li>
                                <li><a href="#" class="social-icon icon-delicious"></a></li>
                                <li><a href="#" class="social-icon icon-linkedin"></a></li>
                                <li><a href="#" class="social-icon icon-flickr"></a></li>
                                <li><a href="#" class="social-icon icon-skype"></a></li>
                                <li><a href="#" class="social-icon icon-email"></a></li>
                            </ul>
                        </div><!-- End .col-md-7 -->
                        
                        <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                            <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                        </div><!-- End .col-md-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #footer-bottom -->
            
        </footer><!-- End #footer -->
    </div><!-- End #wrapper -->
    
    <a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
    
    <!-- END -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.debouncedresize.js')}}"></script>
    <script src="{{asset('frontend/js/retina.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.placeholder.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('frontend/js/twitter/jquery.tweet.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jflickrfeed.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('js')
    <script>
        $(function() {

            // Slider Revolution
            jQuery('#slider-rev').revolution({
                delay:5000,
                startwidth:870,
                startheight:520,
                onHoverStop:"true",
                hideThumbs:250,
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:15,
                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:0,
                soloArrowLeftVOffset:0,
                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:0,
                soloArrowRightVOffset:0,
                touchenabled:"on",
                stopAtSlide:-1,
                stopAfterLoops:-1,
                dottedOverlay:"none",
                fullWidth:"on",
                spinned:"spinner4", 
                shadow:3, // 1 2 3 to change shadows
                hideTimerBar: "on",
                // navigationStyle:"preview2"
              });

            /* This is fix for mobile devices position slider at the top  via absolute pos */
            var fixSliderForMobile = function () {
                var winWidth = $(window).width();

                if (winWidth <= 767 && $('#slider-rev-container').length) {
                    var revSliderHeight = $('#slider-rev').height();
                        console.log(revSliderHeight);
                    $('.slider-position').css('padding-top', revSliderHeight);
                    $('.main-content').css('position', 'static');
                } else {
                    $('.slider-position').css('padding-top', 0);
                    $('.main-content').css('position', 'relative');
                }
            };

            fixSliderForMobile();

            /* Resize fix positionin */
            if($.event.special.debouncedresize) {
                $(window).on('debouncedresize', function() {
                    fixSliderForMobile();
                });
            } else {
                $(window).on('resize', function () {
                    fixSliderForMobile();
                });
            }
            
                
        });
        
    </script>
    
    </body>
</html>