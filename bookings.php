<?php include('include/server.php') ?>
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
</body>
</html>
<div class="container">
    <h2>Book a Service</h2>
    <form method="POST" action="include/process_bookings.php">
        <div style="margin-bottom: 16px;">
            <label for="service" style="display: block; margin-bottom: 8px; font-weight: bold;">Select a Service:</label>
            <select name="service" id="service" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b; color: white;">
                <option value="">Choose a service...</option>
                <?php
                $query = "SELECT service_id, service_name, description FROM services";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['service_id'] . "'>" . $row['service_name'] . " - " . $row['description'] . "</option>";
                }
                ?>
            </select>
        </div>

        <div style="margin-bottom: 16px;">
            <label for="booking_date" style="display: block; margin-bottom: 8px; font-weight: bold;">Select Date & Time:</label>
            <input type="datetime-local" name="booking_date" id="booking_date" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b;">
        </div>

        <div style="margin-bottom: 16px;">
            <label for="notes" style="display: block; margin-bottom: 8px; font-weight: bold;">Notes (Optional):</label>
            <textarea name="notes" id="notes" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b; color: white; font-family: 'Arial', sans-serif; resize: vertical;"></textarea>
        </div>

        <button type="submit" name="book_service">Book Service</button>
    </form>
</div>