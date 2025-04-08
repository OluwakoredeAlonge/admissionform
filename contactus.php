<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
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
        .gradient-icon {
            background: linear-gradient(to right, #049A07, #F5EF67);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
        .headtext {
            font-family: "Arvo", sans-serif;
            font-weight: bold;
            font-size: 50px;
        }
        @media (max-width: 576px) {
            .headtext {
                font-size: 16px;
                line-height: 1.2;
                padding-top: 40px;
            }
            p {
                font-size: 8px;
                line-height: 1.4;
            }
        }
        @media (max-width: 576px) {
            .heade {
                min-height: 300px;
            }
        }
        .link {
            text-decoration: none;
            color: black;
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
                            <!-- CONTACT US TEXT CENTERED -->
                            <div class="carousel-caption d-md-block text-center" style="top: 50%; transform: translateY(-50%); max-width: 100%;">
                                <div style="background: rgba(0, 0, 0, 0.5); padding: 20px 30px; border-radius: 10px;">
                                    <h1 class="fw-bold text-white headtext title-with-lines gradient-icon" style="font-size: 3rem; font-family: 'Georgia', serif;">
                                        Contact Us
                                    </h1>
                                    <p class="lead text-white" style="font-size: 1.1rem; font-family: 'Segoe UI', sans-serif;">
                                        We’d love to hear from you! Whether you have questions about our programs, need help with admissions, or simply want to get in touch, our team is here to assist you every step of the way. Reach out to us today and let’s start a conversation.
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
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-12 col-md-6">
                    <div class="col shadow p-4 mb-5 bg-body rounded mt-3">
                        <h2 class="mb-3 text-center">How to Reach Us</h2>
                        <p id="contact">
                            <i class="fa-solid fa-phone blue"></i><span class="fw-bold px-2">Hotlines:</span>
                        </p>
                        <ul class="list-unstyled ms-4">
                            <li> <a href="tel:+2348035288677" title="Call us now!" class="text-decoration-none">+234 803 5288 677</a></li>
                            <li> <a href="tel:+2348161592232" title="Call us now!" class="text-decoration-none">+234 816 1592 232</a></li>
                            <li> <a href="tel:+2349075148963" title="Call us now!" class="text-decoration-none">+2349075148963</a></li>
                        </ul>
                        <p>
                            <i class="fa-regular fa-envelope blue"></i><span class="fw-bold px-2">Email Address:</span>
                        </p>
                        <ul class="list-unstyled ms-4">
                            <li><a href="mailto:#" class="text-decoration-none">school@yahoomail.com</a></li>
                            <li><a href="mailto:#" class="text-decoration-none">school@yahoomail.com</a></li>
                        </ul>
                        <p>
                            <i class="fa-regular fa-comment blue"></i><span class="fw-bold px-2">Social Media:</span>
                        </p>
                        <p>
                            <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-square-x-twitter gradient-icon"></i></a>
                            <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-facebook gradient-icon"></i></a>
                            <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-instagram gradient-icon"></i></a>
                            <a href="#" class="blue fs-5 me-3"><i class="fa-brands fa-youtube gradient-icon"></i></a>
                            <a href="https://wa.me/2348035288677" class="fs-5 me-3 gradient-icon" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Google Map -->
                <div class="col-12 col-md-6">
                    <div class="col shadow p-4 mb-5 bg-body rounded mt-3">
                        <h2 class="mb-3 text-center">Our Location</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7909.993980643086!2d5.2092961378227765!3d7.575304853496421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x1047f1c61b578843%3A0xb3ccaada2ddf2a14!2sMathew%20%26%20Margret%20Int&#39;L%20School%2C%20OLUJODA%20HOTEL%20ROAD%2C%20Ado%20-%20Ikere%20Road%2C%20Ado%20Ekiti%20360101%2C%20Ekiti!3m2!1d7.572131!2d5.2116221!5e0!3m2!1sen!2sng!4v1742036820765!5m2!1sen!2sng"
                            width="100%"
                            height="320"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once "partials/footer.php";
        ?>
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