<?php
session_start();
session_destroy();
echo"You successfull logout.click here <a href='login.php'>
login </a>";
?>