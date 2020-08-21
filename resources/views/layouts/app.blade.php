<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('front/assets/img/logowk.png') }}" type="image/x-icon"/>
  <title>{{ $title ?? '' }}</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('dash/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('dash/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('layouts.partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('layouts.partials.topbar')

        {{-- for content --}}
        @yield('content')
        {{-- end content --}}

      </div>
      <!-- End of Main Content -->
      @include('layouts.partials.footer')
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  @include('layouts.partials.scrool-btn')

  @include('layouts.partials.logout-modal')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('dash/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('dash/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('dash/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('dash/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('dash/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('dash/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('dash/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
