<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ env('APP_NAME') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset("assets/img/favicon.png") }} rel="icon">
  <link href={{ asset("assets/img/apple-touch-icon.png") }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/quill/quill.snow.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/quill/quill.bubble.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/remixicon/remixicon.css") }} rel="stylesheet">
  <link href={{ asset("assets/vendor/simple-datatables/style.css") }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("assets/css/style.css") }} rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href={{ route('dashboard') }} class="logo d-flex align-items-center">
        <img src={{ asset("assets/img/logo.png") }} alt="">
        <span class="d-none d-lg-block">{{ env('APP_NAME') }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src={{ asset("assets/img/profile-img.jpg") }} alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ Auth::user()->name }}</h6>
              <span>{{ Auth::user()->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                <i class="bi bi-gear"></i>
                <span>Mon profil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    {{-- <x-dropdown-link class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                @click.prevent="$root.submit();">
                        <i class="bi bi-logout"></i>
                        <span>Déconnexion</span>
                    </x-dropdown-link> --}}

                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Déconnexion</span>
                    </a>


                </form>
                {{-- <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Déconnexion</span>
                </a> --}}
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        @if(Route::is('dashboard'))

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('magazins') }}">
                <i class="bi bi-shop"></i><span>Magasins</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('services') }}">
                <i class="bi bi-building"></i><span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" href="{{ route('fournisseurs') }}">
                <i class="bi bi-truck"></i><span>Fournisseurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" href="{{ route('users') }}">
                <i class="bi bi-gear"></i><span>Utilisateurs</span>
                </a>
            </li><!-- End Blank Page Nav -->

        @elseif(Route::is('magazins'))
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#components-nav" href="{{ route('magazins') }}">
                <i class="bi bi-calendar-plus"></i><span>Magasins</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('services') }}">
                <i class="bi bi-building"></i><span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" href="{{ route('fournisseurs') }}">
                <i class="bi bi-currency-dollar"></i><span>Fournisseurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" href="{{ route('users') }}">
                <i class="bi bi-gear"></i><span>Utilisateurs</span>
                </a>
            </li><!-- End Blank Page Nav -->

        @elseif(Route::is('services'))
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('magazins') }}">
                <i class="bi bi-calendar-plus"></i><span>Magasins</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#tables-nav" href="{{ route('services') }}">
                <i class="bi bi-building"></i><span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" href="{{ route('fournisseurs') }}">
                <i class="bi bi-currency-dollar"></i><span>Fournisseurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" href="{{ route('users') }}">
                <i class="bi bi-gear"></i><span>Utilisateurs</span>
                </a>
            </li><!-- End Blank Page Nav -->

        @elseif(Route::is('fournisseurs'))
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('magazins') }}">
                <i class="bi bi-calendar-plus"></i><span>Magasins</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('services') }}">
                <i class="bi bi-building"></i><span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#charts-nav" href="{{ route('fournisseurs') }}">
                <i class="bi bi-currency-dollar"></i><span>Fournisseurs</span>
                </a>
            </li>

           <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" href="{{ route('users') }}">
                <i class="bi bi-gear"></i><span>Utilisateurs</span>
                </a>
            </li><!-- End Blank Page Nav -->

        @elseif(Route::is('users'))
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{ route('magazins') }}">
                <i class="bi bi-calendar-plus"></i><span>Magasins</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ route('services') }}">
                <i class="bi bi-building"></i><span>Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" href="{{ route('fournisseurs') }}">
                <i class="bi bi-currency-dollar"></i><span>Fournisseurs</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#icons-nav" href="{{ route('users') }}">
                <i class="bi bi-gear"></i><span>Utilisateurs</span>
                </a>
            </li><!-- End Blank Page Nav -->
        @endif

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>2023</span></strong>.
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Tous droits réservés <a href="https://aquila-tech.cg">Aquila Technologies</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset("assets/vendor/apexcharts/apexcharts.min.js") }}></script>
  <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("assets/vendor/chart.js/chart.umd.js") }}></script>
  <script src={{ asset("assets/vendor/echarts/echarts.min.js") }}></script>
  <script src={{ asset("assets/vendor/quill/quill.min.js") }}></script>
  <script src={{ asset("assets/vendor/simple-datatables/simple-datatables.js") }}></script>
  <script src={{ asset("assets/vendor/tinymce/tinymce.min.js") }}></script>
  <script src={{ asset("assets/vendor/php-email-form/validate.js") }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset("assets/js/main.js") }}></script>

</body>

</html>
