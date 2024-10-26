
<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in
if (isset($_SESSION['email'])) {
    // Display a welcome message to the user
    echo "<h1>Welcome, " . htmlspecialchars($_SESSION['email']) . "!</h1>";
    // Provide a logout link
    echo "<p><a href='logout.php'>Logout</a></p>";
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit; // Ensure script termination after redirection
}
?>