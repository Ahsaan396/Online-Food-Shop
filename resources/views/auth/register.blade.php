{{-- hello hello --}}
<html>
<head>
  <meta charset="utf-8">
		<title>Signup</title>
		<link rel="stylesheet"href="{{asset('styles/stylesheet.css')}}">
</head>

<body>
<div class="menu">
	
	<nav>
		<ul>
            <li><a href="{{route('index')}}" class="brand">Home</a></li>
			<li><a href="{{route('menu')}}">Menu</a></li>
			<li><a href="#">About</a></li>
			<li><a href="{{route('login')}}">Login</a></li>
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
 <h1>Signup</h1>
 <form method="POST" action="{{ route('register') }}">
    @csrf
  <table>
   <tr>
    <td>Name :</td>
    <td><x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /></td>
   </tr>
    <td>Email :</td>
    <td>
         <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
    </td>
   <tr>
       <tr>
    <td>Password :</td>
    <td><x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" /></td>
   </tr>
   <tr>
    <td>Confirm Password :</td>
    <td><x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required /></td>
   </tr>
    <td>
        <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
    </td>
   </tr>
  </table>   
 </form>
 </div>
</body>
</html>