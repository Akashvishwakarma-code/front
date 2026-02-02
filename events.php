<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Events | Paarvedan Foundation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Paarvedan Foundation">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Explore the historical timeline of Paarvedan Foundation's social work, milestones, and upcoming activities.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="image/logo.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="image/logo.jpg">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/charity/charity.css" />
    <link rel="stylesheet" href="css/akash.css"/>

    <!-- CUSTOM STYLES for RESPONSIVE TIMELINE BAR -->
    <style>
        .timeline-filter-bar {
            background-color: #f0f0f0;
            border-bottom: 2px solid #5D3FD3;
            padding: 20px 0;
            margin-bottom: 40px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .timeline-filter-bar h4 {
            color: #5D3FD3;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .timeline-filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(90px, 1fr));
            gap: 10px;
            text-align: center;
        }
        .timeline-filter-grid a {
            display: block;
            padding: 8px 5px;
            background-color: #ffffff;
            color: #333;
            font-size: 14px;
            border-radius: 4px;
            font-weight: 500;
            transition: all 0.2s ease;
            text-decoration: none;
            border: 1px solid #ddd;
        }
        .timeline-filter-grid a:hover {
            background-color: #5D3FD3;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        
        .timeline-year-anchor {
            position: relative;
            top: -100px; /* Offset for fixed header when jumping to ID */
            visibility: hidden;
        }
        
        .timeline-section-title {
            font-size: 28px;
            font-weight: 700;
            color: #5D3FD3;
            margin-top: 40px;
            margin-bottom: 20px;
            border-bottom: 1px solid #5D3FD3;
            padding-bottom: 5px;
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
                        <div class=" d-inline-block align-middle fs-12 text-white text-uppercase fw-500">Fight for a worthy cause to save the world. <a href="#" class="text-decoration-line-bottom text-white">Read stories</a></div>
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
        style="background-image: url(image/p5n.jpeg)">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Events"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin" data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">Events we held by which we provide so many things to needy people and also help powering children education.</p>
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
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    
   <section class="events-page-section events-list position-relative pt-4">
    <div class="container-fluid">
        <div class="row clearfix px-5">
            
            <!-- LEFT SIDEBAR: Year and Month Filters (col-lg-3 for better visibility) -->
            <div class="col-lg-3 col-md-4" style="z-index:10;" >
                <!-- Wrapper for sticky behavior, using CSS for precise top offset -->
                <div class="sidebar-filters sticky-top sticky-sidebar">
                    
                    <h5 class="fs-18 fw-600 text-dark-gray mb-3">Filter by Year</h5>
                    <div class="mb-4">
                        <!-- Year Filters (Radio Buttons now trigger filtering directly) -->
                        <div class="year-col d-flex flex-wrap gap-2">
                            <input type="radio" class="btn-check year-filter" name="event-year" id="year-2023" value="2023" autocomplete="off">
                            <label class="btn btn-outline-danger rounded-pill" for="year-2023">2023</label>
                            <input type="radio" class="btn-check year-filter" name="event-year" id="year-2024" value="2024" autocomplete="off" checked>
                            <label class="btn btn-outline-danger rounded-pill" for="year-2024">2024</label>
                            <input type="radio" class="btn-check year-filter" name="event-year" id="year-upcoming" value="upcoming" autocomplete="off">
                            <label class="btn btn-outline-danger rounded-pill" for="year-upcoming">Upcoming</label>
                            <input type="radio" class="btn-check year-filter" name="event-year" id="year-all" value="all" autocomplete="off">
                            <label class="btn btn-outline-secondary rounded-pill" for="year-all">All</label>
                        </div>
                    </div>
                    
                    <h5 class="fs-18 fw-600 text-dark-gray mb-3">Filter by Month</h5>
                    <!-- Month Checkboxes (Simplified to a single list) -->
                    <div class="d-grid gap-2 month-filter-group mb-4">
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-01" value="01" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-01">January</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-02" value="02" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-02">February</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-03" value="03" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-03">March</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-04" value="04" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-04">April</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-05" value="05" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-05">May</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-06" value="06" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-06">June</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-07" value="07" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-07">July</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-08" value="08" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-08">August</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-09" value="09" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-09">September</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-10" value="10" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-10">October</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-11" value="11" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-11">November</label>
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-12" value="12" autocomplete="off">
                        <label class="btn btn-outline-danger rounded w-100 text-start" for="month-12">December</label>
                        
                        <input type="radio" class="btn-check month-filter" name="event-month" id="month-all" value="all" autocomplete="off">
                        <label class="btn btn-outline-secondary rounded w-100 text-start" for="month-all">All Months</label>
                    </div>
                    
                    <!-- Search Button -->
                    <div class="py-3">
                        <button class="btn btn-sm btn-dark w-100" id="show-search-bar-btn">
                            <i class="fa-solid fa-magnifying-glass me-2"></i> Keyword Search
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- MAIN CONTENT AREA (col-lg-9 to center the content) -->
            <div class="col-lg-9 col-md-8">
                <!-- Outer row to center the content -->
                <div class="row justify-content-center"> 
                    
                    <!-- Search Bar Popup / Overlay -->
                    <div id="search-overlay" style="display:none;" class="col-12 mb-4">
                        <div class="input-group shadow-sm p-3 bg-white rounded-3">
                            <input type="text" class="form-control form-control-lg" id="keyword-input" placeholder="Enter keywords (e.g., Diya, Mumbai, Clean)" aria-label="Keyword Search">
                            <button class="btn btn-danger btn-lg" type="button" id="apply-keyword-search-btn">
                                <i class="fa-solid fa-search"></i>
                            </button>
                             <button class="btn btn-outline-danger btn-lg" type="button" id="close-search-bar-btn">
                                Close
                            </button>
                        </div>
                    </div>

                    <!-- Content Wrapper -->
                    <div class="col-12 content-side">
                        
                        
                        <!-- Drawing Competition - 28 May 2024 -->
                        <div class="col-lg-4 col-md-6 mb-30px event-card-item" class="col-event card-item" data-year="2024" data-month="05" data-date="28" data-keywords="drawings">
                            <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-charity-blog-single-simple.html"><img src="image/drawing.jpg" alt=""></a>
                                    <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                                </div>
                                <div class="bg-white">
                                    <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                        <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Drawing Competition</a>
                                        <p class="line-clamp-3">Paarvedan Foundation organised a drawing competition to encourage kids to show their creativity and imagination.</p>
                                        <div class="row mt-30px">
                                            <div class="col-6 text-start">
                                                <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">28 May 2024</span></div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                        <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                            <span>
                                                <span class="btn-text">Explore more</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Notebook & Stationery Distribution (GoKool Kids) - 03 Mar 2024 -->
                        <div class="col-lg-4 col-md-6 mb-30px event-card-item" data-year="2023" data-month="05" data-date="28" data-keywords="drawings">
                            <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-charity-blog-single-simple.html"><img src="image/notebook.jpg" alt=""></a>
                                    <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> GoKool Kids, Sandhurst Road</a>
                                </div>
                                <div class="bg-white">
                                    <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                        <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Notebook & Stationery Distribution</a>
                                        <p class="line-clamp-3">We gifted 300 notebooks & stationery to students, helping them start their educational journey.</p>
                                        <div class="row mt-30px">
                                            <div class="col-6 text-start">
                                                <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">03 Mar 2024</span></div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                        <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                            <span>
                                                <span class="btn-text">Explore more</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <!-- Indoor-Outdoor Sports - 22 Mar 2024 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item" data-year="upcoming" data-month="05" data-date="28" data-keywords="drawings">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/indoor-outdoor.jpg" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Indoor-Outdoor Sports</a>
                                <p class="line-clamp-3">Paarvedan Foundation organized fun competitions in football, cricket, and chess.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">22 Mar 2024</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">02:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS
            <div id="event-2023-Dec" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (December)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px"> -->

                <!-- Notebook & Stationery Distribution (Buldana) - 29 Dec 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/notebook.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Buldana</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Notebook Distribution</a>
                                <p class="line-clamp-3">We gifted 300 notebooks & stationery to students, helping them start their educational journey.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">29 Dec 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Christmas Activity - 15 Dec 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/christmas.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Christmas Activity</a>
                                <p class="line-clamp-3">Paarvedan Foundation, along with HDFC ERGO, hosted a Christmas event where participants made festive decorations using recycled materials.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">15 Dec 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">07:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Travel Kit Distribution - 11 Dec 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/travelkit.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Travel Kit Distribution</a>
                                <p class="line-clamp-3">We organised this drive to help people who don’t always have easy access to basic hygiene supplies feel cared for, stay clean, and travel.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">11 Dec 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Nov" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (November)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                
                <!-- Solar Light Research - 23 Nov 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/sun.jpg" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Navghar, Maharashtra</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Solar Light Research</a>
                                <p class="line-clamp-3">Partnered with Indian Oil Advani Ventures, Paarvedan Foundation researched solar-powered lights in Navghar, Maharashtra.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Nov 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">02:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diya Making - 05 Nov 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/diya.jpg" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Asha Sadan, Sandhurst Road</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Diya Making</a>
                                <p class="line-clamp-3">A heartwarming event celebrating Diwali with creativity, compassion, and sustainability in partnership with Mahindra Holidays.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">05 Nov 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">02:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Oct" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (October)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                
                <!-- Clothes Distribution - 18 Oct 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/cloths.jpg" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Asha Sadan, Sandhurst Road</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Clothes Distribution</a>
                                <p class="line-clamp-3">We organised a clothes distribution drive to share warm and clean clothes with people in need.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">18 Oct 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:30 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Sep" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (September)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">

                <!-- EmpowerHER! - 26 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/empowerwoman.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">EmpowerHER!</a>
                                <p class="line-clamp-3">EmpowerHER was a beautiful gathering celebrating the strength, courage, and achievements of women.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">26 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Movie Screening - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/moviescreening.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Movie Screening</a>
                                <p class="line-clamp-3">An exclusive screening of the movies Jawan & Dunki was organized.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">08:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Beach Cleaning - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/beachclean.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Dadar</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Beach Cleaning</a>
                                <p class="line-clamp-3">Beach Cleanup Drive during the Ganesh Festival — a collective effort to preserve our oceans and promote responsible celebration.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Old Age Home Visit - 21 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/manwithload.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Airoli</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Old Age Home Visit</a>
                                <p class="line-clamp-3">A heartwarming event bringing generations together to celebrate the wisdom, talent, and life stories of our elders.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">21 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">04:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Self-Help Group (SHG) - 09 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/team.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">SHG (Self-Help Group)</a>
                                <p class="line-clamp-3">A warm get-together where women shared stories, learned new skills, supported each other, and grew stronger.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">09 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seed Rakhi - 11 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/raki.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Seed Rakhi</a>
                                <p class="line-clamp-3">Participants crafted eco-friendly rakhis using natural materials, later gifted to local police stations.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">11 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audio Book - 25 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/audiobook.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Audio Book</a>
                                <p class="line-clamp-3">This unique event celebrated the magic of storytelling through sound.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">25 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Beach Cleaning - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/beachclean.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Dadar</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Beach Cleaning</a>
                                <p class="line-clamp-3">Beach Cleanup Drive during the Ganesh Festival — a collective effort to preserve our oceans and promote responsible celebration.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Old Age Home Visit - 21 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/manwithload.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Airoli</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Old Age Home Visit</a>
                                <p class="line-clamp-3">A heartwarming event bringing generations together to celebrate the wisdom, talent, and life stories of our elders.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">21 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">04:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SHG (Self-Help Group) - 09 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/team.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">SHG (Self-Help Group)</a>
                                <p class="line-clamp-3">A warm get-together where women shared stories, learned new skills, supported each other, and grew stronger.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">09 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- End of Event Listings Row -->
                    

            <!-- ANCHOR & SECTION TITLE FOR 2024 EVENTS
            <div id="event-2024-May" class="timeline-year-anchor" data-year="upcoming" data-month="10" data-date="20" data-keywords="health camp checkup slum preventive care"></div>
            <div class="col-12"><h3 class="timeline-section-title">2024 (May)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                 -->
                

            <!-- ANCHOR & SECTION TITLE FOR 2024 EVENTS --
            <div id="event-2024-Mar" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2024 (March)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                
                

            

                <!-- Seed Rakhi - 11 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/raki.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Seed Rakhi</a>
                                <p class="line-clamp-3">Participants crafted eco-friendly rakhis using natural materials, later gifted to local police stations.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">11 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audio Book - 25 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/audiobook.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Audio Book</a>
                                <p class="line-clamp-3">This unique event celebrated the magic of storytelling through sound.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">25 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Movie Screening - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/moviescreening.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Movie Screening</a>
                                <p class="line-clamp-3">An exclusive screening of the movies Jawan & Dunki was organized.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">08:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Beach Cleaning - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/beachclean.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Dadar</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Beach Cleaning</a>
                                <p class="line-clamp-3">Beach Cleanup Drive during the Ganesh Festival — a collective effort to preserve our oceans and promote responsible celebration.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Old Age Home Visit - 21 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/manwithload.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Airoli</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Old Age Home Visit</a>
                                <p class="line-clamp-3">A heartwarming event bringing generations together to celebrate the wisdom, talent, and life stories of our elders.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">21 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">04:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SHG (Self-Help Group) - 09 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/team.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">SHG (Self-Help Group)</a>
                                <p class="line-clamp-3">A warm get-together where women shared stories, learned new skills, supported each other, and grew stronger.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">09 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seed Rakhi - 11 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/raki.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Seed Rakhi</a>
                                <p class="line-clamp-3">Participants crafted eco-friendly rakhis using natural materials, later gifted to local police stations.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">11 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audio Book - 25 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/audiobook.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Audio Book</a>
                                <p class="line-clamp-3">This unique event celebrated the magic of storytelling through sound.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">25 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Movie Screening - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/moviescreening.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Movie Screening</a>
                                <p class="line-clamp-3">An exclusive screening of the movies Jawan & Dunki was organized.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">08:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Beach Cleaning - 23 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/beachclean.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Dadar</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Beach Cleaning</a>
                                <p class="line-clamp-3">Beach Cleanup Drive during the Ganesh Festival — a collective effort to preserve our oceans and promote responsible celebration.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">23 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Old Age Home Visit - 21 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/manwithload.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Airoli</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Old Age Home Visit</a>
                                <p class="line-clamp-3">A heartwarming event bringing generations together to celebrate the wisdom, talent, and life stories of our elders.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">21 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">04:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SHG (Self-Help Group) - 09 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/team.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">SHG (Self-Help Group)</a>
                                <p class="line-clamp-3">A warm get-together where women shared stories, learned new skills, supported each other, and grew stronger.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">09 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seed Rakhi - 11 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/raki.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Seed Rakhi</a>
                                <p class="line-clamp-3">Participants crafted eco-friendly rakhis using natural materials, later gifted to local police stations.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">11 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audio Book - 25 Sep 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/audiobook.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Audio Book</a>
                                <p class="line-clamp-3">This unique event celebrated the magic of storytelling through sound.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">25 Sep 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">12:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Aug" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (August)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">

                <!-- Bag Distribution - 18 Aug 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/schoolbag.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Bag Distribution</a>
                                <p class="line-clamp-3">A drive gifting 1,000 school bags to students, helping them begin their educational journey with confidence.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">18 Aug 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">06:00 pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Free Food Distribution - 01 Aug 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/fooddistribution.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Free Food Distribution</a>
                                <p class="line-clamp-3">An ongoing initiative distributing 100 food packets daily to those in need, ensuring no one sleeps hungry.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">01 Aug 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Jul" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (July)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                
                <!-- Sanskrit Training - 08 Jul 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/museum.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Sanskrit Training</a>
                                <p class="line-clamp-3">A program helping children and youth connect with India’s ancient language and culture.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">08 Jul 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">11:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ANCHOR & SECTION TITLE FOR 2023 EVENTS -->
            <div id="event-2023-Jun" class="timeline-year-anchor"></div>
            <div class="col-12"><h3 class="timeline-section-title">2023 (June)</h3></div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px">
                
                <!-- Tree Plantation - 15 Jun 2023 -->
                <div class="col-lg-4 col-md-6 mb-30px event-card-item">
                    <div class="box-shadow-quadruple-large h-100 box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                        <div class="position-relative">
                            <a href="demo-charity-blog-single-simple.html"><img src="image/planting.jpg" style="width: 100%; height: 250px; object-fit: cover; object-position: center; display: block;" alt=""></a>
                            <a href="demo-charity-stories.html" class="btn btn-small btn-rounded btn-base-color text-dark-gray btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 ls-0px fw-700 position-absolute right-25px top-25px"> Mumbai</a>
                        </div>
                        <div class="bg-white">
                            <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="d-inline-block fs-20 fw-500 text-dark-gray text-dark-gray-hover mb-5px alt-font">Tree Plantation</a>
                                <p class="line-clamp-3">Volunteers planted saplings in local areas to promote a greener environment.</p>
                                <div class="row mt-30px">
                                    <div class="col-6 text-start">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-block d-xl-inline-block">15 Jun 2023</span></div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="fs-15 lh-normal"><span class="fw-500 text-dark-gray d-xl-inline-block d-block">09:00 am</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-20px text-center">
                                <a href="demo-charity-blog-single-simple.html" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray">
                                    <span>
                                        <span class="btn-text">Explore more</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- End of Event Grid -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="fs-15 text-uppercase text-dark-gray fw-600">All our efforts are made possible only because of your support. <a href="demo-charity-causes.html" class="text-decoration-line-bottom text-dark-gray text-dark-gray-hover fw-700">See all causes</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   
   
<!-- NOTE: You must include the following JavaScript right before the closing </body> tag -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const yearFilters = document.querySelectorAll('.year-filter');
    const monthFilters = document.querySelectorAll('.month-filter');
    const eventCards = document.querySelectorAll('.event-card-item');
    const showSearchBtn = document.getElementById('show-search-bar-btn');
    const closeSearchBtn = document.getElementById('close-search-bar-btn');
    const searchOverlay = document.getElementById('search-overlay');
    const keywordInput = document.getElementById('keyword-input');
    const applyKeywordBtn = document.getElementById('apply-keyword-search-btn');
    
    // --- UTILITY FUNCTIONS ---
    
    // Checks if a date is upcoming (simplistic check for demonstration)
    function isCardUpcoming(card) {
        const cardYear = parseInt(card.getAttribute('data-year'));
        const cardMonth = parseInt(card.getAttribute('data-month'));
        const cardDate = parseInt(card.getAttribute('data-date'));
        
        // Assuming current date is now (Nov 27, 2025) for this check
        const now = new Date(2025, 10, 27); 
        const eventDate = new Date(cardYear, cardMonth - 1, cardDate);
        
        return eventDate > now;
    }
    
    // --- FILTERING LOGIC ---

    function applyFilter(isKeywordSearch = false) {
        const selectedYear = document.querySelector('input[name="event-year"]:checked');
        const selectedMonth = document.querySelector('input[name="event-month"]:checked');
        const keyword = keywordInput.value.toLowerCase().trim();

        const filterYear = selectedYear ? selectedYear.value : 'all';
        const filterMonth = selectedMonth ? selectedMonth.value : 'all';

        eventCards.forEach(card => {
            const cardYear = card.getAttribute('data-year');
            const cardMonth = card.getAttribute('data-month');
            const cardKeywords = card.getAttribute('data-keywords').toLowerCase();
            
            let isVisible = true;
            
            // 1. Filter by Year (Including Upcoming Logic)
            if (filterYear !== 'all') {
                if (filterYear === 'upcoming') {
                    if (!isCardUpcoming(card)) {
                        isVisible = false;
                    }
                } else if (cardYear !== filterYear) {
                    isVisible = false;
                }
            }

            // 2. Filter by Month (Only if year filter passed or wasn't applied)
            if (isVisible && filterMonth !== 'all') {
                if (cardMonth !== filterMonth) {
                    isVisible = false;
                }
            }
            
            // 3. Keyword Search (Applied only when triggered, or persists if bar is open)
            if (isVisible && keyword !== "") {
                if (!cardKeywords.includes(keyword)) {
                    isVisible = false;
                }
            }

            card.style.display = isVisible ? 'block' : 'none';
        });
        
        // --- Console feedback ---
        const visibleCount = Array.from(eventCards).filter(card => card.style.display !== 'none').length;
        console.log(`Filter applied. Year: ${filterYear}, Month: ${filterMonth}, Keyword: "${keyword}". Visible events: ${visibleCount}`);
        
        // Reset month and year selection after keyword search for cleaner UX
        if (isKeywordSearch) {
             document.querySelectorAll('input[name="event-year"]').forEach(radio => radio.checked = false);
             document.querySelectorAll('input[name="event-month"]').forEach(radio => radio.checked = false);
        }
    }

    // --- EVENT LISTENERS ---
    
    // Direct Filtering (Year/Month radio buttons)
    yearFilters.forEach(filter => filter.addEventListener('change', () => applyFilter()));
    monthFilters.forEach(filter => filter.addEventListener('change', () => applyFilter()));
    
    // Show/Hide Search Bar
    showSearchBtn.addEventListener('click', () => {
        searchOverlay.style.display = 'block';
        showSearchBtn.style.display = 'none';
    });
    
    closeSearchBtn.addEventListener('click', () => {
        searchOverlay.style.display = 'none';
        showSearchBtn.style.display = 'block';
        keywordInput.value = ''; // Clear input on close
        applyFilter(); // Reset view
    });
    
    // Apply Keyword Search
    applyKeywordBtn.addEventListener('click', () => {
        // When keyword search is applied, clear year/month selections for a full search scope
        applyFilter(true); 
    });

    // Initial call to show default view
    applyFilter();
});
</script>
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