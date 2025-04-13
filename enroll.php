<?php
$host = "localhost";
$db = "ernroll_db"; // your DB
$user = "root";
$pass = "";

// Connect
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);

    $sql = "INSERT INTO enrollments (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql)) {
        header("Location: thanks.html");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
