<?php
// Start the session to manage session variables
session_start();

// Destroy the session to log the user out
session_destroy();

// Clear any cookies set for the user
if (isset($_COOKIE['email'])) {
    setcookie('email', '', time() - 3600); // Expire the cookie by setting a past time
}
if (isset($_COOKIE['pass'])) {
    setcookie('pass', '', time() - 3600); // Expire the cookie by setting a past time
}

// Provide a logout confirmation message with a link to log back in
echo "<h1>You have successfully logged out.</h1>";
echo "<p>Click here to <a href='login.php'>login again</a>.</p>";
?>