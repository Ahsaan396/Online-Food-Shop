<html>
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('styles/contact.css')}}">
{{-- <link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}"> --}}

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Online Food Shop</title>
 {{-- <link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}">
 <link rel="stylesheet" href="{{asset('styles/style1.css')}}"> --}}
{{--<link rel="stylesheet" href="{{asset('styles/style.css')}}"> --}}
</head>
<body class="bg bg-light">
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
                <li class="nav-item">
			  <a class="nav-link" href="{{route('contact')}}">Contact</a>
			</li>
      <li class="nav-item">
			  <a class="nav-link" href="{{route('about')}}">About Us</a>
			</li>
			@if(Auth::check())
	
			<li class="nav-item">
			  <a class="nav-link" href="{{route('logout')}}">Logout</a>
			</li>
	
			@else
			<li class="nav-item">
				<a class="nav-link" href="{{route('login')}}">Login</a>
			    </li>
	
			    {{-- <li class="nav-item">
				<a class="nav-link" href="{{route('register')}}">Signup</a>
			    </li> --}}
			@endif
	
		    </ul>
	
		  </div>
		</div>
	    </nav>

{{-- <div id="content">
{{-- <img  src="{{asset('img/back.jpg')}}" alt=""> -
</div> --}}


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Please contact with us if you have any issue</p>
  </div>
  <div class="row">
    
    <div class="column">
      <form action="{{route('contact')}}">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
</div>
        
  
    

<footer class="py-3 my-4 bg bg-dark">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-light">Home</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-light">Features</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-light">Pricing</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-light">FAQs</p></a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted"><p class="text-light">About</p></a></li>
    </ul>
    <p class="text-center text-muted"><p class="text-light text-center">&copy; Copyright by-Sultana and Shusmita</p></p>
  </footer>
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