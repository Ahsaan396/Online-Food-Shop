<html>
<head>
  <meta charset="utf-8">
		<title>User Login</title>
		<link rel="stylesheet" type="text/css" href="{{asset('styles/stylesheet.css')}}">
</head>

<body>
<div class="menu">
	
	<nav>
		<ul>
            <li><a href="{{route('index')}}" >Home</a>
			</li>
			<li><a href="{{route('menu')}}" >Menu</a>
			</li>
			<li><a href="#">About</a></li>
			<li><a href="{{route('register')}}">Signup</a></li>
			<li><a href="{{route('login')}}">Login</a>
				{{-- <ul>
					<li><a href="admin.php">Admin</a></li>
					<li><a href="user.php">User</a></li>
				</ul> --}}
			</li>
		</ul>
	</nav>
</div>
<div id="header">
			Online Food Shop
</div><br><br><br><br><br><br><br><br><br>

<div id="Login">
 <h1>User Login</h1>
 <form action="{{ route('login') }}" method="POST">
    @csrf
  <table>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" placeholder="Email" required></td>
   </tr> 
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" placeholder="Password" required></td>
   </tr>
   
   <tr>
    <td> 
		<br><input type="submit" value="Login">
	</td>
   </tr>
  </table>   
 </form>
 <a href="admin.php"><button>Admin</button></a>
 </div>
</body>
</html>


