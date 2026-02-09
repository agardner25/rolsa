<?php include ('include/server.php');
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Log Out</title>
</head>
<body>
<?php include ('include/navbar.php') ?>
<div class="main-container">
    <div class="container">
        <h1>You have been successfully logged out.</h1><br>
        <h2><a href="login.php">Log In </a></h2>
    </div>
</div>
<div class="footer">
    <p>Footer</p>
</div>
</body>
</html>