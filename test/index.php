<!DOCTYPE html>
<html>

<head>
  <title>User Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="container">
    <h1>User Registration Form</h1>
    <form onsubmit="return validateForm()", action="connect.php" method="post">
      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-enter your password" required>
      </div>
      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
    <script>
      function validateForm() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;
        if (!validateEmail(email)) {
          alert("Please enter a valid email address.");
          return false;
        }
        if (!checkPasswordStrength(password)) {
          alert("Please enter a stronger password.");
          return false;
        }
       if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
        return true;
      }

      function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
      }

      function checkPasswordStrength(password) {
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+~`|}{\[\]\\\:;\"\'<>,.\/?-])[A-Za-z\d!@#$%^&*()_+~`|}{\[\]\\\:;\"\'<>,.\/?-]{8,}$/;
        return regex.test(password);
      }
    </script>
  </div>
</body>

</html>