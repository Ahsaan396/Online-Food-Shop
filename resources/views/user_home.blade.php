<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}">
	</head>
	<body class="loggedin">
	<div class="menu">
		<nav>
			<ul>
				<li><a href="{{route('menu')}}">Menu</a></li>
				<li><a href="{{route('user_profile')}}">Profile</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div id="header">
			Online Food Shop
	</div>
	<br>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome!</p>
		</div>
	</body>
</html>