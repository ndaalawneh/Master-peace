<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('style')
	
  </head>
  <body class="goto-here">

		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="index.php">Winkel</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="/shop">Shop</a>
                <a class="dropdown-item" href="/product-single">Single Product</a>
                <a class="dropdown-item" href="/cart">Cart</a>
                <a class="dropdown-item" href="/checkout">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          {{-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> --}}
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            @guest

            @if (Route::has('register'))
	          <li class="nav-item"><a href="/register" class="nav-link">Signup</a></li>
            @endif 
            @if (Route::has('login'))
	          <li class="nav-item"><a href="/login" class="nav-link">login</a></li>
            @endif
            @else
	          <li class="nav-item"><a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();
              ">
              {{__('Logout')}}
</a>
</li>
	          <li class="nav-item"><form action="{{route('logout')}}" id="logout-form" method="POST"> @csrf </form></li>
            <li class="nav-item"><a href="/login" class="nav-link"> welcome {{ Auth::user()->name }}</a></li>
            @endguest

            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              
                <a class="dropdown-item" href="/register">Signup</a>
                <a class="dropdown-item" href="/login">Login</a>
              
              </div>
            </li> --}}
	          <li class="nav-item cta cta-colored"><a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
             
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
