<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | {{ $title }}</title>

  <!-- CSS plugins  -->
  @include('__part.css_plugins')
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('__part.navbar')

    <!-- Main Sidebar Container -->
    @include('__part.sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')

    <!-- Footer -->
    @include('__part.footer')


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>
  <!-- ./wrapper -->
  <!-- JS Plugins -->
  @include('__part.js_plugins')
  @stack('scripts')
</body>

</html>