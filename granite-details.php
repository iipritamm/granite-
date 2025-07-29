<?php
// db.php - Database connection
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password is empty
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product type from the URL and replace hyphens with spaces
$productType = str_replace('-', ' ', trim($_GET['type']));
echo "Product Type: " . htmlspecialchars($productType); // Debugging output

// Prepare and execute the SQL query
$stmt = $conn->prepare("SELECT * FROM products WHERE common_name = ?");
$stmt->bind_param("s", $productType);
$stmt->execute();
$result = $stmt->get_result();

// Check if product exists
if ($result->num_rows > 0) {
    // Fetch product data
    $product = $result->fetch_assoc();
} else {
    // If product not found, display a default message
    $product = array(
        "name" => "Product Not Found",
        "description" => "Sorry, this product does not exist.",
        "image" => "images/default.jpg",
        "price" => "N/A",
        "dimensions" => "N/A"
    );
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - Granite Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="product-detail-page">
        <div class="product-image">
            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        </div>
        <div class="product-info">
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <p><?php echo htmlspecialchars($product['description']); ?></p>
            <p><strong>Price:</strong> <?php echo htmlspecialchars($product['price']); ?></p>
            <p><strong>Dimensions:</strong> <?php echo htmlspecialchars($product['dimensions']); ?></p>
        </div>
    </div>
</body>
</html>
