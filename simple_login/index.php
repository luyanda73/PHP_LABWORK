<!DOCTYPE html>
<html>
<head><title>Simple Login</title></head>
<body>
<h2>Simple Login Form</h2>
<form method="POST">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<input type="submit" name="login" value="Login">
</form>
<?php
include "db.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<p>Login successful!</p>";
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}
?>
</body>
</html>