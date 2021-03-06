@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
@section('title', 'Elevanix About-Us')
	
@section('main-content')

<section class="sub-page-banner parallax" id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-banner text-center">
					<h1 class="sub-banner-title">About us</h1>
					{{-- <ul>
						<li><a href="{{url('about')}}">Home</a></li>
						<li>About us</li>
					</ul> --}}
				</div>
			</div>
		</div>
	</div>
</section>

		<section class="about-main skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 text-center flex-align justify-center order-r-2 wow fadeInLeft">
						<div class="work-box w-100">
							<div class="work-box-bg"></div>
							<img src="{{asset('assets/images2/work-process.png')}}" class="rotation-img" alt="Work Process">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 flex-align order-r-1 mb-r-30 wow fadeInRight">
						<div class="work-box">
							<h3 class="work-process-title pb-25">About US</h3>
							<p class="about-des pb-20">Elevanix is betting liquidity and insurance issuer. We provide large gambling platforms with liquidity to perform their bets and insurances. We use sophisticated AI algorithms to come up with the best deals on the market. </p>

							<p class="work-des">Invest with us for a near-zero losing rate, and invest for the future with solid and guaranteed returns. Invest in your future now. Elevanix has multiple business models, one is investing in betting bonds where we provide crypto betting companies with money. The other one is the AI-focused trading algorithm and our in-house betting platform where you can play and earn unlimited amounts 24/7 and don't forget, to guarantee your win with one of our insurance plans.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		{{-- <section class="about-main darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 flex-align mb-r-30 wow fadeInLeft">
						<div class="work-box">
							<h3 class="work-process-title pb-25">Our Mission</h3>
							<p class="about-des pb-20">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>

							<p class="work-des">Bitcoin is different than any currency you???ve used before, so it???s very important to understand some key points. You can use them to send or receive any amount of money, with anyone, anywhere in the world, at very low cost. Bitcoin payments are impossible to block and safety. Bitcoin is different than any currency you???ve used before, so it???s very important to understand some key points. You can use them to send or receive any amount of money, with anyone, anywhere in the world, at very low cost. Bitcoin payments are impossible to block and safety.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 text-center flex-align justify-center wow fadeInRight">
						<div class="work-box video-box">
							<img src="{{asset('assets/images2/about-1.jpg')}}" alt="Work Process">
							<a data-fancybox href="https://www.youtube.com/watch?v=yAoLSRbwxL8" class="play-icon">
								<span>
									<i class="fa fa-play" aria-hidden="true"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="about-main darkblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 text-center flex-align justify-center order-r-2 wow fadeInLeft">
						<div class="work-box">
							<img src="{{asset('assets/images2/about-2.png')}}" alt="Work Process">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 flex-align mb-r-30 order-r-1 wow fadeInRight">
						<div class="work-box">
							<h3 class="work-process-title pb-25">Why are so many people investing Digitall currencies like BitCoin</h3>

							<p class="work-des">Bitcoin is different than any currency you???ve used before, so it???s very important to understand some key points. You can use them to send or receive any amount of money, with anyone, anywhere in the world, at very low cost. Bitcoin payments are impossible to block and safety. Bitcoin is different than any currency you???ve used before, so it???s very important to understand some key points. You can use them to send or receive any amount of money, with anyone, anywhere in the world, at very low cost. Bitcoin payments are impossible to block and safety.</p>
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
								<a href="{{url('index1')}}"><img src="{{asset('assets/images2/team-1.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="{{url('team')}}" class="member-name">John Doe</a>
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
								<a href="{{url('team')}}"><img src="{{asset('assets/images2/team-2.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="{{url('team')}}" class="member-name">John Doe</a>
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
								<a href="{{url('team')}}"><img src="{{asset('assets/images2/team-3.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="{{url('team')}}" class="member-name">John Doe</a>
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
								<a href="{{url('team')}}"><img src="{{asset('assets/images2/team-4.jpg')}}" alt="team member"></a>
							</div>
							<div class="team-des">
								<a href="{{url('team')}}" class="member-name">John Doe</a>
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
		</section> --}}

		@endsection

@section('js')	

		<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection