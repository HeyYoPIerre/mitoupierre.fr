<nav class="navbar navbar-dark sticky-top navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">MITOU PI'erre</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
      aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark flex-row-reverse" tabindex="-1" id="offcanvasDarkNavbar"
      aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MITOU PI'erre</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
          aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('portfolio') }}">portfolio</a>
          </li>
          @auth
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  AdminZone
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="{{ route('photos.index') }}">PhotoViewer</a></li>
                  <li><a class="dropdown-item" href="{{ route('photos.create') }}">PhotoBuilder</a></li>
                  <li><a class="dropdown-item" href="{{ route('contacts.index') }}">ContactList</a></li>
                </ul>
              </li>
            </ul>
          </div>
          @endauth
        </ul>
      </div>
    </div>
  </div>
</nav>