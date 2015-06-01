<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
@if(Auth::check())
	{{Auth::user()->email}}
	<br>
	<a href="{{ URL::to('auth/logout') }}">Logout</a>
@endif
@yield('content')
</body>
</html>