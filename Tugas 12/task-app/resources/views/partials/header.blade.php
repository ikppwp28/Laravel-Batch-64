<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Company</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul class="d-flex align-items-center">
          <li><a href="/">Home</a></li>
          <li><a href="/category">Category</a></li>
          <li><a href="/books">Books</a></li>
          @auth
          <li><a href="/profile">Profile</a></li>
          @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    <div class="d-flex align-items-center ms-4">
        @guest
            <a href="/login" class="btn btn-primary me-3">Login</a>
            <a href="/register" class="btn btn-info me-3">Register</a>
        @endguest

        @auth
            <form action="/logout" method="POST" class="ms-3">
                @csrf
                <input type="submit" value="Logout" class="btn btn-danger">
            </form>
        @endauth
    </div>
    </div>
  </header>