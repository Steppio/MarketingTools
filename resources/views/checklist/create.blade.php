@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Live Checklist</h2>
		<a href="{{ URL::to('/checklist/') }}">Back to checklists</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		{{ Form::open(array('url' => '/checklist/create')) }}

			<table class="table table-hover table-dark">
				<tr>
					<td colspan="2"><h4>Site</h4></td>
				</tr>
			    <tr>
					<th scope="col"><p>Please pick your site</p></th>
					<td>
						<select name="site_id" id="sites" class="form-control">
							@foreach($sites as $site)
								<option value="{{ $site->id }}">{{ $site->name }}</option>
							@endforeach
						</select>
					</td>
			    </tr>
			</table>	

			<table class="table table-hover table-dark">
				<tr>
					<td><h4>Functionality</h4></td>
					<td>
						<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Help</a>								
					</td>
				</tr>
			    <tr>
					<th scope="col"><p>Are all links / buttons pointing to the right place?</p></th>
					<td>
						{{ Form::hidden('func_links_buttons',0) }}
						{{ Form::checkbox('func_links_buttons', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is the permalink structure ok?</p>
					</th>
					<td>
						{{ Form::hidden('func_permalink',0) }}
						{{ Form::checkbox('func_permalink', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Have you done a search and replace to replace all localhost / staging links?</p></th>
					<td>
						{{ Form::hidden('func_search_replace',0) }}
						{{ Form::checkbox('func_search_replace', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the links pointing to the HTTPS versions?</p></th>
					<td>
						{{ Form::hidden('func_https',0) }}
						{{ Form::checkbox('func_https', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a tagline / meta data?</p></th>
					<td>
						{{ Form::hidden('func_meta',0) }}
						{{ Form::checkbox('func_meta', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is Flamingo installed?</p></th>
					<td>
						{{ Form::hidden('func_flamingo',0) }}
						{{ Form::checkbox('func_flamingo', 1, false, ['class' => 'form-check-input']) }}
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
						{{ Form::hidden('speed_optimised',0) }}
						{{ Form::checkbox('speed_optimised', 1, false, ['class' => 'form-check-input']) }}						
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are css / js files minified?</p></th>
					<td>
						{{ Form::hidden('speed_minified',0) }}
						{{ Form::checkbox('speed_minified', 1, false, ['class' => 'form-check-input']) }}	
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
						{{ Form::hidden('aesthetic_favicon',0) }}
						{{ Form::checkbox('aesthetic_favicon', 1, false, ['class' => 'form-check-input']) }}						
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Have you checked all breakpoints? </p></th>
					<td>
						{{ Form::hidden('aesthetic_breakpoints',0) }}
						{{ Form::checkbox('aesthetic_breakpoints', 1, false, ['class' => 'form-check-input']) }}		
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
						{{ Form::hidden('cont_tandc',0) }}
						{{ Form::checkbox('cont_tandc', 1, false, ['class' => 'form-check-input']) }}						
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a Privacy Policy page?</p></th>
					<td>
						{{ Form::hidden('cont_privacy',0) }}
						{{ Form::checkbox('cont_privacy', 1, false, ['class' => 'form-check-input']) }}
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a cookies bar?</p></th>
					<td>
						{{ Form::hidden('cont_cookies',0) }}
						{{ Form::checkbox('cont_cookies', 1, false, ['class' => 'form-check-input']) }}						
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
						{{ Form::hidden('forms_mailchimp',0) }}
						{{ Form::checkbox('forms_mailchimp', 1, false, ['class' => 'form-check-input']) }}							
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the contact forms working to submit?</p></th>
					<td>
						{{ Form::hidden('forms_submit',0) }}
						{{ Form::checkbox('forms_submit', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Are the contact forms pointing to the right email address?</p></th>
					<td>
						{{ Form::hidden('forms_email',0) }}
						{{ Form::checkbox('forms_email', 1, false, ['class' => 'form-check-input']) }}							
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is SMTP installed for contact forms / email?</p></th>
					<td>
						{{ Form::hidden('forms_smtp',0) }}
						{{ Form::checkbox('forms_smtp', 1, false, ['class' => 'form-check-input']) }}							
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is the domain authenticated in Mailchimp?</p></th>
					<td>
						{{ Form::hidden('forms_domain',0) }}
						{{ Form::checkbox('forms_domain', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>			    			    
			    <tr>
					<th scope="col"><p>Is there a contact form template in place for sending to site owner?</p></th>
					<td>
						{{ Form::hidden('forms_template',0) }}
						{{ Form::checkbox('forms_template', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is the welcome email set up in Mailchimp?</p></th>
					<td>
						{{ Form::hidden('forms_welcome_email',0) }}
						{{ Form::checkbox('forms_welcome_email', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Is there a requirement for a recaptha? Is it installed?</p></th>
					<td>
						{{ Form::hidden('forms_recaptha',0) }}
						{{ Form::checkbox('forms_recaptha', 1, false, ['class' => 'form-check-input']) }}	
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
						{{ Form::hidden('analytics_google',0) }}
						{{ Form::checkbox('analytics_google', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Does it need Facebook Pixel?</p></th>
					<td>
						{{ Form::hidden('analytics_facebook',0) }}
						{{ Form::checkbox('analytics_facebook', 1, false, ['class' => 'form-check-input']) }}	
					</td>
			    </tr>
			    <tr>
					<th scope="col"><p>Does it need Hotjar?</p></th>
					<td>
						{{ Form::hidden('analytics_hotjar',0) }}
						{{ Form::checkbox('analytics_hotjar', 1, false, ['class' => 'form-check-input']) }}	
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
						<textarea style="width: 100%; min-height: 300px;" class="form-check-input" type="textarea" name="notes"></textarea>
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