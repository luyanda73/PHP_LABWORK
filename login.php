<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

if (isset($_POST["login"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "1234") {
        $_SESSION["username"] = $_POST["username"];
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>

<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php if (isset($error)) echo $error; ?>
