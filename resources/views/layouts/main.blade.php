<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<style>
		.user-image{
			width: 50px;
			height: 50px;
		}
	</style>
	@yield("css")
	<title>@yield("title")</title>
</head>
<body>

@yield("content")

</body>
@yield("js")
</html>