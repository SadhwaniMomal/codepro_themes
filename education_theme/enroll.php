<?php 

include 'classes/Database.php';
include 'classes/Candidates.php';
// Database configuration

$conn = Database::getDB();

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){

  // Get the values from the form
  $name = $_POST['name'];
  $guardian_name = $_POST['guardian_name'];
  $dob = $_POST['dob'];
  $religion = $_POST['religion'];
  $mobile = $_POST['mobile'];
  $nationality = $_POST['nationality'];
  $qualification = $_POST['qualification'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

  // Handle file upload
  if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
      // Check file size (150 KB = 150 * 1024 bytes)
      if ($_FILES['profile_pic']['size'] > 150 * 1024) {
          echo "Error: File size must be less than 150 KB.";
          exit;
      }

      $profile_pic = $_FILES['profile_pic']['name'];
      $target_dir = "uploads/"; // Directory where you want to save the uploaded file
      $target_file = $target_dir .'_'. date("Y_H_s") . '_'. basename($profile_pic);

      // Move the uploaded file to the target directory
      if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file)) {
          // Insert the data into the database
          $result = Candidate::update($name, $guardian_name, $dob, $religion, $mobile, $nationality, $qualification, $email, $gender, $address, $profile_pic , $conn );
          if ($result){
            echo "<script>alert('Congratulations!,  Your data is recorded')</script>";
          }
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  } else {
      echo "No file uploaded or there was an upload error.";
  }

}
?>

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
          <!-- <img src="./image/transparent_logo.png" alt="" style="width: 230px;" /> -->
          <h1 class="text-center">Enroll Today</h1>
          <p class="text-center text-secondary">Your journey towards success!</p>
        </div>
      </div>
    </div>

    <!-- About - Us Section Here  -->
    <div class="container mb-5 about-section-container">
      <div class="row justify-content-center align-items-center">
        <!-- <div class="col"></div> -->
        <div class="col">
          <div class="form-container">
            <h2 class="form-header">Registration Form</h2>
            <form method="POST" action="" enctype="multipart/form-data">
              <div class="row mb-3">
                  <div class="col-md-6 my-3">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                  </div>
                  <div class="col-md-6 my-3">
                      <input type="text" class="form-control" id="guardianName" name="guardian_name" placeholder="Father's / Guardian Name" required>
                  </div>
              </div>

              <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                  </div>
                  <div class="col-md-6">
                    <label for="religion">Religion</label>
                    <select class="form-select" id="religion" name="religion" required>
                        <option value="" disabled selected>Select your religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Christian">Christian</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Other">Other</option>
                    </select>
                  </div>
              </div>
              
              <div class="row mb-3">
                  <div class="col-md-6 my-3">
                      <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                  </div>
                  <div class="col-md-6 my-3">
                    <select class="form-select" id="nationality" name="nationality" required>
                        <option value="" disabled selected>Select your nationality</option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="International">International</option>
                    </select>  
                  </div>
              </div>
              
              <div class="mb-3">
                  <select class="form-select" id="qualification" name="qualification" required>
                      <option value="" disabled selected>Select your qualification</option>
                      <option value="1st-5th">1st-5th</option>
                      <option value="6th-8th">6th-8th</option>
                      <option value="9th">9th</option>
                      <option value="10th">10th</option>
                      <option value="11th">11th</option>
                      <option value="12th">12th</option>
                  </select>
              </div>

              <div class="mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
              
              <div class="d-flex mb-3">
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                      <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                      <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
                      <label class="form-check-label" for="other">Other</label>
                  </div>
              </div>

              <div class="mb-3">
                  <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
              </div>

              <div class="mb-3">
                  <input type="file" class="form-control" id="profilePic" name="profile_pic" accept="image/*" required>
                  <p style="font-size: 12px;" class="text-danger">File size should not exceed 150 Kbs</p>
              </div>
              
              <button type="submit" class="btn btn-primary btn-submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


<?php include 'includes/footer.php' ?>    
