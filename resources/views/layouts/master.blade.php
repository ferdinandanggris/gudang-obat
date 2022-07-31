<!doctype html>
	<html lang="en">

	<head>
		<title>MANAGEMENT OBAT</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/vendor/linearicons/style.css">
		<link rel="stylesheet" href="/assets/vendor/chartist/css/chartist-custom.css">
		<link rel="stylesheet" href="/assets/css/main.css">
		<link rel="stylesheet" href="/assets/css/demo.css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
		<!-- CSS only -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
		<!-- JavaScript Bundle with Popper -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
	</head>

	<body>
		<div id="wrapper">
			@include('layouts._navbar')
			@include('layouts._sidebar')
			@yield('content')
			<div class="clearfix"></div>
			<footer>
				@include('layouts._footer')
			</footer>
		</div>
		<script src="/assets/vendor/jquery/jquery.min.js"></script>
		<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="/assets/vendor/chartist/js/chartist.min.js"></script>
		<script src="/assets/scripts/klorofil-common.js"></script>   

	</body>

	</html>
