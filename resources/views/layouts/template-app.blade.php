<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/chartist/chartist.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('asset/Stellar-master/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('asset/Stellar-master/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="{{ route('home') }}">
            <img src="{{ asset('asset/Stellar-master/images/logo.svg') }}" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ asset('asset/Stellar-master/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <ul class="navbar-nav navbar-nav-right ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>            
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="font-weight-normal"> @joaocarias </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> {{ __('Meu Perfil') }} </a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> {{ __('Configuração') }}</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> {{ __('Reportar') }}</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> {{ __('FAQ') }}</a>
                <a class="dropdown-item"
                            href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                              
                      <i class="dropdown-item-icon icon-power text-primary"></i> {{ __('Sair') }} </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                </form>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#administrador" aria-expanded="false" aria-controls="administrador">
                <span class="menu-title">Administrador</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="administrador">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Usuários</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Tipo de Usuários</a></li>
                </ul>
              </div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="pages/icons/simple-line-icons.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Form Elements</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
         
          <main class="py-4">
              @yield('content')
          </main>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">João Carias de França</a>. Todos os direitos resevados.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Versão 3.0 </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="{{ asset('asset/Stellar-master/vendors/js/vendor.bundle.base.js') }}"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="{{ asset('asset/Stellar-master/vendors/chart.js/Chart.min.js') }}"></script> -->
    <!-- <script src="{{ asset('asset/Stellar-master/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('asset/Stellar-master/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('asset/Stellar-master/vendors/chartist/chartist.min.js') }}"></script>
    End plugin js for this page
    inject:js -->
    <!-- <script src="{{ asset('asset/Stellar-master/js/off-canvas.js') }}"></script>
    <script src="{{ asset('asset/Stellar-master/js/misc.js') }}"></script> -->
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- <script src="{{ asset('asset/Stellar-master/js/dashboard.js') }}"></script> -->
    <!-- End custom js for this page -->
  </body>
</html>