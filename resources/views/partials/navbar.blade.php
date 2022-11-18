    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mt-4" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('asset/img/logo.svg') }}" alt="" height="35" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item mx-4">
              <a class="nav-link text-dark {{ ($title == "Posts") ? 'active' : '' }}" aria-current="page" href="/posts">Blog</a>
            </li>
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle text-dark {{ ($title == "Profile") ? 'active' : '' }}" href="/profile" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                <li><a class="dropdown-item" href="/struktural">Struktural</a></li>
                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link text-dark {{ ($title == "Activity") ? 'active' : '' }}" aria-current="page" href="/activity">Activity</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link text-dark {{ ($title == "Recruitment") ? 'active' : '' }}" href="/recruitment">Recruitment</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-signin btn-dark" type="submit">Sign In</button>
          </form>
        </div>
      </div>
    </nav>