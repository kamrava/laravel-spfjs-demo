<!doctype html>
<html>
<head>
	@include('layouts.head')
	@yield('head')
</head>
<body>
	<div class="inner">
		@include('layouts.header')
		<div id="main-content">
			@yield('content')
		</div>
	</div>
	@include('layouts.scripts')
	@yield('scripts')
</body>
</html>
