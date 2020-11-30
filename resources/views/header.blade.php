<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html">
            <img class="logo-img" src="{{ asset('logo.jpg') }}" alt="">
            <div class="brand-text">
              Уютный <span class="brand-char">Д</span>ом
            </div></a>
            <div class="nav-menu-open">
              <img src="{{asset('assets/img/menu.png')}}" alt="">
            </div>
          <hr>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">

                <li class="dropdown active">
                  <a href="index.html">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#">Features</a>

                </li>
                <li class="dropdown">
                  <a href="#">Pages</a>

                </li>
                <li class="dropdown">
                  <a href="#">Portfolio</a>

                </li>
                <li class="dropdown">
                  <a href="#">Blog</a>

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
