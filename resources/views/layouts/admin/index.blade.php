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

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Material Kit CSS -->
  <link href="{{ asset('assets/admin/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  @yield('style')
  @yield('google-tags')
</head>

<body>
  <div class="wrapper " id="app">
    @include('layouts.admin.nav-menu')


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-dark bg-primary">
        <div class="container-fluid">
			<div class="navbar-wrapper">
				<a class="navbar-brand" href="javascript:;">@yield('page-heading')</a>
			</div>
			<div class="navbar-wrapper text-right">
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<button type="submit" class="btn btn-danger btn-sm">Logout</button>
				</form>
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
					GalibWeb
					</a>
				</li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy; {{ date('Y') }}, made with <i class="material-icons">favorite</i>
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
  @yield('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
        @if(Session::has('success'))
          swtoaster("{{ Session::get('success') }}", 'success');
        @endif
        @if(Session::has('error'))
          swtoaster("{{ Session::get('error') }}", 'error');
        @endif
        @if(Session::has('warning'))
          swtoaster("{{ Session::get('warning') }}", 'warning');
        @endif
        @if(Session::has('info'))
          swtoaster("{{ Session::get('info') }}", 'info');
        @endif
        @if(Session::has('question'))
          swtoaster("{{ Session::get('question') }}", 'question');
        @endif
</script>


<script>
  (function($) {
      $(document).ready(function() {
          $(document).on('click', '.delete', function(e) {
              e.preventDefault();
              var swal_link = $(this).attr('href');
              Swal.fire({
                  title: "Are you sure to delete?",
                  text: "This will delete your data permanently!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.value) {
                      axios.post(swal_link, {_method: 'DELETE'})
                        .then( res => {
                          Swal.fire({
                              title: "Deleted!",
                              text: 'You data has been deleted.',
                              icon: 'success',
                              timer: 2000,
                              timerProgressBar: true,
                              onClose: function() {
                                window.location.href = window.location.href
                              }
                          })
                          
                        })
                        .catch(err => {
                          Swal.fire({
                              title: "Uhh!",
                              text: 'Something went wrong.',
                              icon: 'error',
                              timer: 2000,
                              timerProgressBar: true,
                          })
                        })
                      
                  } else if (result.dismiss === Swal.DismissReason.cancel) {
                      Swal.fire ({
                          title: 'Cancelled!',
                          text: 'You have chosen to keep data.',
                          icon: 'success',
                          timer: 2000,
                          timerProgressBar: true,
                      })
                  }
              })
          })
      });
  })(jQuery);
</script>
</body>

</html>