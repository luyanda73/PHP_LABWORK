<?php
session_start();

$message = "";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validation
    if (strpos($email, "@") === false) {
        $message = "Invalid Email!";
    }
    elseif (strlen($password) <= 6) {
        $message = "Password must be more than 6 characters!";
    }
    else {
        // Store data in session
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        $message = "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<h2>User Registration Form</h2>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="text" name="email" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<h3><?php echo $message; ?></h3>

</body>
</html>