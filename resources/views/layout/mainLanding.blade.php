<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SI TICKET | Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('JG.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="templates/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="templates/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="templates/css/style.css" rel="stylesheet">
</head>


    <body>
        
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
            


        @include('partial.sidebarLanding')
       


        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-3">
            <div class="container py-3">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-9">
                        <div class="footer-item d-flex justify-content-between">
                            <a href="" class="d-flex flex-column align-items-center">
                                <i class="fas fa-home mb-2"></i>
                                <span>Gn. Antasari, Kec. Simpang Empat, Kabupaten Tanah Bumbu, Kalimantan Selatan 72211</span>
                            </a>
                            <a href="" class="d-flex flex-column align-items-center">
                                <i class="fas fa-envelope mb-2"></i>
                                <span>Jhonlingroup@gmail.com</span>
                            </a>
                            <a href="" class="d-flex flex-column align-items-center">
                                <i class="fab fa-instagram mb-2"></i>
                                <span>JhonlinGroup</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">SI-TIKET</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="#">Teknologi Informasi</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="templates/lib/easing/easing.min.js"></script>
        <script src="templates/lib/waypoints/waypoints.min.js"></script>
        <script src="templates/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="templates/lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="templates/js/main.js"></script>


        <script>
        // Select all navigation links
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        // Function to add active class based on scroll position
        function setActiveLink() {
            let fromTop = window.scrollY;

            navLinks.forEach(link => {
                let section = document.querySelector(link.getAttribute('href'));
                if (section) {
                    // Check if the section is within the viewport
                    if (
                        section.offsetTop <= fromTop + 100 &&
                        section.offsetTop + section.offsetHeight > fromTop + 100
                    ) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                }
            });
        }

        // Run on scroll
        window.addEventListener('scroll', setActiveLink);
    </script>

    </body>

</html>