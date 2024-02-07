  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ (url('admin/home')) }}" class="nav-link">Home</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
      {{-- <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-outline-danger">Logout</button>
      </form> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
      
        <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                  Logout
                </a>
              </li>
          </form>
          </a>
          
          {{-- <a class="dropdown-item" href="#">Another action</a> --}}
        </div>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->