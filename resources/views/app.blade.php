<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel Angular CRUD by learn24bd.com</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://npmcdn.com/angular-toastr/dist/angular-toastr.css" />
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script>
		var baseUrl='{{url('/')}}';
	</script>
</head>
<body ng-app="myApp">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<h2 align="center"><a href="#">Laravel Angular CRUD</a></h2>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	{{-- angular --}}
	<script src="js/angular.min.js"></script>
	<script src="https://npmcdn.com/angular-toastr/dist/angular-toastr.tpls.js"></script>

	<script src="scripts/app.js"></script>
	<script src="scripts/controllers/todo-controller.js"></script>
	{{-- # angular --}}
</body>
</html>
