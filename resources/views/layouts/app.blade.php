<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('img/icons/icon-48x48.png') }}" />

	<title>Blank Page | AdminKit Demo</title>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	@vite('resources/js/app.js')
    @stack('style')
</head>

<body>
	<div class="wrapper">
		@include('components.nav')

		<div class="main">
			@include('components.header')

			<main class="content">
				<div class="container-fluid p-0">
                    @yield('content')
				</div>
			</main>

			@include('components.footer')
		</div>
	</div>

    @stack('script')
</body>

</html>
