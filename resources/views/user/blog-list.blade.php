@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	
@section('main-content')
		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-banner text-center">
							<h1 class="sub-banner-title">Blog</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="blog-list-main skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-12 order-r-2">
						<div class="blog-search mb-45">
							<input type="text" name="search" placeholder="Search...">
							<button class="blog-search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
						<div class="blog-category mb-45">
							<h2 class="blog-cat-title">Category</h2>
							<ul>
								<li><a href="blog-detail.html">Blockchain</a></li>
								<li><a href="blog-detail.html">Cryptocurrency</a></li>
								<li><a href="blog-detail.html">Technology</a></li>
								<li><a href="blog-detail.html">Competitive Research</a></li>
								<li><a href="blog-detail.html">Startup</a></li>
							</ul>
						</div>
						<div class="trending-news mb-45">
							<h2 class="blog-cat-title">Trending News</h2>
							<div class="trending-news-box mb-20">
								<div class="trending-news-img">
									<a href="#"><img src="{{asset('assets/images2/news-1.jpg')}}" class="transition" alt="Trending News"></a>
								</div>
								<div class="trending-news-content">
									<a href="#" class="trending-news-title">Finance Minister Calls of ICO.</a>
									<span class="trending-news-date">March 20,2021</span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="trending-news-box mb-20">
								<div class="trending-news-img">
									<a href="#"><img src="{{asset('assets/images2/news-2.jpg')}}" class="transition" alt="Trending News"></a>
								</div>
								<div class="trending-news-content">
									<a href="#" class="trending-news-title">Finance Minister Calls of ICO.</a>
									<span class="trending-news-date">March 20,2021</span>
								</div>
								<div class="clear"></div>
							</div>
							<div class="trending-news-box mb-20">
								<div class="trending-news-img">
									<a href="#"><img src="{{asset('assets/images2/news-3.jpg')}}" class="transition" alt="Trending News"></a>
								</div>
								<div class="trending-news-content">
									<a href="#" class="trending-news-title">Finance Minister Calls of ICO.</a>
									<span class="trending-news-date">March 20,2021</span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="blog-tags mb-45">
							<h2 class="blog-cat-title">Trending News</h2>
							<ul>
								<li><a href="javascript:void(0)">crypto</a></li>
								<li><a href="javascript:void(0)">Consultation</a></li>
								<li><a href="javascript:void(0)">Case</a></li>
								<li><a href="javascript:void(0)">Attorney</a></li>
								<li><a href="javascript:void(0)">Crypto Currency</a></li>
								<li><a href="javascript:void(0)">BTC</a></li>
								<li><a href="javascript:void(0)">Dollar</a></li>
								<li><a href="javascript:void(0)">Ethereum</a></li>
							</ul>
						</div>
						<div class="archives">
							<h2 class="blog-cat-title">Archives</h2>
							<ul>
								<li><a href="#">January 2021</a></li>
								<li><a href="#">January 2021</a></li>
								<li><a href="#">January 2021</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 col-md-12 order-r-1">
						<div class="blog-list-box">
							<div class="blog-list-img">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-4.jpg')}}" class="transition" alt="blog"></a>
							</div>
							<div class="blog-list-content">
								<a href="{{url('blog-detail')}}" class="blog-list-title">Cryptocash is a clean, modern and itry-specific HTML template</a>
								<ul>
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p class="blog-list-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
							</div>
						</div>
						<div class="blog-list-box">
							<div class="blog-list-img">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-5.jpg')}}" class="transition" alt="blog"></a>
							</div>
							<div class="blog-list-content">
								<a href="{{url('blog-detail')}}" class="blog-list-title">Cryptocash is a clean, modern and itry-specific HTML template</a>
								<ul>
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p class="blog-list-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
							</div>
						</div>
						<div class="blog-list-box">
							<div class="blog-list-img">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-6.jpg')}}" class="transition" alt="blog"></a>
							</div>
							<div class="blog-list-content">
								<a href="{{url('blog-detail')}}" class="blog-list-title">Cryptocash is a clean, modern and itry-specific HTML template</a>
								<ul>
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p class="blog-list-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
							</div>
						</div>

						<div class="blog-list-pagination">
							<ul>
								<li><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		@endsection

@section('js')	

		<script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

@endsection
