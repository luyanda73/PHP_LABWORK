<!DOCTYPE html>
<html>
<head><title>Contact Form</title></head>
<body>
<h2>Contact Form</h2>
<form method="POST">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>
Message:<br>
<textarea name="message" rows="5" cols="40" required></textarea><br><br>
<input type="submit" name="submit" value="Send Message">
</form>
<?php
include "db.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contacts (name, email, message)
            VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "<p>Message sent successfully!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>