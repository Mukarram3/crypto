@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	
@section('main-content')

		<section class="home-banner-2 skyblue flex-align" id="particle-canvas">
			<div class="container">
				<div class="row position-r z-index-2">
					<div class="col-md-6 flex-align wow fadeInLeft">
						<div class="banner-tow-content">
							<h1 class="banner-heading-tow">Invest In <span>Cryptocoin</span> Way To Trade</h1>
							<p class="banner-des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem  </p>
						</div>
					</div>
					<div class="col-md-6 wow fadeInRight">
						<div class="coin-counter">
							<label class="coin-start pb-20">Coins Start in</label>
							<h2 class="coin-head">Discount 475 From Final Price</h2>
							<ul class="coins-counter-loop">
								<li>
									<span id="days">12</span>
									<label class="coin-day">Days</label>
								</li>
								<li>
									<span id="hours">08</span>
									<label class="coin-day">hours</label>
								</li>
								<li>
									<span id="minutes">24</span>
									<label class="coin-day">minutes</label>
								</li>
								<li>
									<span id="seconds">33</span>
									<label class="coin-day">seconds</label>
								</li>
							</ul>
							<div class="coin-slide-text">
								<label class="coin-none">0 coins</label>
								<label class="coin-max">5000 coins</label>
							</div>
							<div class="coins-progress">
						        <span data-progress="45"></span>
						    </div>
						    <a href="token-sale.html" class="btn btn-2">Join & Buy Token Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="about-part darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInLeft">
						<div class="about-img">
							<img src="{{asset('assets/images2/about.jpg')}}" alt="about">
						</div>
					</div>
					<div class="col-md-6 flex-align wow fadeInRight">
						<div class="about-content">
							<div class="section-heading">
								<h2 class="heading-title-2 pb-20">About <span>Cryptcon</span></h2>
								<h3 class="sub-heading-2 pb-15">Why to choose Coinpool Carbon?</h3>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="feature-part-2 skyblue pt-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading flex-align pb-40">
							<h2 class="heading-title-2 wow fadeInUp white-space pr-75"><span>Best</span> Features</h2>
							<p class="heading-des-2 wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-1.png')}}" alt="Safe & Secure">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Safe & Secure</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-2.png')}}" alt="Early Bonus">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Early Bonus</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-3.png')}}" alt="Univarsal Access">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Univarsal Access</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-4.png')}}" alt="Secure Storage">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Secure Storage</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-5.png')}}" alt="Low Cost">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Low Cost</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp mb-30">
						<div class="feature-box-2">
							<div class="frontend">
								<div class="feature-icon-2">
									<img src="{{asset('assets/images2/feature-6.png')}}" alt="Several Profit">
								</div>
								<div class="feature-content">
									<h3 class="feature-title-2">Several Profit</h3>
									<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
								</div>
								<div class="clear"></div>
							</div>
							<div class="backend">
								<p>Sed ut perspiciatis unde omnis iste eaque ipsa quae ab under natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="roadmap-part darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2 class="heading-title-2 wow fadeInUp pb-20"><span>Our</span> Roadmap</h2>
							<p class="heading-des wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
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
													<div class="date-title">march 2021</div>
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

		<section class="team-part-2 skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading flex-align pb-40">
							<h2 class="heading-title-2 wow fadeInUp white-space pr-75"><span>Our</span> Team</h2>
							<p class="heading-des-2 wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="team-slider owl-carousel wow fadeInUp">
							<div class="team-slide-box">
								<div class="team-box-2">
									<div class="team-member-img">
										<a href="team.html"><img src="{{asset('assets/images2/team-5.jpg')}}" alt="team member"></a>
									</div>
									<div class="team-member-name">
										<a href="team.html">John Doe</a>
									</div>
								</div>
							</div>
							<div class="team-slide-box">
								<div class="team-box-2">
									<div class="team-member-img">
										<a href="team.html"><img src="{{asset('assets/images2/team-6.jpg')}}" alt="team member"></a>
									</div>
									<div class="team-member-name">
										<a href="team.html">John Doe</a>
									</div>
								</div>
							</div>
							<div class="team-slide-box">
								<div class="team-box-2">
									<div class="team-member-img">
										<a href="team.html"><img src="{{asset('assets/images2/team-7.jpg')}}" alt="team member"></a>
									</div>
									<div class="team-member-name">
										<a href="team.html">John Doe</a>
									</div>
								</div>
							</div>
							<div class="team-slide-box">
								<div class="team-box-2">
									<div class="team-member-img">
										<a href="team.html"><img src="{{asset('assets/images2/team-8.jpg')}}" alt="team member"></a>
									</div>
									<div class="team-member-name">
										<a href="team.html">John Doe</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="token-sale-2 darkblue ptb-100" id="tokensale-part">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center">
							<h2 class="heading-title-2 wow fadeInUp pb-20"><span>Token</span> Sale</h2>
							<p class="heading-des wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
						</div>
					</div>
				</div>
				<div class="row pt-100">
					<div class="col-lg-6 col-md-12 justify-center-r">
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
					<div class="col-lg-6 col-md-12 flex-align">
						<div class="token-graphic-detail wow fadeInRight">
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
			</div>
		</section>

		{{-- <section class="blog-part-2 skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading flex-align pb-40">
							<h2 class="heading-title-2 white-space pr-75"><span>Our</span> Blog</h2>
							<p class="heading-des-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
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
							<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section> --}}

		<section class="ico-apps-2 darkblue pt-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft flex-bottom order-r-2">
						<div class="ico-apps-img w-100 text-center">
							<img src="{{asset('assets/images2/ico-img-2.png')}}" alt="mobile apps">
						</div>
					</div>
					<div class="col-lg-6 wow fadeInRight flex-align order-r-1">
						<div class="w-100">
							<div class="section-heading pb-20">
								<h2 class="heading-title-2 pb-20">ICO <span>Mobile App</span></h2>
								<p class="heading-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  also the leap into electronic typesetting, remaining essentially unchanged.  </p>
							</div>
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

		<section class="faq-part-2 skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center pb-65">
							<h2 class="heading-title-2 pb-20"><span>Frequently</span> asked questions</h2>
							<p class="heading-des">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer  Lorem Ipsum is simply dummy </p>
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
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="tab-content" id="myTabContent">
						  	<div class="tab-panel active" id="tab-1">
						  		<div class="row">
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">What is ICO Crypto?</a>
						  					<div class="accordion-faq-content">
						  						<p>Cryptcon - is unique platform; that is secure, smart and easy-to-use platform, and completely disrupting the way businesses raise capital.</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">When she reached the first hills?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Big Oxmox advised her not to do?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Vokalia and Consonantia, there live?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Big Oxmox advised her not to do?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">What cryptocurrencies can I use to purchase?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How can I participate in the ICO Token sale?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How do I benefit from the ICO Token?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Which of us ever undertakes laborious?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Their separate existence is a myth?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-2">
						  		<div class="row">
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">When she reached the first hills?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Vokalia and Consonantia, there live?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">What cryptocurrencies can I use to purchase?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How can I participate in the ICO Token sale?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How do I benefit from the ICO Token?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Which of us ever undertakes laborious?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Their separate existence is a myth?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-3">
						  		<div class="row">
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Big Oxmox advised her not to do?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Vokalia and Consonantia, there live?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">What cryptocurrencies can I use to purchase?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How can I participate in the ICO Token sale?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Their separate existence is a myth?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  		</div>
						  	</div>
						  	<div class="tab-panel" id="tab-4">
						  		<div class="row">
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">When she reached the first hills?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Big Oxmox advised her not to do?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">Vokalia and Consonantia, there live?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  			</div>
						  			<div class="col-lg-6 col-md-12">
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">What cryptocurrencies can I use to purchase?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
						  					</div>
						  				</div>
						  				<div class="accordion-faq-box mb-20">
						  					<a href="javascript:void(0)" class="accordion-faq-title">How can I participate in the ICO Token sale?</a>
						  					<div class="accordion-faq-content">
						  						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer Lorem Ipsum is simply dummy</p>
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
