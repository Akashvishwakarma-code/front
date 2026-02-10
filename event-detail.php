<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Paarvedan Foundation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Paarvedan Foundation">
    <meta name="vie+port" content="width=device-width,initial-scale=1.0" />
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
                            <div class=" d-inline-block align-middle fs-12 text-white text-uppercase fw-500">Fight for a worthy cause to save the world. <a href="blog&news.php" class="text-decoration-line-bottom text-white">Read Stories</a></div>
                        </div>
                
                </div>
            </div>
        </div>
        <!-- start navigation -->
        <?php include('header.php'); ?>
        <!-- start push popup -->
    </header>
    <!-- end header -->
   
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin-top:5rem;
        }
        .event-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $event['image']; ?>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
            
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
    </style>
</head>
<body>
    
    
    <!-- Main Event Details -->
    <div class="container">
        <div class="row">
            <!-- Left Column: Event Details -->
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">About This Event</h3>
                        

                        <h4 class="mt-5 mb-3">How You Can Participate</h4>
                        <p>Your involvement can directly contribute to our mission of "<strong>Bridging Generations, Inspiring Lives</strong>". Whether as a volunteer, donor, or attendee, you become part of a legacy that started in the 1960s with our founder, Bhagirth Ji Rupchand Chouhan.</p>

                        <!-- This section could show related SDGs from the homepage -->
                        <h4 class="mt-5 mb-3">Related Sustainable Development Goals</h4>
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
                            <strong>Date:</strong> 
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-clock"></i>
                            <strong>Time:</strong> 
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-map-marker-alt"></i>
                            <strong>Location:</strong> 
                        </p>
                        <p class="card-text mb-3">
                            <i class="event-icon fas fa-user-friends"></i>
                            <strong>Organizer:</strong> 
                        </p>
                        <hr>
                        
                        <!-- Impact Stats -->
                        <div class="impact-stats text-center mt-4">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <span></span>
                                    <p class="small mb-0">Volunteers Needed</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <span></span>
                                    <p class="small mb-0">Target Beneficiaries</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 mt-4">
                            <button class="btn btn-primary btn-lg" id="registerBtn">
                                <i class="fas fa-user-plus me-2"></i>Register as Volunteer
                            </button>
                            <button class="btn btn-outline-secondary btn-lg">
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
                        <p class="small mb-2">Join our community of <strong>278</strong> volunteers who have supported over <strong>1.50L beneficiaries</strong>.</p>
                        <a href="/front#popular-causes" class="btn btn-sm btn-success">View All Causes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer (Should match your site's footer) -->
    <?php include('footer.php') ;?>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Handle Registration Button Click
        document.getElementById('registerBtn').addEventListener('click', function() {
            const eventTitle = "<?php echo addslashes($event['title']); ?>";
            if(confirm(`Thank you for your interest in volunteering for:\n"${eventTitle}"\n\nYou will be redirected to our volunteer registration form.`)) {
                // In a real scenario, redirect to a registration form or open a modal
                window.location.href = '/front/volunteer-form.php?event_id=<?php echo $event_id; ?>';
            }
        });

        // Simple Share Functionality
        document.querySelector('.btn-outline-secondary').addEventListener('click', function() {
            const shareUrl = window.location.href;
            const shareText = "Check out this event from Paarvedan Foundation: <?php echo addslashes($event['title']); ?>";
            
            if(navigator.share) {
                navigator.share({
                    title: 'Paarvedan Foundation Event',
                    text: shareText,
                    url: shareUrl
                });
            } else {
                // Fallback: Copy to clipboard
                navigator.clipboard.writeText(shareUrl + "\n\n" + shareText);
                alert('Event link copied to clipboard! You can now share it.');
            }
        });

        // Example: Dynamic stats update (if you had live data)
        // setInterval(updateLiveStats, 30000);
        // function updateLiveStats() {
        //     fetch('/api/event-stats.php?event_id=<?php echo $event_id; ?>')
        //         .then(response => response.json())
        //         .then(data => {
        //             if(data.volunteers) {
        //                 document.querySelector('.impact-stats span').textContent = data.volunteers;
        //             }
        //         });
        // }
    </script>
</body>
</html>