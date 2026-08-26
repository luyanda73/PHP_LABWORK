<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"])) {
        setcookie("username", $username, time() + 3600);
        setcookie("password", $password, time() + 3600);
    }

    if ($username == "admin" && $password == "1234") {
        echo "<p>Login successful!</p>";
    } else {
        echo "<p>Invalid username or password.</p>";
    }
}

$saved_username = $_COOKIE["username"] ?? "";
$saved_password = $_COOKIE["password"] ?? "";
?>

<h2>Remember Me Login</h2>
<form method="POST">
    Username:
    <input type="text" name="username" value="<?php echo $saved_username; ?>" required>
    <br><br>

    Password:
    <input type="password" name="password" value="<?php echo $saved_password; ?>" required>
    <br><br>

    <input type="checkbox" name="remember"> Remember Me
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

<p>Demo login: admin / 1234</p>
