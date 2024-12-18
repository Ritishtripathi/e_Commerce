<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Admin | Dashboard
  </title>
  <link href="https://spiretecsolutions.com/uploads/homepage/1718478123334127919.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('admin/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('admin/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />


</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{route ('admin.dashboard')}}">
        <img src="https://spiretecsolutions.com/uploads/homepage/1717564641131241864.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle" style="background-color: #f4f4f4; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #555;">
                @php
                echo strtoupper(substr(Auth::user()->name ?? 'G', 0, 1));
                @endphp
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome, {{ Auth::user()->name ?? 'Guest' }}!</h6>
            </div> 
              <div class="dropdown-divider"></div>
              <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </button>
              </form>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{route ('admin.dashboard')}}">
                <img src="https://spiretecsolutions.com/uploads/homepage/1717564641131241864.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="{{route ('admin.dashboard')}}">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " href="{{route ('product.create')}}">
              <i class="ni ni-tv-2 text-primary"></i>Add Product
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('product.index')}}">
              <i class="ni ni-tv-2 text-primary"></i>Manage Product
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="{{ route('category.index')}}">
              <i class="ni ni-tv-2 text-primary"></i>Add Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('users.list')}}">
              <i class="ni ni-single-02 text-yellow"></i> Users profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="">
              <i class="ni ni-bullet-list-67 text-red"></i> Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Dashboard</a>
        <!-- Form -->
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <!-- <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{ asset('admin/img/theme/team-4-800x800.jpg') }}">
                </span> -->
                <span class="avatar avatar-sm rounded-circle" style="background-color: #f4f4f4; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #555;">
                  @php
                  echo strtoupper(substr(Auth::user()->name ?? 'G', 0, 1));
                  @endphp
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome, {{ Auth::user()->name ?? 'Guest' }}!</h6>
              </div>
              <div class="dropdown-divider"></div>
              <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </button>
              </form>

            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->