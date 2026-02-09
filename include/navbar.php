<?php

if ($_SESSION['username'] == '') : ?>

    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php"><h1 class="logo">Rolsa</h1></a></li>
            <li><a href="products.php">Green products</a></li>
            <li><a href="calculator.php">Carbon footprint</a></li>
            <li><a href="bookings.php">Services and consultations</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="signup.php">Sign up</a></li>
        </ul>
    </nav>
    
<?php else : ?>

    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php"><h1 class="logo">Rolsa</h1></a></li>
            <li><a href="products.php">Green Products</a></li>
            <li><a href="calculator.php">Carbon footprint</a></li>
            <li><a href="bookings.php">Services and consultations</a></li>
            <li><a href="index.php">My dashboard</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    
<?php endif ?>