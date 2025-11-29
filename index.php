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
            <div class="global-theme-toggle">
            <span class="footer-theme-label" id="theme-label">Light Mode</span>
                <button class="theme-toggle" id="theme-toggle" aria-label="Toggle dark mode">
                    <div class="theme-toggle-circle">
                    <i class="fas fa-sun theme-toggle-icon"></i>
                    </div>
                </button>
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
                    <img src="assets/images/pos-dashboard.png" alt="POS Dashboard Mockup" class="mockup-image">
                </div>
            </div>
        </div>

        <!-- SVG Wave Divider -->
        <svg class="wave-divider" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,0 600,50 T1200,50 L1200,120 L0,120 Z" fill="currentColor"></path>
        </svg>
    </section>

    <!-- Logo Marquee Section -->
    <section class="marquee-section">
        <h3>Trusted by Leading Businesses</h3>
        <div class="marquee-container">
            <div class="marquee">
                <div class="marquee-content">
                    <div class="logo-item"><i class="fas fa-store"></i> RetailCo</div>
                    <div class="logo-item"><i class="fas fa-shopping-bag"></i> ShopHub</div>
                    <div class="logo-item"><i class="fas fa-utensils"></i> FoodChain</div>
                    <div class="logo-item"><i class="fas fa-coffee"></i> CafePro</div>
                    <div class="logo-item"><i class="fas fa-prescription-bottle"></i> PharmaTech</div>
                    <div class="logo-item"><i class="fas fa-store"></i> RetailCo</div>
                    <div class="logo-item"><i class="fas fa-shopping-bag"></i> ShopHub</div>
                    <div class="logo-item"><i class="fas fa-utensils"></i> FoodChain</div>
                </div>
            </div>
        </div>

        <!-- SVG Wave Divider -->
        <svg class="wave-divider wave-reverse" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,100 600,50 T1200,50 L1200,0 L0,0 Z" fill="currentColor"></path>
        </svg>
    </section>

    <!-- Bento Grid Features Section -->
    <section class="features" id="features">
        <div class="features-container">
            <div class="section-header" data-aos="fade-up">
                <h2>Powerful Features Built for You</h2>
                <p>Everything you need to run your business efficiently</p>
            </div>

            <div class="bento-grid">
                <!-- Feature 1 -->
                <div class="bento-item bento-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Lightning Fast</h3>
                        <p>Process transactions in milliseconds. Zero lag, zero downtime.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="bento-item" data-aos="fade-up" data-aos-delay="150">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Bank-Level Security</h3>
                        <p>Encrypted transactions with PCI-DSS compliance.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="bento-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Real-Time Analytics</h3>
                        <p>Track sales, inventory, and revenue in real-time.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="bento-item bento-tall" data-aos="fade-up" data-aos-delay="250">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Ready</h3>
                        <p>Full-featured mobile app for on-the-go management.</p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="bento-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <h3>Multi-Location</h3>
                        <p>Manage multiple stores from one dashboard.</p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="bento-item" data-aos="fade-up" data-aos-delay="350">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-plug"></i>
                        </div>
                        <h3>Easy Integration</h3>
                        <p>Connect with your favorite business tools effortlessly.</p>
                    </div>
                </div>

                <!-- Feature 7 (Tall) -->
                <div class="bento-item bento-tall bento-lg" data-aos="fade-up" data-aos-delay="400">
                    <div class="bento-card">
                        <div class="bento-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Expert support team always ready to help you succeed.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Wave Divider -->
        <svg class="wave-divider" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,0 600,50 T1200,50 L1200,120 L0,120 Z" fill="currentColor"></path>
        </svg>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="pricing-container">
            <div class="section-header" data-aos="fade-up">
                <h2>Simple, Transparent Pricing</h2>
                <p>Choose the perfect plan for your business</p>
            </div>

            <div class="pricing-grid">
                <!-- Basic Plan -->
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-header">
                        <h3>Basic</h3>
                        <p class="pricing-desc">Perfect for startups</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">29</span>
                        <span class="period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Up to 1 Location</li>
                        <li><i class="fas fa-check"></i> Basic Reports</li>
                        <li><i class="fas fa-check"></i> Email Support</li>
                        <li><i class="fas fa-times"></i> API Access</li>
                    </ul>
                    <button class="btn btn-outline">Get Started</button>
                </div>

                <!-- Pro Plan (Highlighted) -->
                <div class="pricing-card pricing-featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Pro</h3>
                        <p class="pricing-desc">For growing businesses</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency">$</span>
                        <span class="amount">79</span>
                        <span class="period">/month</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Up to 5 Locations</li>
                        <li><i class="fas fa-check"></i> Advanced Analytics</li>
                        <li><i class="fas fa-check"></i> Priority Support</li>
                        <li><i class="fas fa-check"></i> API Access</li>
                    </ul>
                    <button class="btn btn-primary-large">Start Free Trial</button>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-header">
                        <h3>Enterprise</h3>
                        <p class="pricing-desc">Custom solutions</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency">Custom</span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited Locations</li>
                        <li><i class="fas fa-check"></i> Custom Reports</li>
                        <li><i class="fas fa-check"></i> Dedicated Support</li>
                        <li><i class="fas fa-check"></i> Custom Integration</li>
                    </ul>
                    <button class="btn btn-outline">Contact Sales</button>
                </div>
            </div>
        </div>

        <!-- SVG Wave Divider -->
        <svg class="wave-divider wave-reverse" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,50 Q300,100 600,50 T1200,50 L1200,0 L0,0 Z" fill="currentColor"></path>
        </svg>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="section-header" data-aos="fade-up">
                <h2>Get in Touch</h2>
                <p>Have questions? We'd love to hear from you</p>
            </div>

            <form class="contact-form" action="process_contact.php" method="POST" data-aos="fade-up" data-aos-delay="100">
                <div class="form-group">
                    <input 
                        type="text" 
                        name="name" 
                        placeholder="Your Name" 
                        required
                        class="form-input"
                    >
                </div>

                <div class="form-group">
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Your Email" 
                        required
                        class="form-input"
                    >
                </div>

                <div class="form-group">
                    <textarea 
                        name="message" 
                        placeholder="Your Message" 
                        rows="6" 
                        required
                        class="form-input"
                    ></textarea>
                </div>

                <button type="submit" class="btn btn-primary-large">
                    <span>Send Message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>



<footer class="footer">
  <div class="footer-container">
    <div class="footer-brand">
      <h2 class="footer-logo">Sleek<span>POS</span></h2>
      <p>Empowering businesses with smart, modern POS solutions.</p>
    </div>

    <div class="footer-socials">
      <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="mailto:info@sleekpos.com"><i class="fas fa-envelope"></i></a>
    </div>

    <div class="footer-links">
      <a href="index.php">Home</a>
      <a href="index.php#features">Features</a>
      <a href="index.php#pricing">Pricing</a>
      <a href="index.php#contact">Contact</a>
      <a href="privacy.html">Privacy Policy</a>
    </div>

    <p class="footer-copy">&copy; <span id="year"></span> SleekPOS. All rights reserved.</p>
  </div>
</footer>




    
<!-- Scripts -->
    <script>document.getElementById("year").textContent = new Date().getFullYear();</script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>