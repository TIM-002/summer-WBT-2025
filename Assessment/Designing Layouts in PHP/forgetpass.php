<?php
// Simple Forgot Password demo
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');

    if ($username === "") {
        $errors[] = "Please enter your User Name or Email.";
    } else {
        // Normally: Check DB, send reset email
        $success = "✅ A password reset link has been sent to your email (demo).";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - xCompany</title>
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
<form method="post" action=""><br><br>
    <fieldset style="width:300px;"><br>
        <legend><a href="forgetpass.php"><b>FORGOT PASSWORD</b></a></legend>
        
        User Name: <input type="text" name="username"><br><br>
        Email : <input type="text" name="email"><br><br>
        <input type="submit" value="Submit"> 
        <a href="login.php">Back to Login</a>
    </fieldset>
</form>

<?php
// Show messages
if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "<p style='color:red;'>$err</p>";
    }
}
if ($success) {
    echo "<p style='color:green;'>$success</p>";
}
?>


<footer>
    <p>Copyright © 2017</p>
</footer>

</body>
</html>
