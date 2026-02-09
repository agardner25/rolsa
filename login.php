<?php include('include/process_accounts.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolsa Technologies</title>
    <link rel="stylesheet" href="css/main.css";>
</head>
<body>
<?php include('include/navbar.php') ?>
<div class="main-container">
    <div class="login-container">
        <div class="container"><h1>Log In</h1></div>
        <div class="container">
            <form class="login" action="" method="post">
                <?php include('include/errors.php') ?>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname"><br><br><br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw"><br><br><br>
                <button type="submit" name="login_user">Login</button>
            </form>
        </div>
        <div class="container">
            <p>Don't have an account? <a class="redirect" href="signup.php">Sign up</a></p>
        </div>
    </div>
</div>
</body>
</html>