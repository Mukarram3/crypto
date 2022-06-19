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
							<h1 class="sub-banner-title">Team</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Team</li>
							</ul>
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
					<div class="col-md-6 pb-45 wow fadeInLeft">
						<div class="team-box flex-align">
							<div class="team-img">
								<a href="{{url('team')}}"><img src="{{asset('assets/images2/team-1.jpg')}}" alt="team member"></a>
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
					<div class="col-md-6 pb-45 wow fadeInLeft">
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
				<div class="row pt-100">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<label class="sub-heading">advisors</label>
							<h2 class="heading-title">Our advisors and board members</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 pb-45 wow fadeInUp">
						<div class="team-box advisors text-center">
							<div class="team-img">
								<a href="{{url('team')}}"><img src="{{asset('assets/images2/team-1.jpg')}}" alt="team member"></a>
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
					<div class="col-md-4 pb-45 wow fadeInUp">
						<div class="team-box advisors text-center">
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
					<div class="col-md-4 pb-45 wow fadeInUp">
						<div class="team-box advisors text-center">
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
				</div>
			</div>
		</section>

		@endsection

@section('js')	

		<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection
