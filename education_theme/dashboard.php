<?php 
session_start();
include 'classes/Database.php';
include 'classes/Candidates.php';
// Database configuration
if ( !$_SESSION['is_logged_in'] ){
    header('Location: login.php');
    die('Not Authorized');
}
$conn = Database::getDB();

$candidates = Candidate::fetchAll($conn);

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
      <div class="text-center position-relative">
        <div class="main-heading">
          <!-- <img src="./image/transparent_logo.png" alt="" style="width: 230px;" /> -->
          <h1 class="text-center">Dashboard</h1>
          <p class="text-center text-secondary">Record of all enrolled candidates!</p>
        </div>
      </div>
    </div>

    <!-- About - Us Section Here  -->
    <div class="container mb-5">
      <div class="row justify-content-center align-items-center">
        <div class="col">
            <?php if ( empty( $candidates )) : ?>
                <h3 class="my-3 text-danger text-center border border-danger rounded">No Records Found</h3>
            <?php else: ?>    
            <table class='table' style="width: 100%;">
                <thead>
                    <tr>
                        <th>
                            Details
                        </th>
                        <th>
                            Qualification
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Address
                        </th>
                    </tr>
                </thead>
            
                <tbody>
                    <?php foreach ( $candidates as $candidate ):?>
                        <tr>
                            <td>
                                <p class="p-0 m-0"><?= $candidate['name'] ?></p>
                                <p class="p-0 m-0" style="font-size: 12px;"><?= $candidate['guardian_name'] ?></p> 
                                <p class="p-0 m-0" style="font-size: 12px;"><?= $candidate['mobile'] ?></p> 
                                <p class="p-0 m-0" style="font-size: 12px;"><?= $candidate['religion'] ?> , <?= $candidate['nationality'] ?> </p>
                            </td>
                            <td> <?= $candidate['qualification'] ?></td>
                            <td> <?= $candidate['email'] ?></td>
                            <td> <?= $candidate['address'] ?></td>
                        </tr>
                    <?php endforeach; ?>    
                   
                </tbody>
            </table>
            <?php endif; ?>   
        </div>
      </div>
    </div>

<?php include 'includes/footer.php' ?>    
