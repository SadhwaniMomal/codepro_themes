<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <!-- bootsrap link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
      defer
    ></script>
    <!-- icons link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- style link -->
     <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/about.css" />
  </head>
  <body>
    <!-- navbar................... -->
    <!-- Top-Navbar-Info Section -->
    <!-- Top-Navbar-Info Section -->
    <?php include 'includes/topbar.php' ?> 

   <!-- Navbar Section -->
   <?php include 'includes/navbar.php' ?>  


    <!-- /* section1...................... */ -->
    <!-- Main container for the background and content -->
    <div class="container-fluid custom-background">
      <!-- Floating shapes for decorative effect -->
      <div class="floating-shape floating-shape-1"></div>
      <div class="floating-shape floating-shape-2"></div>
      <div class="floating-shape floating-shape-3"></div>

      <!-- Additional floating dots for visual interest -->
      <div class="floating-shape floating-dot floating-dot-1"></div>
      <div class="floating-shape floating-dot floating-dot-2"></div>

      <!-- Floating play icons with animation -->
      <i class="bi bi-play-fill floating-play-icon floating-play-icon-1"></i>
      <i class="bi bi-play-fill floating-play-icon floating-play-icon-2"></i>

      <!-- Breadcrumb navigation and heading section -->
      <div class="text-center position-relative about-heading">
        <h2 class="fw-bold">Contact Us</h2>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center custom-breadcrumb">
            <li class="breadcrumb-item">
              <a href="#" class="text-decoration-none text-white">Home</a>
            </li>
            <li><i class="fa-solid fa-angles-right"></i></li>
            <!-- Arrow icon between breadcrumb items -->
            <li class="breadcrumb-item active" aria-current="page">
              Contact Us
            </li>
            <!-- Current page -->
          </ol>
        </nav>
      </div>
    </div>

    <!-- /* card-section2...................... */ -->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-3 custom-col">
          <div class="cards p-3 equal-height text-center">
            <div class="icon-circle">
              <i class="fa-solid fa-phone fa-2x"></i>
            </div>
            <h3 class="mt-3 fs-4">Call Us</h3>
            <span class="text-secondary">+123-456-7890</span>
            <span class="text-secondary">+098-765-4321</span>
          </div>
        </div>
        <div class="col-md-3 custom-col">
          <div class="cards p-3 equal-height text-center">
            <div class="icon-circle">
              <i class="fa-solid fa-envelope fa-2x"></i>
            </div>
            <h3 class="mt-3 fs-4">Email Us</h3>
            <p class="text-secondary">info@example.com support@example.com</p>
          </div>
        </div>
        <div class="col-md-3 custom-col">
          <div class="cards p-3 equal-height text-center">
            <div class="icon-circle">
              <i class="fa-solid fa-location-dot fa-2x"></i>
            </div>
            <h3 class="mt-3 fs-4">Location</h3>
            <p class="text-secondary">123, New York, Branch: CA 90013, USA</p>
          </div>
        </div>
      </div>
    </div>
    <!-- /*form-section3................................ */ -->
    <div class="container contact-form-container mt-5">
      <h1 class="contact-form-heading text-center fw-bold">Contact With Us</h1>
      <p class="text-center content-para">We are here to answer any questions you may have at any time.</p>
  
      <form>
          <div class="row  mt-5">
              <div class="col-12 col-md-6 mb-2">
                  <div class="input-group custom-input-group">
                      <input type="text" class="form-control custom-form-control" id="name" placeholder="Your Name" required>
                      <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-2">
                  <div class="input-group custom-input-group">
                      <input type="email" class="form-control custom-form-control" id="email" placeholder="Your Email" required>
                      <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12 col-md-6 mb-2">
                  <div class="input-group custom-input-group">
                      <input type="text" class="form-control custom-form-control" id="subject" placeholder="Your Subject" required>
                      <span class="input-icon"><i class="fa-solid fa-pencil-alt"></i></span>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-2">
                  <div class="input-group custom-input-group">
                      <input type="tel" class="form-control custom-form-control" id="phone" placeholder="Your Phone Number" required>
                      <span class="input-icon"><i class="fa-solid fa-phone"></i></span>
                  </div>
              </div>
          </div>
          <div class="mb-3 mt-2">
              <textarea class="form-control custom-form-control" id="message" rows="5" placeholder="Your Message" required></textarea>           
            </div>
          <div class="text-center my-5">
              <button type="submit" class="contect-submit-btn btns px-4 py-3 text-white">Submit Now</button>
          </div>
      </form>
  </div>
    <!--map-ection4.................................. -->
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-md-12 col-lg-12 h-75">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57670.26141319681!2d68.28026610012203!3d25.391707978892907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c71a051ca23e9%3A0xe6f51d3a337e33b5!2sConcept%20Educational%20Academy!5e0!3m2!1sen!2s!4v1728388667921!5m2!1sen!2s"
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
          </div>
        </div>
      </div>

    <!-- Footer Section -->

    <!-- Footer Section -->
    <div class="container-fluid">
      <footer class="footer-section mt-5">
        <div class="container">
          <div class="row">
            <!-- Logo and Icons Section -->
            <div class="col-md-4">
              <div class="logo">
                <img src="image/transparent_logo.png" alt="Logo" style="width: 15vh;" />
                <p class="fs-6 mt-3">
                  Education is the most potent weapon to change the world. Give
                  man education and he will build a new world.
                </p>
              </div>
              <div class="icons mt-3">
                <h4>Follow Us</h4>
                <i class="fab fa-facebook-f text-center"></i>
                <i class="fab fa-twitter ms-3 text-center"></i>
                <i class="fab fa-instagram ms-3 text-center"></i>
                <i class="fab fa-linkedin-in ms-3 text-center"></i>
              </div>
            </div>
            <!-- Quick Links -->
            <div class="col-md-2">
              <h5>Quick Links</h5>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Instructors</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <!-- Categories -->
            <div class="col-md-2">
              <h5>Categories</h5>
              <ul>
                <li><a href="#">UI/UX Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Data Sciences</a></li>
                <li><a href="#">Art & Design</a></li>
                <li><a href="#">Digital Marketing</a></li>
              </ul>
            </div>
            <!-- Latest Updates -->
            <div class="col-md-3">
              <h5>Latest Updates</h5>
              <p>Sign up for our newsletter & get updates weekly</p>
              <form action="#">
                <div class="email-wrapper d-flex align-items-center">
                  <i class="fas fa-envelope me-5"></i>
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Enter your email"
                  />
                </div>
                <button
                  type="submit"
                  class="contect-submit-btn border border-0 rounded-3 w-100 mt-3 fs-6 text-white"
                >
                  Subscribe Now <i class="fas fa-arrow-right ms-4"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Copyright Notice -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 copyright">
          &copy; 2024 Your Company Name. All Rights Reserved.
        </div>
      </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
      defer
    ></script>
    <!-- Bootstrap JavaScript and dependencies for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <!-- Bootstrap Icons library for play icons -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
      rel="stylesheet"
    />
  </body>
</html>
