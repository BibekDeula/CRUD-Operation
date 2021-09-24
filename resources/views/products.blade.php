
@extends('layout')

@section('title', 'Products')
    
<style> /*this style is for glowing effect for sabailable */
body {
  background-color: black;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 0.5s ease-in-out infinite alternate;
  font-size:45px;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>


    
<p id="demo">
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-commerce</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('custom/assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="{{asset('custom/https://use.fontawesome.com/releases/v5.15.1/js/all.js')}}" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="{{asset('custom/https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700')}}" rel="stylesheet" />
        <link href="{{asset('custom/https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic')}}" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="{{asset('custom/https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css')}}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('custom/css/styles.css')}}" rel="stylesheet" />
    </head>


    <body id="page-top"style="background-color:#f8f8f8;">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
             <h1 class="glow">Sabai<span style="color: black;">lable</span>.Com</h1>
            <div class="container">
                
            
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive"style="background-color: #CACFD2;">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"style="color:#566573;font-size:20 ;">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('register')}}"style="color:#566573;font-size:20 ;">Register</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio"style="color:#566573;font-size:20 ;">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{url('login')}}"style="color:#566573;font-size:20 ;">MemberLogin</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services"style="color:#566573;font-size:20 ;">Services</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services"style="color:#566573;font-size:20 ;">   </a></li>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services"style="color:#566573;font-size:20 ;"></a></li>
                         

                 
               <style>

.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 0px;
  font-size:0px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color:#7DCEA0;}

.show {display: block;}
</style>
</head>
<body>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"style="background-color:#CACFD2;color: #566573;font-size:23 ;font-weight:650">Category </button><span style="padding-left:20px">
  <div id="myDropdown" class="dropdown-content">
    <a href="http://localproject/mobile">Mobiles</a>
    <a href="http://localproject/books">Books</a>
    <a href="http://localproject/fashion">Fashion</a>
    <a href="http://localproject/electronics">Electronics</a>
    <a href="http://localproject/product">Product</a>
    <a href="http://localproject/home">Home Appliances</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services"style="color:#566573;font-size:20 ;"></a><input type="text" placeholder="Search"></li></span>
                    </ul>
                </div>
            </div>
        </nav>
    <style>
        .container{
            padding:25px;
            color: blue;


        }
    </style>

    <style> /* this is style is for product zoom effect */

         {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  
  transition: transform .2s;
 
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.25); 
 
}
    </style><br><br>

@section('content')

    <div class="container products">

        <div class="row">

            @foreach($products as $product)

                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="zoom">
                        <img src="{{ $product->photo }}" width="500" height="300"></div>
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            
                            <p><strong>Price: </strong> {{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart',$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>


@endsection

