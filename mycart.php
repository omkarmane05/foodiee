<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fooddelivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch items from the cart
$sql = "SELECT id, item_name FROM mycart";
$result = $conn->query($sql);

// Check if query execution was successful
if (!$result) {
    die("Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>My Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any rows in the result
                if ($result->num_rows > 0) {
                    // Loop through each row and display it in a table row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['item_name'] . "</td></tr>";
                    }
                } else {
                    // If no rows found, display a message
                    echo "<tr><td colspan='2'>No items in the cart</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
