<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Paarvedan Foundation</title>
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
    <link rel="stylesheet" href="css/akash.css"/>
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

    <section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            
            <!-- FORM CONTAINER -->
            <div class="col-lg-6 col-md-8 m-8">
                <div class="card p-4 p-md-5 shadow-lg border-0 rounded-3 verification-card">
                    
                    <div class="card-body">
                        
                        <!-- Header and Title -->
                        <div class="sec-title text-center mb-4">
                            <span class="top-text fs-6 fw-bold text-uppercase text-primary">Certificate Verification</span>
                            <h4 class="fw-bold alt-font text-dark-gray mt-2">Validate Your Impact with <span class="text-danger">Paarvedan</span></h4>
                            <p class="text-muted">Enter the details below to verify the authenticity of your certificate.</p>
                        </div>
                        
                        <!-- Verification Form -->
                        <form action="verification_process.php" method="post" class="needs-validation" novalidate>
                            
                            <!-- Input 1: Your Name -->
                            <div class="mb-4">
                                <label for="userName" class="form-label fw-500">Your Name</label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    id="userName" 
                                    name="name" 
                                    placeholder="Name as it appears on certificate" 
                                    required
                                >
                            </div>
                            
                            <!-- Input 2: Certificate Number -->
                            <div class="mb-4">
                                <label for="certificateNumber" class="form-label fw-500">Certificate Number</label>
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    id="certificateNumber" 
                                    name="certificateNumber" 
                                    placeholder="Certificate Reference Number" 
                                    required
                                >
                            </div>
                            
                            <!-- Submit Button -->
                            <div class="form-group message-btn mt-5">
                                <button type="submit" class="btn btn-lg btn-success fw-700 w-100 verification-btn">
                                    Verify Certificate
                                </button>
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



     <!-- start hero section -->
    <section class="cover-background top-space-margin">
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