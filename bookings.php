<?php 
include('include/server.php');
include('include/process_bookings.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings - Rolsa Technologies</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('include/navbar.php') ?>
<div class="container">
    <h1>Services and Consultations</h1>
</div>

<div class="container">
    <h2>Book a Service</h2>
    <form method="POST" action="">
        <div style="margin-bottom: 16px;">
            <label for="service" style="display: block; margin-bottom: 8px; font-weight: bold;">Select a Service:</label>
            <select name="service" id="service" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b; color: white;">
                <option value="">Choose a service...</option>
                <?php
                $query = "SELECT service_id, service_name, description FROM services";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['service_id'] . "' data-description='" . htmlspecialchars($row['description']) . "'>" . $row['service_name'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div id="description-box" style="margin-bottom: 16px; padding: 12px; border: 1px solid #160023; background-color: #3b3b3b; color: white; display: none; border-radius: 4px;">
            <strong>Description:</strong>
            <p id="description-text"></p>
        </div>

        <div style="margin-bottom: 16px;">
            <label for="booking_date" style="display: block; margin-bottom: 8px; font-weight: bold;">Select Date & Time:</label>
            <input type="datetime-local" name="booking_date" id="booking_date" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b;">
        </div>

        <button type="submit" name="book_service">Book Service</button>
    </form>
</div>

<script>
document.getElementById('service').addEventListener('change', function() {
    const description = this.options[this.selectedIndex].getAttribute('data-description');
    const descBox = document.getElementById('description-box');
    const descText = document.getElementById('description-text');
    
    if (description) {
        descText.textContent = description;
        descBox.style.display = 'block';
    } else {
        descBox.style.display = 'none';
    }
});
</script>
</body>
</html>