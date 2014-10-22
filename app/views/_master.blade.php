<!DOCTYPE html>
<head>
	<title>@yield('title', 'CSCI E-15 Project 3')</title> <!-- defaults to CSCI E-15 Project 3 if the child that extends it doesn't have a title attribute -->
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}
    {{ HTML::style('css/styles.css') }}
    <link href="images/favicon.ico" rel="icon">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900%7CLato:400,700' rel='stylesheet' type='text/css' />

</head>
<body>
	<div class="container-fluid">
		<div class="row">
		    <div class="col-lg-3">
		    	<div class="sidebar">
			      <h1><a href="/">CSCI E-15 Project 3</a></h1>
			      <h2>Lorem Ipsum Generator &amp; Random User Generator</h2>

			      <ul>
			      	<li><a href="/loremipsum">Lorem Ipsum Generator</a></li>
			      	<li><a href="/usergenerator">Random User Generator</a></li>
			      </ul>
			    </div>
			</div>

	        <div class="col-lg-9 col-lg-offset-3">
		          @yield('content')
	        </div>
        </div> <!-- end row -->
	</div> <!-- end container -->
</body>
</html>