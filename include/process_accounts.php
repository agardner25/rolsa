<?php
session_start();
include ('connect.php');

// Hoisting
$username = "";
$email = "";
$errors = array();

// Runs if user has submitted the "log in" form
if (isset($_POST['login_user'])) {
    
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    
    // Runs if there are no errors
    if (count($errors) == 0) {
        
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $result->fetch_assoc()['id'];
            header('location: index.php');
            
        } else {
            array_push($errors, "Username or password is incorrect");
        }
    }
}

// Runs if user has submitted the "register" form
else if (isset($_POST['signup_user'])) {
    
    // Hoisting Variables
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $password_1 = $_POST['psw1'];
    $password_2 = $_POST['psw2'];
    
    // Error Checking + adding to errors output
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($first_name) or (empty($last_name))) { 
        array_push($errors, "Name is required");
    }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "Both passwords must match");
    }
    
    // Checks to make sure username is not taken
    $query_username_available = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query_username_available);
    if ($result->num_rows > 0) {
        array_push($errors, "Username is already taken");
    }
    
    // Runs if there are no errors
    if (count($errors) == 0) {
        $password = md5($password_1);
        $query_insert_user = "INSERT INTO users (username, password) 
                VALUES('$username', '$password')";
        
        // Runs insertion query
        if ($conn->query($query_insert_user) === TRUE) {
            echo "<div class='container'><p>Account created succesfully. <a href='login.php'>Log in to account</a></p>";
        } else {
            echo "Error " . $query_insert_student . "<br>" . $conn->error;
        }
    }
}

?>