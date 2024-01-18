<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Perangkat
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('addartikel*') ? 'active' : '' }}" href="/addartikel">
            <span data-feather="file"></span>
            Buat Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('olahartikel*') ? 'active' : '' }}" href="/olahartikel">
            <span data-feather="file"></span>
            Olah Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('help*') ? 'active' : '' }}" href="/help">
            <span data-feather="help-circle"></span>
            Bantuan
          </a>
        </li>
      </ul>
    </div>
  </nav>