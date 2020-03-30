<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WAATPB Admin</title>
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
	<!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
	-->
	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('assets/main.css')}}" rel="stylesheet">
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
							<input type="text" class="search-input" placeholder="Type to search">
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
											<button type="button" tabindex="0" class="dropdown-item">User
												Account</button>
											<button type="button" tabindex="0" class="dropdown-item">Settings</button>
											<h6 tabindex="-1" class="dropdown-header">Header</h6>
											<button type="button" tabindex="0" class="dropdown-item">Actions</button>
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
				<div class="scrollbar-sidebar">
					<div class="app-sidebar__inner">
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
									<li>
										<a href="#">
											<i class="metismenu-icon"></i>
											Add History
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
									<li>
										<a href="{{URL::to('/add-about')}}">
											<i class="metismenu-icon"></i>
											Add about
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
									<li>
										<a href="#">
											<i class="metismenu-icon"></i>
											Add header content
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