<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Marketing sites</h2>
		<a href="{{ URL::to('/sites/create') }}">Create a site</a>
	</div>

</div>

<div class="row">
	
	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<table class="table table-hover table-dark">
		  <thead>
		    <tr>
		      <th scope="col">Name</th>
		      <th scope="col">Live URL</th>
		      <th scope="col">State</th>
		      <th scope="col">Admin</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($sites as $site)
				<tr>
					<td>{{ $site->name }}</td>
					<td>{{ $site->live_link }}</td>
					<td>
						<div class="alert alert-success" role="alert">
						  {{ $site->state }}
						</div>
					</td>
					<td>
						<a href="{{ URL::to('/sites/edit') . '/' . $site->id }}"><i class="fas fa-edit"></i></a>
						<a href="{{ URL::to('/sites/view') . '/' . $site->id }}"><i class="far fa-eye"></i></a>	
						<a href="{{ URL::to('/sites/destroy') . '/' . $site->id }}"><i class="fas fa-minus-circle"></i></a>
					</td>
				</tr>
		    @endforeach
		  </tbody>
		</table>

	</div>

</div>

@endsection