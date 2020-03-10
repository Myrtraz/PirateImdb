<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> @yield('title', 'PirateImdb') </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body class="bg-light">

	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="/">
    		PirateImdb
  		</a>

  		<form class="form-inline my-2 my-lg-0" method="get" action="/movie/search">
      		<input name="name" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     		 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   		</form>
   		<a href="/login" class="btn btn-primary">Login</a>
	</nav>

	@yield('header')
</body>
</html>