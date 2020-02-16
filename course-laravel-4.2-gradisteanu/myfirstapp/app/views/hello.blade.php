<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<h1>Laravel have arrived in {{$location}} on {{ date('M, d, Y') }}.</h1>
		<p>Meet us in:</p>
		<ul style="text-align: left;">
		    @foreach ($cities as $city)
		    	@unless($city == 'San Francisco')
		    	<li>{{$city}}</li>
		    	@endunless
		    @endforeach
		</ul>
		<p>Others cities:</p>
		<ul style="text-align: left;">
		    @foreach ($cities as $city)
		    	@if($city == 'San Francisco')
		    	<li>{{$city}}</li>
		    	@endif
		    @endforeach
		</ul>
	</div>
</body>
</html>
