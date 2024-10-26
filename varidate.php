<?php
$myemail = "igiranezay331@gmail.com";
$mypass = "123!";
if(isset($_POST['login'] )){
$email = $_POST['email'];
$pass =$_POST['password'];
if($email == $myemail && $pass == $mypass) {
if(isset($_POST['remember'])){
setcookie('email', $email, time()+60*60*7);
setcookie('pass', $pass, time()+60*60*7);
}
session_start();
$_SESSION['email'] = $email;
header("location:welcome.php");
}else{
echo "Email or Password is Invailid. <br> click here to <a
href='login.php'> try again</a>";
}
} else{
header("location: login.php");
}
?>