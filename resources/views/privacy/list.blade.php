<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Privacy Policies</h2>
		<a href="{{ URL::to('/privacy/create') }}">Create a privacy policy</a>
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
		      <th scope="col">Creator</th>
		      <th scope="col">&nbsp;</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($privacy as $privacies)
				<tr>
					<td>{{ $privacies->name }}</td>
					<td>{{ $privacies->creator }}</td>
					<td>
						<a href="{{ URL::to('/privacy/edit') . '/' . $privacies->id }}"><i class="fas fa-edit"></i></a>
						<a href="{{ URL::to('/privacy/view') . '/' . $privacies->id }}"><i class="far fa-eye"></i></a>	
						<a href="{{ URL::to('/privacy/destroy') . '/' . $privacies->id }}"><i class="fas fa-minus-circle"></i></a>
					</td>
				</tr>
		    @endforeach
		  </tbody>
		</table>

	</div>

</div>

@endsection