<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="/">
            <img class="logo-img" src="{{ asset('logo.jpg') }}" alt="">
            <div class="brand-text">
              Уютный <span class="brand-char">М</span>ир
            </div></a>
            <div class="nav-menu-open">
              <img src="{{asset('assets/img/menu.png')}}" alt="">
            </div>
          <hr class="menu-line">
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">

                <li class="dropdown {{ Request::is('/') ? 'active' : '' }}">
                  <a href="/">Главная</a>
                </li>
                <li class="dropdown {{ Request::is('about') ? 'active' : '' }}">
                  <a href="/about">О нас</a>

                </li>
                <li class="dropdown {{ Request::is('news') ? 'active' : '' }}">
                  <a href="/news">Новости</a>

                </li>
                <li class="dropdown {{ Request::is('tariffs') ? 'active' : '' }}">
                  <a href="/tariffs">Тарифы</a>

                </li>
                <li class="dropdown {{ Request::is('houses') ? 'active' : '' }}">
                  <a href="/houses">Дома</a>

                </li>

              </ul>
            </nav>
          </div>
          <!-- end menu -->

        </div>
      </div>
    </div>
  </header>
  <script>

  document.querySelector('.nav-menu-open').addEventListener('click',  function() {
      console.log(document.querySelector('.navbar-fixed-top'));
      document.querySelector('.navbar-fixed-top').classList.toggle('navbar-fixed-top-opened');
  })

  </script>
