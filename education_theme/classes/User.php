<?php
class User {
    // Function to authenticate user
    public static function auth($username, $password , $conn) {

        $stmt = mysqli_prepare($conn , "SELECT password FROM users WHERE username = ?" );
        mysqli_stmt_bind_param( $stmt, 's' , $username );
        if ( mysqli_stmt_execute( $stmt ) ){
            $result = mysqli_stmt_get_result( $stmt );
            $user = mysqli_fetch_assoc($result);
        }
        
        // Check if user exists
        if ($user != NULL) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                return true; // Authentication successful
            } else {
                return false; // Incorrect password
            }
        } else {
            return false; // User not found
        }
    }

    // Function to get user data
    public static function getUser($username , $conn) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc(); // Return user data
        } else {
            return null; // User not found
        }
    }
}
?>
