<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.head')
</head>
<body class="animsition">
	
	<!-- Header -->
	@include('includes.header')
	
	<!-- Slider -->
	@include('includes.slider') 

	<!-- Banner -->
	@include('includes.banner')

	<!-- Product -->
	<!-- @include('includes.product') -->
	@yield('content')


	<!-- Footer -->
	@include('includes.footer')


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	@include('includes.modal')
	@include('include.footer-scripts')
	

</body>
</html>