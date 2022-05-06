<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(85, 58, 2, 0.823)">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/img/lOGO 1.png" alt="" width="120px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'Landing Page') ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'Tentang Kami') ? 'active' : '' }}" href="/bio">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'Kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
          @else 
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
              Login</a>
          </li>
          <li>
            <a href="/register" class="nav-link {{ ($active === 'register') ? 'active' : '' }}"></i>
              Register</a>
          </li>
          @endauth
        </ul>
        
      </div>
    </div>
</nav>