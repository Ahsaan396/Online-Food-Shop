<html>
<head>

<title>Online Food Shop</title>
<style>
    *{
    padding: 0;
    margin: 0;
}

a{
    text-decoration: none;
}
ul{
    list-style: none;
}
.header{
    width: 100%;
    height: 10%;
    background-color: #2d3436;
}

.header ul{
    display: flex;
    justify-content: center;
}

.header li{
    padding: 20px 60px;
}

.header a{
    color: white;
    font-size: 20px;
    font-weight: 700;
    font-family: monospace;
    transition: .3s;
}

.header a:hover{
    color: #27ae60;
    
}

.cover{
    background: url(./images/background.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh;
}

.overlay{
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.7);
}

.text{
    text-align: center;
}

.text h1{
    text-align: center;
    color: white;
    padding-top: 200px;
    padding-bottom: 10px;
    font-size: 50px;
    text-transform: uppercase;
    font-family: monospace;
    cursor: pointer;
}

.text p{
    color: white;
    border-top: 1px solid white;
    display: inline-block;
    font-size: 15px;
    text-transform: uppercase;
    padding-right: 30px;
    padding-left: 30px;
    padding-top: 5px;
}
</style>
</head>

<body>

<div class="header">
	<div class="menu">
	
	<ul>
	<li><a href="{{route('index')}}">Home</a></li>
	<li><a href="{{route('menu')}}">Menu</a></li>
	<li><a href="contact.html">Contact</a></li>
	<li><a href="about.html">About</a></li>
	</ul>
	
	</div>
</div>

<div class="cover">
	<div class="overlay">
		<div class="text">
			<h1>online food shop</h1>
			<p>the best service in the city</p>
		</div>
	</div>
	
</div>


</body>
</head>
</html>