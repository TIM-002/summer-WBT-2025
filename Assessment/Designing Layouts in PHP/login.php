<?php
// Initialize variables
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // If no errors
    if (empty($errors)) {
        echo "<h3 style='color:green;'>✅ Registration Successful!</h3>";
        // Insert data into DB here
    } else {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login- xCompany</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo"><span class="x">X</span>Company</div>
    <nav>
        <a href="index.php">Home</a> |
        <a href="login.php">Login</a> |
        <a href="reg.php">Registration</a>
    </nav>
</header>

<h2>Login</h2>

<form method="post" action="">
    <fieldset style="width:300px;">

        User Name : <input type="text" name="username"><br><br>
        Password  : <input type="password" name="password"><br><hr>
        <input type="checkbox" name="remember"> Remember Me <br><br>
        <input type="submit" value="Submit">
        <a href="forgetpass.php">Forgot Password?</a>
    </fieldset>

<footer>
    <p>Copyright © 2017</p>
</footer>

</body>
</html>

