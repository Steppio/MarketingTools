@extends('layout.mainlayout')

@section('content')
	<div class="album text-muted">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12">
   				<h3>Site Maintenance</h3>
   				<br /> 
   			</div>
			@include('layout.service.sites')   	
			@include('layout.service.checks') 
   		</div>
   	</div>
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12">
   				<h3>Legal</h3>
   				<br /> 
   			</div>
			@include('layout.service.tandc')
			@include('layout.service.privacy')
   		</div>
   	</div> 
@endsection