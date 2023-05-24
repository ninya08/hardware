<?php
// Database connection parameters
$servername = 'localhost';
$dbName = 'hardware';
$username = 'root';
$password = '';

// Establish a connection to the MySQL database
$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);

// Check if the product_id parameter is provided in the URL
if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    // Fetch the product details from the database
    $stmt = $conn->prepare("SELECT * FROM products WHERE p_id = :product_id");
    $stmt->bindParam(':product_id', $productId);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the product exists
    if ($product) {
        // Get the product image URL
        $imageURL = $product['p_image'];

        // Move the uploaded image to the "images" folder
        $tempImagePath = $_FILES['product_image']['tmp_name'];
        $destinationImagePath = 'images/' . $_FILES['product_image']['name'];
        move_uploaded_file($tempImagePath, $destinationImagePath);

        // Check if the product is already in the cart
        $stmt = $conn->prepare("SELECT * FROM p_cart WHERE p_id = :p_id");
        $stmt->bindParam(':p_id', $product['p_id']);
        $stmt->execute();
        $existingProduct = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingProduct) {
            // Increment the quantity of the existing product in the cart
            $newQuantity = $existingProduct['quantity'] + 1;

            $stmt = $conn->prepare("UPDATE p_cart SET quantity = :quantity WHERE p_id = :p_id");
            $stmt->bindParam(':quantity', $newQuantity);
            $stmt->bindParam(':p_id', $product['p_id']);
            $stmt->execute();
        } else {
            // Insert the product into the cart table
            $stmt = $conn->prepare("INSERT INTO p_cart (p_id, p_name, p_price, p_image, quantity) VALUES (:p_id, :p_name, :p_price, :p_image, :quantity)");
            $stmt->bindParam(':p_id', $product['p_id']);
            $stmt->bindParam(':p_name', $product['p_name']);
            $stmt->bindParam(':p_price', $product['p_price']);
            $stmt->bindParam(':p_image', $imageURL);
            $stmt->bindValue(':quantity', 1);
            $stmt->execute();
        }

        // Display success message or redirect to the cart page
        echo "Product added to cart successfully.";
        // You can redirect to the cart page using the following line
        header("Location: product_cart.php");
        // Make sure to exit the script after the redirect
        exit();
    } else {
        echo "Product not found.";
    }
}
?>
