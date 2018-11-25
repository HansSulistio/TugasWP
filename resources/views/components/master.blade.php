<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('components.head')
	
</head>
<body>
	@include('components.nav')

	@yield('content')

	@include('components.footer')
</body>
</html>