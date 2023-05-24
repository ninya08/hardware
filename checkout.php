<?php
// Database connection parameters
$servername = 'localhost';
$dbName = 'hardware';
$username = 'root';
$password = '';

// Establish a connection to the MySQL database
$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

$stmt = $conn->prepare("SELECT * FROM p_cart");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Insert order details into the checkout database
$stmt = $conn->prepare("INSERT INTO checkout (p_id, p_name, p_price, quantity, total_price, p_image) VALUES (:p_id, :p_name, :p_price, :quantity, :total_price, :p_image)");
foreach ($products as $product) {
    $productTotal = $product['p_price'] * $product['quantity'];
    $stmt->bindValue(':p_id', $product['p_id']);
    $stmt->bindValue(':p_name', $product['p_name']);
    $stmt->bindValue(':p_price', $product['p_price']);
    $stmt->bindValue(':quantity', $product['quantity']);
    $stmt->bindValue(':total_price', $productTotal);
    $stmt->bindValue(':p_image', $product['p_image']);
    $stmt->execute();
}

// Clear the cart after placing the order
$stmt = $conn->prepare("DELETE FROM p_cart");
$stmt->execute();

// Fetch all rows from the checkout table
$sql = "SELECT * FROM checkout";
$stmt = $conn->prepare($sql);

// Execute the statement
if ($stmt->execute()) {
    // Fetch all rows from the result set as an associative array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database connection
    $conn = null;
} else {
    echo "Error: " . $stmt->errorInfo()[2];
}
?>