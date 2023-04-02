<?php
session_start();
$firstname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
$email1 = $_SESSION['email'];
$password = $_SESSION['password'];
$id = $_SESSION['user_id'];
?>



<!DOCTYPE html>
<html>

<head>
  <title>Update Details page</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
  <div class="container">
  <div class="user-info">
    <h1>User Information</h1>
  <p><span class="label">First Name:</span> <?php echo $firstname  ?> </p>
  <p><span class="label">Last Name:</span> <?php echo $lastname  ?></p>
  <p><span class="label">Email:</span> <?php echo $email1 ?> </p>
  <p><span class="label">Password:</span> <?php echo $password ?> </p>
    </div>
    <div class="right-side">
      <h1>Update Information</h1>
      <form method="POST" action="UpdateTable.php">
        <label for="first-name-input">First Name:</label>
        <input type="text" id="first-name-input" name="firstnameinput">
        <br>
        <label for="last-name-input">Last Name:</label>
        <input type="text" id="last-name-input" name="lastnameinput">
        <br>
        <label for="email-input">Email:</label>
        <input type="email" id="email-input" name="emailinput">
        <br>
        <label for="Password-input">Password:</label>
        <input type="password" id="Password-input" name="Passwordinput">
        <br>
        <input type="submit" value="Update">
      </form>
    </div>
  </div>
  <script>
  // Get the user info from the left side
  var firstname = "<?php echo $firstname ?>";
  var lastname = "<?php echo $lastname ?>";
  var email = "<?php echo $email1 ?>";
  var password = "<?php echo $password ?>";

  // Set the input field values to the user info
  document.getElementById("first-name-input").value = firstname;
  document.getElementById("last-name-input").value = lastname;
  document.getElementById("email-input").value = email;
  document.getElementById("Password-input").value = password;
</script>


</body>

</html>