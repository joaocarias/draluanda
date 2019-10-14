<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/Stellar-master/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('asset/Stellar-master/css/style.css') }}" <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('asset/Stellar-master/images/favicon.png') }}" />

</head>

<body>
  <main class="py-4">
    @yield('content')
  </main>


  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('asset/Stellar-master/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('asset/Stellar-master/js/off-canvas.js') }}"></script>
  <script src="{{ asset('asset/Stellar-master/js/misc.js') }}"></script>
  <!-- endinject -->
</body>

</html>