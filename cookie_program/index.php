<?php
setcookie("username", "Luyanda", time() + 3600);
?>
<!DOCTYPE html>
<html>
<head><title>Introduction to Cookies</title></head>
<body>
<h2>Introduction to Cookies</h2>
<?php
if (isset($_COOKIE["username"])) {
    echo "Welcome, " . $_COOKIE["username"];
} else {
    echo "Cookie has been created. Refresh the page to see it.";
}
?>
</body>
</html>
