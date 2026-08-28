<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    setcookie("username", $name, time() + 3600);
    echo "Cookie created successfully!";
}
?>
<h2>Create Cookie in a Form</h2>
<form method="POST">
    Enter Name: <input type="text" name="name" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>
