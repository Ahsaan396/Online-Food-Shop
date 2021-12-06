<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
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



.menu_content{
    height: 100%;
    width: 100%;
    background-color: #dfe6e9;

}


.content_text{
    height: 100px;
    width: 100%;
    text-align: center;
    background-color: #dfe6e9;
}

.content_text h2{
    text-align: center;
    padding-top: 35px;
    font-size: 40px;
    font-family: monospace;
    text-transform: uppercase;
}

.content_img img{
    width: 30%;
    height: 30%;
    padding-left: 35%;
    
}

.ordernow{
    text-align: center;
    margin-top: 20px;
}

.ordernow a{
    text-align: center;
    font-size: 20px;
    border: 1px solid #d63031;
    padding: 5px 5px;
    color: rgb(61, 61, 61);
    transition: .3s;
}

.ordernow a:hover{
    background-color: white;
    color: green;
}
    </style>
</head>
<body>
    <div class="header">
        <div class="menu">
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('menu')}}">Menu</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('review')}}">Review</a></li>
            </ul>
        </div>
    </div>


    <div class="menu_content">
        <div class="content_text">
            <h2>burger</h2>
        </div>

        <div class="content_img">
            <img src="{{asset('burger.jpg')}}" alt="">
        </div>

        <div class="ordernow">
            <a href="#">order now</a>
        </div>
    </div>


    
    {{-- <div class="menu_content">
        <div class="content_text">
            <h2>pizza</h2>
        </div>

        <div class="content_img">
            <img src="./menu images/pizza.jpg" alt="">
        </div>

        <div class="ordernow">
            <a href="#">order now</a>
        </div>
    </div>


    <div class="menu_content">
        <div class="content_text">
            <h2>thai soup</h2>
        </div>

        <div class="content_img">
            <img src="./menu images/thai soup.jpg" alt="">
        </div>

        <div class="ordernow">
            <a href="#">order now</a>
        </div>
    </div>

    <div class="menu_content">
        <div class="content_text">
            <h2>pasta</h2>
        </div>

        <div class="content_img">
            <img src="./menu images/pasta.jpg" alt="">
        </div>

        <div class="ordernow">
            <a href="#">order now</a>
        </div>
    </div>

    <div class="menu_content">
        <div class="content_text">
            <h2>biriyani</h2>
        </div>

        <div class="content_img">
            <img src="./menu images/biriyani.jpg" alt="">
        </div>

        <div class="ordernow">
            <a href="#">order now</a>
        </div>
    </div> --}}
</body>
</html>