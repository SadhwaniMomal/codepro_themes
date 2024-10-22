<?php
    session_start();
    // Include User class
    include 'classes/Database.php';
    include 'classes/User.php';

    $conn = Database::getDB();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Authenticate user
        if (User::auth($username, $password , $conn)) {
            // echo "<div class='alert alert-success mt-3'>Login successful!</div>";
            // You can redirect to a dashboard or another page
            $_SESSION['is_logged_in'] = true;
            header("Location: dashboard.php");
        } else {
            echo "<div class='alert alert-danger mt-3'>Invalid username or password.</div>";
        }
    }
?>

<?php include 'includes/header.php' ; ?>

    <div class="container-fluid">
        <?php include 'includes/topbar.php' ?>
        <?php include 'includes/navbar.php' ?>

        <div class="row mt-5">
            <div class="col-md-4 m-auto">
                <h2 class="text-center">Login Form</h2>
                <form method="POST" action="login.php">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="d-block w-100 btn btn-primary">Login</button>
                </form>
            </div>
        </div>
       


    </div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
