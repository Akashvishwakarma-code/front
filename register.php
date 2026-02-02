<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Register | Paarvedan Foundation</title>
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
        style="background-image: url(https://placehold.co/1920x640/png)">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Register"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin" data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, atque iusto.</p>
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
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 p-6 box-shadow-extra-large border-radius-6px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-26 xs-fs-24 alt-font fw-600 text-dark-gray mb-20px d-block">Create an account</span>
                    <form action="email-templates/contact-form.php" method="post">
                        <label class="text-dark-gray mb-10px fw-500">Username<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="text" name="name" placeholder="Enter your username" />
                        <label class="text-dark-gray mb-10px fw-500">Email address<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="email" name="email" placeholder="Enter your email" />
                        <label class="text-dark-gray mb-10px fw-500">Password<span class="text-red">*</span></label>
                        <input class="mb-20px bg-very-light-gray form-control required" type="password" name="password" placeholder="Enter your password" />
                        <span class="fs-13 lh-22 w-90 lg-w-100 md-w-90 sm-w-100 d-block mb-30px">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="text-dark-gray text-decoration-line-bottom fw-500">privacy policy.</a></span>
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-medium btn-round-edge btn-base-color btn-box-shadow submit w-100 text-transform-none" type="submit">Register</button>
                        <div class="form-results mt-20px d-none"></div>
                    </form>
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
     <?php include('footer.php') ;?>
    <!-- end footer -->
    <!-- start scroll progress -->
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