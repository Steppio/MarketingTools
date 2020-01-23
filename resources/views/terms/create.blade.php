<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Create Terms and Conditions policy</h2>
		<a href="{{ URL::to('/terms/') }}">Back to t&amp;c listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<form action="/terms/create" method="post">
			@csrf

			{{ Form::label('name', 'Site Name:') }}
			{{ Form::text('name') }}

			{{ Form::label('creator', 'Creator:') }}
			{{ Form::text('creator') }}

			@include('terms.template.template')

			<button type="submit" class="btn btn-primary">Save</button>

		</form>
	</div>


@endsection