<!DOCTYPE html>

<html lang="en">

	<head>
   		@include('layout.partials.head')
	</head>

	<body>

		@include('layout.partials.nav')
		
		<!-- @include('layout.partials.header') -->
		<div class="container">
			<div class="row">
				@yield('content')
			</div>
		</div>

		@include('layout.partials.footer')

		@include('layout.partials.footer-scripts')
 
	</body>

</html>