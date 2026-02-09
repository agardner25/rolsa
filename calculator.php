<?php include('include/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator - Rolsa Technologies</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('include/navbar.php') ?>
<div class="container">

    if (isset($_POST['calculate'])) {
        $electricity = floatval($_POST['electricity']) * 0.92;
        $gas = floatval($_POST['gas']) * 5.3;
        $driving = floatval($_POST['driving']) * 0.41;
        
        $total = $electricity + $gas + $driving;
        
        echo "<div class='results'>";
        echo "<h2>Your Monthly Carbon Footprint</h2>";
        echo "<div class='result-item'>";
        echo "<p>Electricity: <span class='result-value'>" . round($electricity, 2) . " kg CO2</span></p>";
        echo "</div>";
        echo "<div class='result-item'>";
        echo "<p>Gas: <span class='result-value'>" . round($gas, 2) . " kg CO2</span></p>";
        echo "</div>";
        echo "<div class='result-item'>";
        echo "<p>Driving: <span class='result-value'>" . round($driving, 2) . " kg CO2</span></p>";
        echo "</div>";
        echo "<div class='result-total'>";
        echo "<p><strong>Total: " . round($total, 2) . " kg CO2</strong></p>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>