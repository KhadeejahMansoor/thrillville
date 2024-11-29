<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grandTotal = $_POST['grandTotal'];

    // Update the grand total in the database
    // Assuming you know which row or user's cart to update
    $sql = "UPDATE cart SET Grand_Total = ? WHERE ..."; // Complete the WHERE clause as needed

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("d", $grandTotal);

    if ($stmt->execute()) {
        echo "Grand total updated successfully";
    } else {
        echo "Error updating grand total: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>