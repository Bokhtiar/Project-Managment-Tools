<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
        <a class="navbar-brand text-left" href="{{ url('/') }}">
            <img src="http://iqac.daffodilvarsity.edu.bd/images/diulogo.png" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    @if (Auth::check())
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a>
                            <a class="dropdown-item" href="@route('user.dashboard')">Dashboard</a>

                        </div>
                    @else
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="@route('login')">Log In</a>
                            <a class="dropdown-item" href="@route('register')">Sign Up</a>

                        </div>
                    @endif

                </li>
            </ul>

        </div>
    </nav>

</div>
