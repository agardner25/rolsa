<div style="margin-bottom: 16px;">
    <label for="service" style="display: block; margin-bottom: 8px; font-weight: bold;">Select a Service:</label>
    <select name="service" id="service" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #160023; box-sizing: border-box; background-color: #3b3b3b; color: white;" onchange="updateDescription()">
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

<div style="margin-bottom: 16px; padding: 12px; border: 1px solid #160023; background-color: #3b3b3b; color: white; min-height: 60px;">
    <p style="margin: 0;"><strong>Description:</strong></p>
    <p id="description-box" style="margin: 8px 0 0 0;">Select a service to view description</p>
</div>

<script>
function updateDescription() {
    const select = document.getElementById('service');
    const descBox = document.getElementById('description-box');
    const selected = select.selectedOptions[0];
    const description = selected.getAttribute('data-description') || 'Select a service to view description';
    descBox.textContent = description;
}
</script>
