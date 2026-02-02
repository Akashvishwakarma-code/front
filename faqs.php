<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>FAQ - Frequently Asked Questions | Paarvedan Foundation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Paarvedan Foundation">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Find answers to frequently asked questions about Paarvedan Foundation's mission, donations, volunteering, and programs.">
    <!-- favicon -->
    <link rel="shortcut icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" href="image/logo.jpg">
    <!-- css -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/charity/charity.css" />
    <link rel="stylesheet" href="css/akash.css"/>

    <!-- CUSTOM STYLES for FAQ Page Structure -->
    <style>
        /* Reusing legal page styles for structure */
        .section-padding {
            padding: 80px 0;
            background-color: #ffffff;
        }
        
        .faq-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .faq-heading {
            font-size: 24px;
            font-weight: 600;
            margin-top: 40px;
            margin-bottom: 20px;
            color: #5D3FD3; /* Accent Color */
            border-bottom: 2px solid #5D3FD3; 
            padding-bottom: 5px;
        }

        /* Styling for the Accordion/Questions */
        .accordion-item {
            margin-bottom: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .accordion-button {
            display: block;
            width: 100%;
            text-align: left;
            padding: 15px 20px;
            background-color: #f7f7f7; /* Light gray background for question */
            font-size: 18px;
            font-weight: 600;
            color: #333333;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        .accordion-button:hover {
            background-color: #eeeeee;
        }

        .accordion-content {
            padding: 15px 20px;
            background-color: #ffffff;
            border-top: 1px solid #e0e0e0;
            display: none; /* Controlled by JavaScript */
        }
        
        .accordion-content p {
            margin: 0;
            line-height: 1.6;
            color: #555555;
        }
        
        /* TOC Link Styles */
        .toc-link {
            color: #5D3FD3 !important; 
            font-weight: 500;
            padding-left: 0.5rem !important;
            border-left: 3px solid transparent;
            transition: border-left 0.2s;
        }
        .toc-link:hover {
            border-left: 3px solid #5D3FD3;
            background-color: #f0f0ff;
        }
    </style>
</head>

<body data-mobile-nav-style="classic">
    <!-- header -->
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-light bg-gradient-paarvedan disable-fixed">
            <div class="container-fluid">
                <div class="row h-42px align-items-center justify-content-center">
                    <div class="col-auto text-center">
                        <span class="bg-button-paarvedan ps-15px pe-15px d-inline-block align-middle fs-10 text-uppercase border-radius-4px fw-700 me-15px lh-26">Support</span>
                        <div class="d-inline-block align-middle fs-12 text-white text-uppercase fw-500">
                            Got questions? We have answers. <a href="#contact" class="text-decoration-line-bottom text-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('header.php'); ?>
    </header>
    <!-- end header -->

    <!-- page title -->
    <section class="page-title-separate-breadcrumbs bg-dark-gray cover-background bg-dark-gray" style="background-image: url(image/faq_banner.jpg)">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 page-title-large">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0">FAQ</h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
                    <p class="text-white opacity-8">Find quick and comprehensive answers to the most common questions about our foundation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- content area (FAQ ACCORDION) -->
    <div class="bg-light">
        <div class="container py-5">
            <div class="row">
                
                <!-- Table of Contents (TOC) -->
                <div class="col-lg-3 mb-4">
                    <div class="card sticky-top" style="top: 2rem;z-index:1;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Sections</h5>
                            <nav class="nav flex-column" style="scroll-margin-top:5rem;">
                                <a class="toc-link py-2" href="#q1">what is csr job?</a>
                                <a class="toc-link py-2" href="#q2">What does CSR stand for?</a>
                                <a class="toc-link py-2" href="#q3">Why is CSR Important?</a>
                                <a class="toc-link py-2" href="#q4">What is a CSR Job?</a>
                                <a class="toc-link py-2" href="#q5">What is a CSR report?</a>
                                <a class="toc-link py-2" href="#q6">What is a CSR Strategy?</a>
                                <a class="toc-link py-2" href="#q7">Is sustainability a part of CSR?</a>
                                <a class="toc-link py-2" href="#q8">How to build a CSR Strategy?</a>
                                <a class="toc-link py-2" href="#q9">What are the 4 types of CSR?</a>
                                <a class="toc-link py-2" href="#q10">Why do companies do CSR activities?</a>
                                <a class="toc-link py-2" href="#q11">Which company has the best CSR?</a>
                                <a class="toc-link py-2" href="#q12">What are CSR activities?</a>
                                <a class="toc-link py-2" href="#q13">How can I improve my CSR?</a>
                                <a class="toc-link py-2" href="#q14">How do I start a CSR Program?</a>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Main Content Area (FAQ Accordion Structure) -->
                <div class="col-lg-9">
                    <div class="faq-container">
                        <h1 class="text-center mb-5" style="color: #000000; font-weight: 700;">Common Questions</h1>
                        
                            
                            
                            <div class="accordion-group">
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" style="" id="q1" onclick="toggleAccordion(this)">What is CSR?</button>
                                    <div class="accordion-content">
                                        <p>CSR stands for Corporate Social Responsibility. It is a business approach that encourages companies to contribute positively to society through ethical practices, environmental sustainability, and community engagement.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q2" onclick="toggleAccordion(this)">What does CSR stand for?</button>
                                    <div class="accordion-content">
                                        <p>CSR stands for Corporate Social Responsibility. It is a business approach that encourages companies to contribute positively to society through ethical practices, environmental sustainability, and community engagement.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q3" onclick="toggleAccordion(this)">Why is CSR Important?</button>
                                    <div class="accordion-content">
                                        <p>CSR is important as it enhances a company's reputation, fosters positive relationships with stakeholders, and contributes to sustainable development. It aligns business practices with social and environmental responsibility, creating a win-win scenario for both the company and society.</p>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="accordion-group">
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q4" onclick="toggleAccordion(this)">What is a CSR Job?</button>
                                    <div class="accordion-content">
                                        <p>A CSR job involves overseeing and implementing an organization's Corporate Social Responsibility initiatives. Responsibilities may include developing CSR strategies, managing community partnerships, and ensuring ethical business practices.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q5" onclick="toggleAccordion(this)">What is a CSR report?</button>
                                    <div class="accordion-content">
                                        <p>A CSR report is a document that outlines a company's social and environmental performance. It includes information on the company's CSR initiatives, impact assessments, and efforts to promote sustainability and ethical practices.</p>
                                    </div>
                                </div>
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q6" onclick="toggleAccordion(this)">What is a CSR Strategy?</button>
                                    <div class="accordion-content">
                                        <p>A CSR strategy is a plan that outlines a company's approach to integrating social and environmental considerations into its business operations. It includes goals, initiatives, and actions aimed at making a positive impact on society while maintaining business sustainability.</p>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="accordion-group">
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q7" onclick="toggleAccordion(this)">Is sustainability a part of CSR?</button>
                                    <div class="accordion-content">
                                        <p>Yes, sustainability is a fundamental aspect of CSR. CSR includes adopting sustainable practices that minimize negative environmental impacts, promote social responsibility, and contribute to the long-term well-being of the planet and its inhabitants.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q8"onclick="toggleAccordion(this)">How to build a CSR Strategy?</button>
                                    <div class="accordion-content">
                                        <p>Building a CSR strategy involves identifying key issues, setting measurable goals, engaging stakeholders, and integrating ethical and sustainable practices into business operations. It requires a comprehensive approach that aligns with the company's values and mission.</p>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="accordion-group">
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q9" onclick="toggleAccordion(this)">What are the 4 types of CSR?</button>
                                    <div class="accordion-content">
                                        <p>The four types of CSR are environmental sustainability, ethical labor practices, philanthropy and community engagement, and economic responsibility. These pillars guide companies in creating a comprehensive CSR framework.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q10" onclick="toggleAccordion(this)">Why do companies do CSR activities?</button>
                                    <div class="accordion-content">
                                        <p>Companies engage in CSR activities to build a positive reputation, enhance brand loyalty, attract socially conscious consumers, and contribute to sustainable development. CSR fosters a sense of responsibility, aligning business success with positive societal impact.</p>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="accordion-group">
                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q11" onclick="toggleAccordion(this)">Which company has the best CSR?</button>
                                    <div class="accordion-content">
                                        <p>There are several companies known for outstanding CSR practices, including [provide examples of specific companies]. These organizations prioritize sustainability, community engagement, and ethical business practices as integral parts of their corporate identity.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q12" onclick="toggleAccordion(this)">What are CSR activities?</button>
                                    <div class="accordion-content">
                                        <p>CSR activities encompass a range of initiatives undertaken by companies to positively impact society and the environment. Examples include environmental sustainability projects, community development programs, ethical sourcing, and philanthropic endeavors.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q13" onclick="toggleAccordion(this)">How can I improve my CSR?</button>
                                    <div class="accordion-content">
                                        <p>You can improve your CSR by conducting regular assessments, setting clear goals, engaging with stakeholders, and continuously evolving your strategies. Embrace sustainability, ethical practices, and community involvement to enhance the positive impact of your CSR initiatives.</p>
                                    </div>
                                </div>

                                <div class="accordion-item" style="padding: 45px 20px;">
                                    <button class="accordion-button" id="q14" onclick="toggleAccordion(this)">How do I start a CSR Program?</button>
                                    <div class="accordion-content">
                                        <p>To start a CSR program, identify your company's values, assess key issues, involve stakeholders, set measurable goals, and integrate sustainable and ethical practices into your operations. Develop a comprehensive CSR strategy that aligns with your organization's mission and contributes to positive societal impact.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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
    
    <script>
        function toggleAccordion(button) {
            const content = button.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                button.classList.remove('active');
            } else {
                // Optional: Close all other open accordions
                document.querySelectorAll('.accordion-content').forEach(item => {
                    item.style.display = 'none';
                    item.previousElementSibling.classList.remove('active');
                });
                // Open the clicked one
                content.style.display = "block";
                button.classList.add('active');
            }
        }

        // Smooth scrolling for TOC links
        document.querySelectorAll('.toc-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    // Offset to account for fixed header and sticky TOC
                    const offset = 90; 
                    const bodyRect = document.body.getBoundingClientRect().top;
                    const elementRect = targetElement.getBoundingClientRect().top;
                    const elementPosition = elementRect - bodyRect;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>