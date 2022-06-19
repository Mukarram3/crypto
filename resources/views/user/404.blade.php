@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	
@section('main-content')

		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-banner text-center wow fadeInUp">
							<h1 class="sub-banner-title">404</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>404</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp animated">
						<div class="section-heading text-center">
							<h2 class="heading-title">404</h2>
							<p class="heading-des">Ooops! 404 - Page Not Found</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		@endsection

		@section('js')	

		<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection
