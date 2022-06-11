
<head>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link rel="shortcut icon" href="media/modern-skyscraper-building.jpeg" />

    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 end -->
    <style>

    </style>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  </head>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="/">
          <h3 class="fs-3 text-muted">Baspana</h3>
        </a>
        <!--  -->
        <div class="navbar-collapse d-flex justify-content-center pl-5 ml-5">
            <ul class="navbar-nav" id="navbar-links">
                <li class="nav-item">
                  <a class="nav-link" href="/">Главное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" {{ route("allData") }}">Жилые комплексы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("predict") }}">Предсказание</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('builder') }}">Застройщики</a>
                </li>

              </ul>
          </div>
      </div>

      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">

          <div class="text-muted">

              @if(session('cart'))
                  <a href="{{ url('cart') }}"> <span class="d-flex mr-3"><i id="like-cart" class="bi bi-bag-heart" style="font-size: 22px;"></i></span>
                      <!-- this code count product of choose tha user choose -->
                      <span class="badge badge-pill badge-danger ml-3">{{ count(session('cart')) }}</span>
                  </a>
          </div>
          @endif

      </div>

        <div class="text-muted">
           <span class="d-flex mr-3"> Contact <i class="bi bi-envelope ml-2 mt-1"></i></span>
        </div>

        <!-- Avatar -->

        <div class="dropdown">
          <button class="btn dropdown-toggle text-info" type="button" id="dropdownMenu3" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              @auth("web")

                  {{ Auth::user()->name }}

{{--                  @foreach($users as $user)--}}
{{--                      {{ $user->name }}--}}
{{--                  @endforeach--}}
              @endauth
                  @guest("web")
                      Login
                  @endguest
              <i class="bi bi-box-arrow-in-right"></i>
          </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">

    <h6 class="dropdown-header">Welcome to Baspana

    </h6>
      @auth("web")
          <a class="dropdown-item" href="{{ route('profile') }}">Профиль</a>
          <a class="dropdown-item" href="{{ route("logout") }}">Log out</a>
      @endauth

      @guest("web")
          <a class="dropdown-item" href="{{ route("login") }}">Login</a>
          <a class="dropdown-item" href="{{ route("register") }}">Register</a>
      @endguest

  </div>
</div>
          <script>
              $('.dropdown').hover(function (){
                  $('.dropdown-toggle', this).trigger('click');
              });
          </script>

      </div>


    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/jquery.syotimer.min.js"></script>
<script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/sticky-sidebar.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>
