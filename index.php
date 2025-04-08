<?php
session_start();
if (isset($_SESSION['errormsg'])) {
    echo "<script>
document.addEventListener('DOMContentLoaded', function() {
Swal.fire({
icon: 'error',
title: 'Error',
text: '" . addslashes($_SESSION['errormsg']) . "',
});
});
</script>";
    unset($_SESSION['errormsg']);
}
if (isset($_SESSION['feedback'])) {
    echo "<script>
document.addEventListener('DOMContentLoaded', function() {
Swal.fire({
icon: 'success',
title: 'Success',
text: '" . addslashes($_SESSION['feedback']) . "',
});
});
</script>";
    unset($_SESSION['feedback']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/fa/css/all.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <style>
        /* div {
            border: 2px solid black;
            padding: 50px;
        } */
        .heade {
            min-height: 500px;
            background-image: url(images/banner.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .feature-box {
            text-align: center;
            padding: 20px;
        }
        .feature-box i {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        .feature-box p {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        .feature-description {
            color: #555;
        }
        .title-container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            width: 100%;
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
        .btn-gradient {
            background: linear-gradient(to right, #049A07, #F5EF67);
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #F5EF67, #049A07);
            transform: scale(1.05);
        }
        .navbar {
            position: absolute;
            width: 100%;
            z-index: 10;
            background: transparent;
        }
        @media (max-width: 576px) {
            .headtext {
                font-size: 16px;
                line-height: 1.2;
                padding-top: 40px;
                margin-top: 20px;
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
        a {
            text-decoration: none;
            color: black;
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
        <!-- Bootstrap Carousel with Navbar Inside -->
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
                                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="aboutus.php">About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                                </li>
                                                <li class="nav-item ms-lg-3 mt-2 mt-lg-0" id="butn">
                                                    <a type="button" class="gradient-icon" data-bs-toggle="modal" data-bs-target="#admissionFormModal">
                                                        Buy Admission Form
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- WELCOME TEXT CENTERED -->
                            <div class="carousel-caption d-md-block text-center" style="top: 50%; transform: translateY(-50%); max-width: 100%;">
                                <div style="background: rgba(0, 0, 0, 0.5); padding: 20px 30px; border-radius: 10px;">
                                    <h1 class="fw-bold text-white headtext" style="font-size: 3rem; font-family: 'Georgia', serif;">
                                        Welcome to Mathews' & Margarets'
                                    </h1>
                                    <p class="lead text-white" style="font-size: 1.1rem; font-family: 'Segoe UI', sans-serif;">
                                        At Mathews' & Margarets' International Schools, we are committed to nurturing well-rounded students through a blend of academic excellence, moral discipline, and modern teaching methods. From our seasoned educators to our vibrant learning environment, every aspect of our school is designed to inspire growth, curiosity, and leadership in every child.
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
        <div class="container mt-5 mb-5 px-3">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <i class="fa fa-3x fa-graduation-cap gradient-icon mb-3"></i>
                            <h5 class="card-title">Skilled Instructors</h5>
                            <p class="card-text">
                                Learn from experienced and certified educators dedicated to your academic success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <i class="fas fa-laptop gradient-icon fa-3x mb-3"></i>
                            <h5 class="card-title">Online Classes</h5>
                            <p class="card-text">
                                Access interactive lessons from anywhere with our flexible and engaging e-learning platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <i class="fa fa-3x fa-home gradient-icon mb-3"></i>
                            <h5 class="card-title">Home Projects</h5>
                            <p class="card-text">
                                Enhance learning with hands-on assignments designed to reinforce classroom knowledge.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card text-center shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <i class="fas fa-book-open gradient-icon fa-3x mb-3"></i>
                            <h5 class="card-title">Book Library</h5>
                            <p class="card-text">
                                Explore a vast collection of books and resources to support your learning journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-3">
            <div class="row align-items-center g-4 mb-5">
                <!-- Image Section -->
                <div class="col-12 col-md-6">
                    <img src="images/about.jpg" alt="About Us Image" class="img-fluid rounded w-100">
                </div>
                <!-- About Us Text Section -->
                <div class="col-12 col-md-6">
                    <div class="title-container mb-2">
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
                        <div class="col-12 col-sm-6 mb-3">
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Skilled Instructors</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Outstanding Academic Performance</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Comprehensive Growth</p>
                        </div>
                        <div class="col-12 col-sm-6 mb-3">
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Readiness for the Future</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Technology-Driven Approach</p>
                            <p><i class="fa-solid fa-arrow-right gradient-icon me-2"></i>Creative Learning Methods</p>
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-gradient mt-3" href="aboutus.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-3">
            <div class="row">
                <div class="col-12">
                    <div class="title-container mb-3">
                        <h3 class="text-center title-with-lines gradient-icon">WHAT WE OFFER</h3>
                    </div>
                    <p class="text-center mb-5">
                        We provide a nurturing and stimulating environment where students excel
                        academically, grow socially, and develop essential life skills for a brighter future.
                    </p>
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <div class="feature-box mb-4">
                                <i class="fa-solid fa-shield-heart gradient-icon mb-2"></i>
                                <p class="fw-bold">SAFETY FIRST</p>
                                <p class="feature-description">
                                    We prioritize the safety and well-being of every child with strict security measures,
                                    a well-monitored environment, and professional supervision at all times.
                                </p>
                            </div>
                            <div class="feature-box mb-4">
                                <i class="fas fa-baby gradient-icon mb-2"></i>
                                <p class="fw-bold">INFANT CARE</p>
                                <p class="feature-description">
                                    Our dedicated caregivers provide warm, attentive, and developmentally appropriate
                                    care to ensure a nurturing foundation for our youngest learners.
                                </p>
                            </div>
                            <div class="feature-box mb-4">
                                <i class="fas fa-certificate gradient-icon mb-2"></i>
                                <p class="fw-bold">CERTIFIED TEACHERS</p>
                                <p class="feature-description">
                                    Our team of highly qualified, experienced, and passionate educators is committed to
                                    delivering high-quality instruction and mentorship for student success.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="feature-box mb-4">
                                <i class="fas fa-chalkboard-teacher gradient-icon mb-2"></i>
                                <p class="fw-bold">SMALL SIZE CLASS</p>
                                <p class="feature-description">
                                    With a low student-to-teacher ratio, we ensure personalized attention, active engagement,
                                    and a supportive learning atmosphere for all students.
                                </p>
                            </div>
                            <div class="feature-box mb-4">
                                <i class="fas fa-book-open gradient-icon mb-2"></i>
                                <p class="fw-bold">CREATIVE LESSONS</p>
                                <p class="feature-description">
                                    Our innovative curriculum incorporates interactive and hands-on learning approaches
                                    that encourage critical thinking, creativity, and curiosity.
                                </p>
                            </div>
                            <div class="feature-box mb-4">
                                <i class="fas fa-sun gradient-icon mb-2"></i>
                                <p class="fw-bold">HAPPY ENVIRONMENT</p>
                                <p class="feature-description">
                                    We foster a positive, inclusive, and friendly school culture where students feel
                                    valued, motivated, and inspired to reach their full potential.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5 px-3">
            <div class="row g-4">
                <!-- Have a Question Form -->
                <div class="col-12 col-md-6">
                    <div class="form shadow-sm p-4 rounded h-100">
                        <h5 class="text-center mb-3">Have a Question?</h5>
                        <form action="https://formspree.io/f/mnnnryrw" method="post" id="questionform">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" name="fullname" id="questionname">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" id="questionemail">
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" rows="5" placeholder="Write your question here"
                                    name="message" maxlength="300" oninput="countQuestion()" id="questionmessage"></textarea>
                                <small class="form-text text-muted text-end d-block">
                                    Characters remaining: <span id="questionCounter">300</span>
                                </small>
                            </div>
                            <div class="text-end text-md-end mt-3">
                                <button class="btn btn-gradient px-4 py-2 rounded-pill" name="question_btn">
                                    <i class="fa-solid fa-paper-plane"></i> SEND QUESTION
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Feedback Form -->
                <div class="col-12 col-md-6">
                    <div class="form shadow-sm p-4 rounded h-100">
                        <h5 class="text-center mb-3">Feedback</h5>
                        <form action="https://formspree.io/f/mnnnryrw" method="post" id="feedbackform">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" name="fullname" id="feedbackname">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" class="form-control" placeholder="Your Phone Number" name="number" id="feedbackphone">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" id="feedbackemail">
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" rows="5" placeholder="Write your feedback here"
                                    name="message" maxlength="300" oninput="countFeedback()" id="feedbackmessage"></textarea>
                                <small class="form-text text-muted text-end d-block">
                                    Characters remaining: <span id="feedbackCounter">300</span>
                                </small>
                            </div>
                            <div class="text-end text-md-end mt-3">
                                <button class="btn btn-gradient px-4 py-2 rounded-pill" name="feedback_btn">
                                    <i class="fa-solid fa-paper-plane"></i> SEND FEEDBACK
                                </button>
                            </div>
                        </form>
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
                    <form id="paymentForm" method="post" action="process/pay_action.php">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount Payable</label>
                            <input type="number" class="form-control" id="amount" value="5000" name="amount" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit_btn">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/paystack.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="assets/js/sweetalert.js"></script>
<script>
    document.getElementById('paymentForm').addEventListener("submit", function(event) {
        event.preventDefault();
        let fullName = document.getElementById("fullName").value.trim();
        let email = document.getElementById("email").value.trim();
        let phone = document.getElementById("phone").value.trim();
        let amount = document.getElementById("amount").value.trim() * 100;
        if (fullName === "" || email === "" || phone === "" || amount === "") {
            alert("Please complete the form!");
            return; // stop further processing
        }
        let handler = PaystackPop.setup({
            key: 'pk_test_c11149facf9b8deb722d7bb1eb0488c6eddcf554',
            email: email,
            amount: amount,
            currency: "NGN",
            ref: "ADMFORM_" + Math.floor((Math.random() * 1000000000) + 1),
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
                fetch("process/pay_action.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                        body: new URLSearchParams({
                            fname: fullName,
                            email: email,
                            phone: phone,
                            amount: amount / 100,
                            reference: response.reference
                        })
                    })
                    .then(res => res.text())
                    .then(data => {
                        window.location.href = "verify_payment.php?reference=" + response.reference;
                    });
            },
            onClose: function() {
                alert("Payment was not completed.");
            }
        });
        handler.openIframe();
    });
</script>
<script>
    function countQuestion() {
        const textarea = document.querySelector('[name="message"]');
        const counter = document.getElementById('questionCounter');
        counter.textContent = 300 - textarea.value.length;
    }
    function countFeedback() {
        const textarea = document.querySelectorAll('[name="message"]')[1];
        const counter = document.getElementById('feedbackCounter');
        counter.textContent = 300 - textarea.value.length;
    }
</script>
<script>
    document.getElementById("questionform").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent default form submission
        let fullName = document.getElementById("questionname").value.trim();
        let email = document.getElementById("questionemail").value.trim();
        let message = document.getElementById("questionmessage").value.trim();
        if (fullName === "" || email === "" || message === "") {
            alert("Please complete the form!");
            return; // stop further processing
        }
        Swal.fire({
            title: 'Are you sure?',
            text: "You’re about to send your message.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, send it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                e.target.submit();
            }
        });
    });
</script>
<script>
    document.getElementById("feedbackform").addEventListener("submit", function(e) {
        e.preventDefault(); // Prevent default form submission
        let fullName = document.getElementById("feedbackname").value.trim();
        let phone = document.getElementById("feedbackphone").value.trim();
        let email = document.getElementById("feedbackemail").value;
        let message = document.getElementById("feedbackmessage").value.trim();
        if (fullName === "" || email === "" || phone === "" || message === "") {
            alert("Please complete the form!");
            return; // stop further processing
        }
        Swal.fire({
            title: 'Are you sure?',
            text: "You’re about to send your message.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, send it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                e.target.submit();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#butn").addClass("animate__animated animate__swing animate__infinite");
        $(".headtext").addClass(" animate__animated animate__fadeInUp");
    });
</script>
</html>