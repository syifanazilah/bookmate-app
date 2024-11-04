<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
     <div class="navbar-search-block">
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Profil</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        @if(Auth::check())
          <i class="nav-icon fas fa-user"> </i> {{Auth::user()->name}}
        @endif
        </a>

        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
        @if(Auth::check())
          <i class="nav-icon fas fa-envelope-open-text"> </i> {{Auth::user()->email}}
        @endif
        </a>

        <div class="dropdown-divider"></div>
        <form action="{{route('logout')}}" method="post">
          @csrf
        <a href="#" class="dropdown-item">
        <button type="submit" class="nav-icon fas fa-sign-out-alt">Keluar</button>
        <div class="dropdown-divider"></div>
        <i></i></a>
        </form>
      </div>
    </li>
  
  </ul>
</nav>