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
    // Get the input values
    $email = $_POST['input-email'];
    $password = $_POST['input-pass'];

    // Query to check if the user exists
    $query = "SELECT  Email,C_password FROM signup WHERE email = '$email' AND C_password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check the number of rows returned
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // Authentication successful
            $row = mysqli_fetch_assoc($result);

            // Store user details in session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];

            // Redirect to the index.php or any other desired page
            header("location: index.php");
        } else {
            // Invalid credentials
            echo "Invalid email or password";
        }
    } else {
        // Database error
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
