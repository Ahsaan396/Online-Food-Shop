<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
<link rel="stylesheet" type="text/css" href="{{asset('styles/stylesheet.css')}}">	

</head>
<body>
<div class="menu">
	
	<nav>
		<ul>
            <li><a href="{{route('index')}}" class="brand">Home</a></li>
			<li><a href="{{route('menu')}}">Menu</a>
			</li>
			<li><a href="#">About</a></li>
				<li><a href="{{route('user_profile')}}">Profile</a></li>
				<li><a href="#">Logout</a></li>
		</ul>
	</nav>
</div>

<div id="header">
			Online Food Shop
</div>

<div id="content">
<div class="Item">
	<table class="menutable">
	<tr>
	    <th>Id</th>
		<th>Name</th>
		<th>Size</th>
		<th>Price</th>
		<th>Order</th>
	</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			{{-- <td><a href="cart.php?id=<?php echo $product->id; ?>">Order</a></td> --}}
            <td><a href="#">Order</a></td>
		</tr>
</table>
</div>
</div>
</body>
</html>