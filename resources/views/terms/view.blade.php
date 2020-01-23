<!-- create a site -->

@extends('layout.mainlayout')

@section('content')
	<div class="col">
		<h2>Terms and Conditions: {{ $terms->company_name }}</h2>
		<a href="{{ URL::to('/terms/') }}">Back to T&amp;C listing</a>
	</div>

</div>

<div class="row">

	<div class="col siteCreateForm">

		<h2>Terms and Conditions</h2>
		<p>At {{ $terms->company_name }} we are committed to protecting and respecting your privacy. This policy outlines details of the information that we collect, store and process, and the measures we take to protect and safeguard this information.</p>

		<h2>Who are we?</h2>
		<p>Cofoundery Enterprise {{ $terms->cofoundery_number }} Ltd (trading as {{ $terms->company_name }}) is a limited company registered in the UK (Company number {{ $terms->company_number }}) with registered address {{ $terms->company_address }}. For the purposes of this privacy policy {{ $terms->company_name }} is the ‘Data Controller’ and assumes that role under UK and European Law.</p>

		<h2>Information you provide through the application</h2>
		<p>If you fill in our content form, you provide us with some details:</p>
		<p>{{ $terms->contact_form_inputs }}</p>

		<h2>How your information is used</h2>
		<p>If you register your email address will be used to obtain further information from you. We will also use your email to contact you with suitable job opportunities and updates from {{ $terms->company_name }} only if you give us express permission to do so. This may include details of new features and updates to the application. Our processing basis for this communication is Consent, which you will be requested for at the time you submit the form.</p>
		  <p>If you register as a school your email address will be used to obtain further information from you (in order to create your job listing). We will also use your email to contact you with suitable candidates and updates from {{ $terms->company_name }} only if you give us express permission to do so. This may include details of new features and updates to the application. Our processing basis for this communication is Consent, which you will be requested for at the time you submit the form</p>

		  <h2>How long do we hold data for?</h2>
		  <p>We only hold your data for as long as you have an active account, after which we will remove it</p>
		  <p>{{ $terms->company_name }} only retain data for as long as it is strictly required. This means data that you provide through the contact form is held for 12 months. After this time all stored data will be removed from our live systems. Prior to removal we will attempt to contact you to inform you.</p>
		  <p>In order to operate a reliable system and to avoid data loss we perform regular encrypted backups of the system. These backups are retained for up to 90 days, and after this time are removed. This means that a removed account will be completely removed from all backups 90 days after removal.</p>

		  <h2>Who has access to your data?</h2>
		  <p>We won’t share or sell your information, however we will share relevant information with Schools &amp; our partners to help us deliver our services to you.</p>
		  <p>{{ $terms->company_name }} will not sell or rent your information to third parties, and we do not share information for marketing purposes with any third parties (Other than our partners that help us deliver our services to you).</p>
		  <p>{{ $terms->company_name }} may share data with 3rd party partners working on our behalf – this includes contractors &amp; workshop providers who work with {{ $terms->company_name }} to provide services. Where such a relationship is in place there are contractual safeguards in place to protect your information. {{ $terms->company_name }} will only share data that is relevant to the tasks being completed and to the delivery of service to you, and where possible the data will be anonymised. None of these organisations and individuals are permitted to use the data for any other purpose.</p>
		  <p>At any time you will be free to remove consent by contacting us at {{ $terms->company_email }}.</p>

		  <h2>How will we keep your data secure?</h2>
		  <p>{{ $terms->company_name }} has been designed with a privacy first development methodology meaning that we follow a rigorous development process which places the security of personal information at its core. To that end we host our application and website using a GDPR compliant cloud data provider hosting the application and site in the UK. All of our services run over HTTPS using TLS ensuring data transmitted between the application/website and our servers is secure. Data you provide to us which is stored is encrypted when it is stored, and in any backups taken. We take lengths to ensure that the network environment in which the application/website is hosted is kept secure by following best practices and ensuring that security updates are applied in a timely fashion</p>

		  <h2>How do we support your rights?</h2>
		  <p>We will not contact you for marketing purposes by email unless you have given your prior consent. You can change your marketing preferences at any time by contacting us by email: {{ $terms->company_email }}.</p>
		  <p>The accuracy of your information is important to us. If you change email address, or any of the other information we hold is inaccurate or out of date and you cannot already change it in the app, please email us at {{ $terms->company_email }}.</p>

		  <h2>Right to remove consent</h2>
		  <p>Where we rely upon your consent to perform data processing we allow you to revoke the previously granted consent by contacting us at {{ $terms->company_email }} where upon we will comply with your request.</p>

		  <h2>Use of cookies</h2>
		  <p>Like many other websites and apps, {{ $terms->company_name }} uses cookies. Cookies are small pieces of information sent by an organisation to your computer or device and stored on your hard drive to allow that website to recognise you when you visit. They collect statistical data about your browsing actions and patterns and do not identify you as an individual. This helps us to improve our website and deliver a better, more personalised service.</p>
		  <p>It is possible to switch off cookies by setting your browser preferences. For more information on how to switch off cookies on your computer, visit our full cookies policy. Turning cookies off may result in a loss of functionality when using our website.</p>

		  <h2>Review of Policy</h2>
		  <p>We regularly review our policies – the last review of this policy was undertaken when first created in July 2019.</p>
		  <p>©2019 {{ $terms->company_name }}</p>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.0/knockout-min.js"></script>
		<script>
		    // This is a simple *viewmodel* - JavaScript that defines the data and behavior of your UI
		    function AppViewModel() {
		        this.companyName = ko.observable("Nova");
		        this.email = ko.observable("example@email.com");
		        this.cofounderyNumber = ko.observable("52");
		        this.companyNumber = ko.observable("11113186");
		        this.companyAddress = ko.observable("17 Boundary Street, Liverpool, England, L5 9UB");  
		        this.contactInputs = ko.observable("Name (required) <br /> School name (required) <br /> Email address (required)");
		    }

		    // Activates knockout.js
		    ko.applyBindings(new AppViewModel());
		</script>  		
	</div>


</div>

<div class="row">

	<div class="col siteCreateForm">

		@include('layout.errors.error')
		@include('layout.notifications.notify')

		<table class="table table-hover table-dark">
		    <tr>
				<th scope="col">ID</th>
				<td>{{ $terms->id }}</td>
		    </tr>
		    <tr>
				<th scope="col">Company Name</th>
				<td>{{ $terms->company_name }}</td>
		    </tr>
		    <tr>
				<th scope="col">Company Email</th>
				<td>{{ $terms->company_email }}</td>
			</tr>
			<tr>
				<th scope="col">Cofoundery Number</th>
				<td>{{ $terms->cofoundery_number }}</td>
			</tr>
			<tr>
				<th scope="col">Company Number</th>
				<td>{{ $terms->company_number }}</td>	
		    </tr>
		    <tr>
				<th scope="col">Company Address</th>
				<td>{{ $terms->company_address }}</td>			    	
		    </tr>
		    <tr>
				<th scope="col">Contact Form Inputs</th>
				<td>{{ $terms->contact_form_inputs }}</td>			    	
		    </tr>	
		</table>

	</div>

</div>

@endsection