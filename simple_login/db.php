<?php
$conn = mysqli_connect("localhost", "root", "", "login_db", 3306);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>