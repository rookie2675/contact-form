<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="index.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<h2>Thank you, $name!</h2>";
        echo "<p>We have received your message and will get back to you at <strong>$email</strong>.</p>";
        echo "<p><strong>Your Message:</strong> $message</p>";
    } else {
        echo "<p style='color:red;'>All fields are required.</p>";
    }
} ?>
</body>
</html>
