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

		<form action="/privacy/create" method="post">
			@csrf

			{{ Form::label('name', 'Site Name:') }}
			{{ Form::text('name') }}

			{{ Form::label('creator', 'Creator:') }}
			{{ Form::text('creator') }}

			@include('privacy.template.template')

			<button type="submit" class="btn btn-primary">Save</button>

		</form>
	</div>

@endsection