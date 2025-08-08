<?php
// Step 1: Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "iceworld_db";

$conn = new mysqli($servername, $username, $password, $database);

// Step 2: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Get form values safely
$email = $_POST['email'];
$ice_cream = $_POST['ice_cream'];
$quantity = $_POST['quantity'];
$total_price = 0;

// Define price list for ice creams
$prices = [
    'Chocolate Icecream' => 170,
    'Vanilla Icecream' => 150,
    'Strawberry Icecream' => 160
];

// Calculate total price
if (isset($prices[$ice_cream])) {
    $total_price = $prices[$ice_cream] * $quantity;
} else {
    die("Invalid ice cream selection");
}

// Step 4: Insert data into database
$sql = "INSERT INTO orders (email, ice_cream, quantity, total_price) 
        VALUES ('$email', '$ice_cream', $quantity, $total_price)";

if ($conn->query($sql) === TRUE) {
    // Redirect to display_order.php to show the order details
    header("Location: display_order.php?email=$email&ice_cream=$ice_cream&quantity=$quantity&total_price=$total_price");
    exit(); // Ensure no further code is executed after redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 5: Close connection
$conn->close();
?>
