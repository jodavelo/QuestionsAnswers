<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/mdtoast.css') }}" />
	<link rel="stylesheet" href="css/style.css">
	@yield('cssAlertStyles')
	<title>@yield('title')</title>
</head>
<body>
	
	@section('sidebar')
	    
	@show



	<main role="main" class="container">
      <div class="row">
	    	<div class="col-md-12">
	    		@yield("titleContent")
	    	</div>
	    </div>
	    <div class="row">
	    	
	    	@yield('content')
	    	
	    </div>
    </main>

    <!-- Footer -->
	<footer class="page-footer font-small unique-color">

		<!-- Copyright -->
		<div class="footer-copyright text-copyright-footer text-center py-3">© 2020 Copyright:
			<a href="https://jodavelo.github.io/JodaveloPage/"> Daniel Vergara Lozano</a> & 
			<a href="https://github.com/gcmartinezg">GCM</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
	<script src="{{ asset('js/popper.min.js') }}" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
	<script src="{{ asset('js/mdtoast.min.js') }}"></script>
	@yield('scriptAlert')
</body>
</html>