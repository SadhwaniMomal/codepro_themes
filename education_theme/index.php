<?php include 'includes/header.php' ; ?>

    <!-- Top-Navbar-Info Section -->
    <?php include 'includes/topbar.php' ?>  

    <!-- Navbar Section -->
    <?php include 'includes/navbar.php' ?>  

    <!-- about-container section -->
    <!-- Main container for the background and content -->
    <div class="container-fluid custom-background mb-5">
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
        <div class="main-heading">
          <img src="./image/codepro_logo_transparent.png" alt="" style="width: 330px;" />
          <h1 class="text-center">We are Bluid Our Website</h1>
        </div>
      </div>
    </div>

    <!-- About - Us Section Here  -->
    <div class="container mb-5 about-section-container">
      <div
        class="row justify-content-center align-items-center about-section-row"
      >
        <!-- Left Section -->
        <div
          class="col-12 text-lg-start col-md-6 d-flex about-us-left position-relative h-100"
        >
          <!-- Image 1 positioned absolutely on the left -->
          <div class="aboutus-img-1 w-100">
            <img
              src="./image/student-6.jpg"
              alt="Student Image 1"
              class="img-fluid"
            />
          </div>

          <!-- Enrolled Students Section -->
          <div
            class="enrolled-students d-flex justify-content-center align-items-center"
          >
            <div class="icon-container">
              <img
                src="./image/graduation_5364842.png"
                alt="Graduation Cap Icon"
              />
            </div>
            <div class="text-container mx-2">
              <div class="number text-dark fw-bold fs-3" id="enrollment-number">
                0+
              </div>
              <div class="description">Enrolled Students</div>
            </div>
          </div>

          <!-- Image 2 positioned absolutely on the right bottom -->
          <div class="aboutus-img-2 text-end d-none d-md-flex">
            <img src="./image/student-4.jpg" alt="Student Image 2" />
          </div>
        </div>
        <!-- Right Section -->
        <div class="col-12 col-md-6 py-3 px-5 about-right-section">
          <!-- Badge for "About Us" -->
          <span class="badge-custom">About Us</span>
          <!-- Main Heading -->
          <h1 class="section-title mt-3">
            We Makes a Door <br />
            to <span class="highlight-text underline">Bright Future</span>
          </h1>

          <!-- Feature 1 -->
          <div class="feature-item">
            <div class="icon-circl">
              <img src="image/motivation_8148104.png" alt="Icon 1" />
            </div>
            <div>
              <h5 class="fw-bold mb-1">Education is Power</h5>
              <p class="text-muted mb-0">
                The cost of ignorance exceeds that of education; it teaches us
                how to achieve success.
              </p>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="feature-item">
            <div class="icon-circl">
              <img src="image/millenial_5761177.png" alt="Icon 2" />
            </div>
            <div>
              <h5 class="fw-bold mb-1">Knowledge for Life</h5>
              <p class="text-muted mb-0">
                Education is smart enough to change the human mind positively;
                your Door to The Future.
              </p>
            </div>
          </div>

          <!-- Additional Text -->
          <p class="mt-4 text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            doloremque sapiente reiciendis consequuntur.
          </p>
        </div>
      </div>
    </div>

    <!-- Counter Section Here -->
    <div class="container counter-section mb-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-3 col-sm-6 mb-4 counter-box">
          <div class="counter-icon">
            <img
              src="https://img.icons8.com/ios-filled/50/ffffff/graduation-cap.png"
              alt="Students Enrolled Icon"
            />
          </div>
          <div>
            <div class="counter-value" data-target="2548">0</div>
            <div class="counter-description">Students Enrolled</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 counter-box">
          <div class="counter-icon">
            <img
              src="https://img.icons8.com/ios-filled/50/ffffff/teacher.png"
              alt="Certified Teachers Icon"
            />
          </div>
          <div>
            <div class="counter-value" data-target="123">0</div>
            <div class="counter-description">Certified Teachers</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 counter-box">
          <div class="counter-icon">
            <img
              src="https://img.icons8.com/ios-filled/50/ffffff/book.png"
              alt="Premium Courses Icon"
            />
          </div>
          <div>
            <div class="counter-value" data-target="423">0</div>
            <div class="counter-description">Premium Courses</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 counter-box">
          <div class="counter-icon">
            <img
              src="https://img.icons8.com/ios-filled/50/ffffff/conference.png"
              alt="Affiliated Partners Icon"
            />
          </div>
          <div>
            <div class="counter-value" data-target="15">0</div>
            <div class="counter-description">Affiliated Partners</div>
          </div>
        </div>
      </div>
    </div>

    <!-- professional Insturtor section -->
    <div class="container py-4 mb-5">
      <!-- Header section for the page title and badge -->
      <div class="text-center mb-4">
        <span class="badge">Professional Instructor</span>
        <h2 class="mt-3">
          Meet Our <span class="highlight-text">Instructors</span>
        </h2>
      </div>

      <!-- Row to display instructor profiles -->
      <div class="row justify-content-center">
        <!-- First Column: Instructor Profile -->
        <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
          <div
            class="profile-card"
            style="background-image: url('./image/abrar.jpeg')"
          >
            <div class="profile-info">
              <div class="share-icon text-white">
                <i class="fa-solid fa-share-nodes"></i>
              </div>
              <h5>Engr. Abrar Hussain Tunio</h5>
              <p>Full Stack Developer</p>
            </div>
          </div>
        </div>

        <!-- Second Column: Instructor Profile -->
        <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
          <div
            class="profile-card"
            style="background-image: url('./image/moomal.jpeg')"
          >
            <div class="profile-info">
              <div class="share-icon text-white">
                <i class="fa-solid fa-share-nodes"></i>
              </div>
              <h5>Moomal Sadhwani</h5>
              <p>Frontend Developer</p>
            </div>
          </div>
        </div>

        <!-- Third Column: Instructor Profile -->
        <div class="col-12 col-md-4 d-flex justify-content-center mb-4">
          <div
            class="profile-card"
            style="background-image: url('./image/awais.jpeg')"
          >
            <div class="profile-info">
              <div class="share-icon text-white">
                <i class="fa-solid fa-share-nodes"></i>
              </div>
              <h5>Awais Ur Rehman</h5>
              <p>Frontend Developer</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Learning Process Section -->
    <div class="container-fluid Learning-container mb-5 py-4">
      <div class="row justify-content-center align-items-center py-5">
        <div class="text-center mb-4">
          <span class="badge">How Can You Start</span>
          <h2 class="mt-3">
            Our Learning <span class="highlight-text">Process</span>
          </h2>
        </div>

        <div class="row text-center justify-content-center">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="step-card">
              <div class="step-number">01</div>
              <div class="icon-learn">
                <i class="fas fa-globe"></i>
              </div>
              <div class="step-title">Create Account</div>
              <div class="step-description">
                Education is the cornerstone of personal and societal growth. It
                goes beyond textbooks.
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="step-card">
              <div class="step-number">02</div>
              <div class="icon-learn">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <div class="step-title">Choose Instructor</div>
              <div class="step-description">
                We are doing smart enough to change the human mind positively
                your Door to The Future.
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="step-card">
              <div class="step-number">03</div>
              <div class="icon-learn">
                <i class="fas fa-book-open"></i>
              </div>
              <div class="step-title">Browse Courses</div>
              <div class="step-description">
                Today's dynamic world, education equips individuals with the
                skills to navigate challenges.
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="step-card">
              <div class="step-number">04</div>
              <div class="icon-learn">
                <i class="fas fa-user-graduate"></i>
              </div>
              <div class="step-title">Start Learning</div>
              <div class="step-description">
                Embracing education is investing in progress, empowering
                individuals to build a foundation.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Review section here  -->
    <div class="container mb-4">
      <div
        class="row justify-content-center align-items-center testimonial-content py-5"
      >
        <!-- Left side: Quote -->
        <div class="col-md-5  testimonial-quote mb-5">
          <div class="quote-icon mb-3">
            <i class="fa-solid fa-quote-left"></i>
          </div>
          <p id="testimonialText" class="testimonial-text">
            We love to pursue a best education platform for all. Ipsam quos
            omnis nisi repudiandae, deleniti eum cupiditate qui tempore animi
            quaerat modi in possimus consequatur, commodi Lorem ipsum dolor sit
            amet.
          </p>
          <div class="d-flex align-items-center mt-3 testimonial-img">
            <img
              id="testimonialImage"
              src="./website_img/img-14.jpg"
              class="rounded-circle me-3"
              alt="Profile Image"
            />
            <div>
              <p id="testimonialAuthor" class="testimonial-author mb-0">
                Robert Mugabe
              </p>
              <p id="testimonialRole" class="testimonial-role mb-0">
                Technology Facilitator
              </p>
            </div>
            <div id="testimonialRating" class="ms-auto rating">★★★★★</div>
          </div>
        </div>
        <!-- Right side: Image -->
        <div class="col-md-4 testimonial-image d-none d-lg-flex">
          <img
            src="./image/review.jpg"
            class="rounded img-fluid h-100  "
            alt="Person Image"
          />
        </div>
      </div>
    </div>

    <!-- General Questions -->
    <div class="container mb-5">
      <div class="row justify-content-center align-items-center py-5">
        <div class="text-center mb-4">
          <span class="badge">How Can You Start</span>
          <h2 class="mt-3">
            Our Learning <span class="highlight-text">Process</span>
          </h2>
        </div>
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-8">
            <div class="accordion-item">
              <div
                class="accordion-header active"
                onclick="toggleAccordion(this)"
              >
                <span class="icon">−</span>
                <span class="questions"
                  >What is the Importance of Education?</span
                >
              </div>
              <div class="accordion-body" style="height: auto">
                <div class="accordion-body-content">
                  Education is essential as it empowers individuals with
                  knowledge, skills, and values that contribute to personal
                  development and societal progress.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <span class="icon">+</span>
                <span class="questions"
                  >What is the Role of Teachers in Education?</span
                >
              </div>
              <div class="accordion-body">
                <div class="accordion-body-content">
                  Teachers guide students through the learning process, helping
                  them understand complex subjects and develop critical and
                  analytical thinking skills. They also serve as role models and
                  mentors.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <span class="icon">+</span>
                <span class="questions"
                  >What are the Different Levels of Education?</span
                >
              </div>
              <div class="accordion-body">
                <div class="accordion-body-content">
                  Different levels of education include primary, secondary, and
                  higher education, each designed to build on the previous level
                  and develop students' knowledge and skills.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Newsletters Subcribe -->
    <div class="container-fluid subscribe mb-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-7 text-white text-center mb-4">
          <p class="subscribe-text mb-2">Subscribe to our newsletter</p>
          <h2>Subscribe Newsletter</h2>
        </div>
        <div class="col-12 col-md-4">
          <div class="subscribe-form">
            <form>
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email address"
                  aria-label="Email Address"
                />
              </div>
              <button type="submit" class="btn btn-custom w-100">
                Subscribe Now
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Section -->
<?php include 'includes/footer.php' ; ?>
