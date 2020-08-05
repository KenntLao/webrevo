@extends('layouts.app')
@section('content')
<div class="content">
	<div class="row no-gutters">
		<div class="col-12 banner">
			<div class="row no-gutters">
				<div class="offset-3 col-6 banner-text">
					<div class="bracket bracket-left">
						<img src="{{asset('images/curly_bracket_left.svg')}}">
					</div>
					<h1>revolution begins here</h1>
					<div class="bracket bracket-right">
						<img src="{{asset('images/curly_bracket_right.svg')}}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row no-gutters" id="about">
		<div class="col-12 about">
			<div class="row no-gutters">
				<div class="col-12 offset-sm-3 col-sm-6 about-text">
					<h1>about us</h1>
					<p>We are a group of friends whose goal is to revolutionize creating websites for our partners and clients. We at WEBREVO provide the best experience for your personal needs in creating website.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row no-gutters" id="benefit_website">
		<div class="col-12 section-row">
			<div class="row no-gutters">
				<div class="col-12 col-md-6 section">
					<div class="row no-gutters" id="benefits">
						<div class="col-12 section-text">
							<h1><span class="bt">benefits</span> of a <span class="bt">website</span></h1>
							<p>Having a website for yourself or your small business gives you many benefits. Here is a list of it.</p>
							<div class="section-list">
								<a class="active" href="javascript:void(0)" data-target="info-1">credibility</a>
								<a href="javascript:void(0)" data-target="info-2">efficiency</a>
								<a href="javascript:void(0)" data-target="info-3">showcasing</a>
								<a href="javascript:void(0)" data-target="info-4">be on track</a>
								<a href="javascript:void(0)" data-target="info-5">reach</a>
								<a href="javascript:void(0)" data-target="info-6">be reached</a>
								<a href="javascript:void(0)" data-target="info-7">earn more</a>
								<a href="javascript:void(0)" data-target="info-8">become productive</a>
								<a href="javascript:void(0)" data-target="info-9">educate</a>
								<a href="javascript:void(0)" data-target="info-10">promote</a>
								<a href="javascript:void(0)" data-target="info-11">serve better</a>
							</div>
						</div>
					</div>
					<div class="row no-gutters" id="website">
						<div class="col-12 section-text">
							<h1><span class="bt">knowing</span> the <span class="bt">basics</span></h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="section-list">
								<a href="javascript:void(0)" data-target="info-12">header</a>
								<a href="javascript:void(0)" data-target="info-13">navigation bar</a>
								<a href="javascript:void(0)" data-target="info-14">sidebar</a>
								<a href="javascript:void(0)" data-target="info-15">main content</a>
								<a href="javascript:void(0)" data-target="info-16">footer</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 section-bracket">
					<div class="box-absolute">
						<div class="box-sticky">
							<div class="info-bracket info-left info-left-active">
								<img src="{{asset('images/curly_bracket_left.svg')}}">
							</div>
							<div class="info-bracket info-right info-right-active">
								<img src="{{asset('images/curly_bracket_right.svg')}}">
							</div>
							<div class="details">
								<div class="section-info open-info" id="info-1">
									<p>Introduce yourself by creating your own website. Let people know who you are and what you do!</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-2">
									<p>Efficiently collaborate with your team by building a website for your business.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-3">
									<p>With your personal website, you can easily showcase your portfolio, products, services, collections and many more!</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-4">
									<p>By having a website, you can always keep track on your business in real time.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-5">
									<p>Expand your market coverage by engaging with your partners easier.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-6">
									<p>Let your future partners reach you in your own domain.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-7">
									<p>Open new possible source of your income.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info"id="info-8">
									<p>Plan and organize your future goals by setting a systematic process.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-9">
									<p>Share the knowledge you possess; let the people know how <span style="font-style: italic;">it's</span> done.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-10">
									<p>Let people know the services and products you have to offer.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-11">
									<p>Provide better and faster way for your customer service using your website.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-12">
									<p>Lorem ipsum 1.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-13">
									<p>Lorem ipsum 2.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-14">
									<p>Lorem ipsum 3.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-15">
									<p>Lorem ipsum 4.</p>
								</div>
							</div>
							<div class="details">
								<div class="section-info" id="info-16">
									<p>Lorem ipsum 5.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row no-gutters">
		<div class="col-12 process">
			
		</div>
	</div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
@stop
@section('js')
@stop