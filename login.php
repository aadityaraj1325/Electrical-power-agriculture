<?php
$host = "localhost";
$db = "user_auth";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);

    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        // Login success with name
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8" />
          <meta http-equiv="refresh" content="2;url=index.html">
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Login Successful</title>
          <style>
            body {
              background: #fff8f1;
              font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
              display: flex;
              justify-content: center;
              align-items: center;
              height: 100vh;
              margin: 0;
            }
            .message-box {
              background: #ffffff;
              padding: 50px 40px;
              border-radius: 12px;
              text-align: center;
              box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
              max-width: 400px;
              width: 90%;
            }
            .message-box h1 {
              font-size: 2rem;
              color: #f4a261;
              margin-bottom: 10px;
            }
            .message-box p {
              font-size: 1rem;
              color: #555;
            }
            .loader {
              margin: 25px auto 0;
              border: 4px solid #f4a261;
              border-top: 4px solid transparent;
              border-radius: 50%;
              width: 40px;
              height: 40px;
              animation: spin 1s linear infinite;
            }
            @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }
          </style>
        </head>
        <body>
          <div class="message-box">
            <h1>Welcome back, ' . htmlspecialchars($username) . '!</h1>
            <p>Login successful. Redirecting to your homepage...</p>
            <div class="loader"></div>
          </div>
        </body>
        </html>';
    } else {
        echo "<script>alert('Invalid username or password.'); window.location.href='login.html';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request.'); window.location.href='login.html';</script>";
}
?>
