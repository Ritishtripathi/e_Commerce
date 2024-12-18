<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="https://srgroup.net.in/wp-content/uploads/2021/10/footer-logo-1-1-2.png" type="image/png">
      <title>Fashion | Shop</title>

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('website/css/bootstrap.css') }}" />
      <!-- Font Awesome style -->
      <link href="{{ asset('website/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('website/css/style.css') }}" rel="stylesheet" />
      <!-- Responsive style -->
      <link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section starts -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container">
                  <a class="navbar-brand" href="index.html">
                     <img width="250" src="https://srgroup.net.in/wp-content/uploads/2021/11/logo3.png" alt="#" />
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('product')}}">Products</a>
                        </li>

                        <!-- Show this only if the user is not logged in -->
                        @guest
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">Login</a>
                           </li>
                        @endguest

                        <!-- Show this only if the user is logged in -->
                        @auth
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                 <span class="nav-label">My Account <span class="caret"></span></span>
                              </a>
                           
                              <ul class="dropdown-menu">
                                 <li><p>{{ Auth::user()->name ?? 'Guest' }}!</p></li>
                                 <li><a class="dropdown-item" href="#">My Orders</a></li>
                                 <li><a class="dropdown-item" href="#">Help</a></li>
                                 <!-- Logout Option -->
                                 <li>
                                    <form action="{{ route('user.logout') }}" method="POST">
                                       @csrf
                                       <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                 </li>
                              </ul>
                           </li>
                        @endauth

                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                           </a>
                        </li>
                        <form class="form-inline">
                           <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                              <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->