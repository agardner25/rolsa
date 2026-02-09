<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolsa Technologies</title>
    <link rel="stylesheet" href="main.css";>
</head>
<body>
<?php include('navbar.php') ?>
<div class="container">
    <h1>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
</div>
</body>
</html>