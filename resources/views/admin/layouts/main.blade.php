<!DOCTYPE html>
<html lang="en">

@include('admin.inc.head')

<body>

  <!-- ======= Header ======= -->
  @include('admin.inc.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
      @yield('content')
  <!-- ======= Footer ======= -->
  @include('admin.inc.scripts')
</body>

</html>