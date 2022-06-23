<!DOCTYPE html>
<html lang="en">
	<head>
	<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>Elevanix-Dashboard</title>

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link type="image/x-icon" href="{{asset('assets/images2/fav-icon.png')}}" rel="icon">

<!-- CSS -->

<link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/style3.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/color.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('assets/toaster/toastr.min.css')}}"/>
    <link href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet"/>
	</head>
	<body>

		<!-- Start preloader -->
		<div id="preloader"></div>
		<!-- End preloader -->

		<!-- Top scroll -->
		<div class="top-scroll transition">
			<a href="#banner" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
		</div>	
		<!-- Top scroll End -->

        <header class="transition">
            <div class="container">
                <div class="row flex-align">
                    <div class="col-lg-2 col-md-2 col-8">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('assets/images2/logo.png')}}" class="transition" alt="Cryptcon"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-4 text-right">
                        <div class="menu-toggle">
                            <span></span>
                        </div>
                        <div class="menu">
                            <ul class="d-inline-block">
                                <li>
                                    <a href="{{url('User/dashboard')}}">Dashboard</a>
                                </li>
                                {{-- <li class="mega-menu">
                                    <span class="opener plus"></span>
                                    <a href="about.html">Pages</a>
                                    <ul class="transition">
                                        <li><a href="{{url('about')}}">About</a></li>
                                        <li><a href="{{url('blog-list')}}">Blog</a></li>
                                        <li><a href="{{url('token-sale')}}">Token Sale</a></li>
                                        <li><a href="{{url('contact')}}">Contact</a></li>
                                        <li><a href="{{url('faq')}}">FAQ</a></li>
                                        <li><a href="{{url('404')}}">404 Page</a></li>
                                    </ul>
                                </li> --}}
                                @if(auth()->user()->balance > 0)
                                <li><a href="{{url('User/roulette')}}">Roulette</a></li>
                                @else
                                <li><a href="#" onclick="return confirm('Please update balance to use Roulette')">Roulette</a></li>
                                @endif

                                @if (auth()->user()->balance > 0)
                                <li><a href="#">Jackpot</a></li>
                                @else
                                <li><a href="#" onclick="return confirm('Please update balance to use Jackpot')">Jackpot</a></li>
                                @endif
                 
                                <li><a href="{{url('/chatify')}}">Contact Us</a></li>
                            </ul>
                            <div class="signin d-inline-block">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="btn">Logout</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="page-banner text-center">
							<h1 class="sub-banner-title"> Welcome {{auth()->user()->name}} To Company</h1>
							<p>Your Referal Link is <a style="color: white"> https://crypto.elevanix.club/public/login?id={{auth()->user()->id}}</p>
                                <p>Your Total
                                    Balance is
                                    ${{auth()->user()->balance}}</p>
                                    <p>Your Plan
                                        Is @foreach ($selectedplans as $selectedplan)

                                            {{$selectedplan->hasplans->name}},
                                        @endforeach</p>
                                        <p>Your
                                            Insurance
                                            Plan
                                            Is @foreach ($selectedinsurances as $selectedinsurance)

                                                {{$selectedinsurance->hasinsurance->name}},
                                            @endforeach</p>
						</div>
					</div>
				</div>
			</div>
		</section>

    <div class="container">
        <div class="row">
            @forelse($notifications as $notification)
            <div class="alert alert-success" role="alert">
                Hello {{ $notification->data['name'] }}! ${{ $notification->data['balance'] }} has been Added to Your Account.
{{--                                        <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">--}}
{{--                                            Mark as read--}}
{{--                                        </a>--}}
                <form action="{{route('markNotification')}}" method="post" id="markread">
                    @csrf
                <button style="margin-top: -29px;" type="submit" class="float-right mark-as-read btn btn-link" data-id="{{ $notification->id }}">Mark as read</button>
                </form>
            </div>

{{--                                    @if($loop->last)--}}
{{--                                        <a href="#" id="mark-all">--}}
{{--                                            Mark all as read--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
        @empty
            There are no new notifications
        @endforelse
        </div>
    </div>

		<section class="work-part darkblue pt-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
				
							<h2 class="heading-title">Live Crypto Prices</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center flex-align justify-center wow fadeInLeft">
						 {{-- <marquee onMouseOver="this.stop()" onMouseOut="this.start()" style="padding: 13px; font-size: 20px;" behavior="alternate" scrollamount="4" height="50px">
                                    @foreach(Cryptocap::getAssets()->data as $assetes)
                                        {{$assetes->name.'  '}}
                                        ${{number_format($assetes->priceUsd,3)}}

                                    @endforeach
                                </marquee> --}}
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
                            <form id="chooseplanform" method="POST" action="{{route('chooseplan')}}">
                                @csrf
                                <input type="hidden" id="planid" name="planid" value="{{$plan->id}}">
                                <p>
                                    {{-- <button class="btn">sdfsdf</button> --}}
                                    <button type='submit' class='btn btn-sm btn-secondary'>
                                        Choose
                                    </button>
                                </p>
                            </form>
							{{-- <a href="blog-detail.html" class="read-more">Read More</a> --}}
						</div>
					</div>
					
					@endforeach					

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
							<a href="blog-detail.html"><img src="{{asset('assets/images2/blog-1.jpg')}}" alt="blog"></a>
							<h1>{{$insurance->name}}</h1>
						</div>
						<div class="blog-des-box">
							{{-- <a href="blog-detail.html" class="blog-title">Cryptocash is a clean, modern template clean</a>
							<ul class="blog-date">
								<li>March 20,2021</li>
								<li>by John Doe</li>
							</ul> --}}
							<p class="blog-des">{{$insurance->description}} </p>
                            <form id="chooseinsuranceform" method="POST"
                            action="{{route('chooseinsurance')}}">
                          @csrf
                          <input type="hidden" id="insuranceid" name="insuranceid"
                                 value="{{$insurance->id}}">
                          <p>
                              {{-- <button class="btn">sdfsdf</button> --}}
                              <button type='submit' class='btn btn-secondary'>
                                  Choose
                              </button>
                          </p>
                      </form>
						</div>
					</div>
					
					@endforeach

				</div>
			</div>
		</section>

        <footer class="bg-pattern darkblue ptb-100">
            <div class="container">
                <div class="footer">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo pb-25">
                            <a href="index.html"><img src="{{asset('assets/images2/logo.png')}}" alt="Cryptcon"></a>
                        </div>
                            <div class="footer-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-link">
                                <ul>
                                    <li><a href="{{url('User/dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{url('plans')}}">Plans</a></li>
                                    <li><a href="{{url('Insurance-Plans')}}">Insurance Plans</a></li>
                                    <li><a href="{{url('/chatify')}}">Contact Us</a></li>
                                    <li><a href="{{url('User/roulette')}}">Roulette</a></li>
                                    <li><a href="{{url('User/jackpot')}}">Jackpot</a></li>
                             
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="subscribe">
                                <div class="form-group">
                                    <label>Subscribe to our Newsleter</label>
                                    <input type="email" class="form-control" placeholder="Enter your email Address">
                                    <input type="submit" name="submit" value="Subscribe" class="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>© Cryptcon all Rights Reserved. Designed By <a href="#">Mukarram</a></p>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                            
                                <li><a href="{{url('chatify')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('assets/dark-theme-js/jquery-3.4.1.min.js')}}"></script>
		<script src="{{asset('assets/dark-theme-js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/dark-theme-js/animation.js')}}"></script>
		<script src="{{asset('assets/dark-theme-js/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('assets/dark-theme-js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/dark-theme-js/snap.svg-min.js')}}"></script>
        <script src="{{asset('assets/dark-theme-js/jquery.listtopie.min.js')}}"></script>
        <script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/toaster/toastr.min.js')}}"></script>
        <script src="{{asset('assets/dark-theme-js/custom.js')}}"></script>

        {{-- <script type='text/javascript'
        id='contact-form-7-js-extra'>/* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/themebubble.com\/demo\/webify\/crypto\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }, "cached": "1"
    }; /* ]]> */</script>
<script type='text/javascript'
        id='webify-main-js-extra'>/* <![CDATA[ */
    var get = {
        "ajaxurl": "https:\/\/themebubble.com\/demo\/webify\/crypto\/wp-admin\/admin-ajax.php",
        "siteurl": "https:\/\/webify-13e95.kxcdn.com\/demo\/webify\/crypto\/wp-content\/themes\/webify",
        "nonce": "e119790453"
    }; /* ]]> */</script>
<script type='text/javascript'
        id='elementor-frontend-js-before'>var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.6.5",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true
        },
        "urls": {"assets": "https:\/\/themebubble.com\/demo\/webify\/crypto\/wp-content\/plugins\/elementor\/assets\/"},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 5,
            "title": "Home%20-%20Crypto",
            "excerpt": "",
            "featuredImage": "https:\/\/webify-13e95.kxcdn.com\/demo\/webify\/crypto\/wp-content\/uploads\/sites\/4\/2019\/05\/yxemfqipr_e-1024x683.jpg"
        }
    };</script> --}}
{{-- 
<script
    src="{{asset('assets/js/8e1802b6f3cfcb84abed3c5cfa8eb17a.js')}}"
    data-minify="1" defer></script>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('assets/toaster/toastr.min.js')}}"></script>
<script type='text/javascript'
        src='{{asset('js/jquery.min.js')}}'
        id='jquery-core-js'></script> --}}


@if(Session::has('successmsg'))
    <script>
        toastr.success('', '{{Session::get('successmsg')}}');
    </script>
@endif

<script>

    $(document).ready(function () {

        $('.editbalance').click(function (){
           $("#investwithdraw").modal("show");
        });



        // $('#chooseinsuranceform').on('submit', function (e) {
        //     // alert('hghjb');
        //     e.preventDefault();
        //     var form = this;
        //     $.ajax({
        //         url: $(form).attr('action'),
        //         method: $(form).attr('method'),
        //         data: new FormData(form),
        //         processData: false,
        //         dataType: 'json',
        //         contentType: false,
        //         success: function (data) {
        //             toastr.success(data.msg);
        //             location.reload();
        //         }
        //     });
        //
        // });



        // {{--function sendMarkRequest(id = null) {--}}
        // {{--    return $.ajax("{{ route('markNotification') }}", {--}}
        // {{--        method: 'POST',--}}
        // {{--        data: {--}}
        // {{--            _token,--}}
        // {{--            id--}}
        // {{--        }--}}
        // {{--    });--}}
        // {{--}--}}
        // {{--$('.mark-as-read').click(function() {--}}
        // {{--    let request = sendMarkRequest($(this).data('id'));--}}
        // {{--    request.done(() => {--}}
        // {{--        $(this).parents('div.alert').remove();--}}
        // {{--    });--}}
        // {{--});--}}

    });


    function sendMarkRequest(id = null) {
        return $.ajax("{{ url('User.markNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }
    $(function() {
        $('.mark-as-read #mark-all').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                location.reload();
                $(this).parents('div.alert').remove();
            });
        });
        // $('#mark-all').click(function() {
        //     let request = sendMarkRequest();
        //     request.done(() => {
        //         $('div.alert').remove();
        //     })
        // });
    });


</script>

    </body>

</html>