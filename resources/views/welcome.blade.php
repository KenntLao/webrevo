@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-12 banner">
		<div class="row">
			<div class="col-12 offset-md-3 col-md-6">
				<h1>revolution begins here</h1>
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