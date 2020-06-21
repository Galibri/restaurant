<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Mamma's Kitchen</title>

        <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/pricing.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">


        <script src="{{ asset('assets/frontend/js/jquery-1.11.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.flexslider.min.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{ asset('assets/frontend/images/Logo_main.png') }}" class="logo img-responsive">
                        <img id="logo2" style="display: none;" src="{{ asset('assets/frontend/images/Logo_stick.png') }}" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">about</a></li>
                        <li><a href="#pricing">pricing</a></li>
                        <li><a href="#great-place-to-enjoy">beer</a></li>
                        <li><a href="#breakfast">bread</a></li>
                        <li><a href="#featured-dish">featured</a></li>
                        <li><a href="#reserve">reservation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        @yield('content')


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.mixitup.min.js') }}" ></script>
        <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery.validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.hoverdir.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/frontend/js/jQuery.scrollSpeed.js') }}"></script> --}}
        <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
        <script src="{{ asset('js/frontend.js') }}"></script>
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
    </body>
</html>