<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">

</head>

<body>
	@include('sweetalert::alert')

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">
		<div class="header_main">
			<div class="container">



				{{-- <div class="row"> --}}
					{{-- <div class="col-md-2"></div> --}}
					<!-- Logo -->
					{{-- <div class="col-md-8">
						<center>
						<div class="logo_container">
							<div class="logo">
								<a href="{{ url('/') }}" style="background-color: white">
									<img src="images/Capture2.png" class="img-fluid" style="height: vh; width: 100%;">
								</a>
							</div>
							<br>
						</div>
						</center>
					</div> --}}

					
				{{-- </div> --}}
			</div>
		</div>
		
		<!-- Main Navigation -->
		
		@include('inc.front.cat_menu')
	</header>
	
	
		@yield('content')
</div>

<div class="" style="background-color: whitesmoke"><span class="custom_dropdown_placeholder clc"></span>
	<ul class="custom_list clc">
		<li><a class="clc" href="#">All Categories</a></li>
		<li><a class="clc" href="#">Computers</a></li>
		<li><a class="clc" href="#">Laptops</a></li>
		<li><a class="clc" href="#">Cameras</a></li>
		<li><a class="clc" href="#">Hardware</a></li>
		<li><a class="clc" href="#">Smartphones</a></li>
	</ul>
</div>
{{-- ........................................................................ --}}

@include('inc.front.earlyfooter')

{{-- ................................................................................... --}}

<div class="copyright" style="background-color: black">
	<div class="container">
		<div class="row">
			<div class="col" style="padding-top: 20px; padding-bottom: 20px; color: white; text-align: center;">
				&copy All rights reserved | Designed by 
				<a href="mailto:websol9999@gmail.com?subject = Feedback&body = Message">
					WSCreation
				</a>
			</div>
		</div>
	</div>
</div>

</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>