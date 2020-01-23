<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Site: {{ $site->name }}</h2>
		<a href="{{ URL::to('/sites/') }}">Back to sites listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<table class="table table-hover table-dark">
		    <tr>
				<th scope="col">ID</th>
				<td>{{ $site->id }}</td>
		    </tr>
		    <tr>
				<th scope="col">Name</th>
				<td>{{ $site->name }}</td>
		    </tr>
		    <tr>
				<th scope="col">Okab License</th>
				<td>{{ $site->okab_license }}</td>
			</tr>
			<tr>
				<th scope="col">Date Started</th>
				<td>{{ $site->date_started }}</td>
			</tr>
			<tr>
				<th scope="col">Date Finished</th>
				<td>{{ $site->date_finished }}</td>	
		    </tr>
		    <tr>
				<th scope="col">Developer</th>
				<td>{{ $site->developer }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Designer</th>
				<td>{{ $site->designer }}</td>			    	
		    </tr>	
		    <tr>
				<th scope="col">Product Owner</th>
				<td>{{ $site->po }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Startup Consultant</th>
				<td>{{ $site->sc }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Startup Consultant</th>
				<td>{{ $site->sc }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Ticket</th>
				<td>{{ $site->ticket }}</td>			    	
		    </tr>	
		    <tr>
				<th scope="col">State</th>
				<td>{{ $site->state }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Staging Link</th>
				<td>{{ $site->staging_link }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Live Link</th>
				<td>{{ $site->live_link }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Repository Link</th>
				<td>{{ $site->repo_link }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Email Address</th>
				<td>{{ $site->email }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Company House</th>
				<td>{{ $site->company_house }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Mailchimp</th>
				<td>{{ $site->mailchimp_list }}</td>			    	
		    </tr>
		</table>

	</div>

</div>

@endsection