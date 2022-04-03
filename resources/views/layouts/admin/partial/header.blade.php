<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="POST" action="{{ url('admin/search') }}">
        @csrf
      <div class="input-group input-group-sm">
        <select name="item" id="" class="from-control form-control-navbar">
          <option value="">--Select Type--</option>
          <option value="student">Students</option>
          <option value="project">Project</option>
        </select>
      </div>
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search_key" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

   
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

