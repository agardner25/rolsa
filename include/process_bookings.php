<?php
session_start();
include ('connect.php');

// Hoisting
$errors = array();

// Runs if user has submitted the "booking" form
if (isset($_POST['book_service'])) {
    
    $user_id = $_SESSION['user_id'] ?? '';
    $service_id = $_POST['service'] ?? '';
    $booking_date = $_POST['booking_date'] ?? '';
    
    if (empty($user_id)) { array_push($errors, "You must be logged in to book"); }
    if (empty($service)) { array_push($errors, "Service is required"); }
    if (empty($booking_date)) { array_push($errors, "Booking date is required"); }
    
    // Runs if there are no errors
    if (count($errors) == 0) {
        $query_insert_booking = "INSERT INTO bookings (service_id, user_id, time) 
                VALUES('$service_id', '$user_id', '$booking_date')";
        
        // Runs insertion query
        if ($conn->query($query_insert_booking) === TRUE) {
            echo "<div class='container'><p>Booking created successfully. <a href='bookings.php'>View your bookings</a></p></div>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

else {
    foreach ($errors as $error) {
        echo "<div class='container'><p class='error'>$error</p></div>";
    }
}

?>