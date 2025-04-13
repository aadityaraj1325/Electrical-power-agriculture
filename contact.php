<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = htmlspecialchars(trim($_POST["first_name"]));
    $lastName = htmlspecialchars(trim($_POST["last_name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // You can also send this to a database or via email
    // For now, we just show a styled success page

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="refresh" content="3;url=index.html">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Message Sent</title>
      <style>
        body {
          background: #fff8f1;
          font-family: "Segoe UI", sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
        }
        .message-box {
          background: #fff;
          padding: 40px 50px;
          border-radius: 12px;
          text-align: center;
          box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
          max-width: 450px;
        }
        .message-box h1 {
          color: #f4a261;
          font-size: 2rem;
        }
        .message-box p {
          color: #444;
          margin-top: 15px;
        }
        .loader {
          margin-top: 20px;
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
        <h1>Thank you, ' . $firstName . '!</h1>
        <p>Your message has been sent successfully.</p>
        <div class="loader"></div>
        <p>Redirecting to homepage...</p>
      </div>
    </body>
    </html>
    ';
} else {
    echo "<script>alert('Invalid request.'); window.location.href='contact.html';</script>";
}
?>
