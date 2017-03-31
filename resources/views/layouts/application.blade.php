<!DOCTYPE html>
<html>
<head>
	<title>My App</title>
</head>
<body>
	@include ('layouts.nav')

	<div>
		@yield ('content')
	</div>
	@include ('layouts.footer')
</body>
</html>