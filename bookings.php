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
    <?php include('include/process_bookings.php') ?>
    <label for="service">Service:</label>
    <select id="service" name="service" required>
        <option value="">Select a service</option>
        <option value="solar_panels">Solar Panels Fitting</option>
        <option value="ev_charging">Electric Vehicle Charging Station Fitting</option>
        <option value="energy_audit">Green Energy Audit</option>
        <option value="battery_storage">Battery Storage Installation</option>
    </select>

    <form method="POST" action="include/process_bookings.php">
        <div class="form-group">
            <label for="service">Service:</label>
            <input type="text" id="service" name="service" required>
        </div>
        
        <div class="form-group">
            <label for="booking_date">Booking Date:</label>
            <input type="datetime-local" id="booking_date" name="booking_date" required>
        </div>
        
        <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea id="notes" name="notes" rows="4"></textarea>
        </div>
        
        <button type="submit" name="book_service">Book Service</button>
    </form>
</div>
</body>
</html>