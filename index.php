<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SleekPOS - The Last POS System You'll Ever Need</title>
    
    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-box"></div>
            <div class="preloader-box"></div>
            <div class="preloader-box"></div>
        </div>
    </div>

    <!-- Aurora Background -->
    <div class="aurora-bg">
        <div class="aurora-mesh"></div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <i class="fas fa-cash-register"></i>
                <span>SleekPOS</span>
            </div>
            
            <ul class="nav-menu">
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <div class="nav-cta">
                <button class="btn btn-outline">Sign In</button>
                <button class="btn btn-primary">Get Started</button>
            </div>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="800">
                <h1 class="hero-title">The Last POS System You'll Ever Need</h1>
                <p class="hero-subtitle">Modern, intuitive, and powerful. Streamline your retail operations with cutting-edge technology.</p>
                
                <div class="hero-ctas" data-aos="fade-up" data-aos-delay="200">
                    <button class="btn btn-primary-large">
                        <span>Start Free Trial</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    <button class="btn btn-secondary-large">
                        <i class="fas fa-play-circle"></i>
                        <span>Watch Demo</span>
                    </button>
                </div>
            </div>

            <div class="hero-visual" data-aos="fade-left" data-aos-delay="300">
                <div class="floating-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
                <div class="hero-mockup" data-tilt>
                    <img src="assets/images/pos-dashboard.jpg" alt="POS Dashboard Mockup" class="mockup-image">
                </div>
            </div>
        </div>

        <!-- SVG Wave Divider -->
        <svg class="wave-divider" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,0 600,50 T1200,50 L1200,120 L0,120 Z" fill="currentColor"></path>
        </svg>
    </section>
    
</body>
</html>