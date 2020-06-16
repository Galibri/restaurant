<!doctype html>
<html lang="en">

<head>
  <title>@yield('page-title')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="{{ asset('assets/admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  @yield('style')
  @yield('google-tags')
</head>

<body>
  <div class="wrapper ">
    @include('layouts.admin.nav-menu')


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">@yield('page-heading')</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      @yield('content')

      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://galibweb.com">
                  Pocha Team
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  @yield('scripts')
</body>

</html>