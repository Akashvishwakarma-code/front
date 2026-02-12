<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Explore Events | Paarvedan Foundation</title>
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
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin-top: 5rem;
        }

        .event-hero {
            background-size: cover;
            background-position: center;
            background-color: #1a3c28;
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
        }

        .event-hero h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
        }

        .event-hero p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 1rem;
        }

        .hero-meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.15);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: white;
        }

        .hero-meta-item i {
            color: #7ddc9f;
        }

        .event-icon {
            font-size: 1.2rem;
            color: #28a745;
            margin-right: 8px;
        }

        .info-card {
            border-left: 4px solid #28a745;
            background-color: white;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            padding: 10px 30px;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .impact-stats span {
            font-size: 2rem;
            font-weight: bold;
            color: #28a745;
        }

        .event-not-found {
            text-align: center;
            padding: 60px 20px;
        }

        .event-not-found i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 1rem;
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
                        <div class="d-inline-block align-middle fs-12 text-white text-uppercase fw-500">
                            Fight for a worthy cause to save the world.
                            <a href="blog&news.php" class="text-decoration-line-bottom text-white">Read Stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('header.php'); ?>
    </header>
    <!-- end header -->

    <!-- ===== EVENT HERO ===== -->
    <div class="event-hero" id="eventHero">
        <div class="container">
            <h3 id="eventTitle">Loading...</h3>
            <p id="eventDesc"></p>

            <div class="hero-meta" id="heroMeta">
                <div class="hero-meta-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span id="eventDate"></span>
                </div>



                <div class="hero-meta-item">
                    <i class="fas fa-bullseye"></i>
                    <span id="heroGoal"></span>
                </div>

                <div class="hero-meta-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span id="eventLocation"></span>
                </div>

                <div class="hero-meta-item">
                    <i class="fas fa-user-friends"></i>
                    <span id="eventOrganizer"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== MAIN CONTENT ===== -->
    <div class="container" id="mainContent">
        <div class="row">

            <!-- Left Column: Event Details -->
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">About This Campaign</h3>
                        <p id="eventDescFull"></p>

                        <h3 class="card-title mb-4">Overview</h3>
                        <p id="conclusion"></p>

                        <h4 class="mt-5 mb-3">How to Donate</h4>
                        <p>There Donate now button at top right and at sidebar, click on the Donate now button, you will be redirected to donation page</p>

                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-success">Paarvedan Foundation</span>
                            <span class="badge bg-primary">Social Campaign</span>
                            <span class="badge bg-info">Donate for future</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Event Info & Actions -->
            <div class="col-lg-4">

                <!-- Event Quick Info Card -->
                <div class="card shadow-sm info-card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Campaign Details</h5>

                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-bullseye"></i>
                            <strong>Goal:</strong> <span id="sidebarGoal"></span>
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-hand-holding-heart"></i>
                            <strong>Raised:</strong> <span id="sidebarRaised"></span>
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-map-marker-alt"></i>
                            <strong>Location:</strong> <span id="sidebarLocation"></span>
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-user-friends"></i>
                            <strong>Organizer:</strong> <span id="sidebarOrganizer"></span>
                        </p>

                        <hr>

                        <!-- Impact Stats -->
                        <div class="impact-stats text-center mt-4">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <span id="sidebarVolunteers"></span>
                                    <p class="small mb-0">Donators</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <span id="sidebarBeneficiaries"></span>
                                    <p class="small mb-0">Beneficiaries</p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 mt-4">
                            <!-- FIX: Donate Now links to donate.php with event_id param -->
                            <a id="donateBtn" href="donate.php" class="btn btn-primary btn-lg">
                                <i class="fas fa-heart me-2"></i>Donate Now
                            </a>
                            <button class="btn btn-outline-secondary btn-lg" id="shareBtn">
                                <i class="fas fa-share-alt me-2"></i>Share This Campaign
                            </button>

                        </div>

                    </div>
                </div>

                <!-- Foundation Impact Reminder -->
                <div class="card shadow-sm bg-light">
                    <div class="card-body text-center">
                        <h6>Paarvedan Foundation Impact</h6>
                        <p class="small mb-2">Join our community of <strong>278</strong> volunteers who have
                            supported over <strong>1.50L beneficiaries</strong>.</p>
                        <p class="mb-2">Together we make a Difference</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const events = {
                ambulanceProject: {
                    title: "Providing Ambulances to Multiple Regions of Mumbai",
                    description: "A healthcare access initiative aimed at strengthening Mumbai’s emergency medical response system by providing 6 ambulances to government hospitals serving the urban poor.",
                    date: "2026",
                    time: "",
                    location: "Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/ambulance.jpg",
                    goal: "₹10,0000",
                    raised: "₹10,000",
                    volunteers: 50,
                    beneficiaries: 10,
                    eventDescFull: "India is experiencing rapid urbanisation, with a growing population concentrated in metropolitan cities like Mumbai. Despite the presence of healthcare infrastructure, a significant portion of Mumbai’s urban poor faces limited access to timely medical care due to overcrowded facilities and inadequate transport systems. Approximately 35% of Mumbai’s population has poor access to healthcare infrastructure. This project aims to address these disparities by strengthening the ambulance system of major government hospitals located in Sion, Worli, and Mumbadevi. The initiative includes conducting a needs assessment, collaborating with healthcare authorities, procuring and equipping 6 ambulances, training ambulance staff and paramedics in advanced life-saving techniques, and deploying ambulances in coordination with government hospitals, along with ongoing monitoring and evaluation.",
                    conclusion: "The Ambulance Support Project represents a strategic intervention to improve healthcare accessibility for underprivileged communities in Mumbai. By providing 6 fully equipped ambulances and strengthening collaboration with government hospitals, the initiative enhances emergency response capacity and contributes toward long-term improvements in urban healthcare delivery."
                },

                scholarshipProgramme: {
                    title: "Paarvedan Foundation Scholarship for Students",
                    description: "A comprehensive scholarship and mentorship initiative aimed at empowering economically disadvantaged students through financial assistance, digital support, and holistic development.",
                    date: "2024",
                    time: "",
                    location: "India",
                    organizer: "Paarvedan Foundation",
                    image: "image/schoolstudent.jpg",
                    goal: "₹10,000",
                    raised: "₹10,000",
                    volunteers: 10000,
                    beneficiaries: 10000,
                    eventDescFull: "The Paarvedan Foundation Scholarship Programme addresses the growing educational divide in India, where thousands of meritorious students from low-income families are unable to pursue higher education due to financial constraints. National data indicates that over 3 crore students discontinue their studies after Class 10 annually, and 68% of students in urban slums and rural areas cite lack of scholarships as their primary barrier. The programme provides financial grants, structured mentorship, career counselling, digital infrastructure support, and skill development workshops to students from economically weaker sections, particularly those in Classes 9–12 and undergraduate courses. Special priority is given to orphans, single-parent households, government school students, girl students, and differently-abled students. Through transparent selection, direct bank transfers, continuous monitoring, and CSR-compliant reporting, the initiative aims to reduce dropout rates and create a sustainable talent pool for India's future workforce.",
                    conclusion: "The Scholarship Programme represents a strategic, CSR-aligned intervention under Section 135 Schedule VII of the Companies Act, 2013, focusing on promoting education and employment-enhancing vocational skills. By combining financial assistance with mentorship, digital inclusion, and long-term sustainability planning, the initiative ensures that economic hardship does not prevent talented students from achieving academic and professional success."
                },

                grainDistribution: {
                    title: "Daily 100 Packet Grain & Food Distribution Program",
                    description: "A structured 26-day hunger relief initiative distributing 100 nutritious food packets daily to economically vulnerable communities under the Zero Hunger Initiative.",
                    date: "2026",
                    time: "",
                    location: "Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/secure.jpg",
                    goal: "₹2,08,000",
                    raised: "₹0",
                    volunteers: 26,
                    beneficiaries: 2,
                    eventDescFull: "Hunger remains a critical challenge for economically vulnerable populations, including homeless individuals, daily wage workers, migrant laborers, elderly persons, and marginalized communities. In response to rising living costs and unstable incomes, Paarvedan Foundation launched the Daily 100 Packet Distribution Program as part of its Zero Hunger Initiative. The program operated as a consistent daily intervention over 26 consecutive days, ensuring reliability and sustained relief. Each day, 100 nutritious and hygienically prepared food packets were distributed at identified locations. Meals were prepared using fresh ingredients under strict hygiene and quality control standards, with proper packaging and safety checks prior to distribution. Volunteers actively supported meal preparation, packing, coordination, and respectful on-ground distribution, maintaining dignity and organization throughout the process.",
                    conclusion: "With a total of 2,600 food packets distributed and an estimated expenditure of ₹2,08,000 at ₹80 per packet, the initiative demonstrated efficient resource utilization while maintaining high nutritional and safety standards. The program reinforced Paarvedan Foundation’s commitment to addressing fundamental human needs, strengthening community solidarity, and working consistently toward the vision of a hunger-free society."
                }




                // ── Add new events below using this template ──────────────────
                // ,newEventId: {
                //     title: "",
                //     description: "",
                //     date: "",
                //     time: "",
                //     location: "",
                //     organizer: "Paarvedan Foundation",
                //     image: "image/your-image.jpg",
                //     goal: "₹0",
                //     raised: "₹0",
                //     volunteers: 0,
                //     beneficiaries: 0,
                //     eventDescFull: "",
                //     conclusion: ""
                // }
            };

            const params = new URLSearchParams(window.location.search);
            const eventId = params.get("id");
            const event = events[eventId];

            if (event) {
                // ── Hero section ──────────────────────────────────────────────
                document.getElementById("eventTitle").innerText = event.title;
                document.getElementById("eventDesc").innerText = event.description;
                document.getElementById("eventDate").innerText = event.date;
                // document.getElementById("eventTime").innerText      = event.time;
                document.getElementById("eventLocation").innerText = event.location;
                document.getElementById("eventOrganizer").innerText = event.organizer;
                document.getElementById("eventDescFull").innerText = event.eventDescFull;
                document.getElementById("conclusion").innerText = event.conclusion;

                document.getElementById("eventHero").style.backgroundImage =
                    `linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(${event.image})`;

                // ── Sidebar — correctly mapped ────────────────────────────────
                document.getElementById("heroGoal").innerText = event.goal;
                document.getElementById("sidebarGoal").innerText = event.goal;
                document.getElementById("sidebarRaised").innerText = event.raised;
                document.getElementById("sidebarLocation").innerText = event.location;
                document.getElementById("sidebarOrganizer").innerText = event.organizer;
                document.getElementById("sidebarVolunteers").innerText = event.volunteers;
                document.getElementById("sidebarBeneficiaries").innerText = event.beneficiaries;

                // ── Donate Now button → donate.php with event_id param ────────
                document.getElementById("donateBtn").href = `donate.php?event_id=${eventId}`;

            } else {
                // ── Event not found ───────────────────────────────────────────
                document.getElementById("eventTitle").innerText = "Event Not Found";
                document.getElementById("eventDesc").innerText = "The event you are looking for does not exist or may have been removed.";
                document.getElementById("heroMeta").style.display = "none";
                document.getElementById("mainContent").innerHTML = `
                    <div class="event-not-found">
                        <i class="fas fa-calendar-times"></i>
                        <h4>Oops! This event doesn't exist.</h4>
                        <p class="text-muted">Please check the link or browse our upcoming events.</p>
                        <a href="events.php" class="btn btn-success mt-2">
                            <i class="fas fa-arrow-left me-2"></i>Back to All Events
                        </a>
                    </div>`;
            }

            // ── Share button ──────────────────────────────────────────────────
            document.getElementById("shareBtn") && document.getElementById("shareBtn").addEventListener("click", function() {
                const shareUrl = window.location.href;
                const shareText = event ?
                    `Check out this campaign from Paarvedan Foundation: ${event.title}` :
                    "Check out this campaign from Paarvedan Foundation!";

                if (navigator.share) {
                    navigator.share({
                        title: "Paarvedan Foundation",
                        text: shareText,
                        url: shareUrl
                    });
                } else {
                    navigator.clipboard.writeText(shareUrl + "\n\n" + shareText)
                        .then(() => alert("Link copied to clipboard! You can now share it."))
                        .catch(() => alert("Could not copy link. Please copy the URL manually."));
                }
            });

        });
    </script>

    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>