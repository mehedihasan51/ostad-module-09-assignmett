<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My-Protfolio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
  
        @include('component.side_nav')
        <!-- Nav Bar End -->


        <!-- Hero Start -->
   
        @include('component.hero')
        <!-- Hero End -->


        <!-- About Start -->
         @yield('content')
        <!-- Blog End -->


        <!-- Footer Start -->
        @include('component.footer')
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/lib/typed/typed.min.js')}}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{ asset('assets/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js')}}"></script>
        
    </body>
</html>
