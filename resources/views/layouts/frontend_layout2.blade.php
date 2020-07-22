<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/footer.css') }}">


<style>
	.oval {
	  height: 30px;
	  width: 100px;
	  /* background-color: blue; */
	  border: 2px solid blue;
	  border-radius: 10%;
	  color: red;
	  padding-top: 2px;
	  padding-bottom: 2px;
	}

	.oval1 {
	  height: 30px;
	  /* width: 100%; */
	  /* background-color: blue; */
	  border: 2px solid blue;
	  border-radius: 10%;
	  color: red;
	  padding-top: 2px;
	  padding-bottom: 2px;
	  padding-left: 15px;
	  padding-right: 15px;
	}

	.oval h4 {
		text-align: center;
		padding-top: px;
	}

	.oval1 h4 {
		text-align: center;
		padding-top: px;
	}

	.trapezoid {
	border-left: 25px solid Blue;
	border-top: 15px solid transparent;
	border-bottom: 15px solid transparent;
	height: 30px;
	width: 25px;
}
	</style>
</head>

<body>
	@include('sweetalert::alert')

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<!-- Logo -->
					{{-- <div class="col-md-8">
						<center>
							<div class="logo_container">
								<div class="logo">
									<a href="{{ url('/') }}" style="background-color: white">
										<img src="{{ asset('images/Capture2.png') }}" class="img-fluid" style="height: vh; width: 100%;">
									</a>
								</div>
								<br>
							</div>
						</center>
					</div> --}}

					
					
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->
	<div class="nametag" style="background-color: whitesmoke; padding-top: 15px; padding-bottom: 15px;">
		<div class="container">
			<div class="row">
			
				
				<div class="">
					<a href="{{route('index')}}">
						<button type="button" class="btn btn-outline-danger btn-sm" >NETRO COMPUTERS</button>
					
					</a>
				</div>
					<div class="space" style="width: 10px;"></div>
					<div class="trapezoid"></div>
					<div class="space" style="width: 10px;"></div>
					<div class="">
						<a name="" id="" class="btn btn-primary" href="#" role="button">

							@yield('category')

						</a>
					</div>
			

			</div>
			
		</div>
	</div>
		
		<!-- Menu -->



	</header>
	<body>

		<div class="container">
			@yield('content')
		</div>
		
	</body>

	
	
	
	
</div>


<div class="col-md-2"><span class="custom_dropdown_placeholder clc"></span>
												
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

{{-- js --}}
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>

</html>