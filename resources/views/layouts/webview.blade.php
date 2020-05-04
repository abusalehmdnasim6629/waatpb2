<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> WAATPB </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/fontawesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/bsnav.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/site-animation.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="assets/js/html5/html5shiv.min.js"></script>
	  <script src="assets/js/html5/respond.min.js"></script>
	<![endif]-->
    <style>
     .bg-area {
            height: 800px;
        }

        .bg-area::before {
            position: absolute;
            content: '';
            top: 0;
            RIGHT: 0;
            height: 100%;
            width: 75%;
            background-color: #404040;
            z-index: -2;
        }

        .bg-area::after {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            height: 100%;
            width: 35%;
            background-color: #6b7c72;
            z-index: -2;
        }

        .member-image {
            height: 565px;
            width: 100%;
            margin-top: 80px;
        }

        .member-text-area {
            position: absolute;
            top: 0;
            left: 0;

        }
    
    </style>
    
</head>

<body>

    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <!-- Start PreLoader
    ============================================= -->
    <div class="se-pre-con"></div>
    <!-- Start PreLoader-->

    <!-- Start header
	============================================= -->
    <div class="icon-bar">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    
    @include('layouts.topbar')


    @yield('content')


    @include('layouts.footer')





    <!-- End Footer-->
    <!-- start popup -->
    <!-- <div class="port-popus">
        <div id="port-popup" class="port-popup">
            <div class="port-content">
                <h2>Login Here</h2>
                <form action="{{url('/login-check')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <fieldset>
                        <div class="input">
                            <input type="email" placeholder="Email" name="email" class="pop-input" required="">
                        </div>
                        <div class="input">
                            <input type="password" placeholder="Password" name="password" class="pop-input" required="">
                        </div>

                        <input class="theme-btn" type="submit" value="login">
                        <a href="{{URL::to('/forgot-password')}}">Forgot password?</a>
                        <a href="#home" class="popup-close"><i class="ti-close"></i></a>
                    </fieldset>

                </form>
            </div>
        </div>
    </div> -->
    <!-- end popup -->

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login here</h5>
        <button type="button" class="btn btn-danger close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('/login-check')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required="">
                        </div>

                        
                        <a href="{{URL::to('/forgot-password')}}" class="btn btn-link">Forgot password?</a>
                        
                    </fieldset>

               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" >Reset</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
    

    <!-- jQuery Frameworks 
            ============================================= -->

    <script src=" {{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src=" {{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('assets/js/popper.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.appear.js')}}"></script>
    <script src=" {{asset('assets/js/html5/html5shiv.min.js')}}"></script>
    <script src=" {{asset('assets/js/html5/respond.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src=" {{asset('assets/js/progress-bar.min.js')}}"></script>
    <script src=" {{asset('assets/js/modernizr.custom.13711.js')}}"></script>
    <script src=" {{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src=" {{asset('assets/js/wow.min.js')}}"></script>
    <script src=" {{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src=" {{asset('assets/js/count-to.js')}}"></script>
    <script src=" {{asset('assets/js/fontawesome.min.js')}}"></script>
    <script src=" {{asset('assets/js/swiper.min.js')}}"></script>
    <script src=" {{asset('assets/js/YTPlayer.min.js')}}"></script>
    <script src=" {{asset('assets/js/slick.min.js')}}"></script>
    <script src=" {{asset('assets/js/bsnav.min.js')}}"></script>
    <script src=" {{asset('assets/js/filter.js')}}"></script>
    <script src=" {{asset('assets/js/main.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.countdown.js')}}"></script>

    <script>
        $(function() {
        			var endDate = $('.event-countdown').data('date');
        			
        			// $('.event-countdown').countdown({ date: endDate });
        
        			$('.event-countdown').countdown({
        			date: endDate,
        			render: function(data) {
        				$(this.el).html("<div>" + this.leadingZeros(data.days, 2) + " <span>days</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div>");
        			}
        			});
        		 });

       
    </script>

</body>

</html>