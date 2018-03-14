<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GigalinkAdminDashboard</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="nav has-shadow">
        <div class="container">

          <div class="nav-left">
            <a class="nav-item " href="{{route('home')}}">
              <img src="{{asset('images/gigalink_logo.png')}}" alt="GigalinkAdminDashboard logo">
            </a>
            <a class="nav-item is-tab is-hidden-mobile m-l-10" href="#">About Us</a>
            <a class="nav-item is-tab is-hidden-mobile" href="#">Service</a>
            <a class="nav-item is-tab is-hidden-mobile" href="#">Project </a>
            <a class="nav-item is-tab is-hidden-mobile" href="#">Contact Us</a>
          </div>


          <div class="nav-right" style="overflow: visible;">
            @if (Auth::guest())
              <a href="{{route('login')}}" class="nav-item is-tab">Login</a>
              <a href="{{route('register')}}" class="nav-item is-tab">Sign-up</a>
            @else
              <button class="dropdown is-aligned-right nav-item is-tab">
                Admin<span class="icon"><i class="fa fa-caret-down"></i></span>

                <ul class="dropdown-menu">
                  <li><a href="#"><span class="icon"><i class="m-r-10 fa fa-fw fa-user-circle-o"> </i> </span> Profile</a></li>
                  <li><a href="#"><span class="icon"><i class="m-r-10 fa fa-pie-chart"> </i></span> Dashboard</a></li>
                  <li class="seperator"></li>
                  <li><a href="#"><span class="icon"><i class="m-r-10 fa fa-fw fa-sign-out"> </i> </span> Logout</a></li>
                </ul>
              </button>
            @endif
          </div>
        </div>
      </nav>

            @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
