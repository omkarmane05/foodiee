<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fooddelivery";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_name = $_POST['item_name'];
    
  
    $item_name = $conn->real_escape_string($item_name);

   
    if (empty($item_name)) {
        echo "No item name received.";
        exit();
    }
    
    // Insert into database
    $sql = "INSERT INTO mycart (item_name) VALUES ('$item_name')";
    if ($conn->query($sql) === TRUE) {
        echo "Item added to cart";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
