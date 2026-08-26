<?php
if (isset($_COOKIE["visited"])) {
    $message = "Welcome back! You are a repeated user.";
} else {
    setcookie("visited", "yes", time() + (30 * 24 * 60 * 60));
    $message = "Welcome! You are a new user.";
}
?>

<h2>New or Repeated User</h2>
<p><?php echo $message; ?></p>
