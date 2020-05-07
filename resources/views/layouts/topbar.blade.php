<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header class="header">
    <div class="container">
        <div class="main-navigation">
            <div
                class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-transparent bsnav-sticky-slide bsnav-scrollspy">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <!-- <p  class="logo-display"><b>WAATPB</b></p>
						    <p class="logo-scrolled"><b>WAATPB</b></p> -->

                        <img src="{{asset('assets/img/logo/white-logo.png')}}" class="logo-display" alt="thumb">
                        <img src="{{asset('assets/img/logo/logo.png')}}" class="logo-scrolled" alt="thumb">
                    </a>
                    <!-- <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button> -->
                    <div class="collapse navbar-collapse justify-content-sm-end">
                        <ul class="navbar-nav navbar-mobile ">
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu " data-toggle="popover" title="Home" id ="home" href="{{URL::to('/')}}" style="">
                            <i class="fa fa-home"></i>
                            Home
                             </a>
                            </li>
                            @if (request()->is('/'))
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu" href="#about">
                            <i class="fa fa-info-circle"></i>
                            About</a></li>
                            @endif

                            @if (request()->is('/'))
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu" href="#service">
                            <i class="fa fa-gavel"></i>
                            Services</a></li>
                            @endif

                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#history' : url('full-history')}}">
                                    <i class="fa fa-history"></i>
                                    History</a></li>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#event' : url('view-all-event')}}">
                                    <i class="fa fa-calendar"></i>
                                    Event</a></li>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu" href="{{url('/career')}}">
                            <i class="fa fa-university"></i>
                            Career</a>
                            </li>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#gallary' : url('view-all')}}">
                                    <i class="fa fa-image"></i>
                                    Gallery</a></li>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/blog')}}">
                                    <i class="fa fa-book"></i>
                                    Blog</a></li>
                            <?php 
								$lg = Session::get('lcheck');
								if($lg!=null){								
								?>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/profile')}}">
                                    <i class="fa fa-user"></i>
                                    Profile</a></li>

                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/logout')}}" >
                                    <i class="fa fa-power-off"></i>
                                    Logout</a></li>

                            <?php }else{ ?>
                            <li class="nav-item mr-2"><a class="nav-link" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                            <li class="nav-item mr-2"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/member-registration')}}">Member</a></li>
                            <?php } ?>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar"></div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->

<!-- jQuery library -->

<script>
$(document).ready(function(){
    $('#home').mouseover(function(){
        $('[data-toggle="popover"]').popover();   
    });
 
});
</script>
<div class="clearfix"></div>