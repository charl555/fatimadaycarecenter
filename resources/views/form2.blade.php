<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fatima Day Care Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="css//animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{route('index')}}" class="navbar-brand">
            <h1 class="m-0 text-primary"><img src="images/logo2.png" alt="" style="width: 80px; height: 80px;">
            Fatima Day Care Center</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link active">About Us</a>
                    <a href="{{route('classes')}}" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.html" class="dropdown-item">School Facilities</a>
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Enrollment Process</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Form Start -->

        <div style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 2rem;">
                <h1 style="margin-bottom: 1.5rem; text-align: center;">Day Care 2 Enrollment Form</h1>
                <form>
                    <div style="display: flex; flex-direction: column; gap: 1rem; align-items: center;">
                        <div style="display: flex; flex-direction: column; width: 500px;">
                            <input type="text" id="gname" placeholder="First Name" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">
                            <input type="text" id="gname" placeholder="Last Name" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">
                            <input type="text" id="gname" placeholder="Middle Initial" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">
                            <input type="text" id="gname" placeholder="Nick Name" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">  
                            <input type="text" id="cname" placeholder="Gender" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Number of Siblings" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Date of Birth" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Birth Place" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Birth Registered" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Region" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Province" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="City" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Barangay" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="No of Street Address" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Religion" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>
                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Ethnicity" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>

                        <label for="cage" style="margin-bottom: 0.5rem;">Parent/Gaurdian Information </label>

                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Parent/Guardian First Name" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>

                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Parent/Guardian Last Name" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>

                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Parent/Guardian Middle Initial" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>

                        <div style="display: flex; flex-direction: column; width: 500px;">
                            <input type="number" id="cage" placeholder="Contact Number" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%; -moz-appearance: textfield;">
                        </div>

                        <style>
                            /* Remove number input spinners in Chrome, Safari, Edge, and Opera */
                            input[type=number]::-webkit-outer-spin-button,
                            input[type=number]::-webkit-inner-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }

                            /* Remove number input spinners in Firefox */
                            input[type=number] {
                                -moz-appearance: textfield;
                            }
                        </style>

                        <div style="display: flex; flex-direction: column; width: 500px;">                           
                            <input type="text" id="cage" placeholder="Email" style="padding: 0.75rem; border: 1px solid #ccc; border-radius: 0.25rem; width: 100%;">
                        </div>

                        <div style="width: 500px;">
                            <button type="submit" style="width: 100%; padding: 1rem; background-color: #F05A7E; color: white; border: none; border-radius: 0.25rem;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <!-- Form End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="images/classes-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow.min.js"></script>
    <script src="lib/easing.min.js"></script>
    <script src="lib/waypoints.min.js"></script>
    <script src="lib/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="lib/main.js"></script>
</body>

</html>