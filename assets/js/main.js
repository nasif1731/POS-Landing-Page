document.addEventListener("DOMContentLoaded", () => {
  initNavbar()
  initScrollAnimations()
  initParallax()
  initFormHandling()
  initHamburgerMenu()
  initMarquee()
  initThemeToggle()
})

/**
 * Initialize navbar scroll effect
 */
function initNavbar() {
  const navbar = document.querySelector(".navbar")
  let lastScrollY = 0

  window.addEventListener(
    "scroll",
    () => {
      const scrollY = window.scrollY

      if (scrollY > 50) {
        navbar.classList.add("scrolled")
      } else {
        navbar.classList.remove("scrolled")
      }

      // Hide navbar on scroll down, show on scroll up
      if (scrollY > lastScrollY && scrollY > 300) {
        navbar.style.transform = "translateY(-100%)"
      } else {
        navbar.style.transform = "translateY(0)"
      }

      lastScrollY = scrollY
    },
    { passive: true },
  )
}

/**
 * Initialize scroll animations with AOS
 */
function initScrollAnimations() {
  const AOS = window.AOS // Declare the AOS variable
  if (typeof AOS !== "undefined") {
    AOS.init({
      duration: 800,
      easing: "ease-out-cubic",
      once: false,
      offset: 100,
      disable: window.innerWidth < 640 ? "mobile" : false,
    })
  }
}

/**
 * Initialize parallax effect on hero mockup
 */
function initParallax() {
  const heroMockup = document.querySelector(".hero-mockup")

  if (heroMockup) {
    document.addEventListener("mousemove", (e) => {
      const { clientX, clientY } = e
      const centerX = window.innerWidth / 2
      const centerY = window.innerHeight / 2

      const rotateX = (clientY - centerY) * 0.02
      const rotateY = (clientX - centerX) * 0.02

      heroMockup.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) perspective(1000px)`
    })

    // Reset on mouse leave
    document.addEventListener("mouseleave", () => {
      heroMockup.style.transform = "rotateX(0) rotateY(0)"
    })
  }
}

/**
 * Initialize form handling with validation
 */
function initFormHandling() {
  const form = document.querySelector(".contact-form")

  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault()

      const formData = new FormData(form)

      fetch(form.action, {
        method: "POST",
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success && data.redirect) {
            window.location.href = data.redirect
          } else if (data.errors) {
            alert(data.errors.join("\n"))
          } else {
            alert("Unexpected response from server.")
          }
        })
        .catch(() => {
          alert("Server error. Please try again.")
        })
    })
  }
}


/**
 * Initialize mobile hamburger menu
 */
function initHamburgerMenu() {
  const hamburger = document.querySelector(".hamburger")
  const navMenu = document.querySelector(".nav-menu")
  const navLinks = document.querySelectorAll(".nav-menu a")

  if (hamburger && navMenu) {
    hamburger.addEventListener("click", () => {
      hamburger.classList.toggle("active")
      navMenu.classList.toggle("active")
    })

    // Close menu when a link is clicked
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        hamburger.classList.remove("active")
        navMenu.classList.remove("active")
      })
    })
  }
}

/**
 * Initialize marquee auto-scroll
 */
function initMarquee() {
  const marquee = document.querySelector(".marquee")

  if (marquee) {
    // Clone marquee content for seamless loop
    const content = marquee.querySelector(".marquee-content")
    if (content) {
      const clone = content.cloneNode(true)
      marquee.appendChild(clone)
    }
  }
}

/* Added theme toggle functionality */
function initThemeToggle() {
  const themeToggle = document.getElementById("theme-toggle")
  const themeLabel = document.getElementById("theme-label")
  const html = document.documentElement

  // Check for saved theme preference or default to light mode
  const savedTheme = localStorage.getItem("theme") || "light"
  if (savedTheme === "dark") {
    document.body.classList.add("dark-mode")
    themeToggle.classList.add("active")
    themeLabel.textContent = "Dark Mode"
    html.style.colorScheme = "dark"
  } else {
    html.style.colorScheme = "light"
  }

  // Toggle theme on button click
  themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode")
    themeToggle.classList.toggle("active")

    const isDarkMode = document.body.classList.contains("dark-mode")
    localStorage.setItem("theme", isDarkMode ? "dark" : "light")
    themeLabel.textContent = isDarkMode ? "Dark Mode" : "Light Mode"
    html.style.colorScheme = isDarkMode ? "dark" : "light"
  })
}

// Smooth scroll behavior for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault()
    const target = document.querySelector(this.getAttribute("href"))
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      })
    }
  })
})
