function limitPhoneNumber(input) {
  if (input.value.length > 11) {
    input.value = input.value.slice(0, 11);
  }
}

function saveData(event) {
  event.preventDefault(); // Prevent form from submitting normally

  const fullname = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const phone = document.getElementById("phone").value;
  const message = document.getElementById("message").value;

  // Save to localStorage
  localStorage.setItem("fullname", fullname);
  localStorage.setItem("email", email);
  localStorage.setItem("phone", phone);
  localStorage.setItem("message", message);

  // Redirect to details page AFTER saving
  window.location.href = "details.html";
}
