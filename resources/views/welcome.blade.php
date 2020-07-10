@extends('layouts.app')
@section('content')
<div class="content">
	<div class="row no-gutters">
		<div class="col-12 banner">
			<div class="row">
				<div class="col-12 offset-md-3 col-md-6 banner-text">
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
	<div class="row no-gutters">
		<div class="col-12 about">
			<div class="row no-gutters">
				<div class="col-12 col-md-6 about-text">
					<h1><span class="at">benefits</span> of a <span class="at">website</span></h1>
					<p>Having a website for yourself or your small business gives you many benefits. Here is a list of it.</p>
					<div class="a-list">
						<a href="javascript:void(0)" data-target="info-1">credibility</a>
						<a href="javascript:void(0)" data-target="info-2">efficiency</a>
						<a href="javascript:void(0)" data-target="info-3">reputation</a>
						<a href="javascript:void(0)" data-target="info-4">showcasing</a>
						<a href="javascript:void(0)" data-target="info-5">be on track</a>
						<a href="javascript:void(0)" data-target="info-6">reach</a>
						<a href="javascript:void(0)" data-target="info-7">be reached</a>
						<a href="javascript:void(0)" data-target="info-8">earn more</a>
						<a href="javascript:void(0)" data-target="info-9">be known</a>
						<a href="javascript:void(0)" data-target="info-10">become productive</a>
						<a href="javascript:void(0)" data-target="info-11">educate</a>
						<a href="javascript:void(0)" data-target="info-12">promote</a>
						<a href="javascript:void(0)" data-target="info-13">serve better</a>
					</div>
				</div>
				<div class="col-12 col-md-6 about-info">
					<div class="info-bracket info-left info-left-active">
						<img src="{{asset('images/curly_bracket_left.svg')}}">
					</div>
					<div class="info-bracket info-right info-right-active">
						<img src="{{asset('images/curly_bracket_right.svg')}}">
					</div>
					<div class="about-details">
						<div class="a-info open-info" id="info-1">
							<p>Improve your credibility and reliability when it comes to business-- Introduce yourself!</p>
						</div>
						<div class="a-info" id="info-2">
							<p>Run your business efficiently.</p>
						</div>
						<div class="a-info" id="info-3">
							<p>Boost your reputation upon launching of your site.</p>
						</div>
						<div class="a-info" id="info-4">
							<p>Showcase your products to your future partners and clients.</p>
						</div>
						<div class="a-info" id="info-5">
							<p>Making your own website allows you to keep track of your business in real time.</p>
						</div>
						<div class="a-info" id="info-6">
							<p>Expand your market coverage by engaging with your partners easier.</p>
						</div>
						<div class="a-info" id="info-7">
							<p>Let your future business partners know how to reach you.</p>
						</div>
						<div class="a-info" id="info-8">
							<p>Open new possible source of your income.</p>
						</div>
						<div class="a-info" id="info-9">
							<p>Your website can also serve as your catalog that will help your clients see what you have in store.</p>
						</div>
						<div class="a-info"id="info-10">
							<p>Plan and organize your goals by setting a systematic process.</p>
						</div>
						<div class="a-info" id="info-11">
							<p>Teach your clients how it's done.</p>
						</div>
						<div class="a-info" id="info-12">
							<p>Let people know the services and products you have to offer.</p>
						</div>
						<div class="a-info" id="info-13">
							<p>Provide better and faster way for your customer service using your website.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
@stop
@section('js')
<script src="{{ URL::asset('js/main.js') }}"></script>
@stop