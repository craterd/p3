<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'A Simple Calculator')
    </title>

    @stack('head')

</head>

<body>
	<header>
    	<h1>A Basic Calculator</h1>
    	<h5>Specify your inputs and operation</h5>
    	<br><br>
	</header>

	<section>
		@yield('content')
	</section>

    @stack('body')

	<footer>
		&copy; Harvard Extension School {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>