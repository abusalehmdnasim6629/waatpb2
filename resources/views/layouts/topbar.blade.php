<header class="header">
    <div class="container">
        <div class="main-navigation">
            <div
                class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-transparent bsnav-sticky-slide bsnav-scrollspy">
                <div class="container">
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <!-- <p  class="logo-display"><b>WAATPB</b></p>
						    <p class="logo-scrolled"><b>WAATPB</b></p> -->

                        <img src="assets/img/logo/white-logo.png" class="logo-display" alt="thumb">
                        <img src="assets/img/logo/logo.png" class="logo-scrolled" alt="thumb">
                    </a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse justify-content-sm-end">
                        <ul class="navbar-nav navbar-mobile ml-auto">
                            <li class="nav-item"><a class="nav-link smooth-menu" href="{{URL::to('/')}}">Home</a>
                            </li>
                            @if (request()->is('/'))
                            <li class="nav-item"><a class="nav-link smooth-menu" href="#about">About</a></li>
                            @endif

                            @if (request()->is('/'))
                            <li class="nav-item"><a class="nav-link smooth-menu" href="#service">Services</a></li>
                            @endif

                            <li class="nav-item"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#history' : url('full-history')}}">History</a></li>
                            <li class="nav-item"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#event' : url('view-all-event')}}">Event</a></li>
                            <li class="nav-item"><a class="nav-link smooth-menu" href="{{url('/career')}}">Career</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-menu"
                                    href="{{request()->is('/') ? '#gallary' : url('view-all')}}">Gallery</a></li>
                            <?php 
								$lg = Session::get('lcheck');
								if($lg!=null){								
								?>
                            <li class="nav-item"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/profile')}}">Profile</a></li>

                            <li class="nav-item"><a class="nav-link smooth-menu"
                                    href="{{URL::to('/logout')}}">Logout</a></li>

                            <?php }else{ ?>
                            <li class="nav-item"><a class="nav-link" href="#port-popup">Login</a></li>
                            <li class="nav-item"><a class="nav-link smooth-menu"
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

<div class="clearfix"></div>