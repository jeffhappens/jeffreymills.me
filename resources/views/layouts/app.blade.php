<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<title>Jeffrey Mills | Web Developer</title>
		<meta name="description" content="Professional Web Developer currently living in New Orleans, LA. I develop websites and web applications that will impress your visitors.">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta property="og:title" content="Jeffrey Mills | Web Developer">
		<meta property="og:type" content="">
		<meta property="og:url" content="">
		<meta property="og:image" content="">

		<link rel="manifest" href="site.webmanifest">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Place favicon.ico in the root directory -->

		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/app.css">

		<meta name="theme-color" content="#fafafa">
		<script src="https://kit.fontawesome.com/7893efc23b.js" crossorigin="anonymous"></script>
		<style>
			@-webkit-keyframes AnimationName { 0% { background-position:0 50% } 50% { background-position:100% 50% } to { background-position: 0 50% } }
			@keyframes AnimationName { 0% { background-position:0 50% } 50% { background-position:100% 50% } to { background-position:0 50% } }
			body{background:-webkit-gradient(linear,left top,right top,from(#833ab4),color-stop(#fd1d1d),to(#fcb045));background:linear-gradient(90deg,#833ab4,#fd1d1d,#fcb045);background-size:600% 600%;-webkit-animation:AnimationName 30s ease infinite;animation:AnimationName 30s ease infinite}
		</style>
	</head>
	<body class="overflow-x-hidden">
		<!-- Add your site or application content here -->
		<div class="flex flex-col h-screen">
			@include('layouts.header')

			@yield('content')

		</div>
		<script src="js/app.js"></script>
	</body>
</html>
