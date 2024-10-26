<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style type="text/css">
th {
text-align: right;
}
h3 {
text-align: center;
}
</style>
<form  action="varidate.php" method="post">
<h3> login form using session and cookies with Remember me </h3>
<table cellpadding ="5" cellspacing="10" align="center" border="5">
<tr>
<th>Email</th>
<td><input type="text" name="email"></td>
</tr>
<tr>
    <th>Password</th>
    <td><input type="password"name="password"></td>
</tr>
<tr>
    <td colspan="2" aling ="center"><input type="checkbox"
name="remember" value="1">Remember Me</td>
</tr>
<tr>
    <td colspan="2" align="right"><input type="submit" Value= "login"name="login"></td>
</tr>
</table>
</form>   
</body>
</html>
