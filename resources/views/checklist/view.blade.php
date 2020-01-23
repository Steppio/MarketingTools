<!-- view checklists -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Site: {{ $checklist->site->name }}</h2>
		<a href="{{ URL::to('/checklist/') }}">Back to checklists</a>
	</div>

</div>


<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Functionality</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Are all links / buttons pointing to the right place?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_links_buttons }}" type="checkbox" value="{{ $checklist->func_links_buttons }}" name="func_links_buttons">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is the permalink structure ok?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_permalink }}" type="checkbox" value="{{ $checklist->func_permalink }}" name="func_permalink">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Have you done a search and replace to replace all localhost / staging links?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_search_replace }}" type="checkbox" value="{{ $checklist->func_search_replace }}" name="func_search_replace">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Are the links pointing to the HTTPS versions?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_https }}" type="checkbox" value="{{ $checklist->func_https }}" name="func_https">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is there a tagline / meta data?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_meta }}" type="checkbox" value="{{ $checklist->func_meta }}" name="func_meta">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is Flamingo installed?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->func_permalink }}" type="checkbox" value="{{ $checklist->func_permalink }}" name="func_flamingo">
				</td>
		    </tr>
		</table>

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Speed</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Are images optimised?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->speed_optimised }}" value="{{ $checklist->speed_optimised }}" type="checkbox" name="speed_optimised">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Are css / js files minified?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->speed_minified }}" value="{{ $checklist->speed_minified }}" type="checkbox" name="speed_minified">
				</td>
		    </tr>
		</table>	

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Aesthetic</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Does it have a favicon?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->aesthetic_favicon }}" value="{{ $checklist->aesthetic_favicon }}" type="checkbox" name="aesthetic_favicon">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Have you checked all breakpoints? </p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->aesthetic_breakpoints }}" value="{{ $checklist->aesthetic_breakpoints }}" type="checkbox" name="aesthetic_breakpoints">
				</td>
		    </tr>
		</table>	

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Required Content</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Is there a Terms and Conditions page?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->cont_tandc }}" value="{{ $checklist->cont_tandc }}" type="checkbox" name="cont_tandc">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is there a Privacy Policy page?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->cont_privacy }}" value="{{ $checklist->cont_privacy }}" type="checkbox" name="cont_privacy">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is there a cookies bar?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->cont_cookies }}" value="{{ $checklist->cont_cookies }}" type="checkbox" name="cont_cookies">
				</td>
		    </tr>
		</table>

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Contact Forms</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Is the contact form connected to Mailchimp?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_mailchimp }}" value="{{ $checklist->forms_mailchimp }}" type="checkbox" name="forms_mailchimp">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Are the contact forms working to submit?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_submit }}" value="{{ $checklist->forms_submit }}" type="checkbox" name="forms_submit">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Are the contact forms pointing to the right email address?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_email }}" value="{{ $checklist->forms_email }}" type="checkbox" name="forms_email">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is there a contact form template in place for sending to site owner?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_template }}" value="{{ $checklist->forms_template }}" type="checkbox" name="forms_template">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is the welcome email set up in Mailchimp?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_welcome_email }}" value="{{ $checklist->forms_welcome_email }}" type="checkbox" name="forms_welcome_email">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Is there a requirement for a recaptha? Is it installed?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->forms_recaptha }}" value="{{ $checklist->forms_recaptha }}" type="checkbox" name="forms_recaptha">
				</td>
		    </tr>
		</table>

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Analytics</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Does it have Google Analytics?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->analytics_google }}" value="{{ $checklist->analytics_google }}" type="checkbox" name="analytics_google">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Does it need Facebook Pixel?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->analytics_facebook }}" value="{{ $checklist->analytics_facebook }}" type="checkbox" name="analytics_facebook">
				</td>
		    </tr>
		    <tr>
				<th scope="col"><p>Does it need Hotjar?</p></th>
				<td>
					<input class="form-check-input checklist-input-{{ $checklist->analytics_hotjar }}" value="{{ $checklist->analytics_hotjar }}" type="checkbox" name="analytics_hotjar">
				</td>
		    </tr>
		</table>

		<table class="table table-hover table-dark">
			<tr>
				<td colspan="2"><h4>Notes</h4></td>
			</tr>
		    <tr>
				<th scope="col"><p>Any additional notes?</p></th>
				<td colspan="2">
					<p>{{ $checklist->notes }}</p>
				</td>
		    </tr>		    
		</table>

	</div>

</div>

@endsection