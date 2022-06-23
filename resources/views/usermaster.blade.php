<!DOCTYPE html>
<html lang="en">
	<head>
	@include('layout/user/header')
	<style>
		.logo{
			font-size: 31px;
    font-style: italic;
		}
	</style>
	</head>
	<body>

		<!-- Start preloader -->
		<div id="preloader"></div>
		<!-- End preloader -->

		<!-- Top scroll -->
		<div class="top-scroll transition">
			<a href="#banner" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>	
		<!-- Top scroll End -->

		@include('partials/user/topbar')

		@yield('main-content')

	@include('partials/user/footer')
	
	@include('layout/user/javascript')
		
	</body>

</html>
