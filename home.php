<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Home Page</h2>
<p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>
<a href="logout.php">Logout</a>
