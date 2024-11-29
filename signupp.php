<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values and sanitize them
    $first_name = $_POST['input-first_name'];
    $last_name = $_POST['input-last_name'];
    $address = $_POST['input-address'];
    $email = $_POST['input-email'];
    $password = password_hash($_POST['input-password'], PASSWORD_DEFAULT);
    $contact = $_POST['input-phone'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO SignUp (Email, C_Password, First_Name, Last_Name, C_Address, Phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $password, $first_name, $last_name, $address, $contact);

    // Execute the statement
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
