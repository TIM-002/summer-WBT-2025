<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <link rel="stylesheet" type="text/css" href="../CSS/contact.css">
</head>
<body>
  <header>
    <nav>
      <a href="../index.html" class="logo"> TIM</a><br>
      <a href="../index.html">Home</a> |
      <a href="Education.html">Education</a> |
      <a href="Experience.html">Experience</a> |
      <a href="Projects.html">Projects</a> |
      <a href="Contact.html">Contact Me</a>
    </nav>
  </header>

  <h2>Contact Me</h2>
  <main>
    <form method="POST" action="">
      <label for="name">Full Name:</label><br>
      <input type="text" id="name" name="fullname" style="width: 400px;" required >
      <br><br>

      <label for="email">Email Address:</label><br>
      <input type="email" id="email" name="email" style="width: 400px;" required><br><br>

      Gender:
      <input type="radio" name="gender" value="Male">Male
      <input type="radio" name="gender" value="Female">Female<br><br>

      Reason:
      <input type="checkbox" name="reason[]" value="Hiring for a job">Hiring for a job
      <input type="checkbox" name="reason[]" value="App Development">App Development
      <input type="checkbox" name="reason[]" value="Freelancing">Freelancing
      <input type="checkbox" name="reason[]" value="Other">Other<br><br>

      <label for="phone">Phone Number:</label>
      <input type="number" id="phone" name="phone" style="width: 250px; height: 30px;" required><br><br>

      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="5" style="width: 600px;"></textarea><br><br>

      <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "Not specified";
        $phone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
        $reason = isset($_POST['reason']) ? implode(", ", $_POST['reason']) : "No reason selected";

        echo "<div class='result'>";
        echo "<h2>Contact Form Submission</h2>";
        echo "<p><strong>Full Name:</strong> $fullname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Reason:</strong> $reason</p>";
        echo "<p><strong>Phone:</strong> $phone</p>";
        echo "<p><strong>Message:</strong> $message</p>";
        echo "</div>";
    }
    ?>
  </main>

  <br>
  <footer>
    <p>Follow me:
      <a href="https://www.facebook.com/" target="_blank">Facebook</a> |
      <a href="https://www.linkedin.com/login" target="_blank">LinkedIn</a> |
      <a href="https://github.com/TIM-002" target="_blank">GitHub</a>
    </p>
    <p>&copy; <span id="2025"></span> WBT</p>
  </footer>
</body>
</html>
