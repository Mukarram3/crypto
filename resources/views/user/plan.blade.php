@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
@section('title', 'Elevanix-Plans')
@section('main-content')
		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="page-banner text-center">
							<h1 class="sub-banner-title">Plans</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Plans</li>
							</ul>
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
						
							<h2 class="heading-title">Our Plans</h2>
						
						</div>
					</div>
				</div>
				<div class="blog-slider owl-carousel">

					@foreach($plans as $plan)

					<div class="blog-box wow fadeInUp">
						<div class="blog-img mb-15">
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
							<h1>{{$plan->name}}</h1>
						</div>
						<div class="blog-des-box">
							{{-- <a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul> --}}
							<p class="blog-des">{{$plan->description}} </p>
							<a href="blog-detail.html" class="read-more">Read More</a>
						</div>
					</div>
					
					@endforeach					

				</div>
			</div>
		</section>

		{{-- <div class="feature-part darkblue pt-100 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<img src="{{asset('assets/images2/feature-1.png')}}" alt="Safe & Secure">
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title pb-15">Safe & Secure</a>
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
								<a href="{{url('feature')}}" class="feature-title pb-15">Early Bonus</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="{{url('feature')}}"><img src="{{asset('assets/images2/feature-3.png')}}" alt="Univarsal Access"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title pb-15">Univarsal Access</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="{{url('feature')}}"><img src="{{asset('assets/images2/feature-4.png')}}" alt="Secure Storage"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title pb-15">Secure Storage</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="{{url('feature')}}"><img src="{{asset('assets/images2/feature-5.png')}}" alt="Low Cost"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title pb-15">Low Cost</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 wow fadeInUp pb-80">
						<div class="feature-box">
							<div class="feature-icon">
								<a href="{{url('feature')}}"><img src="{{asset('assets/images2/feature-6.png')}}" alt="Several Profit"></a>
							</div>
							<div class="feature-contain pt-25">
								<a href="{{url('feature')}}" class="feature-title pb-15">Several Profit</a>
								<p class="feature-des">Lorem ipsum dolor sit amet, consectetur adipi-sicing elit, sed do eiusmod tempor incididunt ut labore et.Lorem ipsum dolor sit amet, labore et.Lorem ipsum dolor sit amet. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="feature-main skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12 text-center flex-align justify-center order-r-2 wow fadeInLeft">
						<div class="work-box">
							<img src="{{asset('assets/images2/feature-7.png')}}" alt="Work Process">
						</div>
					</div>
					<div class="col-lg-6 col-md-12 flex-align order-r-1 mb-r-30 wow fadeInRight">
						<div class="work-box">
							<h3 class="work-process-title pb-25">Why Choose Us?</h3>
							<p class="work-des pb-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>

							<ul class="check-list">
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
								<li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p></li>
							</ul>
							<a href="#" class="btn">contact Info</a>
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
