<!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("admin/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
           <p>{{ Auth::user()->name }}</p> 
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li>
          <a href="{{ route('profile') }}"><i class="fa fa-user"></i> <span>My Profile</span></a>
        </li>
        
        @if(Auth::user()->role_id == 1)
          <li>
            <a href="{{ route('management') }}"><i class="fa fa-users"></i> <span>Staff Users</span></a>
          </li>

          <li>
            <a href="{{ route('client') }}"><i class="fa fa-handshake-o"></i> <span>Clients</span></a>
          </li>

          <li>
            <a href="#"><i class="fa fa-shopping-cart"></i> <span>Process Orders</span></a>
          </li>

          <li>
            <a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a>

          </li>          

          <li>
            <a href="#"><i class="fa fa-product-hunt"></i> <span>Products</span></a>
          </li>
        @endif

        @if(Auth::user()->role_id == 2)
          <li>
            <a href="{{ route('organization') }}"><i class="fa fa-users"></i> <span>Staff Management</span></a>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i> <span>Settings</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/display_board') }}"><i class="fa fa-circle-o"></i> Display Boards</a></li>
              <li><a href="{{ url('/frontdesk') }}"><i class="fa fa-circle-o"></i> Front Desks</a></li>
              <li><a href="{{ url('/global_settings') }}"><i class="fa fa-circle-o"></i> Global Settings</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Registration Form</a></li>
            </ul>
          </li>

          <li>
            <a href="#"><i class="fa fa-exchange"></i> <span>Transactions</span></a>
          </li>

          <li>
            <a href="#"><i class="fa fa-history"></i> <span>Logs</span></a>
          </li>

          <li>
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>Store Front</span></a>
          </li>
        @endif

        @if(Auth::user()->role_id == 3)
          <li>
            <a href="{{ route('servetoken') }}"><i class="fa fa-key"></i> <span>Server Token</span></a>
          </li>

          <li>
            <a href="{{ route('issuetoken') }}"><i class="fa fa-check"></i> <span>Issue Token</span></a>
          </li>

          <li>
            <a href="#"><i class="fa fa-history"></i> <span>Logs</span></a>
          </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>