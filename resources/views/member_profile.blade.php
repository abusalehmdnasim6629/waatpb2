@extends('layouts.webview')

@section('content')
<style>
        .left-bg {
            background-color: #6b7c72;
            height:1000px;
        }

        .right-bg {
            background-color: #404040;
            height: 1000px;
        }

        .bg-area {
            height: 1000px;
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
        h4{
          color:#55acee;
        }
      table{
        margin-left:10px; 
      }
       td, p{
        
        color:white;
       }
       a{
        color:#889747;
       }
       p{
         padding:5px;
         margin-bottom:20px;
       }
  </style>
<div class="site-breadcrumb-title" style="height:100px;"  >
	<!-- <h2>Profile</h2>
	<div class="main-breadcrumb">
		<div class="container">
			<ul class="breadcrumb-menu clearfix">
				<li><a href="{{URL::to('/')}}">Home</a></li>
				<li class="active"><a href="{{URL::to('/profile')}}">Profile</a></li>
			</ul>
		</div>
	</div> -->
</div>

<main class="main">  

<!-- style="background: url(assets/img/breadcrumb/breadcrumb.png)" -->

<div class="container-fluid">
        <div class="row">
            <!-- <div class="col-md-4 left-bg"></div>
            <div class="col-md-8 right-bg"></div> -->

            <div class="col-md-12 bg-area">
                <div class="col-md-10 offset-md-2 image-text-area">
                    <div class="col-md-5 offset-md-4 member-image">
                        <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                            alt="image" class="w-100">
                    </div>
                    <div class="col-md-6 member-text-area">
                        <h4>WELFARE ASSOCIATION OF APPAREL AND TEXTILE PROFESSIONALS OF BANGLADESH</h4>
                        
                        <table>
                           <tr>
                           <td>ASM Nasim</td>
                           </tr>
                           <tr>
                           <td>web developer</td>
                           </tr>
                           <tr>
                           <td>Rapples</td>
                           </tr>
                           <tr>
                           <td><a href="www.waatpb.com">www.waatpb.com</a></td>
                           </tr>
                        </table>
                        <br>

                        <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        <br>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        <br>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                        <br>
                        <a href="www.waatpb.com">www.waatpb.com</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection