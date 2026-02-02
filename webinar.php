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

<section class="volunteer-section py-5 bg-light">
    <div class="container">
        
        <!-- INTRO TEXT BLOCK -->
        <div class="row justify-content-center mb-5">
            <div class="col-xl-8 col-lg-10 text-center">
                <div class="sec-title">
                    <span class="top-text fs-6 fw-bold text-uppercase text-primary">Webinars & Partnership</span>
                    <h2 class="fw-bold alt-font text-dark-gray mt-2">Bridging Knowledge, Inspiring Change</h2>
                </div>
                <p class="text-dark">
                    Embark on a collaborative journey with Paarvedan Foundation's Webinar Program, where we believe in the transformative power of collective learning and community empowerment. By partnering with us, your organization becomes a catalyst for fostering knowledge-sharing, sparking discussions, and inspiring positive change. Submit your application today and join us in unlocking a world of knowledge and collaboration.
                </p>
            </div>
        </div>

        <!-- MAIN FORM CONTAINER -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="card p-4 p-md-5 shadow-lg border-0 rounded-3 form-box">
                    
                    <div class="sec-title mb-4 text-center">
                        <span class="top-text fs-5 fw-bold text-uppercase text-primary">Webinar Collaboration - Application Form</span>
                    </div>

                    <form  class="volunteer-form" id="myForm" enctype="multipart/form-data">
                        
                        <!-- SECTION 1: ORGANIZATION DETAILS -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <p class="fw-bold text-dark fs-5 m-0">Organization Details</p>
                                <hr class="border-top border-danger border-2 rounded">
                            </div>
                            
                            <!-- Organization Name -->
                            <div class="col-lg-12 mb-3">
                                <label for="orgName" class="form-label">Organization Name</label>
                                <input type="text" name="Oname" id="orgName" class="form-control form-control-lg" required>
                            </div>
                            
                            <!-- Location / Region -->
                            <div class="col-lg-12 mb-3">
                                <label for="location" class="form-label">Location / Region</label>
                                <input type="text" name="location-region" id="location" class="form-control form-control-lg" required>
                            </div>
                            
                            <!-- Nature of Business -->
                            <div class="col-lg-12 mb-3">
                                <label for="nature" class="form-label">Nature of Business/Organization:</label>
                                <input type="text" name="bussiness-nature" id="nature" class="form-control form-control-lg" required>
                            </div>
                        </div>

                        <!-- SECTION 2: CONTACT PERSON -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <p class="fw-bold text-dark fs-5 m-0">Contact Person</p>
                                <hr class="border-top border-danger border-2 rounded">
                            </div>
                            
                            <!-- Name -->
                            <div class="col-lg-6 mb-3">
                                <label for="contactName" class="form-label">Name</label>
                                <input type="text" name="name" id="contactName" class="form-control form-control-lg" required>
                            </div>
                            
                            <!-- Position / Title -->
                            <div class="col-lg-6 mb-3">
                                <label for="position" class="form-label">Position / Title</label>
                                <input type="text" name="position" id="position" class="form-control form-control-lg" required>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-lg-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" required>
                            </div>
                            
                            <!-- Phone -->
                            <div class="col-lg-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" name="phone" id="phone" class="form-control form-control-lg" required>
                            </div>
                        </div>
                        
                        <!-- SECTION 3: WEBINAR GOALS & OBJECTIVES -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <p class="fw-bold text-dark fs-5 m-0">Webinar Collaboration Goals</p>
                                <hr class="border-top border-danger border-2 rounded">
                            </div>
                            
                            <div class="col-lg-12 mb-3">
                                <label for="collabObj" class="form-label">Briefly outline the goals and objectives of your collaboration:</label>
                                <textarea rows="4" name="collab-obj" id="collabObj" class="form-control" placeholder="Max 200 words" maxlength="200" required></textarea>
                            </div>
                        </div>
                        
                        <!-- SECTION 4: UPLOAD DOCUMENTS -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <p class="fw-bold text-dark fs-5 m-0">Upload Supporting Documents</p>
                                <hr class="border-top border-danger border-2 rounded">
                            </div>
                            
                            <div class="col-lg-12 mb-3">
                                <label class="form-label fw-bold">1. Upload Proposal (Outlining expertise and proposed topics - PDF or Word):</label>
                                <div class="input-group">
                                    <input type="file" name="profile" class="form-control" id="profile" accept=".pdf,.doc,.docx" required>
                                    <label class="input-group-text" for="profile">Upload Document</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- SECTION 5: CONSENT AND AGREEMENT -->
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <p class="fw-bold text-dark fs-5">Consent and Agreement:</p>
                                <div class="form-check text-start ps-0">
                                    <input type="checkbox" class="form-check-input cust-checkbox" id="agree-1" required>
                                    <label class="form-check-label ms-2" for="agree-1">
                                        I affirm that all information provided is accurate and I agree to abide by the policies and guidelines set forth by the Paarvedan Foundation.
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- SUBMIT BUTTON -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group message-btn">
                                    <button type="submit" name="submit" class="btn btn-lg btn-danger fw-700 w-100 verification-btn submit-webinar-btn" id="mainSubmitBtn">
                                        Submit Application
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- Required Custom CSS for Styling (Assuming Primary Accent is #5D3FD3) -->
<style>
/* Custom Styles for the Webinar Form */
.form-box {
    background-color: #ffffff;
    border: 1px solid #f0f0f0;
}

.form-control-lg {
    height: 55px;
    border-radius: 8px;
    border-color: #cccccc;
    transition: border-color 0.3s;
}

.form-control-lg:focus,
.form-control:focus {
    border-color: #5D3FD3;
    box-shadow: 0 0 0 0.2rem rgba(93, 63, 211, 0.25);
}

/* Custom Checkbox/Label Styling (if not using Bootstrap's default styling) */
.form-check-label {
    line-height: 1.5;
}

/* Style the Submit Button */
.submit-webinar-btn {
    background-color: #5D3FD3 !important; /* Indigo/Primary Accent */
    border-color: #5D3FD3 !important;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: white;
}

.submit-webinar-btn:hover {
    background-color: #3B0270 !important; /* Darker accent color on hover */
    border-color: #3B0270 !important;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(93, 63, 211, 0.4);
}

/* Style for the horizontal rule separators */
.border-danger {
    border-color: #5D3FD3 !important; /* Using Primary Accent for visual separation */
}
</style>
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

    <script>
    console.log("--- Forced Script Started ---");

    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById('mainSubmitBtn');
        const form = document.getElementById('myForm');

        if (btn) {
            console.log("✅ Submit Button found!");

            btn.addEventListener('click', async function(e) {
                // Hum manually trigger kar rahe hain, isliye normal submit ko rokenge
                e.preventDefault();
                
                console.log("Button clicked! Starting manual validation...");

                // 1. Basic Validation Check
                if (!form.checkValidity()) {
                    alert("Please fill all required fields correctly.");
                    form.reportValidity(); // Ye browser ka error popup dikhayega
                    return;
                }

                console.log("Validation passed! Collecting data...");

                // 2. Button UI Change
                const originalText = btn.innerText;
                btn.disabled = true;
                btn.innerText = "Sending...";

                // 3. Prepare Data
                const formData = new FormData(form);

                try {
                    console.log("Attempting fetch to Backend...");
                    const response = await fetch('http://localhost:5000/api/forms/webinar', {
                        method: "POST",
                        body: formData
                    });

                    console.log("Fetch call finished. Status:", response.status);

                    const data = await response.json();
                    
                    if (data.success) {
                        alert("Success: " + data.message);
                        form.reset();
                    } else {
                        alert("Message: " + data.message);
                    }
                } catch (error) {
                    console.error("Network/Fetch Error:", error);
                    alert("Network Error: Backend server check karein (Port 5000).");
                } finally {
                    btn.disabled = false;
                    btn.innerText = originalText;
                }
            });
        } else {
            console.error("❌ Button with ID 'mainSubmitBtn' not found!");
        }
    });
</script>

</body>

</html>