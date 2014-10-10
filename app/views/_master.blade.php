<!DOCTYPE html>
<head>
	<title>@yield('title', 'CSCI E-15 Project 3')</title> <!-- defaults to foobooks if the child that extends it doesn't have a title attribute -->
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.css') }}

</head>
<body>
 <!-- Container -->
        <div class="container">

            <!-- Content -->
            @yield('content')

        </div>
</body>
</html>