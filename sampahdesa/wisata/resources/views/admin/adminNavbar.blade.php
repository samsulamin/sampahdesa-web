<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
    <div class="p-4 pt-5">
      <a href="{{url('/dashboard')}}">
        <h3 class="text-white">{{ Auth::user()->name }}</h3>
      </a>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Dashboard</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="#">Peta Wisata</a>
            </li>
            <li>
                <a href="{{url('/dataWisata')}}">Data Wisata</a>
            </li>
            <li>
                <a href="{{url('/dataWisatawan')}}">Data Wisatawan</a>
            </li>
          </ul>
        </li>
        <li>
            <a href="{{url('/about')}}">About</a>
        </li>
        <li>
          <a href="#">Portfolio</a>
        </li>
        <li>
          <a href="{{url('/contact')}}">Contact</a>
        </li>
      </ul>
      <div class="footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </nav>
    <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>