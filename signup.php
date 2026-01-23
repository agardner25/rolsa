<?php include ('process_accounts.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Signup</title>
</head>
<body>
<?php include ('navbar.php') ?>

<div class="main-container">
    <div class="login-container">
        <div class="container"><h1>Sign Up</h1></div>
        <div class="container">
            <form class="register" method="post">
                <?php include('errors.php') ?>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email"><br><br>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname"><br><br>
                <label for="fname"><b>First Name</b></label>
                <input type="text" placeholder="First Name" name="fname"><br><br>
                <label for="lname"><b>Last Name</b></label>
                <input type="text" placeholder="Last Name" name="lname"><br><br>
                <label for="psw1"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw1"><br><br>
                <label for="psw2"><b>Confirm Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw2"><br><br>
                <button type="submit" name="signup_user">Sign Up</button>
            </form>
        </div>
        <div class="container">
            <p>Have an account? <a class="redirect" href="login.php">Log in to existing account</a></p>
        </div>
    </div>
</div>

<div class="footer">
    <p>Footer</p>
</div>

</body>
</html>