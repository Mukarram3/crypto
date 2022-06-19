@extends('usermaster')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dark-theme-css/responsive.css')}}">
@endsection
	
@section('main-content')

		<section class="sub-page-banner parallax" id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-banner text-center wow fadeInUp">
							<h1 class="sub-banner-title">Token Sale</h1>
							<ul>
								<li><a href="{{url('index1')}}">Home</a></li>
								<li>Token Sale</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="token-sele skyblue ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-heading text-center pb-65 wow fadeInUp">
							<label class="sub-heading">token</label>
							<h2 class="heading-title">Token Sale</h2>
							<p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12 flex-align order-r-2 wow fadeInLeft">
						<div class="information-token w-100">
							<h2 class="information-token-head">Information About Tokens</h2>
							<ul>
								<li><label>Token Name</label> <span>Cryptcon</span></li>
								<li><label>Nominal Price</label> <span>1smt = 0.025USD</span></li>
								<li><label>Total Number of Token Produced</label> <span>7 BN smt</span></li>
								<li><label>Unsold Tokens</label> <span>Burn Smart Contrac</span></li>
								<li><label>Type of Token</label> <span>ERC-20</span></li>
								<li><label>Minimal transaction amount</label> <span>1 ETH/ 1 BTC/ 1 LTC</span></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 order-r-1 wow fadeInRight">
						<div class="token-sale-counter text-center">
							<ul class="coins-counter-loop">
								<li>
									<span id="days">00</span>
									<label class="coin-day">Days</label>
								</li>
								<li>
									<span id="hours">00</span>
									<label class="coin-day">hours</label>
								</li>
								<li>
									<span id="minutes">00</span>
									<label class="coin-day">minutes</label>
								</li>
								<li>
									<span id="seconds">00</span>
									<label class="coin-day">seconds</label>
								</li>
							</ul>
							<div class="row">
								<div class="col-4 text-center">
									<span class="token-slide-info">PRE-SALE</span>
								</div>
								<div class="col-4 text-center">
									<span class="token-slide-info">SOFT CAP</span>
								</div>
								<div class="col-4 text-center">
									<span class="token-slide-info">BONUS</span>
								</div>
							</div>
							<div class="coins-progress">
						        <span data-progress="70"></span>
						    </div>
						    <a href="{{url('token-sale')}}" class="btn">Join &amp; Buy Token Now</a>
						    <ul class="currency-card">
						    	<li><a href="#"><img src="{{asset('assets/images2/bitcoin.png')}}" alt="bitcoin"></a></li>
						    	<li><a href="#"><img src="{{asset('assets/images2/visa.png')}}" alt="visa"></a></li>
						    	<li><a href="#"><img src="{{asset('assets/images2/master-card.png')}}" alt="master card"></a></li>
						    </ul>
						</div>
					</div>
				</div>
				<div class="row pt-100">
					<div class="col-md-12 wow fadeInUp">
						<div class="section-heading text-center pb-65">
							<h2 class="heading-title">Token Distribution</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 wow fadeInLeft">
						<div class="token-distribut text-center">
							<h2 class="distribution-title">Token Distribution</h2>
							<div class="token-graph w-100">
								<img src="{{asset('assets/images2/token-chart.png')}}" alt="Token Distribution">
							</div>
						</div>
					</div>
					<div class="col-md-6 wow fadeInRight">
						<div class="token-distribut text-center">
							<h2 class="distribution-title">Use of Proceeds</h2>
							<div class="token-graph w-100">
								<img src="{{asset('assets/images2/token-chart-2.png')}}" alt="Use of Proceeds">
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
