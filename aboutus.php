<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fa/css/all.css">
    <style>
        /* div{
        border: 2px solid black;
    } */
        .heade {
            min-height: 450px;
            background-image: url(images/banner.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        .icon-box-hmv {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 120px;
            border: 3px solid #049A07;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
        }
        .icon-box-hmv i {
            font-size: 2.5rem;
            color: #049A07;
            transition: all 0.3s ease-in-out;
        }
        .inner-hmv h3 {
            transition: color 0.3s ease-in-out;
        }
        .inner-hmv:hover .icon-box-hmv {
            border-color: #F5EF67;
        }
        .inner-hmv:hover .icon-box-hmv i {
            color: #F5EF67;
        }
        .inner-hmv:hover h3 {
            color: #F5EF67;
        }
        .title-with-lines {
            position: relative;
            display: inline-block;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 0 20px;
        }
        .title-with-lines::before,
        .title-with-lines::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40px;
            height: 3px;
            background: #049A07;
            box-shadow: 5px 6px #F5EF67;
        }
        .title-with-lines::before {
            left: -30px;
            transform: translateY(-50%);
        }
        .title-with-lines::after {
            right: -30px;
            transform: translateY(-50%);
        }
        .gradient-icon {
            background: linear-gradient(to right, #049A07, #F5EF67);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
        .title-container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            width: 100%;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 20px;
        }
        .image-container {
            position: relative;
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .image-container:hover .overlay {
            opacity: 1;
        }
        .overlay .icon {
            margin: 5px;
            font-size: 25px;
            color: #fff;
            transition: color 0.3s ease;
        }
        .youtube:hover {
            color: #25D366;
        }
        .facebook:hover {
            color: #3b5998;
        }
        .instagram:hover {
            color: #E1306C;
        }
        .twitter:hover {
            color: #1DA1F2;
        }
        .linkedin:hover {
            color: #0077b5;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .headtext {
            font-family: "Arvo", sans-serif;
            font-weight: bold;
            font-size: 50px;
        }
        .carousel-item img {
            height: 100vh;
            object-fit: cover;
            width: 100%;
        }
        @media (max-width: 991.98px) {
            .carousel-item img {
                height: 80vh;
            }
        }
        @media (max-width: 767.98px) {
            .carousel-item img {
                height: 60vh;
            }
        }
        @media (max-width: 575.98px) {
            .carousel-item img {
                height: 50vh;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row heade">
            <div class="col-12 px-0">
                <div id="schoolCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
                    <!-- Carousel Inner -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/banner.jpg" class="d-block w-100" alt="School Banner" style="height: 100vh; object-fit: cover;">
                            <!-- NAVBAR OVERLAYED ON CAROUSEL -->
                            <div class="position-absolute top-0 start-0 w-100 px-3 py-2" style="z-index: 10;">
                                <nav class="navbar navbar-expand-lg navbar-dark">
                                    <div class="container-fluid ps-3">
                                        <a class="navbar-brand" href="#">
                                            <img src="images/logo.png" class="img-fluid" alt="Logo" style="width: 100px; height: auto;">
                                        </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <ul class="navbar-nav ms-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                                </li>
                                                <!-- <li class="nav-item ms-lg-3 mt-2 mt-lg-0" id="butn">
                                            <a type="button" class="gradient-icon" data-bs-toggle="modal" data-bs-target="#admissionFormModal">
                                                Buy Admission Form
                                            </a>
                                        </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- ABOUT US TEXT CENTERED -->
                            <div class="carousel-caption d-md-block text-center" style="top: 50%; transform: translateY(-50%); max-width: 100%;">
                                <div style="background: rgba(0, 0, 0, 0.5); padding: 20px 30px; border-radius: 10px;">
                                    <h1 class="fw-bold text-white headtext title-with-lines gradient-icon" style="font-size: 3rem; font-family: 'Georgia', serif;">
                                        About Us
                                    </h1>
                                    <p class="lead text-white" style="font-size: 1.1rem; font-family: 'Segoe UI', sans-serif;">
                                        Mathews' & Margarets' International Schools is a beacon of excellence, dedicated to shaping the future through quality education, integrity, and innovation. With a passionate team of educators and a nurturing environment, we empower students to reach their full potential academically, morally, and socially.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more carousel items as needed -->
                        <!-- <div class="carousel-item">
                    <img src="images/slide2.jpg" class="d-block w-100" alt="Classroom" style="height: 100vh; object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-100" alt="Students Learning" style="height: 100vh; object-fit: cover;">
                </div> -->
                    </div>
                    <!-- Controls -->
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row align-items-center g-4 mb-5">
                <!-- Image Section -->
                <div class="col-12 col-md-6">
                    <img src="images/about.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- About Us Text Section -->
                <div class="col-12 col-md-6">
                    <div class="title-container">
                        <h5 class="title-with-lines gradient-icon">About Us</h5>
                    </div>
                    <h3>Welcome to Mathews' & Margarets' International Schools, Ado-Ekiti</h3>
                    <p>
                        At Mathews' & Margarets', we believe education is more than just academics — it's about nurturing the whole child.
                        Nestled in the heart of Ado-Ekiti, our school is a center of excellence, where students are equipped not only
                        with knowledge but also with strong values and critical life skills.
                    </p>
                    <p>
                        From our seasoned educators to our dynamic curriculum, every aspect of our school is designed to inspire leadership,
                        creativity, and confidence. We combine traditional teaching with innovative methods to foster an environment where
                        students grow intellectually, emotionally, and socially — preparing them for a bright and purposeful future.
                    </p>
                    <!-- Features Section -->
                    <div class="row">
                        <div class="col-6">
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Skilled Instructors</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Outstanding Academic Performance</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Comprehensive Growth</p>
                        </div>
                        <div class="col-6">
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Readiness for the Future</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Technology-Driven Approach</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon"></i> Creative Learning Methods</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Mission, Vision, and History Section -->
                <div class="hmv-box py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="inner-hmv text-center p-4 shadow-sm">
                                    <div class="icon-box-hmv mb-3">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <h3>Mission</h3>
                                    <p>We are committed to providing a quality learning environment <br> that fosters academic excellence, moral values, and leadership development.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="inner-hmv text-center p-4 shadow-sm">
                                    <div class="icon-box-hmv mb-3">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <h3>Vision</h3>
                                    <p>Our vision is to be a center of academic excellence, empowering students <br> to become innovators and global leaders of tomorrow.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="inner-hmv text-center p-4 shadow-sm">
                                    <div class="icon-box-hmv mb-3">
                                        <i class="fas fa-history"></i>
                                    </div>
                                    <h3>History</h3>
                                    <p>Established in 2013, Mathews' & Margarets' International Schools has a legacy of academic excellence, nurturing students to excel in their chosen fields for decades.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="title-container">
                    <h2 class="text-center mt-5 text-white title-with-lines gradient-icon" style="font-size: 36px;">INSTRUCTORS</h2>
                </div>
                <p class="text-center">Meet our Expert Instructors</p>
            </div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 text-center mt-3">
                            <div class="image-container">
                                <img src="images/logo.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <a href="#" class="icon youtube"> <i class="fa-brands fa-whatsapp"></i></i></a>
                                    <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <h5 class="mt-3">Mrs. Alonge M. O</h5>
                                <p>Proprietor</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 text-center mt-3">
                            <div class="image-container">
                                <img src="images/logo.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <a href="#" class="icon youtube"> <i class="fa-brands fa-whatsapp"></i></i></a>
                                    <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <h5 class="mt-3">Demo</h5>
                                <p>Principal</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 text-center mt-3">
                            <div class="image-container">
                                <img src="images/logo.jpg" class="img-fluid" alt="">
                                <div class="overlay">
                                    <a href="#" class="icon youtube"> <i class="fa-brands fa-whatsapp"></i></i></a>
                                    <a href="#" class="icon facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="icon instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <h5 class="mt-3">Demo</h5>
                                <p>Head Mistress</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "partials/footer.php";
        ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="admissionFormModal" tabindex="-1" aria-labelledby="admissionFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="admissionFormLabel">Admission Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="paymentForm">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount Payable</label>
                            <input type="number" class="form-control" id="amount" value="5000" name="amount" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/paystack.js"></script>
<script>
    document.getElementById('paymentForm').addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent normal form submission
        let fullName = document.getElementById("fullName").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let amount = document.getElementById("amount").value * 100; // Convert to kobo
        let handler = PaystackPop.setup({
            key: 'pk_test_c11149facf9b8deb722d7bb1eb0488c6eddcf554', // Replace with your Paystack public key
            email: email,
            amount: amount,
            currency: "NGN",
            ref: "TXN_" + Math.floor((Math.random() * 1000000000) + 1), // Unique transaction reference
            metadata: {
                custom_fields: [{
                        display_name: "Full Name",
                        variable_name: "full_name",
                        value: fullName
                    },
                    {
                        display_name: "Phone Number",
                        variable_name: "phone_number",
                        value: phone
                    }
                ]
            },
            callback: function(response) {
                alert("Payment successful! Reference: " + response.reference);
                window.location.href = "verify_payment.php?reference=" + response.reference;
            },
            onClose: function() {
                alert("Payment was not completed.");
            }
        });
        handler.openIframe();
    });
</script>
</html>