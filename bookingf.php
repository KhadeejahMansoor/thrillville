<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check the database connection
if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $adult = isset($_POST['Adult']) ? $_POST['Adult'] : 0;
    $child = isset($_POST['Child']) ? $_POST['Child'] : 0;

    // Calculate prices
    $adultprice = $adult * 20;
    $childprice = $child * 15;
    $subtotal = $adultprice + $childprice;
    $tax = $subtotal * 0.05;
    $grandTotal = $subtotal + $tax + 5;

    // Generate a random Ticket_ID
    // For a string ID:
    $ticket_id = uniqid();
    // Or for a numeric ID:
    // $ticket_id = mt_rand(10000, 99999);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO cart (Ticket_ID, Adult, Child, Adult_Price, Child_Price, Subtotal, Tax, Shipping, Grand_Total) VALUES (?, ?, ?, ?, ?, ?, ?, 5, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("siiddddd", $ticket_id, $adult, $child, $adultprice, $childprice, $subtotal, $tax, $grandTotal);

    // Execute and check
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    } else {
        echo '<script>alert("Booking added successfully");</script>';
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
