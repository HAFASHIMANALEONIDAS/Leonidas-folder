<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif; /* Sets a clean font for the page */
            background-color: #f4f4f4; /* Light background color for contrast */
            margin: 0; /* Removes default margin */
            padding: 0; /* Removes default padding */
        }
        table {
            border-collapse: collapse; /* Collapses borders into a single border */
            width: 300px; /* Fixed width for the table */
            margin: 100px auto; /* Centers the table horizontally and adds vertical space */
            background-color: #ffffff; /* White background for the table */
            border-radius: 8px; /* Rounded corners for the table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        th {
            text-align: right; /* Aligns header text to the right */
            padding: 10px; /* Adds padding to header cells */
            color: #333; /* Dark gray text color */
        }
        h3 {
            text-align: center; /* Centers the header text */
            color: #007BFF; /* Blue color for the header text */
            margin: 20px 0; /* Adds margin above and below the header */
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px); /* Full width minus padding */
            padding: 10px; /* Padding inside input fields */
            margin: 5px 0; /* Margin between input fields */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px; /* Rounded corners for input fields */
            box-sizing: border-box; /* Ensures padding is included in width */
        }
        input[type="checkbox"] {
            margin-right: 10px; /* Space between checkbox and label */
        }
        input[type="submit"] {
            padding: 10px 15px; /* Padding for the submit button */
            background-color: #007BFF; /* Blue background for the button */
            color: white; /* White text color */
            border: none; /* No border for the button */
            border-radius: 4px; /* Rounded corners for the button */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>

<!-- Table structure for the login form -->
<table cellpadding="5" cellspacing="10" align="center">
    <tr>
        <td colspan="2"> <!-- Header row for the form -->
            <h3>Login Form Using Session and Cookies with Remember Me</h3>
        </td>
    </tr>
    <form method="post" action="validate.php"> <!-- Form submission to varidate.php -->
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" required></td> <!-- Required input for email -->
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" required></td> <!-- Required input for password -->
        </tr>
        <tr>
            <td colspan="2" align="center"> <!-- Center align for checkbox row -->
                <input type="checkbox" name="remember" value="1"> Remember Me <!-- Checkbox for Remember Me -->
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right"> <!-- Right align for submit button -->
                <input type="submit" value="Login" name="login"> <!-- Submit button -->
            </td>
        </tr>
    </form>
</table>

</body>
</html>
