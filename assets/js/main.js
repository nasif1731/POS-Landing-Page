// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
  // ---------------------------
  // Initialize AOS
  // ---------------------------
  if (window.AOS) {
    AOS.init({
      duration: 800,
      easing: "ease-in-out",
      once: true,
      offset: 100,
    });
  }

  // ---------------------------
  // Initialize VanillaTilt
  // ---------------------------
  const heroMockup = document.querySelector(".hero-mockup");
  if (heroMockup && window.VanillaTilt) {
    VanillaTilt.init(heroMockup, {
      max: 15,
      scale: 1.05,
      speed: 400,
      transition: true,
    });
  }

  document.querySelectorAll(".pricing-card").forEach((card) => {
    if (window.VanillaTilt) {
      VanillaTilt.init(card, {
        max: 10,
        scale: 1.02,
        speed: 400,
      });
    }
  });

  // ---------------------------
  // Smooth scroll for anchor links
  // ---------------------------
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // ---------------------------
  // Mobile menu toggle
  // ---------------------------
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      navMenu.style.display =
        navMenu.style.display === "flex" ? "none" : "flex";
    });
  }

  // ---------------------------
  // Contact form handling
  // ---------------------------
  const contactForm = document.querySelector(".contact-form");

  if (contactForm) {
    contactForm.addEventListener("submit", async (e) => {
      e.preventDefault();

      const formData = new FormData(contactForm);

      try {
        const response = await fetch("process_contact.php", {
          method: "POST",
          body: formData,
        });

        const data = await response.json();

        if (data.success) {
          window.location.href = "thank-you.html";
        } else if (data.errors) {
          alert("Please fix the following errors:\n" + data.errors.join("\n"));
        }
      } catch (error) {
        console.error("Error:", error);
        alert("An error occurred. Please try again.");
      }
    });
  }

  // ---------------------------
  // Navbar border on scroll
  // ---------------------------
  const navbar = document.querySelector(".navbar");
  window.addEventListener("scroll", () => {
    if (navbar) {
      navbar.style.borderBottomColor =
        window.scrollY > 50
          ? "rgba(102, 126, 234, 0.2)"
          : "rgba(51, 65, 85, 0.3)";
    }
  });

  // ---------------------------
  // Parallax effect on hero shapes
  // ---------------------------
  const shapes = document.querySelectorAll(".shape");
  document.addEventListener("mousemove", (e) => {
    const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
    const moveY = (e.clientY - window.innerHeight / 2) * 0.01;

    shapes.forEach((shape, index) => {
      shape.style.transform = `translate(${moveX * (index + 1)}px, ${
        moveY * (index + 1)
      }px)`;
    });
  });

  // ---------------------------
  // Button ripple effect
  // ---------------------------
  document.querySelectorAll(".btn").forEach((button) => {
    button.addEventListener("click", function (e) {
      const ripple = document.createElement("span");
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + "px";
      ripple.style.left = x + "px";
      ripple.style.top = y + "px";
      ripple.classList.add("ripple");

      this.appendChild(ripple);

      setTimeout(() => ripple.remove(), 600);
    });
  });

  // Inject ripple CSS dynamically
  const style = document.createElement("style");
  style.textContent = `
    .btn { position: relative; overflow: hidden; }
    .ripple {
      position: absolute;
      border-radius: 50%;
      background: rgba(255,255,255,0.6);
      transform: scale(0);
      animation: rippleAnimation 0.6s ease-out;
      pointer-events: none;
    }
    @keyframes rippleAnimation {
      to { transform: scale(4); opacity: 0; }
    }
  `;
  document.head.appendChild(style);

  // ---------------------------
  // Auto-hide preloader
  // ---------------------------
  const preloader = document.querySelector(".preloader");
  if (preloader) {
    setTimeout(() => {
      preloader.style.opacity = "0";
      preloader.style.visibility = "hidden";
    }, 2000); // 2 seconds delay
  }

  console.log("QuickPOS landing page loaded successfully!");
});
