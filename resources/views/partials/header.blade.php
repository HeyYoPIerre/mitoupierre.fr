<nav class="navbar navbar-dark position-fixed w-100 top-0 navbar-expand-lg" id="header">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">MITOU PI'erre</a>
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item d-flex justify-content-end">
            <a class="nav-link" href="{{ route('portfolio') }}">portfolio</a>
          </li>
          @auth
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav ms-auto">
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