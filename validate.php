<?php
// Define the expected email and password
$myemail = "hafashimanaleonidas8@gmail.com";
$mypass = "leonidas";

// Check if the login form has been submitted
if (isset($_POST['login'])) {
    // Retrieve the email and password from the form
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    // Validate the provided email and password against the predefined credentials
    if ($email == $myemail && $pass == $mypass) {
        // Check if the "Remember Me" checkbox was checked
        if (isset($_POST['remember'])) {
            // Set cookies for email and password with a 7-hour expiration time
            setcookie('email', $email, time() + 60 * 60 * 7); // Cookie expires in 7 hours
            setcookie('pass', $pass, time() + 60 * 60 * 7);   // Cookie expires in 7 hours
        }

        // Start a session to store user information
        session_start();
        // Store the user's email in the session for later use
        $_SESSION['email'] = $email;

        // Redirect to the welcome page
        header("Location: welcome.php");
        exit; // Ensure script termination after redirection
    } else {
        // If email or password is invalid, display an error message
        echo "Email or Password is Invalid. <br> Click here to <a href='login.php'>try again</a>";
    }
} else {
    // If the login form was not submitted, redirect to the login page
    header("Location: login.php");
    exit; // Ensure script termination after redirection
}
?>
