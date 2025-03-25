<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Order Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="order-container">
        <h2>Order Your Cake</h2>
        <form id="cake-order-form" action="process-order.php" method="POST">
            <!-- Cake Type Selection -->
            <!-- <label for="cake-type">Select Cake Type:</label>
            <select id="cake-type" name="cake_type" required>
                <option value="chocolate">Chocolate Cake</option>
                <option value="vanilla">Vanilla Cake</option>
                <option value="strawberry">Strawberry Cake</option>
                <option value="red-velvet">Red Velvet Cake</option>
            </select> -->
            
            <!-- Size Selection -->
            <label for="cake-size">Select Cake Size:</label>
            <select id="cake-size" name="cake_size" required>
                <option value="small">Small (6 inches)</option>
                <option value="medium">Medium (8 inches)</option>
                <option value="large">Large (10 inches)</option>
            </select>
            
            <!-- Delivery Details -->
            <label for="customer-name">Your Name:</label>
            <input type="text" id="customer-name" name="customer_name" required>
            
            <label for="delivery-address">Delivery Address:</label>
            <textarea id="delivery-address" name="delivery_address" required></textarea>
            
            <label for="delivery-date">Delivery Date:</label>
            <input type="date" id="delivery-date" name="delivery_date" required>
            
            <!-- Additional Message -->
            <label for="message">Additional Message:</label>
            <textarea id="message" name="message"></textarea>
            
            <!-- Submit Button -->
            <button type="submit">Place Order</button>
        </form>

        <div id="order-message"></div>
    </div>

    <script src="script.js"></script>

</body>
</html>
