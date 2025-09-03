<?php
// Initialize variables
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Roll no validation (only numbers)
    if (!preg_match("/^[0-9]+$/", $_POST['rollno'])) {
        $errors[] = "Roll number should contain only numbers.";
    }

    // Student name validation (only alphabets)
    if (!preg_match("/^[a-zA-Z ]+$/", $_POST['firstname'])) {
        $errors[] = "First name should contain only alphabets.";
    }
    if (!preg_match("/^[a-zA-Z ]+$/", $_POST['lastname'])) {
        $errors[] = "Last name should contain only alphabets.";
    }

    // Father's name validation (only alphabets)
    if (!preg_match("/^[a-zA-Z ]+$/", $_POST['fathername'])) {
        $errors[] = "Father's name should contain only alphabets.";
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
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" enctype="multipart/form-data">
    Roll no. : <input type="text" name="rollno" required><br><br>

    Student name : 
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required><br><br>

    Father's name : <input type="text" name="fathername" required><br><br>

    Date of birth : <input type="date" name="dob" required><br><br>

    Mobile no. : <input type="text" name="mobile" required><br><br>

    Email id : <input type="email" name="email" required><br><br>

    Password : <input type="password" name="password" required><br><br>

    Gender :
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female <br><br>

    Department : 
    <input type="checkbox" name="dept[]" value="CSE"> CSE
    <input type="checkbox" name="dept[]" value="IT"> IT
    <input type="checkbox" name="dept[]" value="ECE"> ECE
    <input type="checkbox" name="dept[]" value="Civil"> Civil
    <input type="checkbox" name="dept[]" value="Mech"> Mech <br><br>

    Course :
    <select name="course">
        <option value="">Select Current Course</option>
        <option value="B.Tech">B.Tech</option>
        <option value="M.Tech">M.Tech</option>
        <option value="MBA">MBA</option>
    </select><br><br>

    City : <input type="text" name="city"><br><br>

    Address : <textarea name="address"></textarea><br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>
