<header class="main-header">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>W</b>ISM</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Wism</b>Dashboard</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">   
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
            <span class="hidden-xs" style="text-transform: capitalize">{{ Auth::user()->name }}</span>
          </a> 
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ asset("admin/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

              <p style="text-transform: capitalize">
                {{ Auth::user()->name }} - {{ config('app.role')[Auth::user()->role_id] }}

                <small>Member since {{ Auth::user()->created_at->format('d-m-Y')}}</small>
                
                <small style="cursor: pointer" data-toggle="modal" data-target=".change-password-modal">Change Password</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('profile') }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a class="btn btn-default btn-flat" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Sign out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>


              </div>                
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>