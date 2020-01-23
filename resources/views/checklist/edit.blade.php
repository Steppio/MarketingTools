<!-- view checklists -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Checklist for: {{ $checklist->site->name }}</h2>
		<a href="{{ URL::to('/checklist/') }}">Back to checklist listing</a>
	</div>

</div>


<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		{{ Form::open(array('action' => array('ChecklistController@update', $checklist->id))) }}

			<table class="table table-hover table-dark">
				<tr>
					<td colspan="2"><h4>Functionality</h4></td>
				</tr>
			    <tr>
					<th scope="col"><p>Are all links / buttons pointing to the right place?</p></th>
					<td>
						{{ Form::hidden('func_links_buttons', 0) }}
						<input class="form-check-input" value="1" type="checkbox" {{ $checklist->func_links_buttons == '1' ? 'checked' : '' }} name="func_links_buttons">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is the permalink structure ok?</p></th>
					<td>
						{{ Form::hidden('func_permalink', 0 ) }}
						<input class="form-check-input" value="1" type="checkbox" {{ $checklist->func_permalink == '1' ? 'checked' : '' }} name="func_permalink">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Have you done a search and replace to replace all localhost / staging links?</p></th>
					<td>
						{{ Form::hidden('func_search_replace', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->func_search_replace == '1' ? 'checked' : '' }} type="checkbox" name="func_search_replace">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the links pointing to the HTTPS versions?</p></th>
					<td>
						{{ Form::hidden('func_https', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->func_https == '1' ? 'checked' : '' }} type="checkbox" name="func_https">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a tagline / meta data?</p></th>
					<td>
						{{ Form::hidden('func_meta', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->func_meta == '1' ? 'checked' : '' }} type="checkbox" name="func_meta">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is Flamingo installed?</p></th>
					<td>
						{{ Form::hidden('func_flamingo', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->func_flamingo == '1' ? 'checked' : '' }} type="checkbox" name="func_flamingo">
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
						{{ Form::hidden('speed_optimised', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->speed_optimised == '1' ? 'checked' : '' }} type="checkbox" name="speed_optimised">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are css / js files minified?</p></th>
					<td>
						{{ Form::hidden('speed_minified', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->speed_minified == '1' ? 'checked' : '' }} type="checkbox" name="speed_minified">
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
						{{ Form::hidden('aesthetic_favicon', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->aesthetic_favicon == '1' ? 'checked' : '' }} type="checkbox" name="aesthetic_favicon">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Have you checked all breakpoints? </p></th>
					<td>
						{{ Form::hidden('aesthetic_breakpoints', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->aesthetic_breakpoints == '1' ? 'checked' : '' }} type="checkbox" name="aesthetic_breakpoints">
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
						{{ Form::hidden('cont_tandc', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->cont_tandc == '1' ? 'checked' : '' }} type="checkbox" name="cont_tandc">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a Privacy Policy page?</p></th>
					<td>
						{{ Form::hidden('cont_privacy', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->cont_privacy == '1' ? 'checked' : '' }} type="checkbox" name="cont_privacy">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a cookies bar?</p></th>
					<td>
						{{ Form::hidden('cont_cookies', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->cont_cookies == '1' ? 'checked' : '' }} type="checkbox" name="cont_cookies">
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
						{{ Form::hidden('forms_mailchimp', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_mailchimp == '1' ? 'checked' : '' }} type="checkbox" name="forms_mailchimp">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the contact forms working to submit?</p></th>
					<td>
						{{ Form::hidden('forms_submit', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_submit == '1' ? 'checked' : '' }} type="checkbox" name="forms_submit">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the contact forms pointing to the right email address?</p></th>
					<td>
						{{ Form::hidden('forms_email', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_email == '1' ? 'checked' : '' }} type="checkbox" name="forms_email">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a contact form template in place for sending to site owner?</p></th>
					<td>
						{{ Form::hidden('forms_template', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_template == '1' ? 'checked' : '' }} type="checkbox" name="forms_template">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is the welcome email set up in Mailchimp?</p></th>
					<td>
						{{ Form::hidden('forms_welcome_email', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_welcome_email == '1' ? 'checked' : '' }} type="checkbox" name="forms_welcome_email">
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a requirement for a recaptha? Is it installed?</p></th>
					<td>
						{{ Form::hidden('forms_recaptha', 0 ) }}
						<input class="form-check-input" value="1" {{ $checklist->forms_recaptha == '1' ? 'checked' : '' }} type="checkbox" name="forms_recaptha">
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
						{{ Form::hidden('analytics_google', 0 ) }}
						<input class="form-check-input" value="1" type="checkbox" name="analytics_google" {{ $checklist->analytics_google == '1' ? 'checked' : '' }}>
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Does it need Facebook Pixel?</p></th>
					<td>
						{{ Form::hidden('analytics_facebook', 0 ) }}
						<input class="form-check-input" value="1" type="checkbox" name="analytics_facebook" {{ $checklist->analytics_facebook == '1' ? 'checked' : '' }}>
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Does it need Hotjar?</p></th>
					<td>
						{{ Form::hidden('analytics_hotjar', 0 ) }}
						<input class="form-check-input" value="1" type="checkbox" name="analytics_hotjar" {{ $checklist->analytics_hotjar == '1' ? 'checked' : '' }}>
					</td>
			    </tr>
			</table>

			<table class="table table-hover table-dark">
				<tr>
					<td colspan="2"><h4>Notes</h4></td>
				</tr>
			    <tr>
					<th scope="col"><p>Any additional notes?</p></th>
					<td>
						<textarea style="width: 100%; min-height: 300px;" class="form-check-input" type="textarea" name="notes">{{ $checklist->notes }}</textarea>
					</td>
			    </tr>
				<tr>
					<td colspan="2"><button type="submit" class="btn btn-primary">Create</button></td>
				</tr>			    
			</table>

		{{ Form::close() }}

	</div>

</div>

@endsection