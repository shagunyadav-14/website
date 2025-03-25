<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "res"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $cake_type = htmlspecialchars($_POST['cake_type']);
    $cake_size = htmlspecialchars($_POST['cake_size']);
    $customer_name = htmlspecialchars($_POST['customer_name']);
    $delivery_address = htmlspecialchars($_POST['delivery_address']);
    $delivery_date = htmlspecialchars($_POST['delivery_date']);
    $message = htmlspecialchars($_POST['message']);

    // Insert order into the database
    $sql = "INSERT INTO orders (cake_size, customer_name, delivery_address, delivery_date, message)
            VALUES ('$cake_size', '$customer_name', '$delivery_address', '$delivery_date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Your order has been placed successfully!</p>";
    } else {
        echo "<p class='error-message'>Error: " . $conn->error . "</p>";
    }

    // Close connection
    $conn->close();
}
?>
