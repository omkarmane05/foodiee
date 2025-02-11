<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fooddelivery"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Redirect to homepage.html after successful login
            header("Location: homepage.html");
            exit();
        } else {
            echo "<script>alert('Invalid password. Please try again.'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('No user found with this email address.'); window.location.href='login.html';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
