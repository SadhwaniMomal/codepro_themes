<?php
// session_start();
// Get the current page's filename
$current_page = basename($_SERVER['PHP_SELF']);

// Define the navbar items
$navbar_items = [
    'index.php' => 'Home',
    'explore.php' => 'Explore',
    'contact.php' => 'Contact',
];

?>

<nav>
    <ul>
        
    </ul>
</nav>

<style>
    .active {
        font-weight: bold; /* Change this style as needed */
        color: red; /* Example of active item color */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img style="width:10rem ; " src="image/codepro_logo_transparent.png" alt="Logo" />
      </a>

      <!-- Section for small screens with search and Enroll button -->
      <div
        class="d-none d-sm-flex d-lg-none justify-content-center align-items-center"
      >
        <i class="fas fa-search me-3" aria-label="Search"></i>
        <span class="mx-2">|</span>
        <i class="fa-regular fa-user me-1" aria-label="User Profile"></i>
        <span class="me-3">Admin</span>
        <button class="btn btn-enroll-s ms-2">Enroll Now</button>
      </div>

      <button
        class="navbar-toggler-btn d-flex d-lg-none"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasNavbar"
      >
        <div class="offcanvas-header">
          <a class="navbar-brand" href="index.php">
            <img src="image/codepro_logo_transparent.png" alt="Logo" style="width:5rem ; height:5rem"/>
          </a>
          <button
            type="button"
            class="btn-close-custom"
            data-bs-dismiss="offcanvas"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="offcanvas-body">
          <ul
            class="navbar-nav mx-auto my-3 mb-lg-0 text-sm-start text-lg-center"
          >
            <?php foreach ($navbar_items as $file => $name): ?>
              <li class="nav-item <?= ($file === $current_page) ? 'active' : '' ?>">
                  <a class="nav-link" href="<?= $file ?>"><?= $name ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
          <div
            class="d-md-none d-lg-flex justify-content-lg-center justify-content-sm-start align-items-lg-center align-items-sm-start text-sm-start text-lg-center"
          >
            <i
              class="fas fa-search me-3 d-none d-lg-flex"
              aria-label="Search"
            ></i>
            
            <span class="me-3"><a class="text-decoration-none text-secondary" href="login.php"> <i class="fa-regular fa-user me-1" aria-label="User Profile"></i> Admin</a></span>
            <?php if (!empty($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true): ?>
                <span class="me-3"><a class="text-decoration-none text-secondary" href="dashboard.php"> <i class="fas fa-tachometer-alt" aria-label="Dashboard"></i> Dashboard</a></span>
                <span class="me-3"><a class="text-decoration-none text-secondary" href="logout.php"> <i class="fa fa-sign-out me-1" aria-label="Logout"></i> Logout</a></span>
            <?php endif; ?>

            <button class="btn btn-enroll-s m-0 d-block my-3">
              <a class="text-decoration-none text-white" href="enroll.php">Enroll Now</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </nav>