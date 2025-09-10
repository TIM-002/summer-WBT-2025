<?php
session_start();

// Simulate logged in user (for demo)
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Bob"; 
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard - xCompany</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<legend><a href="dashboard.php"><b>Logged In Dashboard</b></a></legend>
<div class="container">
    <!-- Header -->
    <header>
        <span class="logo">X<span style="color:black;">Company</span></span>
        <span class="topbar">Logged in as <b><?php echo $username; ?></b> | <a href="logout.php">Logout</a></span>
    </header>

    <!-- Main Layout -->
    <table style="border-collapse: collapse;">
        <tr>
            <!-- Sidebar -->
            <td class="sidebar">
                <b>Account</b><br><hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_profile_pic.php">Change Profile Picture</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </td>

            <!-- Content -->
            <td class="content">
                <h3>Welcome <?php echo $username; ?></h3>
            </td>
        </tr>
    </table>

    <!-- Footer -->
    <footer>
        Copyright &copy; 2017
    </footer>
</div>
</body>
</html>
