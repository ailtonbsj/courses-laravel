<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
	@foreach ($books as $book)
		<li>{{ $book->title }} written by {{ $book->writer }}</li>
	@endforeach
</body>
</html>