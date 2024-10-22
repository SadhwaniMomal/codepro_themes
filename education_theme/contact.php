<?php include 'includes/header.php' ; ?>

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
            <span class="text-secondary"> 0311-7322007 </span>
            <!-- <span class="text-secondary">+098-765-4321</span> -->
          </div>
        </div>
        <div class="col-md-3 custom-col">
          <div class="cards p-3 equal-height text-center">
            <div class="icon-circle">
              <i class="fa-solid fa-envelope fa-2x"></i>
            </div>
            <h3 class="mt-3 fs-4">Email Us</h3>
            <p class="text-secondary">www.codepro.com.pk</p>
          </div>
        </div>
        <div class="col-md-3 custom-col">
          <div class="cards p-3 equal-height text-center">
            <div class="icon-circle">
              <i class="fa-solid fa-location-dot fa-2x"></i>
            </div>
            <h3 class="mt-3 fs-4">Location</h3>
            <p class="text-secondary">The Institute of Management & Entrepreneurship <br> Al Khair Agency, A55, Qasimabad, Hyderabad, 71500</p>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.394624562487!2d68.33228467360433!3d25.391597923802642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c71bdbb54ac49%3A0x97b86a86651968f2!2sCodePro!5e0!3m2!1sen!2s!4v1729583972414!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
<!-- Footer Section -->
<?php include 'includes/footer.php' ; ?>
