<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WAATPB Admin</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/logo/favicon.png')}}">
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
    
	<link href="{{asset('assets/main.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
		<div class="app-header header-shadow">
			<div class="app-header__logo">
				<a href="index.html">
					<div class="logo-src"></div>
				</a>
				<div class="header__pane ml-auto">
					<div>
						<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
							data-class="closed-sidebar">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<div class="app-header__mobile-menu">
				<div>
					<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
			<div class="app-header__menu">
				<span>
					<button type="button"
						class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
						<span class="btn-icon-wrapper">
							<i class="fa fa-ellipsis-v fa-w-6"></i>
						</span>
					</button>
				</span>
			</div>
			<div class="app-header__content">
			
				<div class="app-header-left">
				
					<div class="search-wrapper">
						<div class="input-holder">
						
							<input type="email" class="search-input" name="email" placeholder="Search for registered member">
							<button class="search-icon"><span></span></button>
							
						</div>
						<button class="close"></button>
					</div>
					
				</div>
				
				<div class="app-header-right">
				
					<div class="header-btn-lg pr-0">
						<div class="widget-content p-0">
							<div class="widget-content-wrapper">
								<div class="widget-content-left">
									<div class="btn-group">
										<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											class="p-0 btn">
											<img width="42" class="rounded-circle"
												src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png"
												alt="">
											<i class="fa fa-angle-down ml-2 opacity-8"></i>
										</a>
										<div tabindex="-1" role="menu" aria-hidden="true"
											class="dropdown-menu dropdown-menu-right">

											<div tabindex="-1" class="dropdown-divider"></div>

											<button onclick="event.preventDefault();
											                                                     document.getElementById('logout-form').submit();"
												type="button" tabindex="0" class="dropdown-item">Log Out</button>



											<form id="logout-form" action="{{ route('logout') }}" method="POST"
												style="display: none;">
												@csrf
											</form>


										</div>
									</div>
								</div>
								<div class="widget-content-left  ml-3 header-user-info">
									<div class="widget-heading">
										{{auth()->check() ? auth()->user()->name : 'Users' }}
									</div>
									<div class="widget-subheading">
										{{auth()->check() ? auth()->user()->role : 'User Role' }}
									</div>
								</div>
								{{-- <div class="widget-content-right header-user-info ml-3">
									<button type="button"
										class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
										<i class="text-white fa fa-sign-out"></i>
									</button>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="app-main">
			<div class="app-sidebar sidebar-shadow">
				<div class="app-header__logo">
					<div class="logo-src"></div>
					<div class="header__pane ml-auto">
						<div>
							<button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
								data-class="closed-sidebar">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="app-header__mobile-menu">
					<div>
						<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
				<div class="app-header__menu">
					<span>
						<button type="button"
							class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
							<span class="btn-icon-wrapper">
								<i class="fa fa-ellipsis-v fa-w-6"></i>
							</span>
						</button>
					</span>
				</div>
				<div class="scrollbar-sidebar overflow-auto" >
					<div class="app-sidebar__inner"  >
						<ul class="vertical-nav-menu">

							<li>
								<a href="#">
									<i class="fa fa-briefcase metismenu-icon"></i>
									Jobs
									<i class="fa fa-angle-down"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-job')}}">
											<i class="metismenu-icon"></i>
											All job
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-job')}}">
											<i class="metismenu-icon"></i>
											Add job
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-history"></i>
									Historys
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-history')}}">
											<i class="metismenu-icon"></i>
											All History
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-picture-o"></i>
									Gallery category
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-category')}}">
											<i class="metismenu-icon"></i>
											All category
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-category')}}">
											<i class="metismenu-icon"></i>
											Add category
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-picture-o"></i>
									Gallery
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-image')}}">
											<i class="metismenu-icon"></i>
											All images
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-image')}}">
											<i class="metismenu-icon"></i>
											Add image
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-info-circle"></i>
									About
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-about')}}">
											<i class="metismenu-icon"></i>
											All about
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-gavel"></i>
									Header
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-header')}}">
											<i class="metismenu-icon"></i>
											All header Content
										</a>
									</li>

								</ul>
							</li>

							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-calendar-check-o"></i>
									Events
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-event')}}">
											<i class="metismenu-icon"></i>
											All event
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-event')}}">
											<i class="metismenu-icon"></i>
											Add event
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-users"></i>
									Members
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-member')}}">
											<i class="metismenu-icon"></i>
											All members
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-users"></i>
									Member Request
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-member-request')}}">
											<i class="metismenu-icon"></i>
											All member request
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-youtube"></i>
									Video
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-video')}}">
											<i class="metismenu-icon"></i>
											All video
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-video')}}">
											<i class="metismenu-icon"></i>
											Add video
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-gavel"></i>
									Services
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-service')}}">
											<i class="metismenu-icon"></i>
											All service
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-service')}}">
											<i class="metismenu-icon"></i>
											Add service
										</a>
									</li>
								</ul>
								<li>
								<a href="#">
									<i class="metismenu-icon fa fa-gavel"></i>
									Advertisment
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-advertisement')}}">
											<i class="metismenu-icon"></i>
											All advertisment
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-advertisement')}}">
											<i class="metismenu-icon"></i>
											Add advertisment
										</a>
									</li>

								</ul>
								
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-book"></i>
									Blog
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-blog')}}">
											<i class="metismenu-icon"></i>
											All Blog
										</a>
									</li>
									

								</ul>
								
							</li>
							<li>
								<a href="{{URL::to('/all-order')}}">
									<i class="metismenu-icon fa fa-book"></i>
											Order
								</a>
							</li>
							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-gavel"></i>
									Delivary cost
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-cost')}}">
											<i class="metismenu-icon"></i>
											Show Cost
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-cost')}}">
											<i class="metismenu-icon"></i>
											Add csot
										</a>
									</li>

								</ul>
								
							</li>

							<li>
								<a href="#">
									<i class="metismenu-icon fa fa-gavel"></i>
									Delivary City
									<i class="fa fa-angle-down caret-left"></i>
								</a>
								<ul>
									<li>
										<a href="{{URL::to('/all-city')}}">
											<i class="metismenu-icon"></i>
											All city
										</a>
									</li>
									<li>
										<a href="{{URL::to('/add-city')}}">
											<i class="metismenu-icon"></i>
											Add city
										</a>
									</li>

								</ul>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="app-main__outer">
				<div class="app-main__inner">
					@yield('admin_content')
				</div>
				{{-- <div class="app-wrapper-footer">
					<div class="app-footer">
						<div class="app-footer__inner">
							<div class="app-footer-left">
								<ul class="nav">
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Footer Link 1
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Footer Link 2
										</a>
									</li>
								</ul>
							</div>
							<div class="app-footer-right">
								<ul class="nav">
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											Footer Link 3
										</a>
									</li>
									<li class="nav-item">
										<a href="javascript:void(0);" class="nav-link">
											<div class="badge badge-success mr-1 ml-0">
												<small>NEW</small>
											</div>
											Footer Link 4
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="{{asset('assets2/scripts/main.js')}}"></script>
</body>

</html>