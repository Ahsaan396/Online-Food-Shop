<html>
<head>
<meta charset="utf-8">
<title>Online Food Shop</title>
<link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}">
<link rel="stylesheet" href="{{asset('styles/style.css')}}">
</head>
<body>
<div class="menu">
	<nav>
        
		<ul>
            <li><a href="{{route('index')}}" class="brand">Home</a></li>
			<li><a href="{{route('menu')}}">Menu</a></li>
			<li><a href="#">About</a></li>
			<li><a href="{{route('register')}}">Signup</a></li>
			@if(Auth::check())
			<li><a href="{{route('logout')}}">Logout</a>
			</li>
			@else
			<li><a href="{{route('login')}}">Login</a>
				{{-- <ul>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="user.php">User</a></li>
				</ul> --}}
			</li>
			@endif
		</ul>
	</nav>
</div>
<div id="header">Online Food Shop</div>
<div id="content">

<img src="{{asset('img/back.jpg')}}" alt="">
</div>

</body>
</html>