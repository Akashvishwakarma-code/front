<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Donate Now | Paarvedan Foundation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Paarvedan Foundation">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Make a secure donation to Paarvedan Foundation using Razorpay or UPI/QR code.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="image/logo.jpg">
    <link rel="apple-touch-icon" href="image/logo.jpg">
    <!-- css -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="demos/charity/charity.css" />
    <link rel="stylesheet" href="css/akash.css"/>

    <!-- Include Razorpay Checkout JS -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
    
    <style>
        /* Defining accent color for consistency */
        :root {
            --color-primary-accent: #5D3FD3; /* Deep Indigo/Purple */
            --color-secondary-accent: #3B0270; /* Darker Pink/Violet */
        }

        /* --- STYLES FOR DONATION AMOUNT RADIO BUTTONS (Ensures visibility and selection status) --- */
        .donation-amount-selector label {
            transition: all 0.2s ease;
            border: 2px solid #e0e0e0;
            cursor: pointer;
            border-radius: 6px;
            /* Flex properties for equal spacing */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        .donation-amount-selector input[type="radio"] {
            display: none; /* Hide the actual radio button */
        }
        
        /* Style for the span text inside the label when selected */
        .donation-amount-selector input[type="radio"]:checked + span {
            color: #ffffff;
            background-color: var(--color-primary-accent);
            border-color: var(--color-primary-accent);
            padding: 5px 10px;
            border-radius: 4px;
        }
        
        /* Style the custom input when focused */
        #custom-amount:focus {
            border-color: var(--color-primary-accent);
            box-shadow: 0 0 0 0.2rem rgba(93, 63, 211, 0.25);
        }

        /* Submit Button Styling */
        .razorpay-btn {
            background-color: var(--color-primary-accent) !important;
            border-color: var(--color-primary-accent) !important;
            padding: 12px 0;
            transition: all 0.3s ease;
            color: white;
            cursor: pointer;
            font-size: 18px; /* Added size for prominence */
            min-width: 150px; /* Ensures button minimum width */
        }

        .razorpay-btn:hover {
            background-color: var(--color-secondary-accent) !important;
            border-color: var(--color-secondary-accent) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(93, 63, 211, 0.4);
        }
        
        /* New QR Button Styling */
        .qr-button {
            background-color: #38c172; /* Green accent */
            border-color: #38c172;
            color: white;
            padding: 12px 0;
            font-size: 18px;
            min-width: 150px;
            transition: all 0.3s ease;
        }
        .qr-button:hover {
            background-color: #2b995e;
            border-color: #2b995e;
        }
        
        /* General form card styling for prominence */
        .donation-form-card {
             border: 1px solid #e0e0e0;
             background-color: #ffffff;
        }
    </style>
</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <!-- Top bar (from user code) -->
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
        style="background-image: url(image/donate_now_banner3.jpg)">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Donate Now"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin" data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">Donation is the best way you can be the part of our mission.</p>
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
                        <li>Donate Now</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->

    <!-- MAIN DONATION SECTION -->
    <section class="position-relative bg-gradient-very-light-gray py-5">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2 class="fw-700 alt-font text-dark-gray ls-minus-2px">Donate For a Cause</h2>
                </div>
            </div>
            <div class="row align-items-center justify-content-center position-relative z-index-1">
                <div class="col-xl-10 col-lg-12">
                    
                    <!-- Donation Form -->
                    <form id="donation-form" class="row contact-form-style-02 card p-4 shadow-lg border-0 rounded-3 donation-form-card">
                        
                        <div class="col-md-6 mb-30px">
                            <p class="fw-600 mb-10px alt-font text-dark-gray">Full Name</p>
                            <input class="border-radius-4px border-color-white box-shadow-double-large form-control required" 
                                   type="text" name="full-name" id="donor-name" placeholder="Enter your full name*" required />
                        </div>

                        <div class="col-md-6 mb-30px">
                            <p class="fw-600 mb-10px alt-font text-dark-gray">Email Address</p>
                            <input class="border-radius-4px border-color-white box-shadow-double-large form-control required" 
                                   type="email" name="email" id="donor-email" placeholder="Enter your email*" required />
                        </div>

                        <div class="col-md-6 mb-30px">
                            <p class="fw-600 mb-10px alt-font text-dark-gray">Select Donation Amount</p>
                            <div class="d-flex flex-wrap gap-15px donation-amount-selector" id="donation-radio-group">
                                <!-- Radio 100 -->
                                <label class="flex-fill">
                                    <input type="radio" name="donation-amount" value="100" checked>
                                    <span class="fw-700">₹100</span>
                                </label>
                                <!-- Radio 250 -->
                                <label class="flex-fill">
                                    <input type="radio" name="donation-amount" value="250">
                                    <span class="fw-700">₹250</span>
                                </label>
                                <!-- Radio 500 -->
                                <label class="flex-fill">
                                    <input type="radio" name="donation-amount" value="500">
                                    <span class="fw-700">₹500</span>
                                </label>
                                <!-- Radio 1000 -->
                                <label class="flex-fill">
                                    <input type="radio" name="donation-amount" value="1000">
                                    <span class="fw-700">₹1000</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-30px">
                            <p class="fw-600 mb-10px alt-font text-dark-gray">Custom Amount</p>
                            <input class="border-radius-4px border-color-white box-shadow-double-large form-control" 
                                   type="number" name="custom-amount" id="custom-amount" placeholder="Enter custom amount (Min ₹10)" min="10" />
                        </div>

                        <div class="col-md-12 mb-3">
                            <p class="fw-600 mb-10px alt-font text-dark-gray">Message (Optional)</p>
                            <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" 
                                      cols="40" rows="4" name="message" id="donor-message" placeholder="Your message"></textarea>
                        </div>

                        <div class="col-xl-6 col-md-7">
                            <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">
                                We are committed to protecting your privacy. We will never collect information about you without your explicit consent.
                            </p>
                        </div>

                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                            <input type="hidden" name="redirect" value="">
                            <!-- Group both buttons for spacing -->
                            <div class="d-flex justify-content-end gap-3"> 
                                
                                <!-- 1. Razorpay Button (Primary) -->
                                <button class="btn btn-base-color btn-switch-text btn-large left-icon btn-round-edge submit text-transform-none razorpay-btn" 
                                        type="button" id="initiate-payment">
                                    <span>
                                        <span><i class="bi bi-heart-fill" ></i></span>
                                        <span class="btn-double-text" data-text="Donate Now">Donate Now</span>
                                    </span>
                                </button>
                                
                                <!-- 2. QR/UPI Button (Secondary) -->
                                <button class="btn btn-base-color btn-large left-icon btn-round-edge submit text-transform-none qr-button" 
                                        type="button" data-bs-toggle="modal" data-bs-target="#qrCodeModal">
                                    <span>
                                        <span><i class="bi bi-qr-code-scan"></i></span>
                                        <span class="btn-double-text" data-text="Pay via QR">Pay via QR</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- end donation form -->
                </div>
            </div>
        </div>
    </section>
    <!-- END MAIN DONATION SECTION -->

    <!-- QR CODE MODAL STRUCTURE -->
    <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-light">
            <h5 class="modal-title alt-font fw-700 text-dark-gray" id="qrCodeModalLabel">Scan to Donate (UPI/QR)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-4">
            <p class="text-muted">You can pay any amount instantly using your preferred UPI app (Paytm, Google Pay, PhonePe, etc.).</p>
            
            <!-- QR CODE IMAGE PLACEHOLDER -->
            <img src="image/donateqr.jpg" 
                 alt="UPI QR Code for Paarvedan Foundation" 
                 class="img-fluid border p-2 mb-3 rounded-3"
                 style="max-width: 250px;">
                 
            <h6 class="fw-bold text-dark-gray mb-1">Paarvedan Foundation UPI ID:</h6>
            <p class="text-primary-accent fw-bold fs-5"> yespay.ypbs m000001929@yesbankltd</p>

            <!-- <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal">Close</button> -->
          </div>
        </div>
      </div>
    </div>

    <section class="bank-details-section py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h3 class="fw-700 alt-font text-dark-gray ls-minus-1px">Direct Bank Transfer Details</h3>
                <p class="text-muted">For direct fund transfer (UPI/NEFT/IMPS) within India.</p>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            
            <!-- AXIS BANK CARD -->
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm border-0 bank-card" style="border-top: 5px solid #8E44AD !important;">
                    <div class="card-body p-4">
                        <h4 class="card-title fw-bold text-dark-gray mb-3" style="color: #8E44AD;">Axis Bank</h4>
                        <p class="mb-3">
                            <span class="d-block fw-bold text-primary">Paarvedan Foundation</span>
                        </p>
                        
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                            <span class="text-muted fw-bold fs-6">Account Number:</span>
                            <code class="text-dark fs-6 fw-700">923010042302354</code>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                            <span class="text-muted fw-bold fs-6">Branch Name:</span>
                            <span class="text-dark fs-6 fw-700">Zaveri Bazar</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="text-muted fw-bold fs-6">IFSC Code:</span>
                            <code class="text-dark fs-6 fw-700">UTIB0001705</code>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- YES BANK CARD -->
            <div class="col-lg-5 col-md-6">
                <div class="card h-100 shadow-sm border-0 bank-card" style="border-top: 5px solid #5D3FD3 !important;">
                    <div class="card-body p-4">
                        <h4 class="card-title fw-bold text-dark-gray mb-3" style="color: #5D3FD3;">YES Bank</h4>
                        <p class="mb-3">
                            <span class="d-block fw-bold text-primary">Paarvedan Foundation</span>
                        </p>
                        
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                            <span class="text-muted fw-bold fs-6">Account Number:</span>
                            <code class="text-dark fs-6 fw-700">102894600000090</code>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center border-bottom py-2">
                            <span class="text-muted fw-bold fs-6">Branch Name:</span>
                            <span class="text-dark fs-6 fw-700">Cuffe Parade</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <span class="text-muted fw-bold fs-6">IFSC Code:</span>
                            <code class="text-dark fs-6 fw-700">YESB0001028</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Required Custom CSS (For aesthetics) -->
<style>
.bank-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #fcfcfc;
}
.bank-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}
.bank-card code {
    font-size: 1.1em;
    font-weight: 700;
}
.bank-card h4 {
    border-bottom: 2px solid;
    padding-bottom: 10px;
}
</style>
    <!-- FOOTER AND SCRIPTS (from user code) -->
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

    <!-- JAVASCRIPT FOR RAZORPAY INTEGRATION -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- EVENT HANDLER FOR PAYMENT INITIATION ---
        document.getElementById('initiate-payment').addEventListener('click', function(e) {
            e.preventDefault();
            
            const form = document.getElementById('donation-form');
            const name = document.getElementById('donor-name').value;
            const email = document.getElementById('donor-email').value;
            let amount = 0;
            
            // Basic client-side validation check
            if (!name || !email || !form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Determine the amount (radio or custom input)
            const selectedRadio = document.querySelector('input[name="donation-amount"]:checked');
            const customAmountInput = document.getElementById('custom-amount').value;
            
            if (customAmountInput && parseInt(customAmountInput) >= 10) {
                amount = parseInt(customAmountInput);
            } else if (selectedRadio) {
                amount = parseInt(selectedRadio.value);
            }
            
            if (amount < 10) { 
                alert("Please enter a donation amount of at least ₹10.");
                return;
            }

            // Convert amount to paisa (Razorpay requires amount in smallest unit)
            const amountInPaisa = amount * 100;
            
            // 1. Fetch Order ID from Server (MOCK IMPLEMENTATION)
            // *** REPLACE 'mock_razorpay_data.php' with your actual secure endpoint ***
            fetch('mock_razorpay_data.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ amount: amountInPaisa })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    
                    // 2. Configure Razorpay Options
                    const options = {
                        "key": data.key_id, // Fetch key securely from server
                        "amount": amountInPaisa,
                        "currency": "INR",
                        "name": "Paarvedan Foundation",
                        "description": "Donation for Charitable Initiatives",
                        "image": "image/pf-logo.png", 
                        "order_id": data.order_id, // Order ID received from server
                        "handler": function (response) {
                            // 3. Handle Successful Payment & Redirect
                            
                            // Send response data back to your server for final VERIFICATION
                            // **You MUST implement this server-side verification step!**
                            
                            window.location.href = 'thank-you.php?payment_id=' + response.razorpay_payment_id;
                        },
                        "prefill": {
                            "name": name,
                            "email": email,
                            "contact": ""
                        },
                        "theme": {
                            "color": "#5D3FD3" // Primary Accent Color
                        }
                    };

                    const rzp = new Razorpay(options);
                    rzp.open(); // Open the Razorpay popup

                } else {
                    alert("Could not initiate payment. Server error: " + data.message);
                }
            })
            .catch(error => {
                console.error('Error fetching order ID:', error);
                alert('A network error occurred. Please try again.');
            });
        });

        // --- INTERACTION LOGIC (Custom Amount / Radio Toggle) ---
        
        const customAmountInput = document.getElementById('custom-amount');
        const radioButtons = document.querySelectorAll('input[name="donation-amount"]');
        
        // Uncheck radios when custom amount is focused
        customAmountInput.addEventListener('focus', function() {
            radioButtons.forEach(radio => radio.checked = false);
        });

        // Check the radio button corresponding to the clicked span
        radioButtons.forEach(radio => {
            radio.closest('label').addEventListener('click', function(e) {
                // Clear custom amount when a radio is selected
                customAmountInput.value = '';
            });
        });
        
        // Handle custom amount interaction to ensure correct radio button is not checked
        document.getElementById('custom-amount').addEventListener('input', function() {
            radioButtons.forEach(radio => radio.checked = false);
        });

    });
    </script>
</body>
</html>