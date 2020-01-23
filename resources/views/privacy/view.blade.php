<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>View Privacy Policy</h2>
		<a href="{{ URL::to('/privacy/') }}">Back to Privacy Policy listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<form action="/privacy/create" method="post">
			@csrf

			{{ Form::label('name', 'Site Name:') }}
			{{ $privacy->name }}

			<br />

			{{ Form::label('creator', 'Creator:') }}
			{{ $privacy->creator }}

			{!! $privacy->policy_data !!}

		</form>
	</div>

	<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
	<script>
	    tinymce.init({
	        selector:'textarea.description',
	        width: 900,
	        height: 600
	    });
	</script>

@endsection