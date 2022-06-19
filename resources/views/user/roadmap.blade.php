@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	
@section('main-content')

		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="page-banner text-center">
							<h1 class="sub-banner-title">Roadmap</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Roadmap</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="roadmap-main skyblue ptb-100">
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
		</section>

		@endsection

@section('js')	

		<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection
