<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">

      <span class="brand-text font-weight-light">
        PMT
    </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://pmiscse.daffodilvarsity.edu.bd/api/media/uDrive/710002119/484682raju_150x150.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @if (Auth::check())
            <a href="{{ url('/') }}" class="d-block">{{ Auth::user()->name }}</a>
            @else
            @php
                view('auth.login');
            @endphp
            @endif

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="@route('admin.dashboard')" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li><!--dasboard end -->

          <li class="nav-item">
            <a href="{{ url('admin/contact/list') }}" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Contact List
              </p>
            </a>
          </li><!--dasboard end -->



          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-user-tie"></i>
              <p>
                Project
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="@route('admin.project.create')" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Create Project</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="@route('admin.project.index')" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Project List</p>
                    </a>
                  </li>

            </ul>
           </li>


           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-user-tie"></i>
              <p>
                Project Task
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="@route('admin.task.create')" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Create Task</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="@route('admin.task.index')" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>Project Task List</p>
                    </a>
                  </li>

            </ul>
           </li>

           <li class="nav-item">
            <a href="{{ url('admin/logout') }}" class="nav-link">
                <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Logout
              </p>
            </a>
          </li><!--dasboard end -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
