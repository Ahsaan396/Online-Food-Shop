{{-- hello hello --}}
<html>
<head>
 <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Signup</title>
		<link rel="stylesheet"href="{{asset('styles/stylesheet.css')}}">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		  <a class="navbar-brand" href="{{route('index')}}">Online Food Shop</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
			<ul class="navbar-nav mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
			</li>

      <li class="nav-item">
				<a class="nav-link" href="{{route('menu')}}">Menu</a>
			    </li>

			@if(Auth::check())
			<li class="nav-item">
			  <a class="nav-link" href="{{route('user_profile')}}">Profile</a>
			</li>
	
			<li class="nav-item">
			  <a class="nav-link" href="{{route('logout')}}">Logout</a>
			</li>
	
			@else
			<li class="nav-item">
				<a class="nav-link" href="{{route('login')}}">Login</a>
			    </li>
	
			    <li class="nav-item">
				<a class="nav-link" href="{{route('register')}}">Signup</a>
			    </li>
			@endif
	
		    </ul>
	
		  </div>
		</div>
	    </nav>

<br><br><br><br><br><br><br><br><br>

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
      <button  type="submit">Register</button>
    </td>
   </tr>
  </table>   
 </form>
 </div>

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>