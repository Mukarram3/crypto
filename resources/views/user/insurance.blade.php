@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	@section('title', 'Elevanix-Insurance')
@section('main-content')

		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="page-banner text-center">
							<h1 class="sub-banner-title">Insurance Plans</h1>
							{{-- <ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Insurance Plans</li>
							</ul> --}}
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="blog-part skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
						
							<h2 class="heading-title">Our Insurance Plans</h2>
						
						</div>
					</div>
				</div>
				<div class="blog-slider owl-carousel">

					@foreach($insurances as $insurance)
					
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="#"><img src="{{asset('assets/images2/blog-2.jpg')}}" alt="blog"></a>
							<h1>{{$insurance->name}}</h1>
						</div>
						<div class="blog-des-box">
							{{-- <a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul> --}}
							<p class="blog-des">{{$insurance->description}} </p>
							<a href="#" class="read-more">Read More</a>
						</div>
					</div>
					
					@endforeach

				</div>
			</div>
		</section>

		{{-- <section class="roadmap-main skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 position-r">
						<div class="roadmap-main-graph">
							<div class="roadmap-center-line"></div>
							<div class="roadmap-chart">
								<div class="roadmap-content-box">
									<div class="roadmap-main-content">
										<div class="roadmap-small-round"></div>
										<div class="roadmap-animated wow fadeInLeft">
											<h2 class="roadmap-date">March 2021</h2>
											<p class="roadmap-box-detail">Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="roadmap-content-box">
									<div class="roadmap-main-content">
										<div class="roadmap-small-round"></div>
										<div class="roadmap-animated wow fadeInRight">
											<h2 class="roadmap-date">April 2021</h2>
											<p class="roadmap-box-detail">Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="roadmap-content-box">
									<div class="roadmap-main-content">
										<div class="roadmap-small-round"></div>
										<div class="roadmap-animated wow fadeInLeft">
											<h2 class="roadmap-date">May 2021</h2>
											<p class="roadmap-box-detail">Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="roadmap-content-box">
									<div class="roadmap-main-content">
										<div class="roadmap-small-round"></div>
										<div class="roadmap-animated wow fadeInRight">
											<h2 class="roadmap-date">June 2021</h2>
											<p class="roadmap-box-detail">Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						
						<div class="main-roadmap">
							<div class="row">
								<div class="col-md-12">
									<div class="h-border wow fadeInLeft"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="roadmap-slider owl-carousel">
										<div class="roadmap wow fadeInLeft">
											<div class="roadmap-box text-center">
												<div class="map-graphic">
													<div class="small-round"><span></span></div>
													<div class="v-row"></div>
												</div>
												<div class="roadmap-detail-box">
													<div class="date-title">March 2021</div>
													<p class="roadmap-des">Lorem Ipsum has been the industry's standard dummy text </p>
												</div>
											</div>
										</div>
										<div class="roadmap wow fadeInLeft">
											<div class="roadmap-box text-center">
												<div class="map-graphic">
													<div class="small-round"><span></span></div>
													<div class="v-row"></div>
												</div>
												<div class="roadmap-detail-box">
													<div class="date-title">April 2021</div>
													<p class="roadmap-des">Lorem Ipsum has been the industry's standard dummy text </p>
												</div>
											</div>
										</div>
										<div class="roadmap wow fadeInLeft">
											<div class="roadmap-box text-center">
												<div class="map-graphic">
													<div class="small-round"><span></span></div>
													<div class="v-row"></div>
												</div>
												<div class="roadmap-detail-box">
													<div class="date-title">May 2021</div>
													<p class="roadmap-des">Lorem Ipsum has been the industry's standard dummy text </p>
												</div>
											</div>
										</div>
										<div class="roadmap wow fadeInLeft">
											<div class="roadmap-box text-center">
												<div class="map-graphic">
													<div class="small-round"><span></span></div>
													<div class="v-row"></div>
												</div>
												<div class="roadmap-detail-box">
													<div class="date-title">June 2021</div>
													<p class="roadmap-des">Lorem Ipsum has been the industry's standard dummy text </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

		@endsection

@section('js')	

<script src="{{asset('assets/dark-theme-js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/dark-theme-js/snap.svg-min.js')}}"></script>
<script src="{{asset('assets/dark-theme-js/jquery.listtopie.min.js')}}"></script>
<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection
