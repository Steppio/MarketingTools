<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Checklists</h2>
		<a href="{{ URL::to('/checklist/create') }}">Create a checklist</a>
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
		      <th scope="col">Admin</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($checklists as $checklist)
				<tr>
					<td>{{ $checklist->site->name }}</td>
					<td>
						<a href="{{ URL::to('/checklist/edit') . '/' . $checklist->id }}"><i class="fas fa-edit"></i></a>
						<a href="{{ URL::to('/checklist/view') . '/' . $checklist->id }}"><i class="far fa-eye"></i></a>	
						<a href="{{ URL::to('/checklist/destroy') . '/' . $checklist->id }}"><i class="fas fa-minus-circle"></i></a>
					</td>
				</tr>
		    @endforeach
		  </tbody>
		</table>

	</div>

</div>

@endsection