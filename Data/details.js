document.addEventListener("DOMContentLoaded", function () {
  const username = prompt("Enter Username:");
  const password = prompt("Enter Password:");
  const confirmPassword = prompt("Confirm Password:");

  const userDetailsDiv = document.getElementById("userDetails");

  if (password !== confirmPassword) {
    alert("Passwords do not match! Access denied.");
    userDetailsDiv.innerHTML = "<p style='color:red;'>Access Denied. Passwords did not match.</p>";
    return;
  }

  // Fetch saved contact data
  const fullname = localStorage.getItem("fullname") || "Not Provided";
  const email = localStorage.getItem("email") || "Not Provided";
  const phone = localStorage.getItem("phone") || "Not Provided";
  const message = localStorage.getItem("message") || "Not Provided";

  // Show all details
  userDetailsDiv.innerHTML = `
    <h3>Login Information</h3>
    <p><strong>Username:</strong> ${username}</p>
    <p><strong>Password:</strong> ${password}</p>

    <h3>Contact Information</h3>
    <p><strong>Full Name:</strong> ${fullname}</p>
    <p><strong>Email:</strong> ${email}</p>
    <p><strong>Phone:</strong> ${phone}</p>
    <p><strong>Message:</strong> ${message}</p>
  `;
});
