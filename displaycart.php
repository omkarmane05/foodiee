<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default MySQL username for XAMPP
$password = ""; // Default MySQL password for XAMPP
$dbname = "fooddelivery"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from mycart table
$sql = "SELECT * FROM mycart";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["category"] . "</td>
                <td>" . $row["item_name"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='2'>No items in cart</td></tr>";
}

$conn->close();
?>
