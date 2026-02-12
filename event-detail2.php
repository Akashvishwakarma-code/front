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
            /* fallback color if image missing */
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
        <!-- start navigation -->
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
                    <i class="fas fa-clock"></i>
                    <span id="eventTime"></span>
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
                        <h3 class="card-title mb-4">About This Event</h3>
                        <p id="eventDescFull"></p>

                        <h3 class="card-title mb-4">Overview</h3>
                        <p id="conclusion"></p>

                        <h4 class="mt-5 mb-3">How You Can Participate</h4>
                        <p>Your involvement can directly contribute to our mission of
                            "<strong>Bridging Generations, Inspiring Lives</strong>". Whether as a volunteer,
                            donor, or attendee, you become part of a legacy that started in the 1960s with our
                            founder, Bhagirth Ji Rupchand Chouhan.</p>


                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-success">Quality Education</span>
                            <span class="badge bg-primary">Reduced Inequality</span>
                            <span class="badge bg-info">Partnerships for the Goals</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Event Info & Actions -->
            <div class="col-lg-4">

                <!-- Event Quick Info Card -->
                <div class="card shadow-sm info-card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Event Details</h5>

                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-calendar-alt"></i>
                            <strong>Date:</strong> <span id="sidebarDate"></span>
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-clock"></i>
                            <strong>Time:</strong> <span id="sidebarTime"></span>
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
                                    <p class="small mb-0">Volunteers Needed</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <span id="sidebarBeneficiaries"></span>
                                    <p class="small mb-0">Target Beneficiaries</p>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-primary btn-lg" id="registerBtn">
                                <i class="fas fa-user-plus me-2"></i>Register as Volunteer
                            </button>
                            <button class="btn btn-outline-secondary btn-lg" id="shareBtn">
                                <i class="fas fa-share-alt me-2"></i>Share This Event
                            </button>
                            <a href="/front/events.php" class="btn btn-outline-dark btn-lg">
                                <i class="fas fa-arrow-left me-2"></i>Back to All Events
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Foundation Impact Reminder -->
                <div class="card shadow-sm bg-light">
                    <div class="card-body text-center">
                        <h6>Paarvedan Foundation Impact</h6>
                        <p class="small mb-2">Join our community of <strong>278</strong> volunteers who have
                            supported over <strong>1.50L beneficiaries</strong>.</p>
                        <a href="events.php" class="btn btn-sm btn-success">View All Events</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    <!-- end footer -->
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
                drawing: {
                    title: "Drawing Competition",
                    description: "Paarvedan Foundation organised a drawing competition to encourage kids to show their creativity and imagination.",
                    date: "28 May 2025",
                    time: "11:00 AM",
                    location: "Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/drawing.jpg",
                    volunteers: 20,
                    beneficiaries: 150,
                    eventDescFull: "Access to creative and co-curricular opportunities remains limited for children from economically vulnerable communities. While formal education focuses primarily on academics, creative expression through art plays a crucial role in a child’s cognitive development, emotional well-being, confidence, and imagination. However, many children from underserved areas lack access to basic art materials and platforms to showcase their talent.To address this gap, Paarvedan Foundation initiated the Drawing Competition Program as a recurring community-based intervention aimed at encouraging creativity, self-expression, and inclusive participation among children. The initiative provides essential stationery, a supportive environment, and recognition through prizes, thereby fostering confidence and enthusiasm for learning beyond textbooks. This program aligns with Paarvedan Foundation’s broader mission of promoting holistic child development and inclusive community engagement.",
                    conclusion: "The Drawing Competition Program implemented by Paarvedan Foundation demonstrates a sustained commitment to holistic child development through creative engagement. By providing essential resources, safe spaces, and recognition, the initiative has positively impacted hundreds of children across three consecutive years. With continued support, improved documentation, and expanded outreach, this program holds strong potential for further scaling and long-term community impact, making it a valuable and replicable model for CSR and NGO-led child development initiatives."
                },

                notebook: {
                    title: "Notebook Distribution Program",
                    description: "Paarvedan Foundation organised a Notebook Distribution Program to support children from economically vulnerable communities by ensuring access to essential learning materials and promoting uninterrupted education.",
                    date: "2025",
                    time: "Community-Based Distribution",
                    location: "Sandhurst Road & Buldhana",
                    organizer: "Paarvedan Foundation",
                    image: "image/notebook.jpg",
                    volunteers: 25,
                    beneficiaries: 600,
                    eventDescFull: "Access to basic learning materials such as notebooks and stationery remains a significant challenge for children from economically vulnerable communities. Although school enrollment rates have improved, many families continue to face financial constraints that limit their ability to consistently provide essential educational supplies. The absence of adequate learning materials directly impacts classroom participation, homework completion, academic preparedness, and overall confidence among students.\n\nTo address this critical gap, Paarvedan Foundation initiated the Notebook Distribution Program as a structured educational support intervention aimed at reducing financial barriers and strengthening academic continuity. The initiative ensures timely access to notebooks and essential stationery, thereby enabling children to actively participate in school activities without material limitations.\n\nBetween 2023 and 2025, the program was implemented across multiple locations, including Sandhurst Road and Buldhana, expanding both in scale and institutional collaboration. Initial drives were self-funded by the Founder, reflecting strong grassroots commitment despite financial limitations. In 2025, the program achieved a significant milestone through collaboration with Reliance Foundation, enabling outreach to 300 children in a single phase and substantially increasing overall program reach.\n\nThrough community coordination, transparent beneficiary identification, and ethical distribution practices, the initiative maintained inclusivity and need-based targeting. The program aligns with Paarvedan Foundation’s broader mission of strengthening access to education, reducing inequality, and promoting holistic child development within underserved communities.",
                    conclusion: "The Notebook Distribution Program implemented by Paarvedan Foundation represents a sustained and impactful effort to address educational inequality by meeting a fundamental learning need. From independently funded grassroots initiatives to expanded institutional collaboration, the program demonstrates resilience, scalability, and community-centered development. By supporting over 600 children across three years, the initiative has strengthened academic preparedness, reduced financial stress on families, and reinforced community trust. With continued partnerships, improved documentation, and expanded outreach, the program holds strong potential for long-term educational impact and replication within CSR and NGO frameworks."
                },

                sports: {
                    title: "Indoor Outdoor Sports",
                    description: "Paarvedan Foundation organised a Sports Competition to promote teamwork, sportsmanship, and healthy competition among children and youth from economically vulnerable communities.",
                    date: "2026",
                    time: "Community-Based Competition",
                    location: "Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/indoor-outdoor.jpg",
                    volunteers: 30,
                    beneficiaries: 200,
                    eventDescFull: "Access to sports and recreational activities remains limited for children and youth from economically vulnerable communities. While formal education focuses primarily on academics, physical activity through sports plays a crucial role in a child’s physical health, mental well-being, social skills, and overall development. However, many children from underserved areas lack access to safe play spaces, organized sports programs, and opportunities to develop teamwork and leadership skills.\n\nTo address this gap, Paarvedan Foundation initiated the Sports Competition Program as a recurring community-based intervention aimed at promoting physical activity, teamwork, and healthy competition among children and youth. The initiative provides essential sports equipment, organizes inclusive competitions in football, cricket, and chess, and fosters a supportive environment that encourages participation regardless of skill level. This program aligns with Paarvedan Foundation’s broader mission of promoting holistic child development and inclusive community engagement.",
                    conclusion: "The Sports Competition Program implemented by Paarvedan Foundation demonstrates a sustained commitment to promoting physical activity and social development through sports engagement. By providing resources, organizing inclusive competitions, and fostering a supportive environment, the initiative has positively impacted hundreds of children across multiple years. With continued support, improved documentation, and expanded outreach, this program holds strong potential for further scaling and long-term community impact, making it a valuable model for CSR and NGO-led child development initiatives."
                },

                christmasActivity: {
                    title: "Eco-Friendly Christmas Activity Program",
                    description: "Paarvedan Foundation organised an eco-friendly Christmas Activity Program integrating creativity, sustainability, and community appreciation through recycling-based festive workshops and inclusive celebrations.",
                    date: "2025",
                    time: "Festive Seasonal Initiative",
                    location: "Sandhurst Road, Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/christmas.jpg",
                    volunteers: 30,
                    beneficiaries: 500,
                    eventDescFull: "Festive celebrations contribute significantly to emotional well-being, social inclusion, and community bonding, particularly among children from underserved backgrounds. However, traditional festive practices often generate environmental waste and remain inaccessible to economically vulnerable communities. Recognizing the dual need for inclusive celebration and environmental responsibility, Paarvedan Foundation conceptualized the Christmas Activity Program as a sustainability-driven and community-centered initiative.\n\nThe program evolved from small-scale festive engagements in 2023 and 2024, which focused on chocolate distribution, games, and informal interaction sessions, into a structured eco-conscious CSR collaboration in 2025. In partnership with HDFC Ergo, the Foundation organized a recycling-based Christmas product-making workshop titled 'Eco-Friendly Christmas: Recycling Creativity for a Green Cause.' Participants creatively reused discarded bottles and recyclable materials to design festive decorations such as Santa ornaments, jingle bells, Christmas trees, bangles, and decorative items.\n\nBeyond creative engagement, the initiative included a community appreciation component, where handcrafted festive products were presented to the Sandhurst Road Police Station as tokens of gratitude for their continuous public service. This thoughtful gesture strengthened community relationships while reinforcing values of respect and appreciation.\n\nThrough structured planning, material reuse, volunteer coordination, and transparent implementation, the program integrated festive joy, environmental awareness, and CSR–NGO collaboration. The initiative aligns with Paarvedan Foundation’s broader mission of holistic child development, sustainable community engagement, and promotion of responsible celebration practices.",
                    conclusion: "The Christmas Activity Program implemented by Paarvedan Foundation demonstrates a progressive shift from simple festive engagement to a structured, sustainability-focused CSR initiative. By combining creativity, recycling awareness, and community appreciation, the program generated meaningful social, emotional, and environmental impact. Benefiting over 500 children and community members across three years, the initiative stands as a replicable model for eco-conscious festive celebrations within NGO and CSR frameworks. With continued partnerships, innovation, and outreach expansion, the program holds strong potential for long-term community engagement and environmental awareness."
                },

                travelKitDistribution: {
                    title: "Travel Kit & Old Age Kit Distribution Program",
                    description: "Paarvedan Foundation organised the Travel Kit and Old Age Kit Distribution Program to promote personal hygiene, health awareness, and dignity among children and elderly individuals from economically vulnerable communities.",
                    date: "2025",
                    time: "Community-Based Welfare Initiative",
                    location: "Community Distribution Areas",
                    organizer: "Paarvedan Foundation",
                    image: "image/travelkit.jpg",
                    volunteers: 28,
                    beneficiaries: 600,
                    eventDescFull: "Access to basic hygiene and personal care essentials remains limited for individuals from economically vulnerable communities. Children often lack consistent access to essential hygiene products, affecting school participation, confidence, and health, while elderly individuals frequently face neglect of fundamental care needs that impact dignity and well-being. Recognizing these gaps, Paarvedan Foundation initiated the Travel Kit Distribution Program as a structured welfare intervention aimed at promoting hygiene, health awareness, and personal dignity.\n\nThe program began in 2023 with the distribution of comprehensive hygiene travel kits to 300 children. Each kit included toothpaste, toothbrush, shampoo, soap, and other essential care materials, carefully packaged in organized boxes to ensure convenience and respect in distribution. In 2024, the initiative continued on a smaller scale, sustaining access to hygiene support based on available resources.\n\nIn 2025, the Foundation expanded the program’s scope by introducing the Old Age Kit Distribution, reaching 300 elderly beneficiaries with tailored care kits designed to address senior-specific hygiene and comfort needs. This expansion reflected the Foundation’s adaptive and inclusive approach to community welfare across age groups.\n\nThe program was implemented through planned procurement, structured packaging, volunteer coordination, and transparent beneficiary identification. By addressing both child and elderly care needs, the initiative aligns with Paarvedan Foundation’s mission of promoting health, dignity, and holistic community well-being.",
                    conclusion: "The Travel Kit and Old Age Kit Distribution Programs implemented by Paarvedan Foundation represent a comprehensive and compassionate approach to addressing essential hygiene needs across generations. By supporting over 600 beneficiaries between 2023 and 2025, the initiative has enhanced health awareness, reduced financial stress, and strengthened dignity among vulnerable populations. With strengthened partnerships, systematic documentation, and expanded outreach, the program holds strong potential for scalable impact within CSR and NGO frameworks, contributing to healthier and more dignified communities."
                },

                solarLightResearch: {
                    title: "Solar Street Light Research & Assessment Activity",
                    description: "Paarvedan Foundation conducted a structured Solar Street Light Research and Assessment Activity to evaluate infrastructure functionality, identify community lighting needs, and support data-driven CSR intervention planning.",
                    date: "2025",
                    time: "Field Research Initiative",
                    location: "Dhutum Gaon, near JNPT, Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/sun.jpg",
                    volunteers: 12,
                    beneficiaries: 800,
                    eventDescFull: "Access to reliable street lighting is essential for ensuring safety, mobility, and quality of life in rural and semi-urban communities. While solar street lights contribute significantly to sustainable infrastructure and reduced dependency on conventional electricity sources, their effectiveness depends on regular monitoring, maintenance, and alignment with actual community needs. Recognizing these factors, Paarvedan Foundation undertook a Solar Street Light Research and Assessment Activity in Dhutum Gaon near JNPT, Mumbai.\n\nThe initiative focused on assessing the operational status of 33 installed solar street light poles, evaluating maintenance conditions, reviewing adequacy of lighting coverage, and identifying additional requirements through direct community interaction. Rather than direct infrastructure installation, the activity emphasized structured field surveys, documentation, and stakeholder consultation to enable evidence-based intervention planning.\n\nThrough on-ground assessments and community engagement, the Foundation documented gaps and enhancement requirements. Dhutum Gaon, adopted by Indian Oil Corporation, benefited from this structured research input. Financial support of ₹5,000 from Adani India further strengthened the collaborative CSR framework. The findings provided by Paarvedan Foundation supported informed decision-making and coordinated action among CSR stakeholders.\n\nThis research-driven approach aligns with the Foundation’s broader mission of sustainable development, community well-being, and responsible infrastructure planning, ensuring that public lighting solutions remain functional, safe, and community-responsive.",
                    conclusion: "The Solar Street Light Research and Assessment Activity conducted by Paarvedan Foundation highlights the importance of data-driven planning in sustainable infrastructure development. By assessing 33 solar installations, capturing community feedback, and facilitating CSR coordination, the initiative contributed to improved safety and public space usability in Dhutum Gaon. Although the Foundation did not directly execute infrastructure installation, its role as a research and implementation partner ensured that interventions remained need-based, efficient, and sustainable. With continued collaboration and structured documentation, such initiatives hold strong potential for scalable impact within CSR and rural development frameworks."
                },

                diyaMakingProgram: {
                    title: "Diya Making & Distribution Program",
                    description: "Paarvedan Foundation organised a Diya Making & Distribution Program in collaboration with Mahindra Holidays to promote cultural inclusivity, creativity, and the spirit of giving during Diwali.",
                    date: "2025",
                    time: "Diwali Festive Initiative",
                    location: "Mahindra Holidays & Asha Sadan, Sandhurst Road",
                    organizer: "Paarvedan Foundation",
                    image: "image/diya.jpg",
                    volunteers: 20,
                    beneficiaries: 250,
                    eventDescFull: "Cultural celebrations such as Diwali play a significant role in strengthening social bonds, preserving traditions, and fostering emotional well-being. However, for many underprivileged communities, opportunities to participate meaningfully in festive celebrations remain limited. To promote inclusive cultural engagement and the spirit of giving, Paarvedan Foundation organized the Diya Making & Distribution Program in collaboration with Mahindra Holidays.\n\nThe initiative was designed as a participatory Diwali activity combining artistic expression with community outreach. A structured diya-making workshop was conducted at Mahindra Holidays, where families, friends, and community members engaged in decorating diyas using paints, brushes, and decorative materials. Skilled artisans and facilitators guided participants through traditional and creative diya-making techniques, encouraging collaboration, creativity, and festive enthusiasm across age groups.\n\nThe handmade diyas were later distributed at Asha Sadan, Sandhurst Road, ensuring that the light of Diwali reached underserved individuals. This outreach transformed creative artifacts into meaningful symbols of hope, inclusion, and shared celebration. By extending the festive experience beyond the workshop venue, the initiative strengthened community bonds and reinforced values of compassion and cultural respect.\n\nThrough structured planning, guided sessions, volunteer coordination, and CSR collaboration with Mahindra Holidays, the program aligned with Paarvedan Foundation’s mission of holistic development, cultural inclusion, and dignified community engagement.",
                    conclusion: "The Diya Making & Distribution Program implemented by Paarvedan Foundation reflects a meaningful blend of cultural preservation, creativity, and social outreach. By engaging participants in artistic expression and extending festive joy to underserved communities, the initiative fostered inclusivity, compassion, and shared celebration. The collaboration with Mahindra Holidays further strengthened the program’s structure and reach. With continued partnerships and expanded outreach, such cultural engagement initiatives hold strong potential for scalable impact within CSR and NGO frameworks, promoting festivals that are both joyful and socially inclusive."
                },

                clothesDistribution: {
                    title: "Clothes Distribution Drive – Warming Hearts Initiative",
                    description: "Paarvedan Foundation, in collaboration with HDFC ERGO, organized a Clothes Distribution Drive to provide warm and dignified clothing support to vulnerable urban populations during the winter season.",
                    date: "2025",
                    time: "Winter Relief Initiative",
                    location: "Urban Community Areas",
                    organizer: "Paarvedan Foundation",
                    image: "image/cloths.jpg",
                    volunteers: 10,
                    beneficiaries: 800,
                    eventDescFull: "Access to basic necessities such as clothing remains a major challenge for vulnerable urban populations, particularly homeless individuals, migrant workers, and elderly citizens living without stable shelter. During colder months, the absence of adequate clothing significantly increases exposure-related health risks, reduces mobility, and affects overall dignity and well-being. Recognizing this urgent seasonal need, Paarvedan Foundation, in collaboration with HDFC ERGO, organized a structured Clothes Distribution Drive aimed at providing immediate relief while reinforcing compassion and community responsibility.\n\nPrior to implementation, field observations and informal assessments identified a high dependency on charitable support for winter clothing. Many individuals were found relying on worn-out or insufficient garments, lacking the financial means to purchase warm clothing. Based on these findings, the program was designed as a high-impact, low-cost intervention capable of preventing health complications and reducing vulnerability among marginalized populations.\n\nThe initiative was executed through organized donation collection drives, systematic sorting, cleaning, and quality inspection processes. Only clean, wearable, and season-appropriate clothing was selected for distribution to maintain dignity and respect. Volunteers ensured structured distribution with priority given to elderly individuals, women, and those in visibly vulnerable conditions. A total of 800 individuals were supported through this effort, with an estimated cost-effective expenditure of approximately ₹1,20,000, averaging ₹150 per clothing set.\n\nThrough careful planning, CSR collaboration, and responsible service delivery, the program aligned with Paarvedan Foundation’s broader mission of inclusive development, humanitarian action, and dignified community welfare.",
                    conclusion: "The Clothes Distribution Drive implemented by Paarvedan Foundation in collaboration with HDFC ERGO stands as a strong example of structured humanitarian intervention. By supporting 800 vulnerable individuals with warm and usable clothing, the initiative reduced exposure-related health risks while restoring dignity and comfort. The cost-effective and organized implementation demonstrates how thoughtful planning and collaborative partnerships can maximize social impact. With continued CSR engagement and community participation, such relief initiatives hold strong potential for scalable and sustained outreach within urban welfare frameworks."
                },

                womenEmpowermentSHG: {
                    title: "Women Empowerment Self-Help Group (SHG) Initiative",
                    description: "Paarvedan Foundation organized a Women Empowerment Self-Help Group (SHG) Gathering to foster resilience, financial awareness, emotional well-being, and leadership among women from vulnerable communities.",
                    date: "2025",
                    time: "Community Empowerment Initiative",
                    location: "Community-Based Gathering",
                    organizer: "Paarvedan Foundation",
                    image: "image/empowerwoman.jpg",
                    volunteers: 12,
                    beneficiaries: 60,
                    eventDescFull: "Women empowerment is fundamental to inclusive and sustainable social development. Women from economically and socially vulnerable backgrounds often face barriers such as limited financial literacy, restricted access to resources, lack of confidence, and minimal support systems. These challenges impact not only individual growth but also the well-being of families and communities. Recognizing these gaps, Paarvedan Foundation organized a Women Empowerment Self-Help Group (SHG) Gathering designed as a safe, inclusive, and structured platform for dialogue, skill-building, and collective growth.\n\nGrounded in field observations and community interactions, the initiative responded to a strong need for emotional support spaces, financial awareness, and opportunities for skill enhancement. The Self-Help Group model was identified as a high-impact approach capable of strengthening peer networks, encouraging self-expression, and promoting long-term community resilience.\n\nThe program included structured components such as open-circle discussions fostering trust and solidarity, personal empowerment storytelling sessions, skill-building workshops on communication and decision-making, introductory financial literacy guidance on budgeting and savings, and expressive arts activities supporting emotional well-being. Discussions also encouraged awareness around education, health, entrepreneurship, and collective community participation.\n\nApproximately 60 women from marginalized and low-income backgrounds participated in the initiative. With the support of 12 volunteers and facilitators, the program was implemented through coordinated planning, inclusive facilitation, and structured engagement. The initiative aligns with Paarvedan Foundation’s broader mission of promoting holistic development, grassroots leadership, and sustainable community empowerment.",
                    conclusion: "The Women Empowerment Self-Help Group Initiative implemented by Paarvedan Foundation represents a meaningful step toward inclusive and sustainable community development. By strengthening confidence, enhancing financial awareness, and fostering peer support networks, the program empowered women as individuals and as catalysts of social change. Conducted through a cost-effective and structured approach, the initiative lays the foundation for recurring SHG engagements and long-term empowerment programs. With continued facilitation, partnerships, and expansion, this model holds strong potential for scalable impact within CSR and NGO empowerment frameworks."
                },

                communityMovieScreening: {
                    title: "Community Movie Screening Initiative",
                    description: "Paarvedan Foundation organized a large-scale Community Movie Screening Initiative at Metro INOX, providing free access to popular Indian films and promoting social inclusion, emotional well-being, and shared cultural experiences.",
                    date: "2025",
                    time: "Community Recreation Initiative",
                    location: "Metro INOX",
                    organizer: "Paarvedan Foundation",
                    image: "image/moviescreening.jpg",
                    volunteers: 18,
                    beneficiaries: 6000,
                    eventDescFull: "Access to meaningful recreation and inclusive cultural experiences remains limited for economically vulnerable communities, where cinema is often considered a luxury rather than a source of emotional relief and social connection. Recognizing the importance of shared recreational experiences in promoting mental well-being and community bonding, Paarvedan Foundation organized a Community Movie Screening Initiative at Metro INOX to provide free access to popular Indian films for underprivileged beneficiaries.\n\nBased on community interactions and field observations, the Foundation identified limited access to safe entertainment spaces, high levels of work-related stress among daily wage earners, and minimal exposure of children and youth to cultural outings. Cinema was therefore identified as a high-impact engagement tool capable of fostering emotional upliftment, dignity, and collective joy.\n\nThe initiative included screenings of major Indian films—Jawan (1,500 tickets), Dunki (1,500 tickets), and Pathaan (3,000 tickets)—resulting in a total distribution of 6,000 tickets. Screenings were scheduled across multiple shows to ensure organized crowd management and comfortable viewing experiences. Beneficiaries were identified through NGO networks and community groups, with priority given to families, youth, and daily wage workers. Volunteers coordinated seating, guided first-time cinema visitors, and ensured smooth entry and exit processes within a professional and safe cinema infrastructure.\n\nImplemented through structured planning, stakeholder coordination, and cost-effective partnership arrangements, the initiative aligned with Paarvedan Foundation’s mission of holistic social development—addressing emotional and cultural well-being alongside essential welfare needs.",
                    conclusion: "The Community Movie Screening Initiative organized by Paarvedan Foundation demonstrates the transformative potential of inclusive entertainment as a tool for social well-being. By enabling approximately 6,000 individuals to experience cinema in a dignified and welcoming environment, the program fostered joy, belonging, and community bonding. The initiative highlights the importance of addressing emotional and cultural dimensions of development while leveraging strategic partnerships for large-scale impact. With continued collaboration and expansion, such recreational inclusion programs hold strong potential for sustained and scalable social engagement."
                },

                beachCleaningInitiative: {
                    title: "Coastal Cleanliness & Beach Restoration Initiative",
                    description: "Paarvedan Foundation organized a large-scale Beach Cleaning and Coastal Restoration Initiative across Dadar Beach, Versova Beach, and Girgaon Chowpatty to promote environmental sustainability, reduce marine pollution, and strengthen civic responsibility.",
                    date: "2025",
                    time: "Environmental Sustainability Initiative",
                    location: "Dadar Beach, Versova Beach & Girgaon Chowpatty, Mumbai",
                    organizer: "Paarvedan Foundation",
                    image: "image/beachclean.jpg",
                    volunteers: 45,
                    beneficiaries: 5000,
                    eventDescFull: "Urban coastlines play a critical role in environmental balance, marine biodiversity, and public health. However, rapid urbanization, improper waste disposal, and limited civic awareness have led to severe pollution across Mumbai’s beaches. Plastic waste, food packaging, fishing debris, and hazardous materials accumulate along shorelines, posing risks to marine ecosystems, coastal workers, and public safety. In response to these environmental challenges, Paarvedan Foundation organized a structured Beach Cleaning and Coastal Restoration Initiative across Dadar Beach, Versova Beach, and Girgaon Chowpatty.\n\nPre-drive field assessments identified significant accumulation of plastic waste, glass fragments, metal scraps, and mixed litter. The initiative was therefore designed as a high-impact environmental intervention combining direct waste removal with public awareness and volunteer engagement.\n\nThe drive involved approximately 45 volunteers who were assigned designated cleaning zones at each beach to ensure systematic coverage. Waste was manually collected, segregated into plastic, glass, metal, and mixed categories, and safely handed over to authorized disposal systems. Safety protocols were implemented through the provision of gloves, masks, collection bags, and first-aid readiness. An estimated 1,200 kg of waste was collected, with approximately 55% identified as plastic and 45% as mixed waste.\n\nBeyond immediate waste removal, the initiative promoted environmental awareness among beach visitors and local residents, encouraging responsible waste management practices and civic accountability. The program aligns with Paarvedan Foundation’s broader mission of environmental sustainability, public hygiene, and community-driven action.",
                    conclusion: "The Coastal Cleanliness & Beach Restoration Initiative implemented by Paarvedan Foundation demonstrates the power of collective environmental responsibility. By removing approximately 1,200 kg of waste and mobilizing 45 volunteers across three major Mumbai beaches, the initiative significantly improved coastal hygiene and raised awareness about marine conservation. The program highlights how structured planning, community participation, and cost-effective execution can generate meaningful ecological impact. With sustained engagement and expanded partnerships, such environmental interventions hold strong potential for scalable and long-term coastal preservation."
                },

                oldAgeHomeCareEngagement: {
                    title: "Old-Age Home Care & Engagement Initiative",
                    description: "Paarvedan Foundation conducted an Old-Age Home Care & Engagement Initiative to provide emotional support, companionship, and essential assistance to senior citizens residing in institutional care homes.",
                    date: "2025",
                    time: "Elderly Care & Emotional Support Initiative",
                    location: "All Saint Old Age Home & Rashmi Old Age Home, Thane",
                    organizer: "Paarvedan Foundation",
                    image: "image/manwithload.jpg",
                    volunteers: 15,
                    beneficiaries: 85,
                    eventDescFull: "Senior citizens residing in institutional care facilities often face emotional isolation, limited social interaction, and reduced recreational engagement despite receiving basic shelter and medical support. With changing family structures and increasing urban migration, elderly individuals in old-age homes require not only physical care but also emotional connection, dignity, and companionship. Recognizing this need, Paarvedan Foundation organized the Old-Age Home Care & Engagement Initiative at All Saint Old Age Home and Rashmi Old Age Home in Thane.\n\nGrounded in field observations and caregiver insights, the initiative addressed emotional loneliness, limited engagement opportunities, and the need for meaningful human interaction among elderly residents. The program was designed as a humanitarian intervention focused on empathy, companionship, and respectful care.\n\nKey activities included one-on-one conversations, group interactions, light recreational engagement such as music and storytelling sessions, and distribution of essential daily-use items and refreshments. Activities were conducted under caregiver supervision, with attention to hygiene, safety protocols, and special care for residents with mobility or health challenges. Approximately 85 senior citizens directly benefited from the initiative.\n\nSupported by 15 volunteers, the program emphasized gentle, inclusive engagement while reinforcing respect and dignity for elderly residents. The initiative aligns with Paarvedan Foundation’s broader mission of compassionate social welfare, holistic elderly care, and community responsibility toward senior citizens.",
                    conclusion: "The Old-Age Home Care & Engagement Initiative implemented by Paarvedan Foundation represents a meaningful effort to enhance emotional well-being and dignity among institutionalized senior citizens. By supporting approximately 85 elderly residents through companionship, recreational engagement, and essential assistance, the program fostered visible emotional upliftment and strengthened caregiver-community collaboration. Conducted through a cost-effective and structured approach, the initiative reinforces the importance of holistic elderly care that extends beyond material support to human connection and empathy. With continued engagement and expanded outreach, such initiatives hold strong potential for sustained impact within elderly welfare and CSR frameworks."
                },

                womenEmpowermentSelfHelpGroup: {
                    title: "Women Empowerment Self-Help Group (SHG) Initiative",
                    description: "Paarvedan Foundation organized a Women Empowerment Self-Help Group (SHG) Initiative to foster confidence, financial literacy, emotional resilience, and collective leadership among women from marginalized communities.",
                    date: "2025",
                    time: "Community Empowerment & Capacity-Building Initiative",
                    location: "Community-Based Gathering",
                    organizer: "Paarvedan Foundation",
                    image: "image/team.jpg",
                    volunteers: 12,
                    beneficiaries: 60,
                    eventDescFull: "Women empowerment is central to inclusive and sustainable social development, yet many women from economically and socially vulnerable backgrounds continue to face barriers such as limited financial literacy, restricted access to opportunities, lack of confidence, and minimal support networks. Recognizing these systemic challenges, Paarvedan Foundation organized a Women Empowerment Self-Help Group (SHG) Initiative designed as a safe and structured platform for dialogue, learning, and collective growth.\n\nGrounded in field observations and community interactions, the initiative addressed the need for emotional support spaces, skill-building opportunities, and awareness on financial independence. The Self-Help Group model was adopted as a high-impact empowerment framework capable of strengthening peer support systems, enhancing communication skills, and fostering long-term community resilience.\n\nThe program incorporated structured components including open-circle discussions to encourage experience sharing, personal empowerment storytelling sessions, skill-building workshops focused on communication and decision-making, introductory financial literacy guidance on budgeting and savings, and expressive arts activities supporting emotional healing and stress relief. Discussions also promoted awareness on education, health, entrepreneurship, and active community participation.\n\nApproximately 60 women from low-income and marginalized backgrounds participated in the initiative, supported by 12 volunteers and facilitators who ensured structured coordination, inclusive engagement, and a safe environment. Implemented in a cost-effective manner with an estimated expenditure of ₹40,000, the program aligns with Paarvedan Foundation’s broader mission of grassroots leadership development, emotional well-being, and sustainable women empowerment.",
                    conclusion: "The Women Empowerment Self-Help Group Initiative implemented by Paarvedan Foundation represents a structured and sustainable approach to grassroots women empowerment. By strengthening confidence, promoting financial literacy, and fostering peer support networks, the program empowered participants as individuals and as catalysts for broader community transformation. The initiative lays the foundation for recurring SHG engagements and long-term empowerment pathways. With continued facilitation, partnerships, and expanded outreach, this model holds strong potential for scalable impact within CSR and NGO empowerment frameworks."
                },

                seedRakhiInitiative: {
                    title: "Seed Rakhi Environmental & Social Awareness Initiative",
                    description: "Paarvedan Foundation organized a Seed Rakhi Initiative to promote eco-friendly Raksha Bandhan celebrations by integrating sustainability, plantation awareness, and cultural values through biodegradable Seed Rakhis.",
                    date: "2025",
                    time: "Environmental & Cultural Sustainability Initiative",
                    location: "Community-Based Distribution & Awareness Campaign",
                    organizer: "Paarvedan Foundation",
                    image: "image/raki.jpg",
                    volunteers: 10,
                    beneficiaries: 750,
                    eventDescFull: "Traditional festive celebrations often generate significant non-biodegradable waste due to the use of plastic, synthetic threads, and chemical dyes. Recognizing the growing need to align cultural traditions with environmental sustainability, Paarvedan Foundation implemented the Seed Rakhi Environmental & Social Awareness Initiative. The program promoted biodegradable Seed Rakhis that can be planted after use, symbolizing both sibling bonds and ecological responsibility.\n\nGrounded in environmental research and community insights, the initiative responded to increasing awareness about sustainable alternatives during festivals, while addressing limited access to eco-friendly options. The program was structured as an awareness-driven and participatory intervention, combining cultural celebration with environmental education.\n\nA total of 750 Seed Rakhis were supported through collaborative partnerships, including 300 Seed Rakhis from HDFC (one-time support) and 450 Seed Rakhis from Maha NGO over three consecutive years (150 annually). Activities included demonstrations on Seed Rakhi usage and plantation techniques, awareness sessions on biodegradable materials, creative eco-friendly decoration engagement, and guidance on post-festival planting practices.\n\nApproximately 750 individuals and families directly benefited from the initiative, with broader indirect impact through increased environmental awareness and potential plantation of 750 seed units. Implemented with an estimated cost of ₹65,000, the program reflects cost-effective, partnership-driven sustainability action. The initiative aligns with Paarvedan Foundation’s mission of promoting responsible cultural engagement, environmental awareness, and community participation.",
                    conclusion: "The Seed Rakhi Environmental & Social Awareness Initiative implemented by Paarvedan Foundation represents a meaningful integration of tradition and sustainability. By transforming a cultural symbol into a tool for environmental action, the program successfully reduced potential plastic waste, encouraged plantation habits, and strengthened eco-conscious community behavior. Supported by corporate and NGO partnerships, the initiative demonstrates how culturally aligned sustainability programs can generate scalable environmental impact and long-term behavioral change within CSR and community engagement frameworks."
                },

                audiobookExtravaganza: {
                    title: "Harmony of Words – Audiobook Extravaganza",
                    description: "Paarvedan Foundation, in collaboration with HDFC ERGO, organized the Audiobook Extravaganza to promote inclusive education and accessible literature for visually impaired individuals through immersive audio-based learning experiences.",
                    date: "2025",
                    time: "Inclusive Education & Accessibility Initiative",
                    location: "Community-Based Accessible Venue",
                    organizer: "Paarvedan Foundation",
                    image: "image/audiobook.jpg",
                    volunteers: 10,
                    beneficiaries: 120,
                    eventDescFull: "Access to literature and educational resources remains a significant challenge for visually impaired individuals and persons with partial vision loss. Traditional print-based formats often exclude individuals with visual disabilities from fully engaging with knowledge, storytelling, and creative expression. Recognizing this accessibility gap, Paarvedan Foundation, in collaboration with HDFC ERGO, organized the Harmony of Words – Audiobook Extravaganza as an inclusive educational initiative centered on auditory learning.\n\nThe program was designed to introduce audiobooks as an effective alternative to printed materials while fostering emotional engagement, imagination, and equal learning opportunities. Specially curated audiobook listening sessions provided participants with immersive storytelling experiences enhanced by professional narration, expressive voice modulation, and thoughtfully integrated soundscapes and background music.\n\nIn addition to listening sessions, awareness and demonstration activities guided participants on how audiobooks are produced, how to access them using mobile phones and assistive technologies, and how audio-based learning can support both education and emotional well-being. The initiative emphasized dignity, inclusion, and confidence-building among visually impaired individuals.\n\nSupported by 10 volunteers who managed logistics, audio coordination, and participant assistance, the event was implemented efficiently with a total expenditure of ₹12,000. The initiative aligns with Paarvedan Foundation’s broader mission of promoting inclusive education, equal access to knowledge, and empowerment of persons with disabilities.",
                    conclusion: "The Harmony of Words – Audiobook Extravaganza implemented by Paarvedan Foundation represents a meaningful advancement toward inclusive and accessible education. By creating an immersive auditory platform for visually impaired individuals, the initiative strengthened confidence, expanded access to literature, and reinforced the importance of accessibility in cultural and educational spaces. Conducted through effective corporate collaboration and resource-efficient planning, the program demonstrates scalable potential for future accessibility-focused interventions within CSR and NGO inclusion frameworks."
                },

                bagDistributionProgram: {
                    title: "School Bag Distribution Program",
                    description: "Paarvedan Foundation implemented the School Bag Distribution Program to support school-going children from economically vulnerable communities by providing essential school bags and promoting educational continuity.",
                    date: "2025",
                    time: "Education Support Initiative",
                    location: "Community-Based Distribution Areas",
                    organizer: "Paarvedan Foundation",
                    image: "image/schoolbag.jpg",
                    volunteers: 10,
                    beneficiaries: 1000,
                    eventDescFull: "Access to essential educational accessories such as school bags remains a significant challenge for children from economically vulnerable communities. While public education initiatives address textbooks and uniforms, many families struggle to afford durable and appropriate school bags, directly impacting a child’s preparedness, attendance, and confidence. Recognizing this gap, Paarvedan Foundation initiated the School Bag Distribution Program as a targeted educational support intervention.\n\nGrounded in field observations and research on educational inequality, the initiative addressed common challenges such as reuse of damaged bags, financial prioritization constraints within low-income households, and the resulting negative impact on student motivation and classroom participation. The program was designed to reduce financial burden on families while strengthening school readiness among children.\n\nA total of 1,000 school-going children from low-income and underserved communities benefited from the initiative. The distribution process was carried out through structured planning, community coordination, and volunteer engagement to ensure transparency, dignity, and equitable access. Ten volunteers supported logistics, mobilization, and on-ground implementation.\n\nThe program was executed with strong financial planning, maintaining cost efficiency while ensuring quality and durability. With an average cost of ₹350 per bag and a total estimated expenditure of ₹3,50,000, the initiative demonstrated responsible resource utilization and maximum outreach impact. The intervention aligns with Paarvedan Foundation’s broader mission of strengthening education access and promoting holistic child development.",
                    conclusion: "The School Bag Distribution Program implemented by Paarvedan Foundation represents a practical and high-impact effort to reduce educational inequality. By supporting 1,000 students with essential school bags, the initiative enhanced learning readiness, boosted student confidence, and reduced financial stress on vulnerable households. The program’s structured, cost-efficient approach reflects strong operational planning and sustainable outreach potential. With expanded partnerships and improved data systems, this initiative holds strong potential for scaling within CSR and educational support frameworks."
                },

                dailyFoodDistributionProgram: {
                    title: "Daily 100 Packet Food Distribution Program",
                    description: "Paarvedan Foundation implemented the Daily 100 Packet Distribution Program under its Zero Hunger Initiative, providing consistent and nutritious meals to vulnerable communities over 26 consecutive days.",
                    date: "2025",
                    time: "Zero Hunger – Daily Relief Initiative",
                    location: "Community-Based Distribution Areas",
                    organizer: "Paarvedan Foundation",
                    image: "image/fooddistribution.jpg",
                    volunteers: 15,
                    beneficiaries: 2600,
                    eventDescFull: "Hunger remains a critical challenge for economically vulnerable populations, including homeless individuals, daily wage workers, migrant laborers, and marginalized communities. Recognizing the urgency of food insecurity caused by unstable incomes and rising living costs, Paarvedan Foundation launched the Daily 100 Packet Distribution Program as part of its Zero Hunger Initiative.\n\nThe program was structured as a consistent daily intervention to ensure reliability and sustained relief. Over a period of 26 consecutive days, 100 nutritious and hygienically prepared food packets were distributed daily at identified locations. Meals were prepared using fresh ingredients under strict hygiene and quality control standards, with proper packaging and safety checks prior to distribution.\n\nPriority was given to homeless individuals, elderly persons, daily wage earners, and others in immediate need. Volunteers actively supported meal packing, coordination, and on-ground distribution, ensuring the process remained organized, respectful, and dignified.\n\nA total of 2,600 food packets were distributed during the 26-day period. With a cost of ₹80 per packet and a daily expenditure of ₹8,000, the total estimated program expenditure amounted to ₹2,08,000. The initiative demonstrated efficient resource utilization while maintaining food quality and nutritional standards. The program aligns with Paarvedan Foundation’s broader mission of addressing basic human needs, strengthening community solidarity, and working toward a hunger-free society.",
                    conclusion: "The Daily 100 Packet Food Distribution Program implemented by Paarvedan Foundation reflects a sustained and structured approach to hunger alleviation. By providing 2,600 meals over 26 consecutive days, the initiative delivered immediate relief while reinforcing trust, dignity, and community responsibility. The program highlights the power of consistency in food security interventions and demonstrates how daily grassroots efforts can generate meaningful cumulative social impact. With continued community engagement and expanded outreach, this initiative holds strong potential for scalable implementation within CSR and social welfare frameworks."
                },

                sanskritTrainingProgram: {
                    title: "Sanskrit Training Program (2023–2025)",
                    description: "Paarvedan Foundation implemented a three-year Sanskrit Training Program to promote linguistic awareness, preserve cultural heritage, and provide structured Sanskrit education to students and community members.",
                    date: "2023–2025",
                    time: "Cultural & Educational Enrichment Initiative",
                    location: "Community-Based Training Centers",
                    organizer: "Paarvedan Foundation",
                    image: "image/museum.jpg",
                    volunteers: 15,
                    beneficiaries: 900,
                    eventDescFull: "Sanskrit, one of the world’s oldest and most influential languages, forms the foundation of India’s classical literature, philosophy, science, and spiritual traditions. However, declining exposure in modern education systems has resulted in reduced familiarity with Sanskrit among younger generations. Recognizing the importance of preserving linguistic heritage and strengthening cultural awareness, Paarvedan Foundation initiated the Sanskrit Training Program as a structured and accessible educational intervention.\n\nConducted consistently over three consecutive years—2023, 2024, and 2025—the program was designed to ensure continuity and long-term impact. Each year, 300 participants were enrolled, resulting in a total of 900 beneficiaries across three years. The curriculum included basic Sanskrit alphabets and pronunciation, word formation, introductory grammar, sentence construction, and cultural teachings derived from classical literature. Interactive teaching methodologies such as verbal practice, reading exercises, and group discussions were employed to enhance engagement and comprehension.\n\nThe initiative targeted students, youth, and community members interested in Indian heritage and value-based learning. Qualified Sanskrit educators led the sessions, supported by volunteers and community facilitators who assisted with coordination and outreach.\n\nImplemented with a cost of ₹250 per participant, the program maintained financial efficiency, with an annual expenditure of ₹75,000 and a total estimated cost of ₹2,25,000 over three years. The initiative aligns with Paarvedan Foundation’s mission of cultural preservation, educational enrichment, and holistic community development.",
                    conclusion: "The Sanskrit Training Program (2023–2025) implemented by Paarvedan Foundation represents a sustained and impactful effort to revive linguistic heritage and promote cultural continuity. By training 900 individuals over three years, the program enhanced awareness, strengthened cultural identity, and encouraged intergenerational knowledge sharing. Through structured curriculum delivery, cost-effective planning, and community engagement, the initiative demonstrates scalable potential within CSR, cultural preservation, and educational enrichment frameworks."
                },

                treePlantationProgram: {
                    title: "Tree Plantation Program (2023–2025)",
                    description: "Paarvedan Foundation implemented a three-year Tree Plantation Program to increase green cover, promote environmental sustainability, and strengthen community participation in ecological conservation.",
                    date: "2023–2025",
                    time: "Environmental Sustainability & Climate Action Initiative",
                    location: "Community & Semi-Urban Plantation Sites",
                    organizer: "Paarvedan Foundation",
                    image: "image/planting.jpg",
                    volunteers: 25,
                    beneficiaries: 5000,
                    eventDescFull: "Rapid urbanization, deforestation, and climate change have significantly reduced green cover across urban and semi-urban regions, contributing to air pollution, rising temperatures, soil degradation, and biodiversity loss. Recognizing the urgent need for sustainable environmental action, Paarvedan Foundation implemented a structured Tree Plantation Program over three consecutive years (2023, 2024, and 2025).\n\nThe initiative was designed as a long-term ecological intervention rather than a symbolic plantation drive. Field assessments identified limited green cover and the need for survival-focused planning. Each year, 100 native and climate-resilient saplings were planted in carefully selected public and community spaces based on soil quality and water availability, resulting in a total of 300 trees planted over three years.\n\nThe program emphasized quality assurance and sustainability through proper pit preparation, soil treatment, verified nursery selection, and post-plantation care instructions. Regular monitoring visits were conducted to ensure sapling survival and healthy growth. Volunteers and community members actively participated in plantation, watering, awareness-building, and monitoring activities, strengthening collective environmental responsibility.\n\nWith a cost of ₹80 per tree and a total estimated expenditure of ₹24,000, the program demonstrated cost-effective environmental impact. Beyond direct plantation outcomes, the initiative contributed to improved microclimate, enhanced air quality, soil conservation, biodiversity support, and increased environmental awareness. The program aligns with Paarvedan Foundation’s broader mission of climate resilience, ecological balance, and sustainable community development.",
                    conclusion: "The Tree Plantation Program (2023–2025) implemented by Paarvedan Foundation reflects a sustained commitment to environmental conservation and climate action. By planting 300 trees over three years with structured maintenance and community engagement, the initiative contributed to long-term ecological restoration and strengthened public awareness of environmental responsibility. Through cost-effective planning and participatory implementation, the program demonstrates scalable potential for expanding green cover and fostering sustainable development within CSR and environmental stewardship frameworks."
                }

                // Add more events here as needed:
                // eventId: { title, description, date, time, location, organizer, image, volunteers, beneficiaries }
            };

            const params = new URLSearchParams(window.location.search);
            const eventId = params.get("id");
            const event = events[eventId];

            if (event) {
                // Hero section
                document.getElementById("eventTitle").innerText = event.title;
                document.getElementById("eventDesc").innerText = event.description;
                document.getElementById("eventDate").innerText = event.date;
                document.getElementById("eventTime").innerText = event.time;
                document.getElementById("eventLocation").innerText = event.location;
                document.getElementById("eventOrganizer").innerText = event.organizer;
                document.getElementById("eventDescFull").innerText = event.eventDescFull;
                document.getElementById("conclusion").innerText = event.conclusion;

                document.getElementById("eventHero").style.backgroundImage =
                    `linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(${event.image})`;

                // Sidebar / right column
                document.getElementById("sidebarDate").innerText = event.date;
                document.getElementById("sidebarTime").innerText = event.time;
                document.getElementById("sidebarLocation").innerText = event.location;
                document.getElementById("sidebarOrganizer").innerText = event.organizer;
                document.getElementById("sidebarVolunteers").innerText = event.volunteers;
                document.getElementById("sidebarBeneficiaries").innerText = event.beneficiaries;

                // About section full description
                // document.getElementById("eventDescFull").innerText = event.description;

            } else {
                // Event not found — show friendly message
                document.getElementById("eventTitle").innerText = "Event Not Found";
                document.getElementById("eventDesc").innerText = "The event you are looking for does not exist or may have been removed.";
                document.getElementById("heroMeta").style.display = "none";
                document.getElementById("mainContent").innerHTML = `
                    <div class="event-not-found">
                        <i class="fas fa-calendar-times"></i>
                        <h4>Oops! This event doesn't exist.</h4>
                        <p class="text-muted">Please check the link or browse our upcoming events.</p>
                        <a href="/front/events.php" class="btn btn-success mt-2">
                            <i class="fas fa-arrow-left me-2"></i>Back to All Events
                        </a>
                    </div>`;
            }

            // Register button
            document.getElementById("registerBtn") && document.getElementById("registerBtn").addEventListener("click", function() {
                const title = event ? event.title : "this event";
                if (confirm(`Thank you for your interest in volunteering for:\n"${title}"\n\nYou will be redirected to our volunteer registration form.`)) {
                    window.location.href = `/front/volunteer.php?event_id=${eventId}`;
                }
            });

            // Share button
            document.getElementById("shareBtn") && document.getElementById("shareBtn").addEventListener("click", function() {
                const shareUrl = window.location.href;
                const shareText = event ?
                    `Check out this event from Paarvedan Foundation: ${event.title}` :
                    "Check out this event from Paarvedan Foundation!";

                if (navigator.share) {
                    navigator.share({
                        title: "Paarvedan Foundation Event",
                        text: shareText,
                        url: shareUrl
                    });
                } else {
                    navigator.clipboard.writeText(shareUrl + "\n\n" + shareText)
                        .then(() => alert("Event link copied to clipboard! You can now share it."))
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