<!DOCTYPE html>
<head>
	<title>@yield('title', 'CSCI E-15 Project 3')</title> <!-- defaults to foobooks if the child that extends it doesn't have a title attribute -->
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/styles.css') }}

</head>
<body>

	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	        	<div class="site-title">
		            <h1>CSCI E-15 Project 3: Developer's Best Friend</h1>
		            <h2>Hilary's <i>Lorem Ipsum</i> generator &amp; Random User Generator</h2>
	            </div>
	        </div>
	    </div>
	    <div class="row maincontent">
	        <div class="col-md-3">
	            <!-- <img src=""> -->
	            <h3>CSCI E-15 - Dynamic Web Applications</h3>
	            <h4>Project 3 - Developer's Best Friend</h4>

	            <p>Links:</p>
	            <ul>
		            <li><a href="/loremipsum/">Lorem Ipsum Generator</a></li>
		            <li><a href="/usergenerator/">Random User Generator</a></li>
	            </ul>
	        </div>
	        <div class="col-md-9">
		       	<!-- Content -->
		        @yield('content')
	        </div>
	    </div>
	    <div class="footer">
	        <div class="row">
	            <div class="col-md-12">
	                <p>&copy; <?php echo date("Y") ?> Hilary Johnson</p>
	            </div>
	        </div>
	    </div>
	</div> <!-- end container -->

</body>
</html>