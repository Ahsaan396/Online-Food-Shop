<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Menu</title>
<link rel="stylesheet" href="{{asset('styles/stylesheet.css')}}">
<link rel="stylesheet" href="{{asset('styles/style.css')}}"> 
{{-- <link rel="stylesheet" type="text/css" href="{{asset('styles/stylesheet.css')}}">	 --}}

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
        <li class="nav-item">
			  <a class="nav-link" href="{{route('contact')}}">Contact</a>
			</li>
      <li class="nav-item">
			  <a class="nav-link" href="{{route('about')}}">About Us</a>
			</li>
		@if(Auth::check())
		<li class="nav-item">
		  <a class="nav-link" href="{{route('contact')}}">Contact</a>
		</li>

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

{{-- this si mydesign --}}


	   <div class="container">	
	     <form class="sbar" action="">
		  <input type="text" placeholder="Search.." name="search" value="{{$search}}">
		  <a href="{{url('menu')}}">
				<button type="button" style="background-color: maroon">Reset</button>
			</a>
          <button type="submit" style="background-color: orange"><i class="fa fa-search" ></i>Search</button>
			
			 @if(Auth::check())
				<button type="button" class="placeOrder" style="background-color: black"><a href="{{route('order')}}">Place Order</a></button>
				@else 
				<button type="button" class="btn btn-success" onclick="msg()">Place Order</button>
				@endif
   	     </form>
	  </div>



{{-- this si mydesign --}}


{{-- <form class="example" action=""> --}}
  {{-- <input type="search" placeholder="Search.." name="search" value="{{$search}}"> --}}
  {{-- <button type="submit">Serach</i></button> --}}
  {{-- <a href="{{url('menu')}}">
  <button type="button" class="btn btn-primary">Reset</button>
	</a>
  @if(Auth::check())
<button type="button" class="placeOrder"><a href="{{route('order')}}">Place Order</a></button>
@else 
<button type="button" class="btn btn-success" onclick="msg()">Place Order</button>
@endif
</form> --}}
	
<div class="container my-5">
	<div class="row">

	@foreach ($data1 as $key => $item)
	<div class="col-md-4 my-2">
	<div class="card" style="width: 18rem;">
		<img src={{$item->picture}} class="card-img-top" alt="...">
		<div class="card-body bg bg-dark">
		  <h5 class="card-title text-light">{{$item->product_name}}</h5>
		  <p class="card-text text-center"><h5 class="text-light ">{{$item->price}}</h5></p>
		  @if(Auth::check())
		  <p>
		  <button class="btn btn-success" onclick="addQty({{ $item->id }},{{ json_encode($item) }})">+</button>
		  <span style="color:white" id="qty{{ $item->id }}"> 0 </span>
		  <button class="btn btn-warning"><a style="color:black" href="{{route('review',$item->id)}}">Review</a></button>
		  <button class="btn btn-danger" onclick="deductQty({{ $item->id }},{{ json_encode($item) }})">-</button>
		  
		  </p>
		  @else 
		  <p>
			<button class="btn btn-success"onclick="msg()">+</button>
			<span style="color:white" id="qty{{ $item->id }}"> 0 </span>
			<button class="btn btn-warning"><a style="color:black" href="{{route('review',$item->id)}}">Review</a></button>
			<button class="btn btn-danger" onclick="msg()">-</button>
			
			</p>
			  
		  @endif

		</div>
	 </div>
	 </div>

	@endforeach
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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		var basicCart = sessionStorage.getItem('basicCart');

		if(basicCart){
		var products = JSON.parse(basicCart);
		products.map((value, index, array) => {
		$('#qty'+value.id).text(value.qty);
				
		});
		}
	})
	function addQty(id,product){
		var previousQty =  $('#qty'+id).text();
		var newQty = parseFloat(previousQty)+1;
		$('#qty'+id).text(newQty);
		storeInsession(product,newQty)
	}

	function deductQty(id,product){
		var previousQty =  $('#qty'+id).text();
		var newQty = parseFloat(previousQty)-1;
		$('#qty'+id).text(newQty);
		storeInsession(product,newQty)

	}

	function msg(){
    alert('Please login first');
	}




	function storeInsession(product,newQty){
		var basicCart = sessionStorage.getItem('basicCart');

		var data = {
			'id':product.id,
			'product_name':product.product_name,
			'price':product.price,
			'qty':newQty
		};


		if(basicCart){
			var products = JSON.parse(basicCart);
			let isExist = false;
			products.map((value, index, array) => {
					//check is this product exist in session
				if(product.id == value.id){
					//update only qty
					products[index].qty = newQty;
					isExist = true;
				}
			});
			if(!isExist){
				products.push(data);
			}
			sessionStorage.setItem('basicCart',JSON.stringify(products));
		}else{
			sessionStorage.setItem('basicCart',JSON.stringify([data]));
		}
	}
</script>

</body>
</html>