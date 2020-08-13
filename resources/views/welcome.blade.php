<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
  
		<!-- bootstrap style sheet -->
		 {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> --}}
		 <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		 <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" media="all">
		<!-- fontawesome -->
		<link href="{!! asset('css/fontawesome-all.min.css') !!}" rel="stylesheet" type="text/css" media="all">
		<link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" media="all">
		<!-- gallery css -->
		<link href="{!! asset('css/prettyPhoto.css') !!}" rel="stylesheet" type="text/css" />
		<!-- stylesheets-->
		<link href="{!! asset('css/style.css') !!}" rel='stylesheet' type='text/css' media="all"> 
    </head>
    <body>
		@include('header')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
		
        <!-- about -->
        @include('about')
        <!-- //about -->
        <!-- contact -->
        @include('contact')
        <!-- //contact -->
        <!--footer -->
        @include('footer')
        <!-- //footer -->


  <!-- js -->
    {{-- <script src="{!! asset('js/jquery.min.v3.js') !!}"></script>  --}}
    <script src="{!! asset('js/jquery.min.js') !!}"></script>  

    <script src="{!! asset('js/bootstrap.min.js') !!}"></script> 
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> --}}
    <!-- //js -->
  
<!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script src="{!! asset('js/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.countup.js') !!}"></script> 
    <script>
      $('.counter').countUp();
    </script>
  
   <!-- SCROOLL REVEAL SCRIPT -->
    <script>
      window.sr = ScrollReveal();
      sr.reveal('.navbar', {
      duration: 2000,
      origin: 'bottom'
    });

      sr.reveal('.service-content-left', {
      duration: 2000,
      origin: 'top',
      distance: '300px'
    });

    sr.reveal('.service-content-right', {
      duration: 2000,
      origin: 'right',
      distance: '300px'
    });

     sr.reveal('.service-btn', {
      duration: 2000,
      delay: 1000, 
      origin: 'bottom'
    });



       sr.reveal('#service nav-item', {
      duration: 2000,
      origin: 'left',
      distance: '300px',
      viewFactor: 0.2
    });

       document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    </script>

  <!-- start-smooth-scrolling -->

     <script src="{!! asset('js/move-top.js') !!}"></script>
    <script src="{!! asset('js/easing.js') !!}"></script> 
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
              containerID: 'toTop', // fading element id
              containerHoverID: 'toTopHover', // fading element hover id
              scrollSpeed: 1200,
              easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{!! asset('js/SmoothScroll.min.js') !!}"></script>

    <!-- //smooth-scrolling-of-move-up -->   

    <script src="{!! asset('js/jquery-1.7.2.js') !!}"></script>
    <script src="{!! asset('js/jquery.quicksand.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
    <script src="{!! asset('js/jquery.prettyPhoto.js') !!}"></script>
    <script src="{!! asset('js/jquery.vide.min.js') !!}"></script>
    </body>
</html>
