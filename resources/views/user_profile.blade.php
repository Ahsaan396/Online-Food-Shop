<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}">
	</head>
	<body class="loggedin">
	<div class="menu">
		<nav>
			<ul>
				<li><a href="{{route('menu')}}">Menu</a></li>
				<li><a href="{{route('user_home')}}">Home</a></li>
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
			<h2>Profile Page</h2>
			<div>
				<h1>Your account details are below:</h1>
				<table>
					<tr>
						<td>Name:</td>
						<td></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td></td>
					</tr>
					<tr>
						<td> 
							<br>
							<a href="{{route('delete')}}"><button type="submit"  onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</button></a>
							<a href="{{route('update_user_profile')}}"><button type="Update">Update Profile</button></a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>