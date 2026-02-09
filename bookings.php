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
        <label for="service">Select a Service:</label>
        <select name="service" id="service" required>
            <option value="">Choose a service...</option>
            <?php
            $query = "SELECT service_id, service_name, description FROM services";
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['service_id'] . "'>" . $row['service_name'] . " - " . $row['description'] . "</option>";
            }
            ?>
        </select>

        <label for="booking_date">Select Date & Time:</label>
        <input type="datetime-local" name="booking_date" id="booking_date" required>

        <label for="notes">Notes (Optional):</label>
        <textarea name="notes" id="notes"></textarea>

        <button type="submit" name="book_service">Book Service</button>
    </form>
</div>