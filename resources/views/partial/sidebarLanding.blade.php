 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a class="navbar-brand p-0">
            <h1 class="m-0">
                <img src="{{ asset ('images/logo/logo-bmn.png')}}" alt="navbar brand" class="navbar-brand" style="width: 50px; height: auto;">
                <span style="color: green;">Jhonlin</span> <span style="color: #000080;">Group</span>
            </h1>
        </a>
             
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="templates/index.html" class="nav-item nav-link active">Home</a>
                <a href="templates/about.html" class="nav-item nav-link">About</a>
                <a href="templates/services.html" class="nav-item nav-link">Services</a>
                {{-- <a href="templates/packages.html" class="nav-item nav-link">Packages</a> --}}
                {{-- <a href="templates/blog.html" class="nav-item nav-link">Blog</a> --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="destination.html" class="dropdown-item">Destination</a>
                        <a href="tour.html" class="dropdown-item">Explore Tour</a>
                        <a href="booking.html" class="dropdown-item">Travel Booking</a>
                        <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                        <a href="guides.html" class="dropdown-item">Travel Guides</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/login" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Submit A Bug Report</a>
        </div>
    </nav>