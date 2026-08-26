<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2>

<form method="POST">
    Name:
    <input type="text" name="name" required><br><br>

    Username:
    <input type="text" name="username" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" name="register" value="Register">
</form>

<?php
if (isset($_POST["register"])) {
    include "db.php";

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (name, username, email, password)
            VALUES ('$name', '$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "<p>Registration successful!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

</body>
</html>
