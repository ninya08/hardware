<?php
// Database connection parameters
$servername = 'localhost';
$dbName = 'hardware';
$username = 'root';
$password = '';

// Establish a connection to the MySQL database
$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

    $productId = $_POST['product_id'];
    $updateQuantity = $_POST['updateQuantity'];

    try {
        // Fetch the product details from the database
        $stmt = $conn->prepare("SELECT * FROM p_cart WHERE p_id = :product_id");
        $stmt->bindParam(':product_id', $productId);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            $newQuantity = $product['quantity'] + $updateQuantity;
            if ($newQuantity < 0) {
                $newQuantity = 0;
            }

            $stmt = $conn->prepare("UPDATE p_cart SET quantity = :quantity WHERE p_id = :p_id");
            $stmt->bindParam(':quantity', $newQuantity);
            $stmt->bindParam(':p_id', $productId);
            $stmt->execute();

            // Redirect back to the cart page
            header("Location: product_cart.php");
            exit();
        } else {
            echo "Product not found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>
