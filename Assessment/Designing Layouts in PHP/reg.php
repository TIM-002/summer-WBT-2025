<?php
// Initialize variables
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // name validation (only alphabets)
    if (!preg_match("/^[a-zA-Z ]+$/", $_POST['firstname'])) {
        $errors[] = "Name should contain only alphabets.";
    }

    // If no errors
    if (empty($errors)) {
        echo "<h3 style='color:green;'>✅ Registration Successful!</h3>";
        // Here you can insert data into the database
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
    <title>Registration- xCompany</title>
    <link rel="stylesheet" href="style.css">
</head>
    <header>
    <div class="logo"><span class="x">X</span>Company</div>
        <nav>
                <a href="index.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="reg.php">Registration</a>
        </nav>
    </header>
<body>

<h2>Registration</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <fieldset style="width:500px;">
    Name : <input type="text" name="name"  ><br>
    Email : <input type="email" name="email" required><br>
    User Name: <input type="text" name="username" ><br>
    Password : <input type="password" name="password" ><br>
    Comfirm Password : <input type="password" name="password"><br>
    <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
    </fieldset>
    
     <fieldset>
        <legend> Date of birth </legend> 
        <input type="date" name="dob">
     </fieldset>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </fieldset>
</form>


<footer>
    <p>Copyright © 2017</p>
</footer>

</body>
</html>
