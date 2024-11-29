<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = 'wonderland';

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Cannot connect to Database: " . $conn->connect_error);
}

function updateTotals($conn) {
    // Fetch the latest prices and quantities
    $fetchSql = "SELECT Adult, Child, Adult_Price, Child_Price, Shipping FROM cart ORDER BY Ticket_ID DESC LIMIT 1";
    $result = $conn->query($fetchSql);
    $row = $result->fetch_assoc();

    // Calculate new totals
    $subTotal = ($row['Adult'] * $row['Adult_Price']) + ($row['Child'] * $row['Child_Price']);
    $tax = $subTotal * 0.05; // Assuming 5% tax
    $shipping = $row['Shipping'];
    $grandTotal = $subTotal + $tax + $shipping;

    // Update the totals in the database
    $updateSql = "UPDATE cart SET SubTotal = ?, Tax = ?, Grand_Total = ? ORDER BY Ticket_ID DESC LIMIT 1";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("ddd", $subTotal, $tax, $grandTotal);

    if (!$updateStmt->execute()) {
        echo "Error updating totals: " . $updateStmt->error;
    }

    $updateStmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update adult quantity
    if (isset($_POST['adult_quantity'])) {
        $quantity = $_POST['adult_quantity'];
        $sql = "UPDATE cart SET Adult = ? ORDER BY Ticket_ID DESC LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $quantity);

        if ($stmt->execute()) {
            echo "Adult quantity updated successfully";
            updateTotals($conn); // Update totals after changing quantity
        } else {
            echo "Error updating adult quantity: " . $stmt->error;
        }

        $stmt->close();
    }

    // Update child quantity
    if (isset($_POST['child_quantity'])) {
        $quantity = $_POST['child_quantity'];
        $sql = "UPDATE cart SET Child = ? ORDER BY Ticket_ID DESC LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $quantity);

        if ($stmt->execute()) {
            echo "Child quantity updated successfully";
            updateTotals($conn); // Update totals after changing quantity
        } else {
            echo "Error updating child quantity: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();

header('Location: cart.php'); // Redirect back to the cart page
exit();
?>
