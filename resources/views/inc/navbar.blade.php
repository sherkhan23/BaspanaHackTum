  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <h3 class="fs-3 text-muted">Baspana</h3>
        </a>
        <!--  -->
        <div class="navbar-collapse d-flex justify-content-center">
            <ul class="navbar-nav" id="navbar-links">
                <li class="nav-item">
                  <a class="nav-link" href="/">Главное</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/allData">Жилые комплексы</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Новостройки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                  </li>
              </ul>
          </div>
      </div>

      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <div class="text-muted">
           <span class="d-flex mr-3"> Contact <i class="bi bi-envelope ml-2"></i></span>

        </div>

        <!-- Avatar -->

        <div class="dropdown">
          <button class="btn dropdown-toggle text-info" type="button" id="dropdownMenu3" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Login <i class="bi bi-box-arrow-in-right"></i>
          </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">

    <h6 class="dropdown-header">Welcome to Baspana</h6>
      @auth("web")
          <a class="dropdown-item" href="{{ route("Logout") }}">Login</a>
      @endauth

      @guest("web")
          <a class="dropdown-item" href="{{ route("login") }}">Login</a>
          <a class="dropdown-item" href="{{ route("register") }}">Register</a>
      @endguest
  </div>
</div>

      </div>

      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


