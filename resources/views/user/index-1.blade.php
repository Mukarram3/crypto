@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
	<script src="{{asset('assets/dark-theme-js/owl.carousel.min.js')}}"></script>
@endsection
	
@section('main-content')
		<section class="home-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 position-u flex-align wow fadeInLeft">
						<div class="banner-contain">
							<h1 class="banner-heading">Invest In Cryptocoin Way To Trade</h1>
							<p class="banner-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem</p>
							<a href="#" class="btn">Learn more</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 position-u wow fadeInRight">
						<div class="banner-img">
							<img src="{{asset('assets/images2/banner-img.png')}}" alt="banner">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="work-part darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">what is cryptcon</label>
							<h2 class="heading-title">How it Works</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 text-center flex-align justify-center wow fadeInLeft">
						<div class="work-box">
							<div class="work-box-bg"></div>
							<img src="{{asset('assets/images2/work-process.png')}}" class="rotation-img" alt="Work Process">
						</div>
					</div>
					<div class="col-md-6 flex-align wow fadeInRight">
						<div class="work-box">
							<h3 class="work-process-title pb-25">We’ve built a platform to buy and sell shares.</h3>
							<p class="work-des pb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>

							<ul class="check-list">
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="feature-part skyblue bg-pattern pt-100 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">cryptcon Feature</label>
							<h2 class="heading-title">Best Features</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<img src="{{asset('assets/images2/feature-1.png')}}" alt="Safe & Secure">
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title">Safe & Secure</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="{{url('feature')}}"><img src="{{asset('assets/images2/feature-2.png')}}" alt="Early Bonus"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title">Early Bonus</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="feature.html"><img src="{{asset('assets/images2/feature-3.png')}}" alt="Univarsal Access"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="feature.html" class="feature-title">Univarsal Access</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="feature.html"><img src="{{asset('assets/images2/feature-4.png')}}" alt="Secure Storage"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="feature.html" class="feature-title">Secure Storage</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="feature.html"><img src="{{asset('assets/images2/feature-5.png')}}" alt="Low Cost"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="feature.html" class="feature-title">Low Cost</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="feature.html"><img src="{{asset('assets/images2/feature-6.png')}}" alt="Several Profit"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="feature.html" class="feature-title">Several Profit</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="timeline darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">roadmap</label>
							<h2 class="heading-title">The Timeline</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
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
										<div class="date-title">March 2021</div>
										<div class="map-graphic">
											<div class="small-round"><span></span></div>
											<div class="v-row"></div>
										</div>
										<div class="roadmap-detail-box">
											<p>Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
								</div>
								<div class="roadmap wow fadeInLeft">
									<div class="roadmap-box text-center">
										<div class="date-title">April 2021</div>
										<div class="map-graphic">
											<div class="small-round"><span></span></div>
											<div class="v-row"></div>
										</div>
										<div class="roadmap-detail-box">
											<p>Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
								</div>
								<div class="roadmap wow fadeInLeft">
									<div class="roadmap-box text-center">
										<div class="date-title">May 2021</div>
										<div class="map-graphic">
											<div class="small-round"><span></span></div>
											<div class="v-row"></div>
										</div>
										<div class="roadmap-detail-box">
											<p>Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
								</div>
								<div class="roadmap wow fadeInLeft">
									<div class="roadmap-box text-center">
										<div class="date-title">August 2021</div>
										<div class="map-graphic">
											<div class="small-round"><span></span></div>
											<div class="v-row"></div>
										</div>
										<div class="roadmap-detail-box">
											<p>Lorem Ipsum has been the industry's standard dummy text </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="team-part skyblue bg-pattern pt-100 pb-55">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">meet the team</label>
							<h2 class="heading-title">Our Team</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 wow fadeInLeft pb-45">
						<div class="team-box flex-align">
							<div class="team-img">
								<a href="team.html"><img src="{{asset('assets/images2/team-1.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="team.html" class="member-name">John Doe</a>
								<p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
								<ul class="pt-15">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 pb-45 wow fadeInRight">
						<div class="team-box flex-align">
							<div class="team-img">
								<a href="team.html"><img src="{{asset('assets/images2/team-2.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="team.html" class="member-name">John Doe</a>
								<p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
								<ul class="pt-15">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 wow fadeInLeft pb-45">
						<div class="team-box flex-align">
							<div class="team-img">
								<a href="team.html"><img src="{{asset('assets/images2/team-3.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="team.html" class="member-name">John Doe</a>
								<p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
								<ul class="pt-15">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 pb-45 wow fadeInRight">
						<div class="team-box flex-align">
							<div class="team-img">
								<a href="team.html"><img src="{{asset('assets/images2/team-4.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="team.html" class="member-name">John Doe</a>
								<p class="member-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor it amet, consectetur</p>
								<ul class="pt-15">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="tokensale-part" class="token-sale darkblue parallax ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft flex-align">
						<div class="w-100">
							<div class="section-heading pb-20">
								<label class="sub-heading">token</label>
								<h2 class="heading-title">Token Sale</h2>
								<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
							</div>
							<div class="token-graphic-detail">
								<ul>
									<li class="color-code-1">73% Finacial Overhead</li>
									<li class="color-code-2">55% Bonus & found</li>
									<li class="color-code-3">12% Gift Code Inventory</li>
									<li class="color-code-4">32% Bounty and Overhead</li>
									<li class="color-code-5">38% it infastrueture</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 flex-align justify-center-r">
						<div class="token-graph w-100">
							<div class='donut'>
						        <div data-lcolor="#f8c04e">12.2</div>
						        <div data-lcolor="#ac56f7">32.6</div>
						        <div data-lcolor="#61f89f">38.2</div>
						        <div data-lcolor="#5ad6f8">55.2</div>
						        <div data-lcolor="#f85d77">73.2</div>
						    </div>
					        <div class="graph-logo">
					        	<img src="{{asset('assets/images2/graph-logo.png')}}" alt="cryptoz">
					        </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- <section class="blog-part skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">news</label>
							<h2 class="heading-title">Our Blog</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="blog-slider owl-carousel">
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-2.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-3.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-2.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-3.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-2.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-3.jpg')}}" alt="blog"></a>
						</div>
						<div class="blog-des-box">
							<a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

		<section class="ico-apps parallax-2 darkblue pt-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft flex-bottom order-r-2">
						<div class="ico-apps-img w-100 text-center">
							<img src="{{asset('assets/images2/ico-img.png')}}" alt="mobile apps">
						</div>
					</div>
					<div class="col-lg-6 wow fadeInRight pb-100 order-r-1">
						<div class="section-heading pb-20">
							<label class="sub-heading">ico apps</label>
							<h2 class="heading-title">ICO Mobile App</h2>
							<p class="heading-des pb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  also the leap into electronic typesetting, remaining essentially unchanged. </p>

							<ul class="check-list mb-30">
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Crypto-news curation</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Natural Language Understanding</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Et harum quidem rerum facilis est et expedita distinctio.</p></li>
							</ul>
							<a href="#" class="btn">get the app now</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="faq-part skyblue pt-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">Faqs</label>
							<h2 class="heading-title">Frequently Asked questions</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<ul class="nav nav-tab Frequently-tabs pb-55">
							<li>
							    <a class="tab-link active" href="javascript:void(0)" data-tab="tab-1">general</a>
							</li>
							<li>
							    <a class="tab-link" href="javascript:void(0)" data-tab="tab-2">pre-ico & ico</a>
							</li>
							<li>
							    <a class="tab-link" href="javascript:void(0)" data-tab="tab-3">Tokens</a>
							</li>
							<li>
							    <a class="tab-link" href="javascript:void(0)" data-tab="tab-4">client</a>
							</li>
							<li>
							    <a class="tab-link" href="javascript:void(0)" data-tab="tab-5">legal</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="tab-content">
						  	<div class="tab-panel active" id="tab-1">
						  		<div class="row">
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What is Ico Crypto?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-2">
						  		<div class="row">
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What is Ico Crypto?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-3">
						  		<div class="row">
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What is Ico Crypto?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-4">
						  		<div class="row">
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What is Ico Crypto?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-5">
						  		<div class="row">
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
						  				</div>
						  			</div>
						  			<div class="col-md-6 pb-65">
						  				<div class="faq-tab">
						  					<a href="faq.html" class="qus-title">What is Ico Crypto?</a>
						  					<p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
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
