<?php include('include/server.php') ?>
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
<div class="container">
    <h1>Green energy products</h1>
</div>
<?php
// Query products table
$sql = "SELECT product_id, name, description FROM products ORDER BY name ASC";
if ($stmt = $db->prepare($sql)) {
    $stmt->execute();
    $result = $stmt->get_result();

    echo '<div class="products-grid">';

    while ($row = $result->fetch_assoc()) {
        $id = (int) $row['product_id'];
        $name = htmlspecialchars($row['name']);
        $description = nl2br(htmlspecialchars($row['description']));
        echo '<article class="product-tile">';
        echo '  <a class="product-link" href="product.php?id=' . $id . '">';
        echo '    <h2 class="product-name">' . $name . '</h2>';
        echo '  </a>';
        echo '  <p class="product-desc">' . $description . '</p>';
        echo '</article>';
    }

    echo '</div>';

    $stmt->close();
} else {
    echo '<p class="error">Unable to load products.</p>';
}
?>
</body>
</html>