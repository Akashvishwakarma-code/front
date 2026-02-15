<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Volunteer | Paarvedan Foundation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Paarvedan Foundation">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="image/logo.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="image/logo.jpg">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/charity/charity.css" />

    <style>
        html {
            scroll-behavior: smooth;
        }

        #apply-now {
            scroll-margin-top: 30px;
            /* Adds a  gap at the top after scrolling */
        }

        .apply {
            background-color: #427deb;
            /* Blue background */
            color: white;
            /* White text */
            /* border: black; */
            /* Remove default border */
            padding: 10px 20px;
            /* Space around text */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Change cursor to pointer on hover */
            font-size: 16px;

            border: 2px solid #99c4e6;
        }

        .apply:hover {
            background-color: #0056b3;
            color: white;
            /* Darker blue on hover */
        }

        .use-cases {
            padding: 0px 20px;
            text-align: center;
            
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
            
        }

        .card {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 100px;
            margin-bottom: 20px;

            margin: 0 auto 20px auto;
            display: block;
            
        }

        .card h3 {
            margin-bottom: 15px;
        }

        .card a {
            display: inline-block;
            margin-top: 15px;
            color: #000;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-light bg-gradient-paarvedan disable-fixed">
            <div class="container-fluid">
                <div class="row h-42px align-items-center justify-content-center">
                    <div class="col-auto text-center">
                        <span class="bg-button-paarvedan ps-15px pe-15px d-inline-block align-middle fs-10 text-uppercase border-radius-4px fw-700 me-15px lh-26">Success stories</span>
                        <div class=" d-inline-block align-middle fs-12 text-white text-uppercase fw-500">Fight for right cause for save the world. <a href="#" class="text-decoration-line-bottom text-white">Read stories</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start navigation -->
        <?php include('header.php'); ?>
        <!-- start push popup -->
    </header>
    <!-- end header -->
    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs bg-dark-gray ipad-top-space-margin cover-background bg-dark-gray"
        style="background-image: url(image/vol.jpeg)">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Volunteer"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin" data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">Biggest changes you can make by being a volunteer.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li>Volunteer</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="background-position-center-top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px animation-float text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="image/volunter.jpg" alt="">
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <div class="bg-base-color fw-600 text-dark text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Become a Changemaker</div>
                    <h4 class="alt-font text-dark-gray fw-600">Empower Lives Through Volunteering</h4>
                    <p class="w-100">Join us in making a difference! At Paarvedan, we believe in the power of collective action, and your contribution as a volunteer can create a lasting impact. Explore our diverse volunteer opportunities that align with your passion and skills. Whether it's community outreach, fundraising, or administrative support, there's a meaningful role waiting for you. Together, let's build a better world and inspire positive change. Join the Paarvedan volunteer community today!</p>
                    <a href="donate.php" class="btn btn-large btn-round-edge with-rounded bg-gradient-paarvedan text-white me-5">Donate Now<span class="bg-white"><i class="fa-solid fa-arrow-right color-paarvedan"></i></span></a>
                    <a href="javascript:void(0)" class="btn btn-large btn-round-edge with-rounded apply" onclick="document.getElementById('apply-now').scrollIntoView({behavior: 'smooth'})">Apply now<span class="bg-white text-black"><i class="fa-solid fa-arrow-down color-paarvedan"></i></span></a>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="use-cases mt-0">
        <div class="container" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <h2 class="alt-font text-dark-gray fw-600 fs-40">Curated experience for every purpose</h2>
            <div class="cards">
                <div class="card"> 
                    <img src="https://cdn.prod.website-files.com/62dadf7d66e2fb7047b69c6d/64a52ae1de4c0c8877d9b3a2_conferences%20illo.webp" alt="Conferences">
                    <h3>Conferences</h3>
                    <p>Bring social impact to corporate events by adding volunteering to your agenda.</p> <a href="javascript:void(0)" onclick="document.getElementById('apply-now').scrollIntoView({behavior: 'smooth'})">Explore →</a>
                </div>
                <div class="card"> <img src="https://cdn.prod.website-files.com/62dadf7d66e2fb7047b69c6d/64a52ae22aee09a10fa2ef40_intern%20onboarding%20illo.webp" alt="Intern Onboarding">
                    <h3>Intern Onboarding</h3>
                    <p>Boost intern experience with rewarding volunteering opportunities.</p> <a href="javascript:void(0)" onclick="document.getElementById('apply-now').scrollIntoView({behavior: 'smooth'})">Explore →</a>
                </div>
                <div class="card"> <img src="https://cdn.prod.website-files.com/62dadf7d66e2fb7047b69c6d/64a52ae193d09813cbe6df43_team%20meetup.webp" alt="Team Meetups">
                    <h3>Team Meetups</h3>
                    <p>Bond over real impact with hosted experiences that inspire collaboration.</p> <a href="javascript:void(0)" onclick="document.getElementById('apply-now').scrollIntoView({behavior: 'smooth'})">Explore →</a>
                </div>
            </div>
        </div>
    </section>


    <!-- start section -->
    <section class="background-position-center-top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px animation-float text-center order-lg-2">
                    <img src="image/dedication.jpg" alt="">
                </div>
                <div class="col-lg-6 text-center text-lg-start order-lg-1">
                    <div class="bg-base-color fw-600 text-dark text-uppercase ps-20px pe-20px fs-12 border-radius-100px d-inline-block mb-15px">Certificate</div>
                    <h4 class="alt-font text-dark-gray fw-600">Celebrate Your Dedication with Paarvedan</h4>
                    <p class="w-100">At Paarvedan, our volunteers are celebrated with the exclusive 'Certificate of Impact.' This token of gratitude recognizes your commitment and immortalizes the positive change you've contributed. Join our community, leave a lasting legacy, and be part of something extraordinary with Paarvedan.</p>
                    <p class="w-100">At Paarvedan, receive the 'Certificate of Impact' for your commitment. Join us, leave a lasting legacy, and verify your impact on our Certificate Verification page!</p>
                </div>
                <div class="col-lg-12 order-lg-3 text-center pt-60px">
                    <h6 class="alt-font text-dark-gray fw-600">Volunteer</h6>
                    <p class="w-100">Thank you for considering volunteering with the Paarvedan Foundation. We value your commitment to making a positive difference, and we are excited to explore the incredible possibilities that your skills and passion can bring to our initiatives. To get started, please complete the following volunteer application form and upload your resume.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-gradient-very-light-gray" id="apply-now">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-style-01" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h4 class="alt-font text-dark-gray highlight-separator-small">Volunteer with Us - Application Form</h4>
                        <form action="#" method="post" enctype="multipart/form-data">

                            <!-- Personal Information -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">Personal Information:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-person"></i></span>
                                        <input type="text" name="fullname" class="form-control required" placeholder="Full Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-gender-ambiguous"></i></span>
                                        <select name="gender" class="form-control required">
                                            <option value="">Select Gender*</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-calendar"></i></span>
                                        <input type="date" name="dob" class="form-control required" placeholder="Date of Birth*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" name="address" class="form-control required" placeholder="Address*">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-building"></i></span>
                                        <input type="text" name="city" class="form-control required" placeholder="City*">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-map"></i></span>
                                        <input type="text" name="state" class="form-control required" placeholder="State / Province*">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-globe"></i></span>
                                        <input type="text" name="country" class="form-control required" placeholder="Country*">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-mailbox"></i></span>
                                        <input type="text" name="zip" class="form-control required" placeholder="Zip Code*">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="email" class="form-control required" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-phone"></i></span>
                                        <input type="tel" name="phone" class="form-control required" placeholder="Phone Number*">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-person-heart"></i></span>
                                        <input type="text" name="emergency_name" class="form-control required" placeholder="Emergency Contact Name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-telephone-plus"></i></span>
                                        <input type="tel" name="emergency_phone" class="form-control required" placeholder="Emergency Contact Number*">
                                    </div>
                                </div>
                            </div>

                            <!-- Volunteer Preferences -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">Volunteer Preferences:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-lightbulb"></i></span>
                                <select name="area_interest" class="form-control required">
                                    <option value="">Select Area of Interest*</option>
                                    <option value="Education">Education</option>
                                    <option value="Healthcare">Healthcare</option>
                                    <option value="Environmental Sustainability">Environmental Sustainability</option>
                                    <option value="Community Development">Community Development</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-tools"></i></span>
                                <select name="skills" class="form-control required">
                                    <option value="">Select Skill / Expertise*</option>
                                    <option value="Teaching">Teaching</option>
                                    <option value="Medical / Healthcare">Medical / Healthcare</option>
                                    <option value="Project Management">Project Management</option>
                                    <option value="Marketing / Communication">Marketing / Communication</option>
                                    <option value="Technology / IT">Technology / IT</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-calendar-check"></i></span>
                                        <select name="availability" class="form-control required">
                                            <option value="">Select Availability*</option>
                                            <option value="Weekdays">Weekdays</option>
                                            <option value="Weekends">Weekends</option>
                                            <option value="Flexible Schedule">Flexible Schedule</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-hourglass-split"></i></span>
                                        <select name="duration" class="form-control required">
                                            <option value="">Select Duration*</option>
                                            <option value="Short-term (1-3 months)">Short-term (1–3 months)</option>
                                            <option value="Medium-term (3-6 months)">Medium-term (3–6 months)</option>
                                            <option value="Long-term (6+ months)">Long-term (6+ months)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Resume Upload -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">Resume Upload:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-upload"></i></span>
                                <input type="file" name="resume" id="resume" class="form-control" accept=".pdf,.doc,.docx">
                            </div>

                            <!-- Volunteer Experience -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">Volunteer Experience:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-briefcase"></i></span>
                                <select name="experience" class="form-control required">
                                    <option value="">Previous Volunteer Experience?*</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>

                            <div class="position-relative form-group form-textarea mb-20px">
                                <span class="form-icon"><i class="bi bi-journal-text"></i></span>
                                <textarea name="exp_description" class="form-control" rows="4" placeholder="If yes, briefly describe your experience..."></textarea>
                            </div>

                            <div class="position-relative form-group form-textarea mb-20px">
                                <span class="form-icon"><i class="bi bi-chat-left-quote"></i></span>
                                <textarea name="motivation" class="form-control required" rows="4" maxlength="200" placeholder="Why do you want to volunteer with Paarvedan Foundation? (Max 200 words)"></textarea>
                            </div>

                            <!-- References -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">References:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="fw-bold mb-2 alt-font fs-18">Reference 1</h6>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-person"></i></span>
                                        <input type="text" name="ref1_name" class="form-control required" placeholder="Full Name*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-people"></i></span>
                                        <input type="text" name="ref1_relation" class="form-control required" placeholder="Relationship*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" name="ref1_phone" class="form-control required" placeholder="Phone*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="ref1_email" class="form-control required" placeholder="Email*">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <h6 class="fw-bold mb-2 alt-font fs-18">Reference 2</h6>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-person"></i></span>
                                        <input type="text" name="ref2_name" class="form-control required" placeholder="Full Name*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-people"></i></span>
                                        <input type="text" name="ref2_relation" class="form-control required" placeholder="Relationship*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                        <input type="tel" name="ref2_phone" class="form-control required" placeholder="Phone*">
                                    </div>
                                    <div class="position-relative form-group mb-15px">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="ref2_email" class="form-control required" placeholder="Email*">
                                    </div>
                                </div>
                            </div>

                            <!-- Consent and Agreement -->
                            <div class="col-12">
                                <p class="fw-bold text-dark m-0">Consent and Agreement:</p>
                                <hr class="w-25 border-top border-danger border-4 m-0 mb-3 rounded">
                            </div>

                            <div class="position-relative terms-condition-box text-start d-inline-block mb-3">
                                <p class="fs-16">
                                    By submitting this form, I affirm that all the information provided is accurate and complete. I understand that volunteering with the Paarvedan Foundation is a commitment to uphold the values and mission of the organization.
                                    I agree to abide by the policies and guidelines set forth by the Paarvedan Foundation.
                                    I grant permission for Paarvedan Foundation to contact the provided references.
                                </p>
                                <label>
                                    <input type="checkbox" name="terms_condition" class="terms-condition check-box align-middle required">
                                    <span class="box fs-16">I have read and agree to the above terms and conditions.*</span>
                                </label>
                                <label>
                                    <input type="checkbox" name="terms_condition" class="terms-condition check-box align-middle required">
                                    <span class="box fs-16">Become a Volunteer for Free.*</span>
                                </label>
                            </div>

                            <div class="position-relative mt-20px">
                                <button class="btn btn-large btn-round-edge btn-base-color btn-box-shadow submit" type="submit">Submit Application</button>
                                <div class="form-results mt-20px text-center lh-24 d-none"></div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start hero section -->
    <section class="cover-background">
        <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="3000" height="400" viewBox="0 180 2500 200">
                <defs>
                    <linearGradient id="purpleGradient" x1="0%" y1="0%" x2="135%" y2="0%">
                        <stop offset="0%" stop-color="#8E44AD" />
                        <stop offset="100%" stop-color="#3498DB" />
                    </linearGradient>
                </defs>

                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    fill="url(#purpleGradient)">
                    <animate
                        attributeName="d"
                        dur="5s"
                        values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                        repeatCount="indefinite" />
                </path>
            </svg>
        </div>
    </section>
    <!-- end hero section -->
    <!-- start section -->
    <section class="bg-dark p-0 d-none">
        <div class="container-fluid">
            <div class="row position-relative">
                <div class="col swiper swiper-width-auto text-center" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 8000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <div class="swiper-slide p-10px sdg-1">
                            <div class="fs-20 text-white fw-500">No Poverty</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-2">
                            <div class="fs-20 text-white fw-500">Zero Hunger</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-3">
                            <div class="fs-20 text-white fw-500">Good Health and Well-being</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-4">
                            <div class="fs-20 text-white fw-500">Quality Education</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-5">
                            <div class="fs-20 text-white fw-500">Gender Equality</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-6">
                            <div class="fs-20 text-white fw-500">Clean Water and Sanitation</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-7">
                            <div class="fs-20 text-white fw-500">Affordable and Clean Energy</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-8">
                            <div class="fs-20 text-white fw-500">Decent Work and Economic Growth</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-9">
                            <div class="fs-20 text-white fw-500">Industry, Innovation and Infrastructure</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-10">
                            <div class="fs-20 text-white fw-500">Reduced Inequalities</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-11">
                            <div class="fs-20 text-white fw-500">Sustainable Cities and Communities</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-12">
                            <div class="fs-20 text-white fw-500">Responsible Consumption and Production</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-13">
                            <div class="fs-20 text-white fw-500">Climate Action</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-14">
                            <div class="fs-20 text-white fw-500">Life Below Water</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-15">
                            <div class="fs-20 text-white fw-500">Life on Land</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-16">
                            <div class="fs-20 text-white fw-500">Peace, Justice and Strong Institutions</div>
                        </div>
                        <div class="swiper-slide p-10px sdg-17">
                            <div class="fs-20 text-white fw-500">Partnerships for the Goals</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 h-10px bg-purple"></div>
                <div class="col-2 h-10px bg-green"></div>
                <div class="col-2 h-10px bg-yellow"></div>
                <div class="col-2 h-10px bg-blue"></div>
                <div class="col-2 h-10px bg-red"></div>
                <div class="col-2 h-10px bg-pink"></div>
            </div>
        </div>
    </section>

    <!-- start footer -->
    <?php include('footer.php'); ?>
    <!-- end footer -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>