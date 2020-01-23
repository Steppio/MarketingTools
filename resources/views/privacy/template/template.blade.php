<textarea class="description" name="policy_data">

<h2>What type of information we have</h2>

<p>We <span data-bind="text: companyName"></span> currently collect and process the following information:</p>
<ul>
	<li><p>Personal identifiers, contacts and characteristics (for example, name and contact details)</p></li>
	<li><p>[Add to this list as appropriate]</p></li>
</ul>

<h2>How we get the information and why we have it</h2>

<p>Most of the personal information we process is provided to us directly by you for one of the following reasons:</p>

<ul>
	<li><p>[Add the reasons you collected personal information]</p></li>
	<li><p>[If applicable] We also receive personal information indirectly, from the following sources in the following scenarios:</p></li>
	<li><p>[Add the source of any data collected indirectly and why you collected the information]</p></li>
</ul>

<p>Under the General Data Protection Regulation (GDPR), the lawful bases we rely on for processing this information are: [delete as appropriate]</p>
<ul>
	<li><p>(a) Your consent. You are able to remove your consent at any time. You can do this by contacting [contact details]</p></li>
	<li><p>(b) We have a contractual obligation.</p></li>
	<li><p>(c) We have a legal obligation.</p></li>
	<li><p>(d) We have a vital interest.</p></li>
	<li><p>(e) We need it to perform a public task.</p></li>
	<li><p>(f) We have a legitimate interest.</p></li>
</ul>

<h2>What we do with the information we have</h2>

<p>We use the information that you have given us in order to [list how you use the personal information]. 
We may share this information with [enter organisations or individuals]</p>

<h2>How we store your information</h2>

<p>Your information is securely stored [enter location]. </p>
<p>We keep [type of personal information] for [time period]. We will then dispose your information by [explain how you will delete their data]</p>

<h2>Your data protection rights</h2>

<p>Under data protection law, you have rights including:</p>
<p>Your right of access - You have the right to ask us for copies of your personal information. 
Your right to rectification - You have the right to ask us to rectify information you think is inaccurate. You also have the right to ask us to complete information you think is incomplete. 
Your right to erasure - You have the right to ask us to erase your personal information in certain circumstances. 
Your right to restriction of processing - You have the right to ask us to restrict the processing of your information in certain circumstances. 
Your right to object to processing - You have the the right to object to the processing of your personal data in certain circumstances.
Your right to data portability - You have the right to ask that we transfer the information you gave us to another organisation, or to you, in certain circumstances.
You are not required to pay any charge for exercising your rights. If you make a request, we have one month to respond to you.
Please contact us at [insert email address, phone number and or postal address] if you wish to make a request.</p>



<p>How to complain</p>
<p>You can also complain to the ICO if you are unhappy with how we have used your data.
The ICO’s address:            
Information Commissioner’s Office
Wycliffe House
Water Lane
Wilmslow
Cheshire
SK9 5AF
Helpline number: 0303 123 1113</p>

</textarea>


	<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
	<script>
	    tinymce.init({
	        selector:'textarea.description',
	        width: 900,
	        height: 600
	    });
	</script>