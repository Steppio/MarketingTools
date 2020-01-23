<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>All Terms and Conditions policy</h2>
		<a href="{{ URL::to('/terms/create') }}">Create a terms</a>
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
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
			  	@foreach($terms as $term)
					<tr>
						<td>{{ $term->name }}</td>
						<td>{{ $term->creator }}</td>
						<td>
							<a href="{{ URL::to('/terms/edit') . '/' . $term->id }}"><i class="fas fa-edit"></i></a>
							<a href="{{ URL::to('/terms/view') . '/' . $term->id }}"><i class="far fa-eye"></i></a>	
							<a href="{{ URL::to('/terms/destroy') . '/' . $term->id }}"><i class="fas fa-minus-circle"></i></a>
						</td>
					</tr>
			    @endforeach
			</tbody>
		</table>

	</div>

</div>

@endsection