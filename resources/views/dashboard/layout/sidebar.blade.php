<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard') ? 'active' : '' }}" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Data Pembeli
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is ('dashboard/produk') ? 'active' : '' }}" href="/dashboard/produk">
            <span data-feather="package"></span>
            Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="shopping-cart"></span>
            Pemesanan
          </a>
        </li>
      </ul>
    </div>
  </nav>