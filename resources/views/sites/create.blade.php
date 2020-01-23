<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Add a new site</h2>
		<a href="{{ URL::to('/sites/') }}">Back to sites listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<form action="/sites/create" method="post">
			@csrf
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Name" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="okab_license" aria-describedby="okabHelp" placeholder="Okab License"/>
				<small id="okabHelp" class="form-text text-muted">Does this site have an OKAB license? </small>
			</div>
			<div class="form-group">
				<input type="date" class="form-control" name="date_started" aria-describedby="dateFinishedHelp" placeholder="Date Started"/>
				<small id="dateFinishedHelp" class="form-text text-muted">When was this site started? </small>
			</div>
			<div class="form-group">
				<input type="date" class="form-control" name="date_finished" aria-describedby="dateFinishedHelp" placeholder="Date Finished"/>
				<small id="dateFinishedHelp" class="form-text text-muted">When was this site finished? </small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="developer"  aria-describedby="devHelp" placeholder="Developer"/>
				<small id="devHelp" class="form-text text-muted">Name of Developer</small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="designer"  aria-describedby="designHelp" placeholder="Designer"/>
				<small id="designHelp" class="form-text text-muted">Name of Designer</small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="po"  aria-describedby="poHelp" placeholder="Product Owner"/>
				<small id="poHelp" class="form-text text-muted">Name of Product Owner</small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="sc"  aria-describedby="scHelp" placeholder="Startup Consultant"/>
				<small id="scHelp" class="form-text text-muted">Name of Startup Consultant</small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="ticket"  aria-describedby="ticketHelp" placeholder="Link to Ticket" />
				<small id="ticketHelp" class="form-text text-muted">Link to Trello / Jira ticket</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="state" aria-describedby="stateHelp" placeholder="State"/>
				<small id="stateHelp" class="form-text text-muted">What is the current state of the site? (pre-dev, dev, QA, live)</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="staging_link" aria-describedby="stagingHelp" placeholder="Staging Link" />
				<small id="stagingHelp" class="form-text text-muted">Staging URL</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="live_link" aria-describedby="liveHelp" placeholder="Live Link"/>
				<small id="liveHelp" class="form-text text-muted">Live URL</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="repo_link" aria-describedby="repoHelp" placeholder="Repo Link"/>
				<small id="repoHelp" class="form-text text-muted">Repository URL</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email Address"/>
				<small id="emailHelp" class="form-text text-muted">Associated email addresses</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="company_house" aria-describedby="compHouseHelp" placeholder="Company House" />
				<small id="compHouseHelp" class="form-text text-muted">Company House name</small>			
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="mailchimp_list" aria-describedby="mailchimpHelp" placeholder="Mailchimp List" />
				<small id="mailchimpHelp" class="form-text text-muted">Name of Mailchimp List</small>			
			</div>
			<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
@endsection