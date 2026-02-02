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
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <span class="top-text fs-6 fw-bold text-uppercase text-primary">Media & Recognition</span>
                <h2 class="fw-bold alt-font text-dark-gray mt-2">Our Recent News and Key Achievements</h2>
                <p class="text-muted">Celebrating milestones built on the strength of our community and the dedication of our partners.</p>
            </div>
        </div>

        <!-- Tabs for Switching Between News and Achievements -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="nav nav-tabs nav-fill mb-4" id="mediaTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <!-- Blue/Purple Active Tab -->
                        <a class="nav-link active fw-bold text-purple-accent" id="news-tab" data-bs-toggle="tab" href="#news-content" role="tab" aria-controls="news-content" aria-selected="true">News</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link fw-bold text-dark" id="achievements-tab" data-bs-toggle="tab" href="#achievements-content" role="tab" aria-controls="achievements-content" aria-selected="false"> Achievements</a>
                    </li>
                </ul>

                <!-- TAB CONTENT -->
                <div class="tab-content" id="mediaTabsContent">
                    
                    <!-- TAB 1: NEWS & MEDIA -->
                    <div class="tab-pane fade show active" id="news-content" role="tabpanel" aria-labelledby="news-tab">
                        <div class="row gy-4">
                            
                            <!-- News Item 1: Mumbai Mirror Feature -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card">
                                    <div class="card-body">
                                        <!-- Primary Accent Color -->
                                        <span class="text-primary-accent fw-bold d-block mb-2">November 2025</span>
                                        <h5 class="card-title fw-bold">Feature in Mumbai Mirror: "Paarvedan’s Digital Leap"</h5>
                                        <p class="card-text text-muted">Coverage highlighting our adoption of digital platforms for transparent donation tracking and volunteer management, setting a benchmark for Mumbai-based NGOs.</p>
                                        <!-- Secondary Accent Color -->
                                        <a href="#" class="btn btn-sm btn-link text-green-accent">Read More <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 2: Founder Keynote -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card">
                                    <div class="card-body">
                                        <!-- Primary Accent Color -->
                                        <span class="text-primary-accent fw-bold d-block mb-2">October 2025</span>
                                        <h5 class="card-title fw-bold">Founder Keynote at National CSR Summit</h5>
                                        <p class="card-text text-muted">Mr. Arun Chouhan addressed the summit on 'Sustainable Livelihoods in Post-Pandemic India,' emphasizing the role of grassroots development and community engagement.</p>
                                        <!-- Secondary Accent Color -->
                                        <a href="#" class="btn btn-sm btn-link text-green-accent">Watch Video <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- News Item 3: Global Tech Partnership -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card">
                                    <div class="card-body">
                                        <!-- Primary Accent Color -->
                                        <span class="text-primary-accent fw-bold d-block mb-2">August 2025</span>
                                        <h5 class="card-title fw-bold">New Collaboration with Global Tech Firm</h5>
                                        <p class="card-text text-muted">Announced a new partnership to provide digital literacy training and mentorship to women in our Self-Help Group (SHG) programs, enhancing financial independence.</p>
                                        <!-- Secondary Accent Color -->
                                        <a href="#" class="btn btn-sm btn-link text-green-accent">See Details <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- TAB 2: ACHIEVEMENTS & IMPACT -->
                    <div class="tab-pane fade" id="achievements-content" role="tabpanel" aria-labelledby="achievements-tab">
                        <div class="row gy-4">
                            
                            <!-- Achievement Item 1: Volunteer Hours -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card" style="border-left: 5px solid var(--color-purple-accent) !important;">
                                    <div class="card-body">
                                        <!-- Secondary Accent Color -->
                                        <h5 class="card-title fw-bold text-green-accent">Volunteer Mobilization</h5>
                                        <p class="fs-2 fw-bolder text-dark-gray mb-0">35,000+</p>
                                        <p class="text-muted mt-0">Volunteer Hours Contributed in FY 2024-2025</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Achievement Item 2: Transparency Award -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card" style="border-left: 5px solid var(--color-purple-accent) !important;">
                                    <div class="card-body">
                                        <!-- Secondary Accent Color -->
                                        <h5 class="card-title fw-bold text-green-accent">Financial Accountability</h5>
                                        <p class="fs-2 fw-bolder text-dark-gray mb-0">Gold Standard</p>
                                        <p class="text-muted mt-0">Received Gold Standard Certification for 100% fund utilization transparency.</p>
                                    </div>
                                </div>
                            </div>

                             <!-- Achievement Item 3: Education Scale -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card" style="border-left: 5px solid var(--color-purple-accent) !important;">
                                    <div class="card-body">
                                        <!-- Secondary Accent Color -->
                                        <h5 class="card-title fw-bold text-green-accent">Education Impact</h5>
                                        <p class="fs-2 fw-bolder text-dark-gray mb-0">1,000+</p>
                                        <p class="text-muted mt-0">Students Supported Annually with stationery and scholarships.</p>
                                    </div>
                                </div>
                            </div>
                            
                             <!-- Achievement Item 4: CSR Division -->
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm border-0 news-card" style="border-left: 5px solid var(--color-purple-accent) !important;">
                                    <div class="card-body">
                                        <!-- Secondary Accent Color -->
                                        <h5 class="card-title fw-bold text-green-accent">Strategic Growth</h5>
                                        <p class="fs-2 fw-bolder text-dark-gray mb-0">New CSR Division</p>
                                        <p class="text-muted mt-0">Launched dedicated division for corporate social responsibility consulting.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Required Custom CSS for New Colors -->
<style>
/* Defining new color variables based on the requested theme */
:root {
    --color-purple-accent: #5D3FD3; /* Strong Purple/Blue for Tabs, Borders, Highlights */
    --color-green-accent: #38C172; /* Vibrant Green for Links/Metrics */
    --color-yellow-accent: #FFC107; /* Yellow (If needed for further emphasis) */
}

/* Applying new colors to the canvas elements */
.text-primary-accent {
    color: var(--color-purple-accent) !important;
}
.text-green-accent {
    color: var(--color-green-accent) !important;
}

/* Tabs */
#mediaTabs .nav-link.active {
    color: white !important;
    background-color: var(--color-purple-accent) !important;
    border-color: var(--color-purple-accent) !important;
}
#mediaTabs .nav-link {
    color: #333;
}

/* Achievement Cards - Left Border Accent */
.news-card[style*="#5D3FD3"] {
    border-color: var(--color-purple-accent) !important;
}

/* Adjusting H5 color in Achievement section (text-danger was being used) */
.tab-pane#achievements-content .card-body h5 {
    color: var(--color-green-accent) !important;
}
</style>
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