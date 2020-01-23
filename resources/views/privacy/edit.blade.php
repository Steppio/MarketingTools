<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Create Privacy Policy</h2>
		<a href="{{ URL::to('/privacy/') }}">Back to Privacy Policy listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<form action="/privacy/edit/{{ $privacy->id }}" method="post">
			@csrf

			{{ Form::label('name', 'Site Name:') }}
			{{ Form::text('name', $privacy->name) }}

			{{ Form::label('creator', 'Creator:') }}
			{{ Form::text('creator', $privacy->creator) }}

			<textarea class="description" name="policy_data">{!! $privacy->policy_data !!}</textarea>

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