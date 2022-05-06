<header class="navbar navbar-dark sticky-top bg-black flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">
      <img src="/img/lOGO 1.png" alt="" width="120px">
    </a>
    <div class="navbar-nav ms-auto">
      <div class="nav-item text-nowrap">
        <form action="/profil" method="get">
          @csrf
          <button type="submit" class="nav-link px-3 bg-black border-0" href="#"><span data-feather="user"></span> Profil
          </button>
        </form>
      </div>
    </div>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-black border-0" href="#"> Logout <span data-feather="log-out"></span>
            </button>
        </form>
      </div>
    </div>
</header>