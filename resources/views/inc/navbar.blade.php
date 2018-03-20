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
          {{Auth::user()->name}}<span class="icon"><i class="fa fa-caret-down"></i></span>

          <ul class="dropdown-menu">
            <li><a href="#"><span class="icon"><i class="m-r-10 fa fa-fw fa-user-circle-o"> </i> </span> Profile</a></li>
            <li><a href="{{route('manage.dashboard')}}"><span class="icon"><i class="m-r-10 fa fa-pie-chart"> </i></span> Dashboard</a></li>
            <li class="seperator"></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <span class="icon"><i class="m-r-10 fa fa-fw fa-sign-out"> </i> </span> Logout</a>@include('inc.logout')</li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>
