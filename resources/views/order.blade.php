  <html>
        <head>
            <meta charset="utf-8">
            <title>Menu</title>
           {{-- <link rel="stylesheet" type="text/css" href="{{asset('styles/stylesheet.css')}}"> --}}
		   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		   
        </head>

        <body class="loggedin">
            <div class="menu">
               
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
            </div>
    <div class="container">
	<table class="table table-striped">
	<thead>
        <tr>
	    <th>Id</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
	</tr>
</thead>
<tbody id="items">
    </tbody>
	
</table>
</div>



<div class="container" id="ffff">			
		
</div>
<div class="container"><button  class="btn btn-outline-warning" type="submit" id="orderTotal"><a href="{{route('msg')}}"> Order Now</a></button></div>
	

            
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function(){
                    var products = JSON.parse(sessionStorage.getItem('basicCart'));
                    let data =  ''
					let orderTotal=0;
                    products.map((value,index)=>{
                        var total = parseFloat(value.price)*parseFloat(value.qty);
                        orderTotal+=total;
                        data +=  `
                        <tr>
                            <td>${index+1}</td>
                            <td>${value.product_name}</td>
                            <td>${value.qty}</td>
                            <td>${value.price}</td>
                            <td>${total}</td>

                        </tr>
                        `
                    });
                    $('#items').html(data);
					$('#ffff').html('Total Price:BDT '+orderTotal);
					
                })
                
            </script>
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