@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr">
    
<!-- Mirrored from laravel.spruko.com/volgh/leftmenu_icon_light/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 16:23:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>Inventory</title>

        
        <!-- BOOTSTRAP CSS -->
        <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css-dark/dark-style.css' )}}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet"/>
		
		<!-- P-scroll bar css-->
		<link href="{{asset('assets/plugins/p-scroll/perfect-scrollbar.css')}}" rel="stylesheet" />

        <!-- SIDE-MENU CSS -->
        <link href="{{asset('assets/plugins/sidemenu/sidemenu.css')}}" rel="stylesheet">

        <!--C3.JS CHARTS PLUGIN -->
        <link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
        
        <link href="{{asset('assets/plugins/single-page/css/main.css')}}" rel="stylesheet">

        <!-- CUSTOM SCROLL BAR CSS-->
        <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

        <!--- FONT-ICONS CSS -->
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

        <!-- SIDEBAR CSS -->
        <link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

		<!-- SWITCHER  CSS -->
        <link  href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
        <link  href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>    </head>

    <body class="login-img">
        		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                 @csrf
								<span class="login100-form-title">
									Login
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input100 @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
								</div>
								<div class="text-right pt-1">
									<p class="mb-0">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-primary ml-1">
                                            Forgot Password?
                                        </a>
                                         @endif
                                    </p>
								</div>
								<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn btn-primary">Login</button>
								</div>
								<div class="text-center pt-3">
									<p class="text-dark mb-0">Not a member?<a href="register-2.html" class="text-primary ml-1">Sign UP now</a></p>
								</div>
								<div class=" flex-c-m text-center mt-3">
								    <p>Or</p>
									<div class="social-icons">
										<ul>
											<li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus text-google-plus"></i> Sign up with Google</a></li>
											<li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook text-facebook"></i> Sign in with Facebook</a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- JQUERY JS -->
		<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>

		<!-- SPARKLINE JS-->
		<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

		<!-- RATING STAR JS-->
		<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- C3.JS CHART JS -->
		<script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

		<!-- SIDE-MENU JS-->
		<script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- CUSTOM SCROLLBAR JS-->
		<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		
		
		<!-- SIDEBAR JS -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>
		
		<!-- P-scroll bar js-->
		<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('assets/plugins/p-scroll/p-scroll.js')}}"></script>
		
		<!-- SWITCHER JS -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
		
		<!--CUSTOM JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>



        
    </body>            

<!-- Mirrored from laravel.spruko.com/volgh/leftmenu_icon_light/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Dec 2020 16:23:57 GMT -->
</html>
@endsection
