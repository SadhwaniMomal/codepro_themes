<?php 

class Candidate
{
    public static function update($name, $guardian_name, $dob, $religion, $mobile, $nationality, $qualification, $email, $gender, $address, $profile_pic, $conn) {
        
        $stmt = $conn->prepare("INSERT INTO candidate (name, guardian_name, dob, religion, mobile, nationality, qualification, email, gender, address, profile_pic) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssss", $name, $guardian_name, $dob, $religion, $mobile, $nationality, $qualification, $email, $gender, $address, $profile_pic);
        if ($stmt->execute()){
            return true;
        };

    }

    public static function fetchAll($conn) {
        // Prepare the SELECT statement
        $stmt = $conn->prepare("SELECT * FROM candidate");
    
        // Execute the query
        if ($stmt->execute()) {
            // Fetch the result set from the executed statement
            $result = $stmt->get_result();
            
            // Fetch all data as an associative array
            $candidates = $result->fetch_all(MYSQLI_ASSOC);
            
            // Return the fetched data
            return $candidates;
        } else {
            // Return an empty array if the query fails
            return [];
        }
    }
    
}