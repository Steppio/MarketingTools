<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Edit Terms and Conditions: {{ $terms->name }}</h2>
		<a href="{{ URL::to('/terms/') }}">Back to terms listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<form action="/terms/edit/{{ $terms->id }}" method="post">
			@csrf

			{{ Form::label('name', 'Site Name:') }}
			{{ Form::text('name', $terms->name) }}

			{{ Form::label('creator', 'Creator:') }}
			{{ Form::text('creator', $terms->creator) }}

			<textarea class="description" name="terms_data">{!! $terms->terms_data !!}</textarea>

			<button type="submit" class="btn btn-primary">Update</button>
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