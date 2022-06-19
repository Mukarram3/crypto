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
								<li><a href="{{url('blog-list')}}">Blog</a></li>
								<li>blog detail</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="blog-detail-main skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="blog-detail-img">
							<img src="{{asset('assets/images2/blog-7.jpg')}}" alt="blog">
						</div>
						<div class="blog-detail-content">
							<ul>
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul>
							<h2>Cryptocash is a clean, modern and itry-specific HTML template</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip  ipsum dolor</blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>
				<div class="blog-detail-tag-social">
					<div class="row">
						<div class="col-md-7">
							<div class="blog-detail-tag">
								<span>Tag by</span>
								<ul>
									<li><a href="#">Bitcoin</a></li>
									<li><a href="#">Crypto</a></li>
									<li><a href="#">Block chain</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-5">
							<div class="blog-detail-social text-right">
								<span>Share</span>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-comment-post-singel">
					<ul class="blog-comment-box">
						<li>
							<div class="comment-user">
								<img src="{{asset('assets/images2/comments-4.jpg')}}" alt="user">
							</div>
							<div class="blog-comment-content">
								<h4 class="commenter">John Doe</h4>
								<p class="comment-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="blog-comment-post">
					<h3 class="blog-comment-heading">3 Comments on this post</h3>
					<ul class="blog-comment-box">
						<li>
							<div class="comment-user">
								<img src="{{asset('assets/images2/comments-1.jpg')}}" alt="user">
							</div>
							<div class="blog-comment-content">
								<h4 class="commenter">John Doe</h4>
								<span class="comment-date">22 December 2021</span>
								<p class="comment-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<a href="#" class="comment-reply">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</li>
						<li>
							<div class="comment-user">
								<img src="{{asset('assets/images2/comments-2.jpg')}}" alt="user">
							</div>
							<div class="blog-comment-content">
								<h4 class="commenter">John Doe</h4>
								<span class="comment-date">22 December 2021</span>
								<p class="comment-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<a href="#" class="comment-reply">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</li>
						<li>
							<div class="comment-user">
								<img src="{{asset('assets/images2/comments-3.jpg')}}" alt="user">
							</div>
							<div class="blog-comment-content">
								<h4 class="commenter">John Doe</h4>
								<span class="comment-date">22 December 2021</span>
								<p class="comment-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
								<a href="#" class="comment-reply">Reply <i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</li>
					</ul>
				</div>
				<div class="leave-comment">
					<h3 class="blog-comment-heading">Leave a comment</h3>
					<form>
						<div class="row">
							<div class="col-md-4">
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Your Name*" required="">
							  	</div>
							</div>
							<div class="col-md-4">
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Your Email*" required="">
							  	</div>
							</div>
							<div class="col-md-4">
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Your Phone*" required="">
							  	</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" placeholder="Review*" required=""></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn">submit</button>
							</div>
						</div>
					</form>
				</div>
				<div class="related-blog pt-100">
					<h3 class="blog-comment-heading">Related Blog</h3>
					<div class="blog-slider owl-carousel">
						<div class="blog-box">
							<div class="blog-img mb-15">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
							</div>
							<div class="blog-des-box">
								<a href="{{url('blog-detail')}}" class="blog-title">Cryptocash is a clean, modern template clean</a>
								<ul class="blog-date">
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p class="blog-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
							</div>
						</div>
						<div class="blog-box">
							<div class="blog-img mb-15">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-2.jpg')}}" alt="blog"></a>
							</div>
							<div class="blog-des-box">
								<a href="{{url('blog-detail')}}" class="blog-title">Cryptocash is a clean, modern template clean</a>
								<ul class="blog-date">
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
							</div>
						</div>
						<div class="blog-box">
							<div class="blog-img mb-15">
								<a href="{{url('blog-detail')}}"><img src="{{asset('assets/images2/blog-3.jpg')}}" alt="blog"></a>
							</div>
							<div class="blog-des-box">
								<a href="{{url('blog-detail')}}" class="blog-title">Cryptocash is a clean, modern template clean</a>
								<ul class="blog-date">
									<li>March 20,2021</li>
									<li>by John Doe</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur </p>
								<a href="{{url('blog-detail')}}" class="read-more">Read More</a>
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
